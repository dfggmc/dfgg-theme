<style>
    #change_language_btn {
        position: fixed;
        margin: 30px;
        bottom: 0;
        left: 0;
        z-index: 99999;
    }

    .language_button {
        margin-top: 10px;
    }

    .language_button.activity {
        background: linear-gradient(to bottom, #2980b9, #3498db);
    }
</style>
<div id="change_language_btn">
    <button class="language_button <?php if ($_COOKIE['language'] === 'zh-cn') {
                                        echo 'activity';
                                    } ?> mdui-shadow-10" onclick="changeLanguage('zh-cn'); location.reload();">
        中文
    </button>
    <br>
    <button class="language_button <?php if ($_COOKIE['language'] === 'en-us') {
                                        echo 'activity';
                                    } ?> mdui-shadow-10" onclick="changeLanguage('en-us'); location.reload();">
        English
    </button>
</div>
<script>
    function changeLanguage(language) {
        document.cookie = "language=" + language + "; path=/";
    }
</script>