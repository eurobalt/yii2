<?php
use Yii;
if(Yii::$app->session->hasFlash('subscribe')):?>
    <div class="info">
      <?php echo Yii::$app->session->getFlash('subscribe'); ?>
    </div>
<?php endif; ?>

<form method="post">
    <input type="email" placeholder="Емайл" name="email" />
    <br><br>
    <input type="text" placeholder="Имя" name ="username" />
    <br><br>
    <textarea name="message" placeholder="Сообщение..."></textarea>
    <br><br>
    <input type="submit" value="Отправить" />
</form>