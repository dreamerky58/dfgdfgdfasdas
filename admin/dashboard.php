<?php
session_start();
if($_SESSION["admin"] != "okay") {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>ARICPRESS - Admin Paneli</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/framework.min.css" />
    <style type="text/css">
        body{background-color: #ccc}#header{background-color: rgba(25,95,255,0.8)}#logout-icon:hover{background-color:rgba(0,0,0,0.3); cursor:pointer}.menus{font-weight: 600;width: 100%; padding: 5px 10px; padding-right:0px;cursor: pointer;text-align: left;color: #484848}.menus.active{background-color: rgb(67,195,59);color: #fff}#content{background-color: #fff; padding: 10px 25px;}
    </style>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript">
    $(function() {
        $("#content").css({minHeight: $(window).height() - 60 + "px"});menu("hm");
    });
    function menu(x) {
        switch(x) {
            case "hm":{
                $(".menus").eq("0").addClass("active");
                $(".img").css({opacity: "0"});
                $(".img").eq("0").css({opacity: "1"});
                $(".menus").eq("0").siblings(".menus").removeClass("active");
                $("#content").html("<h3 class=\"text-left d-g-c\">Anasayfa Ayarları</h3>");
                comeHome();
            };break;
            case "sv":{
                $(".menus").eq("1").addClass("active");
                $(".img").css({opacity: "0"});
                $(".img").eq("1").css({opacity: "1"});
                $(".menus").eq("1").siblings(".menus").removeClass("active");
                $("#content").html("<h3 class=\"text-left d-g-c\">Hizmetlerimiz Ayarları</h3>");
                comeServ();
            };break;
            case "pr":{
                $(".menus").eq("2").addClass("active");
                $(".img").css({opacity: "0"});
                $(".img").eq("2").css({opacity: "1"});
                $(".menus").eq("2").siblings(".menus").removeClass("active");
                $("#content").html("<h3 class=\"text-left d-g-c\">Projelerimiz Ayarları</h3>");
                comeProj();
            };break;
            case "ab":{
                $(".menus").eq("3").addClass("active");
                $(".img").css({opacity: "0"});
                $(".img").eq("3").css({opacity: "1"});
                $(".menus").eq("3").siblings(".menus").removeClass("active");
                $("#content").html("<h3 class=\"text-left d-g-c\">Hakkımızda Ayarları</h3>");
                comeAbout();
            };break;
            case "ct":{
                $(".menus").eq("4").addClass("active");
                $(".img").css({opacity: "0"});
                $(".img").eq("4").css({opacity: "1"});
                $(".menus").eq("4").siblings(".menus").removeClass("active");
                $("#content").html("<h3 class=\"text-left d-g-c\">İletişim Ayarları</h3>");
                comeAboutc();
            };break;
            case "msgs":{
                $(".menus").eq("5").addClass("active");
                $(".img").css({opacity: "0"});
                $(".img").eq("5").css({opacity: "1"});
                $(".menus").eq("5").siblings(".menus").removeClass("active");
                $("#content").html("<h3 class=\"text-left d-g-c\">Mesajlar</h3>");
                getMessages();
            };break; 
            case "sys":{
                $(".menus").eq("6").addClass("active");
                $(".img").css({opacity: "0"});
                $(".img").eq("6").css({opacity: "1"});
                $(".menus").eq("6").siblings(".menus").removeClass("active");
                $("#content").html("<h3 class=\"text-left d-g-c\">Sistem Ayarları</h3>");
                getSystem();
            };break;
            case "ekleService":{
                $("#content").html("<h3 class=\"text-left d-g-c\">Hizmet Ekle</h3><form method=\"post\" action=\"cmd.php?name=addS\" enctype=\"multipart/form-data\"><input type=\"text\" name=\"st\" placeholder=\"Hizmet Adı\" class=\"tf-input\" /><br /><br /><input type=\"file\" name=\"si\" class=\"tf-input\" /><br /><textarea placeholder=\"Hizmet Açıklaması (Ortalama Olarak 250 karakter giriniz..)\" name=\"sc\" class=\"tf-textarea\" style=\"height: 250px;\"></textarea><br /><br /><button type=\"submit\" class=\"tf-btn tf-btn-green pull-right\" style=\"display:block\">Hizmeti Ekle</button></form>");
            };break;
            case "ekleProject":{
                $("#content").html("<h3 class=\"text-left d-g-c\">Proje Ekle</h3><form method=\"post\" action=\"cmd.php?name=addP\" enctype=\"multipart/form-data\"><input type=\"text\" name=\"st\" placeholder=\"Proje Adı\" class=\"tf-input\" /><br /><br /><input type=\"file\" name=\"si\" class=\"tf-input\" /><br /><textarea placeholder=\"Proje Açıklaması (Ortalama Olarak 250 karakter giriniz..)\" name=\"sc\" class=\"tf-textarea\" style=\"height: 250px;\"></textarea><br /><br /><button type=\"submit\" class=\"tf-btn tf-btn-green pull-right\" style=\"display:block\">Projeyi Ekle</button></form>");
            };break;
            case "addSlider":{
                $("#content").html("<h3 class=\"text-left d-g-c\">Slider Ekle</h3><form method=\"post\" action=\"cmd.php?name=addSlider\" enctype=\"multipart/form-data\">Slider Resimlerinin Aynı Yükseklikte veya Oranda Olmasına Dikkat Ediniz!<br /><input type=\"file\" name=\"img\" class=\"tf-input\" /><br /><button type=\"submit\" class=\"tf-btn tf-btn-green pull-right\">Ekle</button></form>");
            };break;
        }
    }
    function comeHome() {
        $.ajax({
            url: "cmd.php?name=cH",
            success: function(data) {
                $("#content").append(data);
            }
        });
    }
    function comeServ() {
        $.ajax({
            url: "cmd.php?name=cS",
            success: function(data) {
                $("#content").append(data);
            }
        });
    }
    function changeServ() {
        var dataPost = "hd="+$("#hd").val()+"&hk="+$("#hk").val();
        $.ajax({
            type: "POST",
            url: "cmd.php?name=rS",
            data: dataPost,
            success: function(data) {
                if(data == "yes") {
                    alert("Hizmetlerimiz ayarları başarılı bi şekilde değiştirildi");
                }
                else {
                    alert("Hizmetlerimiz ne yazıkki değiştirilemedi");
                }
            }
        });
    }
    function deleteServ(x) {
        $.ajax({
            type: "POST",
            url: "cmd.php?name=dS",
            data: "id="+x,
            success: function(data) {
                if(data == "yes") {
                    alert("Hizmet Başarıyla Silindi");
                    $("#"+x).fadeOut(300);
                }
                else {
                    alert("Hizmet Silinemedi");
                }
            }
        });
    }
    function comeProj() {
        $.ajax({
            url: "cmd.php?name=cP",
            success: function(data) {
                $("#content").append(data);
            }
        });
    }
    function changeProj() {
        var dataPost = "hd="+$("#hd").val()+"&hk="+$("#hk").val();
        $.ajax({
            type: "POST",
            url: "cmd.php?name=rP",
            data: dataPost,
            success: function(data) {
                if(data == "yes") {
                    alert("Projelerimiz ayarları başarılı bi şekilde değiştirildi");
                }
                else {
                    alert("Projelerimiz ne yazıkki değiştirilemedi");
                }
            }
        });
    }
    function deleteProj(x) {
        $.ajax({
            type: "POST",
            url: "cmd.php?name=dP",
            data: "id="+x,
            success: function(data) {
                if(data == "yes") {
                    alert("Proje Başarıyla Silindi");
                    $("#"+x).fadeOut(300);
                }
                else {
                    alert("Proje Silinemedi");
                }
            }
        });
    }
    function comeAbout() {
        $.ajax({
            url: "cmd.php?name=cA",
            success: function(data) {
                $("#content").append(data);
            }
        });
    }
    function changeAbout() {
        var dataPost = "hd="+$("#hd").val()+"&hk="+$("#hk").val();
        $.ajax({
            type: "POST",
            url: "cmd.php?name=rA",
            data: dataPost,
            success: function(data) {
                if(data == "yes") {
                    alert("Hakkımızda ayarları başarılı bi şekilde değiştirildi");
                }
                else {
                    alert("Hakkımızda ne yazıkki değiştirilemedi");
                }
            }
        });
    }
    function changeInfo() {
        var info = $.trim($("#infoTA").val());
        if(info != "") {
            $.ajax({
                type: "POST",
                url: "cmd.php?name=cI",
                data: "info=" + info,
                success: function(data) {
                    if(data == "yes") {
                        alert("Kurumu Anlatan yazı Değiştirildi");
                        menu("ab");
                    }
                    else {
                        alert("Kurumu Anlatan yazı Değiştirilemedi");
                    }
                }
            });
        }
    }
    function imgInfoChanger() {
        $("#img-change-btn").hide();
        $("#img-info").html("<form action=\"cmd.php?name=cAI\" method=\"post\" enctype=\"multipart/form-data\" id=\"imgForm\"><input class=\"tf-input\" type=\"file\" id=\"infoImgFile\" name=\"file\" required /><br /><button type=\"submit\" onclick=\"alert('Resmi güncellediğinizde resim burada güncel olmayabilir. Bunun sebebi geçmişten kaynaklanıyordur. Bu bir sorun değildir')\" class=\"tf-btn tf-btn-green pull-right\">Güncelle</button></form>");
    }
    function addServicePage() {
        menu("ekleService");
    }
    function addProjectPage() {
        menu("ekleProject");
    }
    function comeAboutc() {
        $.ajax({
            url: "cmd.php?name=cAbout",
            success: function(data) {
                $("#content").append(data);
            }
        });
    }
    function changeAboutI() {
        var dataPost = "hd="+$("#hd").val()+"&hk="+$("#hk").val();
        $.ajax({
            type: "POST",
            url: "cmd.php?name=rAbout",
            data: dataPost,
            success: function(data) {
                if(data == "yes") {
                    alert("İletişim ayarları başarılı bi şekilde değiştirildi");
                }
                else {
                    alert("İletişim ayarları ne yazıkki değiştirilemedi");
                }
            }
        });
    }
    function changeBus() {
        var ca, ct, ce;
        ca = $.trim($("#ca").val());
        ct = $.trim($("#ct").val());
        ce = $.trim($("#ce").val());
        var dataPost = "ca="+ca+"&ct="+ct+"&ce="+ce;
        if(ca != "" && ct != "" && ce != "") {
            $.ajax({
                type: "POST",
                url: "cmd.php?name=changeBus",
                data: dataPost,
                success: function(data) {
                    if(data == "yes") {
                        alert("İletişim Bilgileri Başarıyla değiştirildi");
                    }
                    else {
                        alert("İletişim Bilgileri değiştirilemedi");
                    }
                }
            });
        }
    }
    function getMessages() {
        $.ajax({
            url: "cmd.php?name=msgs",
            success: function(data) {
                $("#content").append(data);
            }
        });
    }
    function deleteMsg(x) {
        $.ajax({
            type: "POST",
            url: "cmd.php?name=dMsg",
            data: "id=" + x,
            success: function(data) {
                if(data == "yes") {
                    alert("Mesaj Başarıyla Silndi");
                    $("#" + x).fadeOut(300);
                }
                else {
                    alert("Mesaj Silinemedi");
                }
            }
        });
    }
    function getSystem() {
        $.ajax({
            url: "cmd.php?name=getSystem",
            success: function(data) {
                $("#content").append(data);
            }
        });
    }
    function updateSystem() {
        $.ajax({
            type: "POST",
            url: "cmd.php?name=updateSystem",
            data: $("#sysForm").serialize(),
            success: function(data) {
                if(data == "yes") {
                    alert("Sistem Ayarları Güncellendi");
                }
                else {
                    alert("Sistem Ayarları Güncellenemedi");
                }
            }
        });
    }
    function deleteSlider(x) {
        $.ajax({
            type: "POST",
            url: "cmd.php?name=deleteSlider",
            data: "id=" + x,
            success: function(data) {
                if(data == "yes") {
                    alert("Resim Başarıyla Silindi");
                    window.location.reload();
                }
                else {
                    alert("Resim Başarıyla Silindi");
                }
            }
        });
    }
    function addSlider() {
        menu("addSlider");
    }
    function changeHome() {
        var dataPost = "hd="+$("#hd").val()+"&hk="+$("#hk").val();
        $.ajax({
            type: "POST",
            url: "cmd.php?name=rH",
            data: dataPost,
            success: function(data) {
                if(data == "yes") {
                    alert("Anasayfa ayarları başarılı bi şekilde değiştirildi");
                }
                else {
                    alert("Anasayfa ne yazıkki değiştirilemedi");
                }
            }
        });
    }
    </script>
</head>
<body>
    <div class="nav" id="header">
        <img src="../kit/other/logo.png" class="pull-left" />
        <img src="../kit/other/logout.icon.png" id="logout-icon" title="Çıkış" onclick="window.location.assign('cmd.php?name=cikis')" class="pull-right" />
    </div>
    <div class="nav">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2" id="menu" style="padding:0px">
            <div class="menus" onclick="menu('hm')">Anasayfa<img src="../kit/other/active-menu.png" class="pull-right img-responsive img" style="height: 20px; opacity: 0" /><img src="../kit/other/home-icon.png" class="pull-right img-responsive" style="height: 20px" /></div>
            <div class="menus" onclick="menu('sv')">Hizmetlerimiz<img src="../kit/other/active-menu.png" class="pull-right img-responsive img" style="height: 20px; opacity: 0" /><img src="../kit/other/serv-icon.png" class="pull-right img-responsive" style="height: 20px" /></div>
            <div class="menus" onclick="menu('pr')">Projelerimiz<img src="../kit/other/active-menu.png" class="pull-right img-responsive img" style="height: 20px; opacity: 0" /><img src="../kit/other/proj-icon.png" class="pull-right img-responsive" style="height: 20px" /></div>
            <div class="menus" onclick="menu('ab')">Hakkımızda<img src="../kit/other/active-menu.png" class="pull-right img-responsive img" style="height: 20px; opacity: 0" /><img src="../kit/other/info-icon.png" class="pull-right img-responsive" style="height: 20px" /></div>
            <div class="menus" onclick="menu('ct')">İletişim<img src="../kit/other/active-menu.png" class="pull-right img-responsive img" style="height: 20px; opacity: 0" /><img src="../kit/other/cont-icon.png" class="pull-right img-responsive" style="height: 20px" /></div>
            <div class="menus" onclick="menu('msgs')">Mesajlar<img src="../kit/other/active-menu.png" class="pull-right img-responsive img" style="height: 20px; opacity: 0" /><img src="../kit/other/msg-icon.png" class="pull-right img-responsive" style="height: 20px" /></div>
            <div class="menus" onclick="menu('sys')">Sistem<img src="../kit/other/active-menu.png" class="pull-right img-responsive img" style="height: 20px; opacity: 0" /><img src="../kit/other/system-icon.png" class="pull-right img-responsive" style="height: 20px" /></div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-10 ud-g-c" id="content"></div>
    </div>
</body>
</html>