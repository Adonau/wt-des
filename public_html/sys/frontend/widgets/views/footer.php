<footer class="flex-column footer">
    <div class="flex-row footer__metrics">
        <script>
            document.write('<a href="//www.liveinternet.ru/click" ' +
                'target="_blank"><img src="//counter.yadro.ru/hit?t21.6;r' +
                escape(document.referrer) + ((typeof(screen) == 'undefined') ? '' :
                    ';s' + screen.width + '*' + screen.height + '*' + (screen.colorDepth ?
                        screen.colorDepth : screen.pixelDepth)) + ';u' + escape(document.URL) +
                ';h' + escape(document.title.substring(0, 150)) + ';' + Math.random() +
                '" alt="" title="LiveInternet: показано число просмотров за 24' +
                ' часа, посетителей за 24 часа и за сегодня" ' +
                'border="0" width="88" height="31"><\/a>')
        </script>
        <!-- Yandex.Metrika informer -->
        <a href="https://metrika.yandex.ru/stat/?id=53818963&amp;from=informer" target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/53818963/3_0_262626FF_060606FF_1_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="53818963" data-lang="ru" /></a>
        <!-- /Yandex.Metrika informer -->
    </div>
    <div class="flex-row footer__social">
        <div class="flex-row footer__social-inner">
            <a href="https://vk.com/l2wt_ru" target="_blank" class="footer__social-vk"><i class="fa fa-vk" aria-hidden="true"></i></a>
            <?php foreach ($contact as $cont) : ?>
                <div class="footer__social-icq"><?= $cont->icq ?></div>
                <a href="mailto:<?= $cont->mail ?>?subject=Вопрос%20по%20размещению%20проекта%20Lineage%202" class="footer__social-mail" target="_blank"><?= $cont->mail ?></a>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/advertising']) ?>" class="footer__social-a">Реклама на сайте</a>
            <?php endforeach; ?>
        </div>
        <p class="footer__copy-text">Lineage II is a trademark of NCsoft Corporation. Copyright © <a href="https://us.ncsoft.com/" target="_blank" rel="nofollow" class="footer__copy-ncsoft">NCsoft</a> Corporation 2005-<?= date('Y') ?>. All rights reserved.</p>
    </div>
</footer>