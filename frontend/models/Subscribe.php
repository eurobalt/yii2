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
    public $email;
    public $tel;

    public function rules()
    {
        return [
            [['email', 'tel'], 'required', 'message' => 'Заполните поля'],
            ['tel', 'match', 'pattern' => '/^(8)[(](\d{3})[)](\d{3})[-](\d{2})[-](\d{2})/',
                'message' => 'Телефон должен быть в формате 8(XXX)XXX-XX-XX'],
        ];
    }

    public function send($model)
    {
      
        return Yii::$app->mailer->compose()
                ->setFrom(Yii::$app->params['adminEmail'])
                ->setTo(Yii::$app->params['adminEmail'])
                ->setSubject("От $model->email")
                ->setHtmlBody("<b>Тел.: $model->tel</b>")
                ->send();
    }
}