<?php
require_once get_theme_url() . '/public/simple_head.php';
?>
<h1><?php echo get_language()->page->page->plan->title ?></h1>
<hr />
<div id="background">
    <canvas id="canvas"></canvas>
</div>
<main>
    <div class="content">
        <?php
        foreach (get_language()->page->page->plan->item as $item) :
        ?>
            <h2 class="title mdui-typo">
                <?php
                echo $item->status;
                echo $item->content
                ?>
            </h2>
        <?php
        endforeach;
        ?>
    </div>
</main>

<?php
require_once get_theme_url() . '/public/simple_footer.php'
?>