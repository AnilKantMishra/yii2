<?php

use yii\db\Migration;
use console\component\Checktable;


/**
 * Class m210217_133232_lastindex
 */
class m210217_133232_lastindex extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        echo "<pre>";
        print_r(Checktable::indexcheck('product_variant', 'Index'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210217_133232_lastindex cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_133232_lastindex cannot be reverted.\n";

        return false;
    }
    */
}
