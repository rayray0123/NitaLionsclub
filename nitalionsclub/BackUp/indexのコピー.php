<!DOCTYPE html>
<html lang="ja">
<head>
    <title>仁多ライオンズクラブ</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sanitize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Shippori+Mincho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper-bundle.min.css">
</head>
<body>
    <header>
        <div class="header-menu margin-0-auto ">
            <div class="logo-wrap margin-0-auto">
                <div>
                    <a href="index.php" class="text-decoration">
                        <div class="margin-0-auto-375">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/lions_logo.png">
                            <div class="name">
                                <span class="name1">NITA LIONS CLUB</span><br>
                                <span class="name2">仁多ライオンズクラブ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="lions">
                    <span class="initials"></span><br>
                    <span class="initials2 shippori"></span>
                    <span class="initials2resp shippori"></span>
                </div>
            </div>
        </div>
    </header>

    <!-- スライダーのメインコンテナの div 要素（必須） -->
    <!-- <div class="swiper">
        スライドを囲む div 要素（必須）
        <div class="swiper-wrapper">
            <div class="swiper-slide slide1 slide1-1">
                <div class="s-right2-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/lions-swipe0.jpg" alt="">
                    <span class="s-right2-text"></span>
                    <span class="s-right2-sub">奉仕活動を通して、人と人とのつながり、組織と組織のつながり、過去から未来へのつながりが、大切であるという視点からクラブ運営に取り組みます。</span>
                </div>
            </div>
            <div class="swiper-slide"><img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/lions-swipe1.jpg" alt=""></div>
        </div>
        ページネーションの div 要素（省略可能）
        div class="swiper-pagination"></div

        ナビゲーションボタンの div 要素（省略可能）
        <div class="swiper-button-prev pc"></div>
        <div class="swiper-button-next pc"></div>

        スクロールバーの div 要素（省略可能）
        div class="swiper-scrollbar"></div
    </div> -->

    <div class="center top">
        <span class="midasi1 shippori bold">ライオンズクラブとは<br></span>
    </div>

    <div class="center top2">
        <span class="lions-text shippori">
            社会奉仕、それもごく身近な自分たちの住む地域社会への奉仕を共通目的とした楽しい集まりです。<br>
            1917年アメリカ・シカゴで誕生して以来、恵まれぬ人々への支援という共通の精神で活動しています。<br>
            そして、失明、薬物乱用、糖尿病教育、さらには環境保全奉仕、青少年健全育成、国際交流などの問題に取り組んでいます。<br>
            地域社会でその必要があれば、ライオンズクラブはいつでも手助けできる準備をしています。
        </span>
    </div>

    <div class="fb-wrap margin-0-auto top">
        <div class="fb-page" data-href="https://www.facebook.com/&#x4ec1;&#x591a;&#x30e9;&#x30a4;&#x30aa;&#x30f3;&#x30ba;&#x30af;&#x30e9;&#x30d6;-110877078408009/" data-tabs="timeline" data-width="1000" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/&#x4ec1;&#x591a;&#x30e9;&#x30a4;&#x30aa;&#x30f3;&#x30ba;&#x30af;&#x30e9;&#x30d6;-110877078408009/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/&#x4ec1;&#x591a;&#x30e9;&#x30a4;&#x30aa;&#x30f3;&#x30ba;&#x30af;&#x30e9;&#x30d6;-110877078408009/">仁多ライオンズクラブ</a></blockquote></div>
    </div>

    <div class="info-wrap margin-0-auto top">
        <!--環境保全に動く-->
        <label class="open" for="pop-up">
            <div class="info">
                <img class="radius pc" src="<?php echo get_template_directory_uri(); ?>/img/lions-info1.png" alt="">
                <img class="radius sp" src="<?php echo get_template_directory_uri(); ?>/img/lions-info1-rsp.png" alt="">
            </div>
        </label>
        <input type="checkbox" id="pop-up">
        <div class="overlay">
            <div class="window">
                <label class="close" for="pop-up">×</label>
                <figure>
                    <img class="info-img" src="<?php echo get_template_directory_uri(); ?>/img/lions-kusakari.jpg" alt="">
                    <figcaption>さくらおろち湖展望広場に桜を植樹し手入れしています</figcaption>
                </figure>
                <figure>
                    <img class="info-img margin-left-infoimg" src="<?php echo get_template_directory_uri(); ?>/img/lions-nokahyosyo.jpg" alt="">
                    <figcaption>仁多地域の優良農家さんを毎年表彰しています</figcaption>
                </figure>
                <figure>
                    <img class="info-img margin-left-infoimg" src="<?php echo get_template_directory_uri(); ?>/img/lions-swipe7.jpg" alt="">
                    <figcaption>三成公園の草刈り作業を行っています</figcaption>
                </figure>
            </div>
        </div>
        <!--子供たちを支援する-->
        <label class="open" for="pop-up2">
            <div class="info">
                <img class="radius pc" src="<?php echo get_template_directory_uri(); ?>/img/lions-info2.png" alt="">
                <img class="radius sp" src="<?php echo get_template_directory_uri(); ?>/img/lions-info2-rsp.png" alt="">
            </div>
        </label>
        <input type="checkbox" id="pop-up2">
        <div class="overlay">
            <div class="window">
                <label class="close" for="pop-up2">×</label>
                <figure>
                    <img class="info-img" src="<?php echo get_template_directory_uri(); ?>/img/lions-christmas.jpg" alt="">
                    <figcaption>仁多地域の園児にクリスマスプレゼント</figcaption>
                </figure>
                <figure>
                    <img class="info-img margin-left-infoimg" src="<?php echo get_template_directory_uri(); ?>/img/lions-tosyocard.jpg" alt="">
                    <figcaption>仁多地域の各小学校に図書カードを寄付しています</figcaption>
                </figure>
                <figure>
                    <img class="info-img margin-left-infoimg" src="<?php echo get_template_directory_uri(); ?>/img/lions-wagyu2.jpg" alt="">
                    <figcaption>横田高校寮生の激励に奥出雲和牛を贈呈</figcaption>
                </figure>
            </div>
        </div>
        <!--安全に奉仕する-->
        <label class="open" for="pop-up3">
            <div class="info">
                <img class="radius pc" src="<?php echo get_template_directory_uri(); ?>/img/lions-info3.png" alt="">
                <img class="radius sp" src="<?php echo get_template_directory_uri(); ?>/img/lions-info3-rsp.png" alt="">
            </div>
        </label>
        <input type="checkbox" id="pop-up3">
        <div class="overlay">
            <div class="window">
                <label class="close" for="pop-up3">×</label>
                <figure>
                    <img class="info-img" src="<?php echo get_template_directory_uri(); ?>/img/lions-kyotei.jpg" alt="">
                    <figcaption>災害援助ボランティアの支援を行う協定を結んでいます</figcaption>
                </figure>
                <figure>
                    <img class="info-img margin-left-infoimg" src="<?php echo get_template_directory_uri(); ?>/img/lions-mimamori.jpg" alt="">
                    <figcaption>小学生の登校見守り活動を行っています</figcaption>
                </figure>
                <figure>
                    <img class="info-img margin-left-infoimg" src="<?php echo get_template_directory_uri(); ?>/img/lions-water.jpg" alt="">
                    <figcaption>豪雨災害で断水した雲南市の地域に飲料水を寄付しました</figcaption>
                </figure>
            </div>
        </div>
        <!--福祉に貢献する-->
        <label class="open" for="pop-up4">
            <div class="info">
                <img class="radius pc" src="<?php echo get_template_directory_uri(); ?>/img/lions-info4.png" alt="">
                <img class="radius sp" src="<?php echo get_template_directory_uri(); ?>/img/lions-info4-rsp.png" alt="">
            </div>
        </label>
        <input type="checkbox" id="pop-up4">
        <div class="overlay">
            <div class="window">
                <label class="close" for="pop-up4">×</label>
                <figure>
                    <img class="info-img" src="<?php echo get_template_directory_uri(); ?>/img/lions-benti.jpg" alt="">
                    <figcaption>バス停のベンチ台など必要な備品を寄贈しています</figcaption>
                </figure>
                <figure>
                    <img class="info-img margin-left-infoimg" src="<?php echo get_template_directory_uri(); ?>/img/lions-mirror.jpg" alt="">
                    <figcaption>定期的にカーブミラーの清掃を行っています</figcaption>
                </figure>
                <figure>
                    <img class="info-img margin-left-infoimg" src="<?php echo get_template_directory_uri(); ?>/img/lions-kenketu.jpg" alt="">
                    <figcaption>献血していただいた方にお礼の品を渡しています</figcaption>
                </figure>
            </div>
        </div>
    </div>

    <!-- <div class="topics-wrap">
        <span class="topics shippori">Topics</span>
    </div>

    <div class="wrap">
        <div class="margin-0-auto bottom">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ): the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="text-decoration">
                        <div class="l-wrapper_06">
                            <div class="card_06">
                                <?php if ( has_post_thumbnail() ): ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else: ?>
                                    <img class="card-img_06" src="https://dubdesign.net/wp-content/uploads/2020/05/0508_dtplayouteyecatch.jpg" alt="">
                                <?php endif; ?>
                            <div class="card-content_06">
                                <p class="card-title_06"><?php the_title(); ?></p>
                                <time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日');?></time>
                                <p class="card-text_06"><?php the_excerpt(); ?></p>
                            </div>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div> -->

    <div class="center top">
        <span class="midasi1 shippori">仁多ライオンズクラブ<br></span>
        <span class="midasi2 shippori">会長ごあいさつ</span>
    </div>

    <div class="kaicho top2">
        <!-- <img class="kaicho-img" src="<?php echo get_template_directory_uri(); ?>/img/hibiki-kaicho.jpg" alt="" class="radius"> -->
        <span class="kaicho-name shippori">令和4年度 会長 響 芳秋</span>
    </div>

    <div class="lions-text-wrap center top2">
        <span class="lions-text shippori">
            今期の仁多ライオンズクラブスローガンを「未来へつなごう 奉仕の心 We Serve」としました。<br>
            新型コロナウィルス禍で人間関係の希薄化が懸念されています。奉仕活動を通して、人と人とのつながり、<br>
            組織と組織のつながり、過去から未来へのつながりが、大切であるという視点からクラブ運営に取り組みます。
        </span>
    </div>

    <div class="banner-wrap margin-0-auto top">
		<a href="https://www.lionsclubs.org/ja" class="text-decoration">
			<img src="<?php echo get_template_directory_uri(); ?>/img/lions_kokusai.gif" alt="">
		</a>
		<!-- <a href="http://www.lc336d.com/2020/" class="text-decoration">
			<img src="<?php echo get_template_directory_uri(); ?>/img/lions_cab.gif" alt="">
		</a> -->
		<a href="https://www.town.okuizumo.shimane.jp/" class="text-decoration">
			<img src="<?php echo get_template_directory_uri(); ?>/img/lions_okuizumo.gif" alt="">
		</a>
	</div>

	<div class="top2">
    <div class="adress-wrap bottom">
        <div class="adress-name shippori">仁多ライオンズクラブ</div>
        <div class="adress1 shippori">〒699-1511 仁多郡奥出雲町三成 仁多郡建設協同組合</div>
        <div class="adress2 shippori">TEL 0854(54)1144 FAX 0854(54)1145 E-mail nita-lc@gotyard.jp</div>
    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/swiper-main.js"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v15.0" nonce="qK0vjNFR"></script>
</body>