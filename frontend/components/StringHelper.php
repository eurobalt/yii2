<?php
namespace frontend\components;
use Yii;

class StringHelper
{
    private $limit;

    public function __construct()
    {
        $this->limit = Yii::$app->params['limit'];
    }

    public function doShort($content, $limit = 0)
    {
        if ($limit === 0) {
            $limit = $this->limit;
        }
        return substr($content,0,$limit);
        
    }
}