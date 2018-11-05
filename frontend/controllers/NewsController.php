<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Articles;

/**
 * News and Articles
 *
 * @author 7able
 */
class NewsController extends Controller
{
    public function actionIndex()
    {
        $newsItems = Articles::getNews();
        return $this->render('index',[
            'newsItems' => $newsItems
        ]);
    }

    public function actionPage($id)
    {
        $article = Articles::getArticle($id);
        return $this->render('page',[
            'article' => $article,
        ]);
    }
}