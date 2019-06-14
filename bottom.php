<?php
$social = $db->query("SELECT * FROM system_table")->fetch();
?>
<style type="text/css">#footer-wrap{background-image:url(kit/other/texture-bg.png);}.social-img{float:left;display:block;width:25px;height:25px;border-radius:100%;background-image:url(kit/other/social.png);margin-left:5px;opacity:0.5;-webkit-transition: opacity 0.2s;-moz-transition: opacity 0.2s;-ms-transition: opacity 0.2s;-o-transition: opacity 0.2s;transition: opacity 0.2s;}.social-img:hover{opacity: 1;}#facebook{background-position:0px 0px;margin-left: 0px;}#pinterest{background-position:-27px 0px;}#twitter{background-position:-52px 0px;}#google{background-position:right top;}#serit{height:10px;background-image: url(kit/other/serit.png);background-position: -3px;border-bottom: 3px solid #666}</style>
<div class="nav" id="serit"></div>
<div class="nav" id="footer-wrap">
    <br />
    <div class="container text-center o-g-c">
        <span><?php echo $social["copyright"];?></span>
        <br />
        <span>Bizi Takip Edin</span>
        <br />
        <div class="pull-center" style="width: 115px; margin-top: 5px">
                <a class="social-img" id="facebook" href="https://www.facebook.com/<?php echo $social["facebook"]?>"></a>
                <a class="social-img" id="pinterest" href="https://www.pinterest.com/<?php echo $social["pinterest"]?>"></a>
                <a class="social-img" id="twitter" href="https://www.twitter.com/<?php echo $social["twitter"]?>"></a>
                <a class="social-img" id="google" href="https://plus.google.com/<?php echo $social["google_plus"]?>"></a>
        </div>
    </div>
    <br />
</div>
