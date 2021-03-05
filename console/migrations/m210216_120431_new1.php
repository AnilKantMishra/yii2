<?php

use console\component\Checktable;
use yii\db\Migration;

/**
 * Class m210216_120431_new1
 */
class m210216_120431_new1 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if (Checktable::check('products') == 1) {
            $this->createTable('products', [
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
            echo 'already exists. Please pick a new table name.';
        }
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
        echo "m210216_120431_new1 cannot be reverted.\n";

        return false;
    }
    */
}
