<?php

use yii\db\Migration;

/**
 * Class m210216_140435_dropcolumn
 */
class m210216_140435_dropcolumn extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('producthere', 'price');
        $this->addColumn('producthere', 'newcolumn', 'text');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210216_140435_dropcolumn cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_140435_dropcolumn cannot be reverted.\n";

        return false;
    }
    */
}
