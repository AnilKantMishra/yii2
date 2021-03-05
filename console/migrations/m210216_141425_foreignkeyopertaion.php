<?php

use yii\db\Migration;

/**
 * Class m210216_141425_foreignkeyopertaion
 */
class m210216_141425_foreignkeyopertaion extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk-producthere-product_id', 'producthere', 'product_id', 'products', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210216_141425_foreignkeyopertaion cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_141425_foreignkeyopertaion cannot be reverted.\n";

        return false;
    }
    */
}
