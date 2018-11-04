<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

/**
 * Description of Subscribe
 *
 * @author 7able
 */
class Subscribe extends Model
{
    public $message;
    public $username;
    public $email;

    public function rules()
    {
        return [
            [['username', 'email'], 'required']
        ];
    }

    public function send($model)
    {
        return Yii::$app->mailer->compose()
                ->setFrom(Yii::$app->params['adminEmail'])
                ->setTo(Yii::$app->params['adminEmail'])
                ->setSubject("От: $model->username, $model->email")
                ->setTextBody($model->message)
                ->send();
    }
}