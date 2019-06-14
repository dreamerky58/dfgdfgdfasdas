<?php

$kyt = $db->query("SELECT * FROM system_table")->fetch();

?>
<link rel="stylesheet" href="js/owl.carousel.css" />
<link rel="stylesheet" href="js/owl.theme.css" />
<link rel="stylesheet" href="js/owl.transitions.css" />
<style type="text/css">#slider{width: 100%;overflow: hidden;}#slider figure{position: relative;margin: 0px;padding: 0px;font-size: 0px;text-align: left;}.slider{color: #fff;background-color: rgba(0,0,0,0.5);position: absolute;border-radius: 10px;padding: 10px 20px;padding-top: 7px;font-weight: bold;font-size: 30px;z-index: 999;margin-top: 10%;cursor: pointer;-webkit-transition: background-color 0.2s;-moz-transition: background-color 0.2s;-ms-transition: background-color 0.2s;-o-transition: background-color 0.2s;transition: background-color 0.2s;}.slider:hover{background-color: rgba(0,0,0,0.7);}.left{left: 0px;border-bottom-left-radius: 0px;border-top-left-radius: 0px;}.right{right: 0px;border-bottom-right-radius: 0px;border-top-right-radius: 0px;}.bg-open-gray{background-color: #ddd;}.pankarts{background-color: #fff;border-bottom: 3px inset rgba(0,0,0,0.3);padding: 15px;border-radius: 3px;}.bg-white{background-color: #fff;}.ud-g-c{color: #484848;}.pankarts-gray{background-color: rgba(70,190,255,0.5);padding: 15px;border-bottom: 3px inset rgba(0,0,0,0.5);border-radius: 3px;}</style>
<style>#slider .item img{display: block;width: 100%;height: auto;}</style>
<div id="slider" class="owl-carousel owl-theme">
        <?php
            global $db;
            foreach($db->query("SELECT id FROM slider_table") as $str) {
                echo "<div class=\"item\"><img stye=\"width:100%\" alt src=\"kit/slider/".$str["id"].".jpg\" /></div>";
            }
        ?>
</div>
<div class="nav">
    <div class="container">
        <br />
        <h1 class="text-center" style="color: #484848"><?php echo $kyt["slogan"]?></h1>
        <br />
    </div>
</div>
<div class="nav bg-open-gray">
    <div class="container">
        <br />
        <h2 class="text-center d-g-c">Hizmetlerimiz</h2>
        <br />
        <div class="nav">
            <?php
            global $db;
            foreach($db->query("SELECT * FROM services_table LIMIT 4") as $str) {
                echo "<div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\"><div class=\"nav pankarts\"><img class=\"img-responsive\" alt src=\"kit/services/".$str["id"].".jpg\" /><h3 class=\"text-center\">".$str["title"]."</h3><div class=\"nav d-g-c text-center\">".$str["content"]."</div></div></div>";
            }
            
            ?>
        </div>
        <br />
        <br />
        <div class="nav">
            <button type="button" style="display: block" onclick="all_services()" class="tf-btn tf-btn-blue pull-center">Tüm hizmetlerizi görüntülemek için tıklayın</button>
        </div>
        <br />
        <br />
    </div>
</div>
<div class="nav">
    <div class="container">
        <br />
        <h2 class="text-center ud-g-c">Projelerimiz</h2>
        <br />
        <div class="nav">
            <?php
            global $db;
            foreach($db->query("SELECT * FROM project_table ORDER BY id DESC LIMIT 4") as $str) {
                echo "<div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\"><div class=\"nav pankarts-gray\"><img class=\"img-responsive\" alt src=\"kit/projects/".$str["id"].".jpg\" /><h3 class=\"text-center\">".$str["title"]."</h3><div class=\"nav d-g-c text-center\">".$str["content"]."</div></div></div>";
            }
            
            ?>
        </div>
        <br />
        <br />
        <div class="nav">
            <button type="button" style="display: block" onclick="all_projects()" class="tf-btn pull-center">Tüm projelerimizi görüntülemek için tıklayın</button>
        </div>
        <br />
        <br />
    </div>
    </div>
<div class="nav bg-open-gray d-g-c">
    <div class="container">
        <br />
        <h3 class="text-center">Hakkımızda</h3>
        <br />
        <div class="nav text-center"><?php echo substr($kyt["info"], 0, 500);?>...</div>
        <br />
        <br />
        <div class="nav">
            <button type="button" style="display: block" onclick="about()" class="tf-btn tf-btn-blue pull-center">Hakkımızda daha fazla bilgi almak için tıklayın</button>
        </div>
        <br />
        <br />
    </div>
</div>
<div class="nav" id="map" style="height:300px">
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
    function initialize() {
      var mapProp = {
        center:new google.maps.LatLng(<?php echo $kyt["google_maps"];?>),
        zoom:17,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      var map=new google.maps.Map(document.getElementById("map"),mapProp);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</div>
<div class="nav">
    <div class="container d-g-c">
        <br />
        <h3 class="text-center ud-g-c">İletişim</h3>
        <h5 class="text-center">
            Bizimle iletişime geçin.
            <br />
            <br />
            <font color="#0492dc">Adresimiz: </font> <?php echo $kyt["adres"];?>
            <br />
            <br />
            <font color="#0492dc">E-Posta Adresimiz: </font> <?php echo $kyt["eposta"];?>
            <br />
            <br />
            <font color="#0492dc">Telefon Numaramız: </font> <?php echo $kyt["tel"];?>
            <br />
            <br />
            ya da
        </h5>
        <br />
        <center><button type="button" onclick="contact()" class="tf-btn tf-btn-green">İletişim Sayfasını ve İletişim Formunu Görüntüleyin</button></center>
        <br />
        <br />
    </div>
</div>
<script src="js/owl.carousel.min.js"></script>  
<script>
$("#slider").owlCarousel({
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true,
    autoPlay: 5000
});    
</script>
<script type="text/javascript">$(function() {var w = $("#slider figure img").length;$("#slider figure").width(w * 100 +"%");$("#slider figure img").width(100 / w + "%");setInterval(function() {slideRight();}, 5000);$("#menu > ul > li > a").eq("0").css({"color":"#fff","background-color":"rgba(0,0,0,0.2)","border-bottom-color":"rgba(255,255,255,0.3)"});$("#map > iframe").css({padding: "0px", border: "none", width: "100%", height: "auto"});});function slideRight() {var w = parseInt($(window).width());var mL = parseInt($("#slider figure").css("margin-left"));var mLV = $("#slider figure").width();var mLT = mL - mL * 2;if(mLT >= mLV - w) {$("#slider figure").animate({marginLeft: "0"});}else {var xx = Number(mL - w);$("#slider figure").animate({marginLeft: xx});}}function slideLeft() {var w = parseInt($(window).width());var mL = parseInt($("#slider figure").css("margin-left"));if(mL == 0) {var rst = $("#slider figure img").length * w - w;$("#slider figure").animate({marginLeft: "-" + rst});}else {var xx = Number(mL + w);$("#slider figure").animate({marginLeft: xx});}}function all_services() {window.location.assign("hizmetlerimiz")};function all_projects() {window.location.assign("projelerimiz")};function about() {window.location.assign("hakkimizda")};function contact() {window.location.assign("iletisim")}</script>