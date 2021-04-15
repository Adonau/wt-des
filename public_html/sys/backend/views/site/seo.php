<div class="flex-column page seo_widget">
    <div class="flex-row">
        <div>
            <?php
            foreach ($pages as $page) {

                if (strpos($page->heading_h1, 'овы')) {
                    echo $page->name_page . '<br>';
                    echo $page->heading_h1 . '<br>';
                }
            }
            ?>
        </div>
        <div>
            <?php
            foreach ($pages as $page) {
                
                if (strpos($page->heading_h2, 'Открытие')) {
                    echo $page->name_page . '<br>';
                    echo $page->heading_h2 . '<br>';
                }

                if (strpos($page->heading_h2, 'овы')) {
                    echo $page->name_page . '<br>';
                    echo $page->heading_h2 . '<br>';
                }

                if (strpos($page->heading_h3, 'овы')) {
                    echo $page->name_page . '<br>';
                    echo $page->heading_h3 . '<br>';
                }

                if (strpos($page->heading_h4, 'овы')) {
                    echo $page->name_page . '<br>';
                    echo $page->heading_h4 . '<br>';
                }
                
            }
            ?>
        </div>
    </div>
    <div class="flex-row seo_list">

        <?php
        foreach ($pages as $page) {
            if ($page->heading_h2 == null) {
                $page->heading_h2 = 'Неимеется заголовка';
            }
            if ($page->heading_h1_text == null) {
                $page->heading_h1_text = 'Без текста под h1';
            } else {
                $page->heading_h1_text = 'Есть текст под h1';
            }
            echo '<div class="flex-column seo_item">';
            echo '<div class="flex-column seo_item-name">';
            echo $page->name_page . '<br>';
            echo '</div>';
            echo '<div class="flex-column seo_item-h1">';
            echo $page->heading_h1;
            echo '</div>';
            echo '<div class="flex-column seo_item-h2">';
            echo $page->heading_h1_text . '<br>';
            echo $page->heading_h2;
            echo $page->heading_h3;
            echo $page->heading_h4;
            echo $page->heading_h5;
            echo $page->heading_h6;
            echo '</div>';
            echo '</div>';
        }

        ?>

    </div>

</div>