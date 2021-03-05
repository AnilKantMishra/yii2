<?php

use yii\db\Migration;
use frontend\onlineproductproject\practice\component\Checktable;

/**
 * Class m210227_044648_Variant
 */
class m210227_044648_Variant extends Migration
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
        if (Checktable::check('Variant') == 1) {
            $this->createTable('Variant', [
                'id' => $this->bigInteger(), 'PRIMARY KEY(id)',
                'product_id' => $this->bigInteger()->notNull()->unique(),
                'variant_id' => $this->bigInteger()->notNull(),
                'price' => $this->money(),
                'inventory' => $this->integer(),
                'status' => $this->boolean()->defaultValue(1),

            ]);
            $this->addForeignKey('fk_Variant_product_id', 'Variant', 'product_id', 'product', 'id', 'CASCADE');
        } else {
            echo 'already exists. Please pick a new table name.';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210227_044648_Variant cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210227_044648_Variant cannot be reverted.\n";

        return false;
    }
    */
}
