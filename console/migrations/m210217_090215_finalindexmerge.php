<?php

use yii\db\Migration;
use console\component\Checktable;

/**
 * Class m210217_090215_finalindexmerge
 */
class m210217_090215_finalindexmerge extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        print_r(Checktable::indexcheck('product_variant', 'id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210217_090215_finalindexmerge cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_090215_finalindexmerge cannot be reverted.\n";

        return false;
    }
    */
}
