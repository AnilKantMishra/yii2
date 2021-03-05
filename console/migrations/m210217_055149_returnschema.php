<?php

use yii\db\Migration;
use console\component\Checktable;

/**
 * Class m210217_055149_returnschema
 */
class m210217_055149_returnschema extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if (Checktable::returnschema('productsnewname') == 1) {
            echo 'Not present';
        } else {
            echo '<pre>';
            print_r('productsnewname');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210217_055149_returnschema cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_055149_returnschema cannot be reverted.\n";

        return false;
    }
    */
}
