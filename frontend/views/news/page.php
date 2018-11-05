<?php
use yii\helpers\Url;
?>
<h1><?=$article['title'];?></h1>
<p><?=$article['content'];?></p>

<a href="<?=Url::to(['news/index']);?>">Вернуться</a>
