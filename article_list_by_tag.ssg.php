<?php
if ( defined('STDIN') ) {
  $_GET['tag'] = $argv[1];
}

require_once "data.php";

$tagInfo = &getForPrintTagInfo($_GET['tag']);
$pageTitle = $tagInfo['pageTitle'];
$pageThumbUrl = $tagInfo['pageThumbUrl'];
$pageDescription = $tagInfo['pageDescription'];
$pageKeywordsStr = $tagInfo['pageKeywordsStr'];

require_once "head.php";

$articles = &getArticlesByTag($_GET['tag']);
?>

<section class="section-title">
  <h1>`<?=$_GET['tag']?>` LIST</h1>
</section>

<section class="section-article-list">
  <div class="article-list">
    <ul>
      <?php foreach ( $articles as $article ) { ?>
      <li>
        <h1><a href="<?=getArticleLink($article["id"])?>"><?=$article['title']?></a></h1>
        <a href="<?=getArticleLink($article["id"])?>" class="article-list__reg-date">
          <span>
            <i class="far fa-calendar-alt"></i>
          </span>
          <span>
            <?=$article["regDate"]?>
          </span>
        </a>
      </li>
      <?php } ?>
    </ul>
  </div>
</section>

<?php
require_once "foot.php";
?>