<?php
$can = Yii::$app->view->params['canonical'];
$text = 'blog';
$text_c = 'contacts'; 
$text_a = 'advertising'; 
$ar = array('blog', 'contacts', 'advertising');

if (!strpos($can, $text) && !strpos($can, $text_c) && !strpos($can, $text_a)) :
?>

    <div class="flex-row main__wrap-button-servers">
        <button class="main__button-server button-not-open button-server-active"  aria-label="Не открвшиеся сервера">Не открывшиеся</button>
        <button class="main__button-server button-open" aria-label="Открывшиеся сервера">Открывшиеся</button>
    </div>

<?php endif; ?>