<?php

use yii\db\Migration;
use console\component\Checktable;

/**
 * Class m210217_083843_indexmerged
 */
class m210217_083843_indexmerged extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        print_r(Checktable::indexcheck('productsnewname', 'Index'));
        array_merge(Checktable::indexcheck('productsnewname', 'Index'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210217_083843_indexmerged cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_083843_indexmerged cannot be reverted.\n";

        return false;
    }
    */
}
