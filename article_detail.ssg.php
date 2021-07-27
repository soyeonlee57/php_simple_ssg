<?php
if ( defined('STDIN') ) {
  $_GET['id'] = $argv[1];
}

require_once "data.php";

$articleId = $_GET['id'];
$selectedArticle = &getForPrintArticleById($articleId);
$pageTitle = $selectedArticle['pageTitle'];
$pageThumbUrl = $selectedArticle['pageThumbUrl'];
$pageDescription = $selectedArticle['pageDescription'];
$pageKeywordsStr = $selectedArticle['pageKeywordsStr'];

require_once "head.php";
?>

<section class="section-article-detail">

  <h1 class="article-list-box__title"><?=$selectedArticle["title"]?></h1>

  <div class="article-list-box__reg-date"><?=$selectedArticle["regDate"]?></div>
  
  <div class="article-list-box__writer">
    <span><?=$selectedArticle["writerName"]?></span>
    <span><?=$selectedArticle["writerAvatar"]?></span>
  </div>

  <div class="article-list-box__tags">
    <?=getArticleTagsHtml($selectedArticle["id"])?>
  </div>
  
  <div class="article-list-box__body">
    <?=$selectedArticle['body']?>
  </div>
  
</section>

<?php
require_once "foot.php";
?>