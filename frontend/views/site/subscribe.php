<?php
use yii;
if (yii::$app->session->hasFlash('delivered')):
    echo yii::$app->session->getFlash('delivered');
endif;
?>

<form method ="post">
    <input type="email" name = "email" placeholder = "Емайл.." />
    <br> <br>
    <input type="tel" name = "tel" placeholder = "Телефон.." />
    <br> <br>
    <input type="submit"/>
</form>

<?php
if (isset($errors) && is_array($errors)):
   foreach ($errors as $errors):
    foreach ($errors as $result):
    echo $result. "<br>";
    endforeach;
   endforeach;
endif;

