<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>

    <!--Выпадающий список городов-->
    <link href="/css/bedrockcut.css" rel="stylesheet">
    <link href="/css/timeoutcut.css" rel="stylesheet">

    <!--Карусель-->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/css/style.css" type="text/css" media="all">

    <!--ОСНОВНАЯ ВЕРСТКА-->
    <link rel="stylesheet" href="/css/frontend.min.css" type="text/css" media="all">

    <!--меню вид-->
    <link rel="stylesheet" href="/css/menu.frontend.min.css" type="text/css" media="all">

    <!--DESTINATIONS CSS-->
    <link rel="stylesheet" href="/css/main.destinations.css" type="text/css" media="all">

    <!--HEADER CSS-->
    <link rel="stylesheet" href="/css/main.header.css" type="text/css" media="all">

    <!--FOOTER CSS-->
    <link rel="stylesheet" href="/css/main.footer.css" type="text/css" media="all">

    <!--Блоки в карусели-->
    <link rel="stylesheet" href="/css/main.carouse.block.css" type="text/css" media="all">


<!--    Блоки в категориях-->
    <link rel="stylesheet" href="/css/category.blocks.css" type="text/css" media="all">

    <!--   Слайдер отелей-->
    <link rel="stylesheet" href="/css/hotel.css" type="text/css" media="all">



    <link rel="stylesheet" id="google-fonts-1-css"
          href="https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=cyrillic&amp;ver=4.9.9"
          type="text/css" media="all">




    <!--Текст-->
    <link rel="stylesheet" id="elementor-global-css" href="/css/city.global.css" type="text/css" media="all">
    <!--Блоки категорий-->
    <link rel="stylesheet" id="elementor-post-608-css" href="/css/city.blocks.css" type="text/css" media="all">
    <!--Хедер-->
    <link rel="stylesheet" id="elementor-post-740-css" href="/css/city.header.css" type="text/css" media="all">

    <!--404-->
    <link rel="stylesheet" id="elementor-post-740-css" href="/css/404.css" type="text/css" media="all">


    <link rel="stylesheet" href="/css/photo.card.css" type="text/css" media="all">


    <script type="text/javascript" src="/js/jquery.min.js"></script>

</head>

<body class="home page-template-default page page-id-9 logged-in admin-bar wp-custom-logo no-sidebar elementor-default elementor-page elementor-page-9 customize-support"
      data-elementor-device-mode="desktop">
<div class="premium-magic-section-body-inner">
<?php
    include 'template/' . $header;
    include 'views/' . $view;
    include_once ('template/footer.html');
?>
    </div>

<!--Либы для карусели-->
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.mousewheel.js"></script>

<!--Настройки карусели в категории-->
<script type="text/javascript">
    $(document).ready(function () {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                960: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
        owl.on('mousewheel', '.owl-stage', function (e) {
            if (e.deltaY > 0) {
                owl.trigger('next.owl');
            } else {
                owl.trigger('prev.owl');
            }
            e.preventDefault();
        });
    });
</script>

<!--БУРГЕР МЕНЮ НА ТЕЛЕФОНЕ-->
<script type="text/javascript" src="js/mobilemenu/jquery.smartmenus.min.js"></script>
<script type="text/javascript">//<![CDATA[
    var ElementorProFrontendConfig={"ajaxurl":"http:\/\/cityvibe.ai\/wp-admin\/admin-ajax.php","nonce":"63a4785cf6","shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"delicious":{"title":"Delicious"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"ru_RU","app_id":""}};
    //]]></script>
<script type="text/javascript" src="js/mobilemenu/frontend.min.js"></script>
<script type="text/javascript" src="js/mobilemenu/waypoints.min.js"></script>
<script type="text/javascript">//<![CDATA[
    var elementorFrontendConfig={"isEditMode":"","is_rtl":"","breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.2.7","urls":{"assets":"http:\/\/cityvibe.ai\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes","elementor_enable_lightbox_in_editor":"yes"}},"post":{"id":9,"title":"Home","excerpt":""}};
    //]]></script>
<script type="text/javascript" src="js/mobilemenu/frontend.js"></script>


</body>
</html>