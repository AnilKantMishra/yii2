<?php


namespace console\component;

use Yii;
use yii\base\Component;
use yii\db\mssql\TableSchema;

class Checktable extends Component
{
    public static function check($name) //check table exists or not
    {
        $tableSchema = Yii::$app->db->schema->getTableSchema($name);
        if ($tableSchema === null) {
            return 1;
        } else {
            return 0;
        }
    }
    public static function returnschema($name) //check table exists or not
    {
        $tableSchema = Yii::$app->db->schema->getTableSchema($name);
        if ($tableSchema === null) {
            return 1;
        } else {
            return 0;
        }
    }
    public static function column($name, $columnname) //check column exists or not
    {
        $table = Yii::$app->db->schema->getTableSchema($name)->getColumn($columnname);
        if ($table === null) {
            return 1;
        } else {
            return 0;
        }
    }


    public static function indexcheck($name, $sche) //check column exists or not
    {
        $key1 = '';
        $schema = Yii::$app->db->getTableSchema($name);
        $table_index =  Yii::$app->db->schema->findUniqueIndexes($schema);

        $result =  array_merge($table_index, $schema->foreignKeys);


        foreach ($result as $key => $value) {
            $key1 = $key;
        }
        if ($key1 == $sche) {
            return 1;
        } else {
            return 0;
        }

        // if (in_array($sche, $result)) {
        //     return 0;
        // } else {
        //     return 1;
        // }

        // $res3 =  array_merge($res, $table_index);

        // if (in_array($table_index, $res3)) {
        //     return 1;
        // } else {
        //     return 0;
        // }
    }
}
