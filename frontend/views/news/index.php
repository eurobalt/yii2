<?php
use yii\helpers\Url;
foreach ($newsItems as $item):?>
<h1><?=$item['title'];?></h1>
<p><?=$item['content'];?></p>
<p><? $id = $item['id'];?>
<a href="<?=Url::to(["news/$id"]);?>">Подробнее</a>
<?php endforeach; ?>
