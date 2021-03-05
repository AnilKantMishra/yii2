<?php

use console\component\Checktable;
use yii\db\Migration;

/**
 * Class m210216_135148_checkcolumn
 */ //column($name, $columnname)//
class m210216_135148_checkcolumn extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if (Checktable::column('product_variant', 'fbd') == 1) {
            echo 'hi';
        } else {
            echo 'sorry';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210216_135148_checkcolumn cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_135148_checkcolumn cannot be reverted.\n";

        return false;
    }
    */
}
