<style>.bg-open-gray{background-color: #ddd;}.pankarts{background-color: #fff;border-bottom: 3px inset rgba(0,0,0,0.3);padding: 15px;border-radius: 3px;margin: 10px 0px}</style>
<div class="nav">
    <div class="container">
        <br />
        <h1 class="text-center" style="color: #484848">Hizmetlerimiz</h1>
        <br />
    </div>
</div>
<div class="nav bg-open-gray">
    <div class="container">
        <br />
        <div class="nav">
            <?php
            global $db;
            foreach($db->query("SELECT * FROM services_table") as $str) {
                echo "<div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\"><div class=\"nav pankarts\"><img class=\"img-responsive\" alt src=\"kit/services/".$str["id"].".jpg\" /><h3 class=\"text-center\">".$str["title"]."</h3><div class=\"nav d-g-c text-center\">".$str["content"]."</div></div></div>";
            }
            
            ?>
        </div>
        <br />
        <br />
        <br />
        <br />
        <br />
    </div>
</div>
<script>$(function() {$("#menu > ul > li > a").eq("1").css({"color":"#fff","background-color":"rgba(0,0,0,0.2)","border-bottom-color":"rgba(255,255,255,0.3)"});});</script>