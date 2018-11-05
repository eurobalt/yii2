<?php
namespace frontend\components;
use Yii;

/**
 * Cut the stings by the lenght
 *
 * @author 7able
 */
class StringHelper
{
    public static function substrNewsContent($content, $length = null)
    {
        if ($length === null) {
            $length = Yii::$app->params['lengthLimit'];
        }
        return substr($content, 0, $length);
    }
}