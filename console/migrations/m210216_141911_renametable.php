<?php

use yii\db\Migration;

/**
 * Class m210216_141911_renametable
 */
class m210216_141911_renametable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('producthere', 'productsnewname');
        $this->dropPrimaryKey('PRIMARY', 'productsnewname');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210216_141911_renametable cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_141911_renametable cannot be reverted.\n";

        return false;
    }
    */
}
