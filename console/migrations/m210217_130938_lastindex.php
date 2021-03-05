<?php

use yii\db\Migration;

/**
 * Class m210217_130938_lastindex
 */
class m210217_130938_lastindex extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropIndex('product_handle', 'product_variant');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210217_130938_lastindex cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_130938_lastindex cannot be reverted.\n";

        return false;
    }
    */
}
