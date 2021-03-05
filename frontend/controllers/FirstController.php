<?php

namespace frontend\controllers;

use frontend\component\CustomEvent;
use yii\web\UploadedFile;
use frontend\models\Registration;
use Yii;
use yii\web\Controller;
use frontend\component\rawquery;


/**
 * First controller
 */

class FirstController extends Controller
{
    public $url = "localhost/shopify/yii-application/frontend/web/first/get";
    public $enableCsrfValidation = false;
    public function actionTest()
    {
        return $this->render('test');
    }

    public function actionCache()
    {
        if (Yii::$app->cache->get("customcache") == "") {
            $model = registration::find()->all();
            Yii::$app->cache->set('customcache', $model);
        }
        return $this->render('cache');
    }

    public function actionRegistrationForm()
    {
        $url = "localhost/shopify/yii-application/frontend/web/first/get";
        $model = new Registration();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->images = UploadedFile::getInstance($model, 'images');
            $filename =  time() . '-' . $model->images->extension;
            $model->images->saveAs('uploads/' . $filename);
            $model->images = $filename;

            $data = array(
                "name" => $model->name, "number" => $model->number,
                "Email" => $model->Email, "dob" => $model->dob, "images" => $model->images, "Password" => $model->Password
            );

            //task event
            $obj = new CustomEvent();
            $obj->customget();

            //curl part
            $url = "localhost/shopify/yii-application/frontend/web/first/get";
            $encode = json_encode($data);

            $ch = curl_init($url);

            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, array("registration-form" => $encode));

            $result = curl_exec($ch);
            curl_close($ch);

            echo $result;

            // $model->save();
            rawquery::insertdata($model, 'db2');
            rawquery::insertdata($model, 'db');

            //task trigger
            $model->trigger(Registration::EVENT_NEW_USER);

            Yii::$app->session->setFlash("success", "Record Inserted Successfully.");
            // return $this->redirect('cache');
        } else {

            return $this->render('registration-form', ['model' => $model]);
        }
    }

    // show all data we use find()->all()
    public function actionShowData()
    {
        $model = new Registration();
        $model = registration::find()->all();

        return $this->render('show-data', ['model' => $model]);
    }

    public function actionQuestionAnswer()
    {
        return $this->render('question-answer');
    }

    // for updating and updating we need only one data righT??? we will use findOne()
    public function actionDelete($id)
    {
        $model = registration::findOne($id)->delete();
        Yii::$app->session->setFlash("success", "Record deleted Successfully.");
        return $this->redirect(['show-data']);
    }

    public function actionRefresh()
    {
        $model = new Registration();
        $model = registration::find()->all();
        Yii::$app->cache->set('customcache', $model);
        return $this->redirect(['cache']);
    }

    public function actionUpdate($id)
    {
        $model = registration::findOne($id);
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            //getting instance 
            $model->images = UploadedFile::getInstance($model, 'images');
            //saving images in uploads
            $filename =  time() . '-' . $model->images->extension;
            $model->images->saveAs('uploads/' . $filename);
            $model->images = $filename;
            $model->save();

            Yii::$app->session->setFlash("success", "Record Updated Successfully.");

            return $this->render('show-data', ['model' => $model]);
        }
        return $this->render('registration-form', ['model' => $model]);
    }

    public function actionGet()
    {
        Yii::$app->session->setFlash("success", "Record Inserted Successfully.");

        $datastring = $_POST['registration-form'];

        $data = json_decode($datastring);
        echo "Your Submitted data is";
        echo "<ul>";
        foreach ($data as $key) {
            echo "<li>" . $key . "</li>";
        }
        echo "</ul>";
    }


    public function show()
    {
    }
}
