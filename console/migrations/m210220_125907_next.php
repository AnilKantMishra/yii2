<?php

use yii\db\Migration;
use  console\component\Checktable;

/**
 * Class m210220_125907_next
 */
class m210220_125907_next extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function initConnection()
    {
        $this->db = "db3";
        parent::init();
    }

    public function safeUp()
    {
        if (Checktable::check('registration') == 1) {
            $this->createTable('registration', [
                'id' => $this->bigInteger(), 'PRIMARY KEY(id)',
                'name' => $this->string()->notNull(),
                'mobilenumber' => $this->bigInteger(),
                'password' => $this->string(255),
                'email' => $this->string(155),
                'Date Of birth' => $this->dateTime(),
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
        echo "m210220_125907_next cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210220_125907_next cannot be reverted.\n";

        return false;
    }
    */
}
