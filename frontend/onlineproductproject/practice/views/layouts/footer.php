<?php

use frontend\controllers\CsvExport;

use yii\helpers\Html; ?>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= 'Online Store'; ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>