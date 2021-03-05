<?php

use yii\db\Migration;

/**
 * Class m210216_043759_products
 */
class m210216_043759_products extends Migration
{

    /**
     * {@inheritdoc}
     */


    public function safeUp()
    {
        $this->createTable('products', [
            'id' => $this->bigInteger(), 'PRIMARY KEY(id)',
            'name' => $this->string(255)->notNull(),
            'product_handle' => $this->string(255)->unique(),
            'images' => $this->string(255),
            'price' => $this->money(),
            'inventory' => $this->integer(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->timestamp(),
            'status' => $this->boolean()->defaultValue(1),

        ]);
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210216_043759_products cannot be reverted.\n";
        // $this->dropTable('products');
        return false;
    }
}
