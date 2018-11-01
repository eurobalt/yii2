<?php

namespace frontend\models;

use Yii;

class News
{

    public static function getList()
    {
        $sql   = "SELECT * FROM news";
        $items = Yii::$app->db->createCommand($sql)->queryAll();

        foreach ($items as &$item) {
            $item['content'] = Yii::$app->stringHelper->doShort($item['content']);
        }
        return $items;
    }

    public static function getView($id)
    {
        
        $sql = "SELECT * FROM news WHERE id = $id";
        return Yii::$app->db->createCommand($sql)->queryOne();
    }
}