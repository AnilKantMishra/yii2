<?php

use console\component\Checktable;
use yii\db\Migration;

/**
 * Class m210216_120030_new
 */
class m210216_120030_new extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {


        if (Checktable::check('product_here') == 1) {
            $this->createTable('producthere', [
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
        } else {
            echo 'sorry';
        }


        //$this->addForeignKey('foreign_product_id', 'product_variant', 'product_id', 'products', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210216_120030_new cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_120030_new cannot be reverted.\n";

        return false;
    }
    */
}
