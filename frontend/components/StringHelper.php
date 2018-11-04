<?php
namespace frontend\components;
use Yii;

/**
 * Description of StringHelper
 *
 * @author 7able
 */
class StringHelper
{
    private $limit;

    public function __construct()
    {
        $this->limit = Yii::$app->params['str_limit'];
    }
    public function getShorter($content, $limit = null)
    {
        if ($limit === null) {
            $limit = $this->limit;
        }
        $content = substr($content, 0, $limit);
        return $content;
    }
}