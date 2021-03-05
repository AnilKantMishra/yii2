<?php

use yii\db\Migration;
use console\component\Checktable;

/**
 * Class m210217_040745_addindex
 */
//if (Checktable::index('productsnewname', 'Index') == 1) {
//echo 'Not present';
//} else {
//echo 'already exists. Please pick a new table name.';
////}
class m210217_040745_addindex extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropIndex('INDEX', 'productsnewname');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210217_040745_addindex cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_040745_addindex cannot be reverted.\n";

        return false;
    }
    */
}
