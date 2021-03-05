<?php

use yii\db\Migration;
use frontend\onlineproductproject\practice\component\Checktable;

/**
 * Class m210227_042707_product
 */
class m210227_042707_product extends Migration
{


    /**
     * {@inheritdoc}
     */


    public function init()
    {
        $this->db = 'db2';
        parent::init();
    }

    public function safeUp()
    {
        if (Checktable::check('product') == 1) {
            $this->createTable('product', [
                'id' => $this->bigInteger(), 'PRIMARY KEY(id)',

                'product_id' => $this->bigInteger()->notNull(),

                'created_at' => $this->dateTime(),
                'title' => $this->string(255),
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
        echo "m210227_042707_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210227_042707_product cannot be reverted.\n";

        return false;
    }
    */
}
