<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="/assets/css/jquery.mCustomScrollbar.css" />
        <script src="/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <style>
            html, body {height: 100%;}
            body {background-color:#343434; margin:0;}
            .main-width {width:900px; height:100%; margin:0 auto; position:relative;}
            .main-width .main-banner {float:left; margin-top:20px; margin-bottom:30px; width:100%; height:80px;}
            .main-width .main-banner .main-name {font-family: 'Jua', sans-serif; color: #ffffff; font-size:40px;}
            .main-width .main-banner .main-sub {font-family: 'Jua', sans-serif; color: #ffffff; font-size:15px;}
            .main-width .main-content {float:left; margin-bottom:10px; width:100%; height:600px; position:relative;}
            .main-width .main-content .tab-line{float:left; width:100%; height:10%; background-color:#eeeeee; position:relative; cursor: pointer;}
            .main-width .main-content .tab-line .tab{float:left; width:25%; height:100%; padding-top:20px; text-align: center; box-sizing: border-box;}
            .main-width .main-content .tab-line .tab1{background-color:#FFAF0A;}
            .main-width .main-content .tab-line .tab2{background-color:#D27D32;}
            .main-width .main-content .tab-line .tab3{background-color:#5F9EA0;}
            .main-width .main-content .tab-line .tab4{background-color:#8c8c8c;}
            .main-width .main-content .tab-line .tab-name{font-family: 'Jua', sans-serif; color: #000000; font-size:20px;}
            .main-width .main-content .content-line{float:left; width:100%; height:90%; position:relative;}
            .main-width .main-content .content-line .content{width:100%; height:100%; display:none; box-sizing: border-box; position:relative;}
            .main-width .main-content .content-line .active{display:block;}
            .main-width .main-content .content-line .content .big-font{font-family: 'Jua', sans-serif; color: #f50057; font-size:100px;}
            .main-width .main-content .content-line .content1{background-color:#FFAF0A; padding:15px; box-sizing: border-box;}
            .main-width .main-content .content-line .content2{background-color:#D27D32; padding:15px; box-sizing: border-box;}
            .main-width .main-content .content-line .content2 .love{height:320px; position:relative; width:268.5px; margin:0 auto; padding-top:220px; box-sizing: border-box;}
            .main-width .main-content .content-line .content3{background-color:#5F9EA0; padding:15px; box-sizing: border-box;}
            .main-width .main-content .content-line .content4{background-color:#8c8c8c; padding:15px; box-sizing: border-box;}
            .main-width .main-content .content-line .content-sub{width:100%; height:100%; position:relative;}

        </style>
    </head>
    <body>
        <div class='main-width'>
            <div class='main-banner'>
                <font class='main-name'>Kim B.Y</font>
                </br>
                <font class='main-sub'>PHP(CI) / MySQL(MariaDB) / Linux(CentOS)</font>
            </div>
            <div class='main-content'>
                <div class='tab-line'>
                    <div class='tab tab1' idx='1'>

                    </div>
                    <div class='tab tab2' idx='2'>
                        <font class='tab-name'>유나야<font>
                    </div>
                    <div class='tab tab3' idx='3'>

                    </div>
                    <div class='tab tab4' idx='4'>

                    </div>
                </div>
                <div class='content-line'>
                    <div class='content content1 active' data-mcs-theme="minimal-dark" idx='1'>
                        <?= $content2 ?>
                    </div>
                    <div class='content content2' data-mcs-theme="minimal-dark" idx='2'>
                        <?= $content1 ?>
                    </div>
                    <div class='content content3' data-mcs-theme="minimal-dark" idx='3'>

                    </div>
                    <div class='content content4' data-mcs-theme="minimal-dark" idx='4'>

                    </div>
                </div>
            </div>
        </div>

        <script>
            // Add TAB function
            $('.tab').click(function () {
                // clicked tab idx
                var idx = $(this).attr('idx');
                // checking variable (checking clicked tab idx is same displaying tab idx now)
                var check = false;
                $('.content').each(function () {
                    if ($(this).hasClass('active')) {
                        if (idx != $(this).attr('idx')) {
                            $(this).removeClass('active');
                        } else {
                            check = true;
                        }
                    }
                });
                if (!check) {
                    $('.content' + idx).addClass('active');
                }
            });

            (function ($) {
                $(window).on("load", function () {
                    $(".content1").mCustomScrollbar();
                    $(".content2").mCustomScrollbar();
                    $(".content3").mCustomScrollbar();
                    $(".content4").mCustomScrollbar();
                });
            })(jQuery);

        </script>
    </body>
</html>