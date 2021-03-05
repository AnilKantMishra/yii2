<?php

use console\component\Checktable;
use yii\db\Migration;

/**
 * Class m210216_131205_product_variant
 */
class m210216_131205_product_variant extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        //var_dump(Checktable::check('product_variant'));

        if (Checktable::check('product_variant') == 1) {
            echo 'hi';
        } else {
            echo 'sorry';
        }

        $this->createTable('product_variant', [
            'id' => $this->bigInteger(), 'PRIMARY KEY(id)',
            'product_id' => $this->bigInteger()->notNull(),
            'product_handle' => $this->string(255)->unique(),
            'name' => $this->string(255)->notNull(),
            'price' => $this->money(),
            'inventory' => $this->integer(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->timestamp(),
            'status' => $this->boolean()->defaultValue(1),

        ]);
        $this->addForeignKey('fk-product_variant-product_id', 'product_variant', 'product_id', 'products', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product_variant');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_131205_product_variant cannot be reverted.\n";

        return false;
    }
    */
}
