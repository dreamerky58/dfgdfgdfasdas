<style type="text/css">#menu{height:60px;background-color:transparent;padding:0px;}#menu>ul{padding:0px;margin:0px;height:60px;list-style-type:none;}#menu>ul>li{float:left;height:100%;}#menu>ul>li>a{display:block;padding:0px 10px;color:rgba(255,255,255,0.7);font-weight:600;line-height:60px;height: 60px;border-bottom:3px inset transparent;text-decoration:none!important;-webkit-transition:color 0.2s,background-color 0.2s,border-bottom-color 0.2s;-moz-transition:color 0.2s,background-color 0.2s,border-bottom-color 0.2s;-ms-transition:color 0.2s,background-color 0.2s,border-bottom-color 0.2s;-o-transition:color 0.2s,background-color 0.2s,border-bottom-color 0.2s;transition:color 0.2s,background-color 0.2s,border-bottom-color 0.2s;}#menu>ul>li>a:hover{color:#fff;background-color:rgba(0,0,0,0.2);border-bottom-color:rgba(255,255,255,0.3)}</style>
<div class="nav" style="background-color:#1f2c2e">
    <div class="container">
        <div class="pull-left">
            <img src="kit/other/logo.png" />
        </div>
        <div class="pull-right" id="menu">
            <ul class="hidden-xs">
                <li><a href="/">Anasayfa</a></li>
                <li><a href="hizmetlerimiz">Hizmetlerimiz</a></li>
                <li><a href="projelerimiz">Projelerimiz</a></li>
                <li><a href="hakkimizda">Hakkımızda</a></li>
                <li><a href="iletisim">İletişim</a></li>
            </ul>
            <img src="kit/other/menu.png" class="hidden-sm hidden-md hidden-lg" style="margin-top:13px" onclick="selectMenu()" />
            <select id="menuSelect" style="display: none;" onselect="menuGo(this.value)">
                <option value="anasayfa">Anasayfa</option>
                <option value="hizmetlerimiz">Hizmetlerimiz</option>
                <option value="projelerimiz">Projelerimiz</option>
                <option value="hakkimizda">Hakkımızda</option>
                <option value="iletisim">İletişim</option>
            </select>
        </div>
    </div>
</div>
<script type="text/javascript">function selectMenu() {$("#menuSelect").focus();}function menuGo(x) {switch(x) {case "anasayfa":{window.location.assign("/");};break;case "hizmetler":{window.location.assign("hizmetler");};break;case "projelerimiz":{window.location.assign("projelerimiz");};break;case "hakkimizda":{window.location.assign("hakkimizda");};break;case "iletisim":{window.location.assign("iletisim");};break;}}</script>