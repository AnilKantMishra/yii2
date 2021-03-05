<?php

use yii\db\Migration;
use yii\db\Schema;

/**Schema::TYPE_PK
 * Class m210215_142641_products
 */
class m210215_142641_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // $this->dropTable('products');
        return false;
    }
}
