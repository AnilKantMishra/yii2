<?php

use yii\db\Migration;
use console\component\Checktable;

/**
 * Class m210217_091518_finalindexmerge
 */
class m210217_091518_finalindexmerge extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        print_r(Checktable::indexcheck('product_variant', 'Index'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210217_091518_finalindexmerge cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_091518_finalindexmerge cannot be reverted.\n";

        return false;
    }
    */
}
