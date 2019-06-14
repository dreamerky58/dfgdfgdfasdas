<?php
$contact = $db->query("SELECT * FROM system_table")->fetch();
?>

<style>.bg-open-gray{background-color: #ddd;}.pankarts{background-color: #fff;border-bottom: 3px inset rgba(0,0,0,0.3);padding: 15px;border-radius: 3px;margin: 10px 0px}.img-about{border-radius: 3px;border-bottom: 3px inset rgba(255,255,255,0.9)}.bold{font-weight:600}</style>
<div class="nav">
    <div class="container">
        <br />
        <h1 class="text-center" style="color: #484848">İletişim</h1>
        <br />
    </div>
</div>
<div class="nav bg-open-gray">
    <div class="container">
        <br />
        <br />
        <br />
        <div class="nav">
        <h5 class="text-center">
            Bizimle iletişime geçin.
            <br />
            <br />
            <font color="#0492dc">Adresimiz: </font> <?php echo $contact["adres"]; ?>
            <br />
            <br />
            <font color="#0492dc">E-Posta Adresimiz: </font> <?php echo $contact["eposta"]; ?>
            <br />
            <br />
            <font color="#0492dc">Telefon Numaramız: </font> <?php echo $contact["tel"]; ?>
            <br />
            <br />
            __________________________
        </h5>
        <br />
        <center>
            <form id="contactForm" class="col-xs-11 col-sm-8 col-md-7 col-lg-5 pull-center">
                <span style="color:#f00" id="ns"></span>
                <input type="text" name="ns" class="tf-input" placeholder="Adınız ve Soyadınız" />
                <br />
                <br />
                <span style="color:#f00" id="ep"></span>
                <input type="text" name="ep" class="tf-input" placeholder="E-Postanız" />
                <br />
                <br />
                <span style="color:#f00" id="msg"></span>
                <textarea class="tf-textarea" name="msg" style="height: 250px" placeholder="Mesajınız"></textarea>
                <br />
                <br />
                <button type="reset" class="tf-btn tf-btn-red bold">Temizle</button>
                &nbsp;&nbsp;&nbsp;
                <button type="button" class="tf-btn tf-btn-green" onclick="contactPost()">Gönder</button>
            </form>    
        </center>
        <br />
        <br />
        </div>
        <br />
        <br />
        <br />
        <br />
        <br />
    </div>
</div>
<script>$(function() {$("#menu > ul > li > a").eq("4").css({"color":"#fff","background-color":"rgba(0,0,0,0.2)","border-bottom-color":"rgba(255,255,255,0.3)"});});function contactPost() {var ns,ep,msg;ns = $.trim($("input[name=ns]").val());ep = $.trim($("input[name=ep]").val());msg = $.trim($("textarea[name=msg]").val());if(ns != "" && ep != "" && msg != "") {$("#ns, #ep, #msg").text("");var dataPost = $("#contactForm").serialize();$.ajax({type: "POST",url: "fn/messageAdder.php",data: dataPost,success: function(data) {if(data == "yes") {alert("Mesajınız Gönderildi");window.location.assign("/");}else if(data == "ep") {$("#ep").text("Lütfen E-Postanızı doğru biçimde giriniz");}}});}else {if(ns == "") {$("#ns").text("Lütfen Adınızı ve Soyadınızı giriniz");}else{$("#ns").text("");}if(ep == "") {$("#ep").text("Lütfen E-Postanızı giriniz");}else{$("#ep").text("");}if(msg == "") {$("#msg").text("Lütfen Mesajınızı giriniz");}else{$("#msg").text("");}}}</script>