<?php
header("Content-Type: application/xml; charset=utf-8");
?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach (array_keys($routes) as $map) : ?>
        <url>
            <loc><?php echo $_SERVER ['HTTP_HOST'] . $map; ?></loc>
        </url>
    <?php endforeach; ?>
</urlset>