<footer class="mdui-typo" style="text-align: center;margin-top:100px;">
    <h2 class="title"><a href="/about"><?php echo get_language()->public->operate->return_to_previous_page ?></a></h2>
    <?php
    foreach (get_language()->public->page_footer as $item) :
    ?>
        <a href="<?php echo $item->href ?>" target="<?php echo $item->target ?>"><?php echo $item->text ?></a>
    <?php
    endforeach
    ?>
</footer>
<script src="https://unpkg.com/mdui@1.0.2/dist/js/mdui.min.js"></script>
<script src=".<?php echo get_theme_url() ?>public/static/js/IndexScript.js"></script>
</body>

</html>