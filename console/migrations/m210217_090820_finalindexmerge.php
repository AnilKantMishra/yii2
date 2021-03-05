<?php

use yii\db\Migration;

/**
 * Class m210217_090820_finalindexmerge
 */
class m210217_090820_finalindexmerge extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'Index',
            'product_variant',
            'id,name',
            $unique = true
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210217_090820_finalindexmerge cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_090820_finalindexmerge cannot be reverted.\n";

        return false;
    }
    */
}
