<?php

use console\component\Checktable;
use yii\db\Migration;

/**
 * Class m210217_082359_returnschemalast
 */
class m210217_082359_returnschemalast extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        print_r(Checktable::indexcheck('productsnewname', 'Index'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210217_082359_returnschemalast cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_082359_returnschemalast cannot be reverted.\n";

        return false;
    }
    */
}
