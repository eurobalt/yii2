<?php
namespace frontend\models;

use Yii;
/**
 * News and Articles
 *
 * @author 7able
 */
class Articles
{
    public static function getNews()
    {
        $sql = "SELECT * FROM news";
        $newsList = Yii::$app->db->createCommand($sql)->queryAll();

        foreach ($newsList as &$item) {
            $item['content'] = Yii::$app->stringHelper->substrNewsContent($item['content']);
        }
        return $newsList;
    }

    public static function getArticle($id)
    {
        $sql = "SELECT * FROM news WHERE id = $id";
        return Yii::$app->db->createCommand($sql)->queryOne();
    }
    
}