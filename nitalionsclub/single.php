<!DOCTYPE html>
<html lang="ja">
<head>
    <title><?php bloginfo('name'); ?>)></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sanitize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Shippori+Mincho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper-bundle.min.css">
</head>
<body>
    <header>
        <div class="header-menu">
        <a href="<?php echo home_url(); ?>" class="text-decoration">
            <img src="<?php echo get_template_directory_uri(); ?>/img/lions_logo.png">
            <div class="name">
                <span class="name1">NITA LIONS CLUB</span><br>
                <span class="name2">仁多ライオンズクラブ</span>
            </div>
        </a>
            <a href="club-info.html" class="text-decoration h-menu"><span>当クラブについて</span></a>
            <a href="club-info.html" class="text-decoration h-menu"><span>主な活動</span></a>
            <a href="club-info.html" class="text-decoration h-menu"><span>行事予定表</span></a>
            <a href="club-info.html" class="text-decoration h-menu"><span>ブログ</span></a>
            <a href="club-info.html" class="text-decoration h-menu"><span>お問合せ</span></a>
        </div>
    </header>


<div class="center">
<?php // ブログ記事を表示する start ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php // タイトルを表示する start ?>
    <h1 class="blog-detail__title"><?php the_title(); ?></h1>
    <?php // タイトルを表示する end ?>

    <?php // アイキャッチ画像を表示する start ?>
    <?php if(has_post_thumbnail()): ?>
    <div class="blog-detail__image">
        <img src="<?php the_post_thumbnail_url('large'); ?>">
    </div>
    <?php endif; ?>
    <?php // アイキャッチ画像を表示する end ?>

    <?php // 本文を表示する start ?>
    <div class="blog-detail__body">
        <div class="blog-content"><?php echo the_content(); ?></div>
    </div>
    <?php // 本文を表示する end ?>

<?php endwhile; endif; ?>
<?php // ブログ記事を表示する end ?>
</div>
</body>