<?php // Web crawling functions ?>
<?php
// web_crawler.php

function scrapeContent($url) {
    $content = file_get_contents($url);
    return $content; 
}
?>
