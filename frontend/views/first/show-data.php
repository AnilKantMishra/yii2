<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\alert;

$this->title = 'Show Data';
$this->params['breadcrumbs'][] = $this->title;

?>
<h1><?= Html::encode($this->title) ?></h1>

<div class="row mt-2">
    <div class="col-lg-12">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
        ?>
        <div id="message">
            <?= Yii::$app->session->getFlash('success');
            ?>
        </div>
        <table id="table" width="100%" class="table table-bordered display responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>NUMBER</th>
                    <th>PASSWORD</th>
                    <th>EMAIL</th>
                    <th>DATE OF BIRTH </th>
                    <th>IMAGES</th>
                    <th> EDIT </th>
                    <th> DELETE </th>
                </tr>
            </thead>
            <tbody>
                <?php

                $model = Yii::$app->cache->get("customcache");
                foreach ($model as $v) {
                ?>
                    <tr>
                        <td>
                            <?= $v->id; ?>
                        </td>
                        <td><?= $v->name; ?></td>
                        <td><?= $v->number; ?></td>
                        <td><?= $v->Password; ?> </td>
                        <td><?= $v->Email; ?></td>
                        <td><?= $v->dob; ?></td>
                        <td><img src="../../web/uploads/<?= $v->images; ?>" width="100" height="100"></td>
                        <td> <?= Html::a('DELETE', ['first/delete', 'id' => $v->id], [
                                    'class' => 'btn btn-danger',
                                    'data' => [
                                        'confirm' => 'Are you sure you want to delete this?',
                                        'method' => 'post',
                                    ],
                                ])
                                ?>
                        </td>
                        <td>
                            <?= Html::a('UPDATE', ['first/update', 'id' => $v->id], [
                                'class' => 'btn btn-success',
                                'data' => [
                                    'confirm' => 'Are you sure you want to Update this?',
                                    'method' => 'post',
                                ],
                            ]) ?>

                        </td>

                    </tr>

                <?php

                }

                ?>
            </tbody>
        </table>

    </div>

    <?php ActiveForm::end(); ?>
</div>