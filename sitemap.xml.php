
<?php
header('Content-Type: application/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc>http://<?php echo $_SERVER['HTTP_HOST']; ?>/</loc>
    <lastmod><?php echo date('c', filemtime('index.php')); ?></lastmod>
    <priority>1.00</priority>
  </url>
  <url>
    <loc>http://<?php echo $_SERVER['HTTP_HOST']; ?>/privacy.php</loc>
    <lastmod><?php echo date('c', filemtime('privacy.php')); ?></lastmod>
    <priority>0.80</priority>
  </url>
</urlset>
