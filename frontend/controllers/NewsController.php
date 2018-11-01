<?php

namespace frontend\controllers;

use frontend\models\News;
use yii\web\Controller;
use Yii;
use yii\web\NotFoundHttpException;

class NewsController extends Controller
{

    public function actionIndex()
    {
        $items = News::getList();
        return $this->render('index',
                [
                'items' => $items
        ]);
    }

    public function actionView($id)
    {
      
       
        $item = News::getView($id);
        if ($item) {
        return $this->render('view',
                [
                'item' => $item
        ]);
        }
         else  {
           throw new NotFoundHttpException;
        }
     
    }
}