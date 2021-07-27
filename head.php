<?php
if ( !isset($pageTitle) ) {
  $pageTitle = $siteTitle;
}

if ( !isset($pageDescription) ) {
  $pageDescription = $siteDescription;
}

if ( !isset($pageKeywordsStr) ) {
  $pageKeywordsStr = $siteKeywordsStr;
}

if ( !isset($pageThumbUrl) ) {
  $pageThumbUrl = $siteThumbUrl;
}
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <!-- 구글 애널리틱스 시작 -->
    <!-- 구글 애널리틱스 끝 -->
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?=$pageTitle?></title>
    <meta name="title" content="<?=$pageTitle?>" />
    <meta name="description" content="<?=$pageDescription?>" />
    <meta name="keywords" content="<?=$pageKeywordsStr?>" />
    <meta name="copyright" content="<?=$siteName?>" />

    <!-- OPENGRAPH -->
    <meta property="og:site_name" content="<?=$siteName?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?=$pageTitle?>" />
    <meta property="og:description" content="<?=$pageDescription?>" />
    <meta property="og:image" content="<?=$pageThumbUrl?>" />
    <meta property="og:image:alt" content="<?=$siteName?>" />
    <meta property="og:image:width" content="486" />
    <meta property="og:image:height" content="254" />

    <!-- 반응형 필수 -->
    <meta name="viewport" content="width=device-width, user-scalable=no" />

    <!-- 라이브러리 불러오기 시작 -->
    


    <!-- 라이브러리 불러오기 끝 -->
    

    <link rel="stylesheet" href="css/common.css">
    <script src="js/common.js" defer></script>
</head>

<body>
    
<div class="body-content">

    <!-- 탑바 시작 -->
    <header class="top-bar">
      
    </header>
    <!-- 탑바 시작 -->

    <!-- 모바일 탑바 시작 -->
    <header class="mobile-top-bar">
      
    </header>
    <!-- 모바일 탑바 끝 -->
  
    <!-- 모바일 사이드 바 시작 -->
    <aside class="mobile-side-bar">
  
    </aside>
    <!-- 모바일 사이드 바 끝 -->
  
    <main>