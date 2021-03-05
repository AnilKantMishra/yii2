<?php

use yii\db\Migration;

/**
 * Class m210217_052700_changedatatype
 */
class m210217_052700_changedatatype extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('productsnewname', 'newcolumn', 'string');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210217_052700_changedatatype cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_052700_changedatatype cannot be reverted.\n";

        return false;
    }
    */
}
