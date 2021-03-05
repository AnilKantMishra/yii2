<?php

use yii\db\Migration;

/**
 * Class m210220_124411_thirddatabase
 */
class m210220_124411_thirddatabase extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function initConnection()
    {
        $this->db = "db3";
        parent::init();
    }
    public function safeUp()
    {
    }

    /**
     * {@inheritdoc}
     */

    public function safeDown()
    {
        echo "m210220_124411_thirddatabase cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210220_124411_thirddatabase cannot be reverted.\n";

        return false;
    }
    */
}
