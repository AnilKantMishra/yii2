<?php

use yii\db\Migration;

/**
 * Class m210216_141747_droptable
 */
class m210216_141747_droptable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('new1');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210216_141747_droptable cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_141747_droptable cannot be reverted.\n";

        return false;
    }
    */
}
