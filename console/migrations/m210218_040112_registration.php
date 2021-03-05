<?php

use yii\db\Migration;
use console\component\Checktable;

/**
 * Class m210218_040112_registration
 */
class m210218_040112_registration extends Migration
{
    /**
     * {@inheritdoc}
     */
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
        echo "m210218_040112_registration cannot be reverted.\n";
        // $this->dropTable('registration');
        return false;
    }
}
