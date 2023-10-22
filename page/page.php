<?php
// 获取匹配到的字符串
$matched_string = $matches[1];
// 判断是否存在对应的页面
if (isset(get_language()->page->page->$matched_string)) {
    require_once get_theme_url() . '/public/simple_head.php';
?>
    <h1><?php echo get_language()->page->page->$matched_string->title ?></h1>
    <hr />
    <div id="background">
        <canvas id="canvas"></canvas>
    </div>
    <main>
        <div class="content">
            <?php foreach (get_language()->page->page->$matched_string->item as $item) : ?>
                <h2 class="title mdui-typo">
                    <?php echo $item->content; ?>
                </h2>
            <?php endforeach; ?>
        </div>
    </main>
<?php
    require_once get_theme_url() . '/public/simple_footer.php';
} else {
    // 404 页面
    echo "404 Not Found";
    http_response_code(404);
}
