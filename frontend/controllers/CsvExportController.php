<?php

namespace frontend\controllers;

use frontend\component\rawquery;
use yii\web\Controller;
use yii\web\UploadedFile;
use frontend\models\CsvExport;
use yii;

class CsvExportController extends Controller
{

    public function actionDownload()
    {
        $model = new CsvExport();

        if ($model->load(Yii::$app->request->post())) {

            $model->csv = UploadedFile::getInstance($model, 'csv');
            $filename =  time() . '.' . $model->csv->extension;
            rawquery::createdirectory();
            $res = $model->csv->saveAs('csvfolder/' . $filename);
            $handle     = fopen("csvfolder/$filename", "r");
            $headerLine = true;

            while (($fileop = fgetcsv($handle, 1000, ","))) {
                $csv = array_map("str_getcsv", file("csvfolder/$filename", FILE_SKIP_EMPTY_LINES));

                $keys = array_shift($csv);

                if ($headerLine) {
                    $headerLine = false;
                } else {
                    $userid = $fileop[0];
                    $name = $fileop[1];
                    $lastname = $fileop[2];
                    $num = $fileop[3];

                    $sql = "INSERT IGNORE INTO csv_export(`id`,`name`,`lastname`,`number`) VALUES ('$userid','$name', '$lastname','$num')";
                    $query = Yii::$app->db->createCommand($sql)->execute();

                    if ($query == 0) {
                        $sql1 = "UPDATE `csv_export` SET 
                            `name`='$name',`lastname`='$lastname',`number`='$num' WHERE id='$userid'";
                        $query1 = Yii::$app->db->createCommand($sql1)->execute();
                    }
                }
            }

            if ($sql) {
                echo "data imported successfully";
                Yii::$app->session->setFlash("success", "Record Imported Successfully.");
            }
        }
        return $this->render('download', ['model' => $model]);
    }

    public function actionExport()
    {
        $filename = "file.csv";
        // header("Content-type: text/csv");
        // header("Content-Disposition: attachment; filename = $filename");
        $model = Yii::$app->db->createCommand("select * from csv_export")->queryAll();
        $filepath = fopen("php://output", 'w');

        $header = array_keys($model[0]);
        fputcsv($filepath, $header);
        foreach ($model as $v) {
            fputcsv($filepath, $v);
        }
    }
}
