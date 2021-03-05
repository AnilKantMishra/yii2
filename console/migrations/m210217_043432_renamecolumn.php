<?php

use yii\db\Migration;

/**
 * Class m210217_043432_renamecolumn
 */
class m210217_043432_renamecolumn extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('productsnewname', 'status', 'renamedstatus');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210217_043432_renamecolumn cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_043432_renamecolumn cannot be reverted.\n";

        return false;
    }
    */
}
