<?php

$about = $db->query("SELECT info FROM system_table")->fetch();

?>
<style>.bg-open-gray{background-color: #ddd;}.pankarts{background-color: #fff;border-bottom: 3px inset rgba(0,0,0,0.3);padding: 15px;border-radius: 3px;margin: 10px 0px}.img-about{border-radius: 3px;border-bottom: 3px inset rgba(255,255,255,0.9)}</style>
<div class="nav">
    <div class="container">
        <br />
        <h1 class="text-center" style="color: #484848">Hakkımızda</h1>
        <br />
    </div>
</div>
<div class="nav bg-open-gray">
    <div class="container">
        <br />
        <center><img src="kit/about/hakkimizda.jpg" class="img-responsive img-about" /></center>
        <br />
        <div class="nav">
            <h4><?php echo $about["info"] ?></h4>
        </div>
        <br />
        <br />
        <br />
        <br />
        <br />
    </div>
</div>
<script>$(function() {$("#menu > ul > li > a").eq("3").css({"color":"#fff","background-color":"rgba(0,0,0,0.2)","border-bottom-color":"rgba(255,255,255,0.3)"});});</script>