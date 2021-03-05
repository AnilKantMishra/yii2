<?php

use yii\db\Migration;
use console\component\Checktable;

/**
 * Class m210217_140225_lastindex
 */
class m210217_140225_lastindex extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if (Checktable::indexcheck('product_variant', 'Index')) {
            echo 'exist';
        } else {

            echo 'not present';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210217_140225_lastindex cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_140225_lastindex cannot be reverted.\n";

        return false;
    }
    */
}
