<?php

use yii\db\Migration;

/**
 * Class m210216_142326_index
 */
class m210216_142326_index extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'Index',
            'productsnewname',
            'id,name',
            $unique = true
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210216_142326_index cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_142326_index cannot be reverted.\n";

        return false;
    }
    */
}
