<?php
session_start();
if($_SESSION["admin"] == "okay") {
    include("../fn/dbManager.php");
    $n = trim(@$_GET["name"]);
    if($n != "") {
        switch($n) {
            case "cH":{
                $g = $db->query("SELECT * FROM page_setting_table WHERE id = 1")->fetch();
                $sonuc = "Desciription / Sayfa Açıklaması<br /><input type=\"text\" value=\"".$g["desciription"]."\" class=\"tf-input\" id=\"hd\" /><br /><br />Keywords / Sayfa Anahtar Kelimeleri<br /><input type=\"text\" value=\"".$g["keywords"]."\" class=\"tf-input\" id=\"hk\" /><br /><br /><button type=\"button\" class=\"tf-btn tf-btn-green pull-right\" onclick=\"changeHome()\">Güncelle</button><br /><br /><h3 class=\"text-left d-g-c\">Slider Resimleri</h3><button type=\"button\" onclick=\"addSlider()\" class=\"tf-btn tf-btn-green pull-right\">Resim Ekle</button><br /><table class=\"table\"><thead><tr><th>Resim</th><th>Eklenme Tarihi</th><th>Sil</th></tr></thead><tbody>";
                global $db;
                foreach($db->query("SELECt * FROM slider_table") as $str) {
                    $sonuc .= "<tr id=\"".$str["id"]."\"><td><img src=\"../kit/slider/".$str["id"].".jpg\" class=\"img-responsive\" /></td><td>".$str["create_time"]."</td><td><button type=\"button\" class=\"tf-btn\" onclick=\"deleteSlider(".$str["id"].")\">Sil</button></td></tr>";
                }
                $sonuc .= "</tbody></table>";
                echo $sonuc;
};break;
            case "rH":{
                $hd = trim(@$_POST["hd"]);
                $hk = trim(@$_POST["hk"]);
                if($hd != "" && $hd != "") {
                    if($db->query("UPDATE page_setting_table SET desciription = '$hd', keywords = '$hk' WHERE id = 1")) {
                        echo "yes";
                    }
                    else {
                        echo "no";
                    }
                }
                else {
                    echo "no";
                }
};break;
            case "cS":{
                $g = $db->query("SELECT * FROM page_setting_table WHERE id = 2")->fetch();
                $sonuc = null;
                $sonuc .= "Desciription / Sayfa Açıklaması<br /><input type=\"text\" value=\"".$g["desciription"]."\" class=\"tf-input\" id=\"hd\" /><br /><br />Keywords / Sayfa Anahtar Kelimeleri<br /><input type=\"text\" value=\"".$g["keywords"]."\" class=\"tf-input\" id=\"hk\" /><br /><br /><button type=\"button\" class=\"tf-btn tf-btn-green pull-right\" onclick=\"changeServ()\">Güncelle</button>";
                global $db;
                $sonuc .= "<br /><br /><br /><h3 class=\"text-left d-g-c\">Varolan Hizmetlerimiz</h3><button type=\"button\" class=\"tf-btn tf-btn-green pull-right\" onclick=\"addServicePage()\">Hizmet Ekle</button><table class=\"table\"><thead><tr><th>Adı</th><th>İçeriği</th><th>Oluşturma Tarihi</th><th>Sil</th></tr></head><tbody>";
                foreach($db->query("SELECT * FROM services_table ORDER BY id DESC") as $str) {
                    $sonuc .= "<tr id=\"".$str["id"]."\"><td>".$str["title"]."</td><td>".$str["content"]."</td><td>".$str["create_time"]."</td><td><button type=\"button\" onclick=\"deleteServ(".$str["id"].")\" class=\"tf-btn\">Sil</button></td><tr>";
                }
                $sonuc .= "</tbody></table>";
                echo $sonuc;
};break;
            case "rS":{
                $hd = trim(@$_POST["hd"]);
                $hk = trim(@$_POST["hk"]);
                if($hd != "" && $hd != "") {
                    if($db->query("UPDATE page_setting_table SET desciription = '$hd', keywords = '$hk' WHERE id = 2")) {
                        echo "yes";
                    }
                    else {
                        echo "no";
                    }
                }
                else {
                    echo "no";
                }
};break;
            case "dS":{
                $id = intval($_POST["id"]);
                if($db->query("DELETE FROM services_table WHERE id = $id")) {
                    echo "yes";
                }
                else {
                    echo "no";
                }
};break;
            case "cP":{
                $g = $db->query("SELECT * FROM page_setting_table WHERE id = 3")->fetch();
                $sonuc = null;
                $sonuc .= "Desciription / Sayfa Açıklaması<br /><input type=\"text\" value=\"".$g["desciription"]."\" class=\"tf-input\" id=\"hd\" /><br /><br />Keywords / Sayfa Anahtar Kelimeleri<br /><input type=\"text\" value=\"".$g["keywords"]."\" class=\"tf-input\" id=\"hk\" /><br /><br /><button type=\"button\" class=\"tf-btn tf-btn-green pull-right\" onclick=\"changeProj()\">Güncelle</button>";
                global $db;
                $sonuc .= "<br /><br /><br /><h3 class=\"text-left d-g-c\">Varolan Projelerimiz</h3><button type=\"button\" class=\"tf-btn tf-btn-green pull-right\" onclick=\"addProjectPage()\">Proje Ekle</button><table class=\"table\"><thead><tr><th>Adı</th><th>İçeriği</th><th>Oluşturma Tarihi</th><th>Sil</th></tr></head><tbody>";
                foreach($db->query("SELECT * FROM project_table ORDER BY id DESC") as $str) {
                    $sonuc .= "<tr id=\"".$str["id"]."\"><td>".$str["title"]."</td><td>".$str["content"]."</td><td>".$str["create_time"]."</td><td><button type=\"button\" onclick=\"deleteProj(".$str["id"].")\" class=\"tf-btn\">Sil</button></td><tr>";
                }
                $sonuc .= "</tbody></table>";
                echo $sonuc;
};break;
            case "rP":{
                $hd = trim(@$_POST["hd"]);
                $hk = trim(@$_POST["hk"]);
                if($hd != "" && $hd != "") {
                    if($db->query("UPDATE page_setting_table SET desciription = '$hd', keywords = '$hk' WHERE id = 3")) {
                        echo "yes";
                    }
                    else {
                        echo "no";
                    }
                }
                else {
                    echo "no";
                }
};break;
            case "dP":{
                $id = intval($_POST["id"]);
                if($db->query("DELETE FROM project_table WHERE id = $id")) {
                    echo "yes";
                }
                else {
                    echo "no";
                }
};break; 
            case "cA":{
                $g = $db->query("SELECT * FROM page_setting_table WHERE id = 4")->fetch();
                $sonuc = null;
                $sonuc .= "Desciription / Sayfa Açıklaması<br /><input type=\"text\" value=\"".$g["desciription"]."\" class=\"tf-input\" id=\"hd\" /><br /><br />Keywords / Sayfa Anahtar Kelimeleri<br /><input type=\"text\" value=\"".$g["keywords"]."\" class=\"tf-input\" id=\"hk\" /><br /><br /><button type=\"button\" class=\"tf-btn tf-btn-green pull-right\" onclick=\"changeAbout()\">Güncelle</button><br /><br /><br /><h3 class=\"text-left d-g-c\">Kurumu Anlatan Bir Resim</h3><img src=\"../kit/about/hakkimizda.jpg\" class=\"img-responsive\" /><br /><button class=\"tf-btn pull-right\" onclick=\"imgInfoChanger()\" type=\"button\" id=\"img-change-btn\">Değiştir</button><div id=\"img-info\"></div><br /><br /><h3 class=\"text-left d-g-c\">Kurumu Anlatan Bir Yazı</h3>";
                $g = $db->query("SELECT info FROM system_table")->fetchColumn();
                $sonuc .= "<textarea id=  \"infoTA\" class=\"tf-textarea\" style=\"height: 500px\">".$g."</textarea><br /><br /><button onclick=\"changeInfo()\" class=\"tf-btn tf-btn-green pull-right\" type=\"button\">Güncelle</button><br />";
                echo $sonuc;
};break;
            case "rA":{
                $hd = trim(@$_POST["hd"]);
                $hk = trim(@$_POST["hk"]);
                if($hd != "" && $hd != "") {
                    if($db->query("UPDATE page_setting_table SET desciription = '$hd', keywords = '$hk' WHERE id = 4")) {
                        echo "yes";
                    }
                    else {
                        echo "no";
                    }
                }
                else {
                    echo "no";
                }
};break;
            case "cI":{
                $info = trim(@$_POST["info"]);
                if($info != "") {
                    if($db->query("UPDATE system_table SET info = '$info'")) {
                        echo "yes";
                    }
                    else {
                        echo "no";
                    }
                }
                else {
                    echo "no";
                }
};break;
            case "cAI":{
            	echo "<meta charset=\"utf-8\" />";
                if(isset($_FILES["file"])) {
                    unlink("../kit/about/hakkimizda.jpg");
                    $nn = "hakkimizda";
                    $file = "../kit/about/".$nn.".jpg";
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
                        echo "Resim Değiştirildi";
                        echo "<script>setTimeout(function() {window.location.assign(\"dashboard.php\")},2500)<script>";
                    }
                    else {
                        echo "Resim Değiştirilemedi";
                        echo "<script>setTimeout(function() {window.location.assign(\"dashboard.php\")},2500)<script>";
                    }
                }
                else {
                    echo "Resim Şecilmeli";
                    echo "<script>setTimeout(function() {window.location.assign(\"dashboard.php\")},2500)<script>";
                }
};break;
            case "addS":{
            	echo "<meta charset=\"utf-8\" />";
                if(isset($_FILES["si"])) {
                    $st = trim(@$_POST["st"]);
                    $sc = trim(@$_POST["sc"]);
                    if($st != "" && $sc != "") {
                        $date = date("Y-m-d H:i:s");
                        if($db->query("INSERT INTO services_table (title, content, create_time) VALUES ('$st','$sc','".$date."')")) {
                            $id = $db->lastInsertId();
                            $file = "../kit/services/".$id.".jpg";
                            if(move_uploaded_file($_FILES["si"]["tmp_name"], $file)) {
                                echo "Resim Yüklendi Kayıt Yapıldı";
                                echo "<script>setTimeout(function() {window.location.assign(\"dashboard.php\")},2500)</script>";
                            }
                            else {
                                echo "Resim  Yüklenemedi";
                                echo "<script>setTimeout(function() {window.location.assign(\"dashboard.php\")},2500)</script>";
                            }
                        }
                        else {
                            echo "Veritabanı ile alakalı bir sorun yaşanıyor";
                            echo "<script>setTimeout(function(){window.location.assign(\"dashboard.php\")},2500)</script>";
                        }
                    }
                    else {
                        echo "Hizmet Başlığı ve/veya İçeriği boş bırakılmamalı";
                        echo "<script>setTimeout(function() {window.location.assign(\"dashboard.php\")},2500)</script>";
                    }
                }
                else {
                    echo "Resim Seçilmeli";
                    echo "<script>setTimeout(function() {window.location.assign(\"dashboard.php\")},2500)</script>";
                }
};break;
            case "addP":{
            	echo "<meta charset=\"utf-8\" />";
                if(isset($_FILES["si"])) {
                    $st = trim(@$_POST["st"]);
                    $sc = trim(@$_POST["sc"]);
                    if($st != "" && $sc != "") {
                        $date = date("Y-m-d H:i:s");
                        if($db->query("INSERT INTO project_table (title, content, create_time) VALUES ('$st','$sc','".$date."')")) {
                            $id = $db->lastInsertId();
                            $file = "../kit/projects/".$id.".jpg";
                            if(move_uploaded_file($_FILES["si"]["tmp_name"], $file)) {
                                echo "Resim Yüklendi Kayıt Yapıldı";
                                echo "<script>setTimeout(function() {window.location.assign(\"dashboard.php\")},2500)</script>";
                            }
                            else {
                                echo "Resim  Yüklenemedi";
                                echo "<script>setTimeout(function() {window.location.assign(\"dashboard.php\")},2500)</script>";
                            }
                        }
                        else {
                            echo "Veritabanı ile alakalı bir sorun yaşanıyor";
                            echo "<script>setTimeout(function(){window.location.assign(\"dashboard.php\")},2500)</script>";
                        }
                    }
                    else {
                        echo "Proje Başlığı ve/veya İçeriği boş bırakılmamalı";
                        echo "<script>setTimeout(function() {window.location.assign(\"dashboard.php\")},2500)</script>";
                    }
                }
                else {
                    echo "Resim Seçilmeli";
                    echo "<script>setTimeout(function() {window.location.assign(\"dashboard.php\")},2500)</script>";
                }
};break;
            case "cAbout":{
                $g = $db->query("SELECT * FROM page_setting_table WHERE id = 5")->fetch();
                $sonuc = null;
                $sonuc .= "Desciription / Sayfa Açıklaması<br /><input type=\"text\" value=\"".$g["desciription"]."\" class=\"tf-input\" id=\"hd\" /><br /><br />Keywords / Sayfa Anahtar Kelimeleri<br /><input type=\"text\" value=\"".$g["keywords"]."\" class=\"tf-input\" id=\"hk\" /><br /><br /><button type=\"button\" class=\"tf-btn tf-btn-green pull-right\" onclick=\"changeAboutI()\">Güncelle</button><br /><br /><h3 class=\"text-left d-g-c\">İletişim Bilgileri</h3><br />";
                $g = $db->query("SELECT * FROM system_table")->fetch();
                $sonuc .= "İletişim Adresi<br /><input type=\"text\" id=\"ca\" class=\"tf-input\" value=\"".$g["adres"]."\"  /><br /><br />İletişim Telefonu<br /><input type=\"text\" id=\"ct\" class=\"tf-input\" value=\"".$g["tel"]."\"  /><br /><br />İletişim E-Postası<br /><input type=\"text\" id=\"ce\" class=\"tf-input\" value=\"".$g["eposta"]."\"  /><br /><br /><button type=\"button\" class=\"tf-btn tf-btn-green pull-right\" onclick=\"changeBus()\">Güncelle</button>";
                echo $sonuc;
};break;
            case "rAbout":{
                $hd = trim(@$_POST["hd"]);
                $hk = trim(@$_POST["hk"]);
                if($hd != "" && $hd != "") {
                    if($db->query("UPDATE page_setting_table SET desciription = '$hd', keywords = '$hk' WHERE id = 5")) {
                        echo "yes";
                    }
                    else {
                        echo "no";
                    }
                }
                else {
                    echo "no";
                }
};break;
            case "changeBus":{
                $ca = trim(@$_POST["ca"]);
                $ct = trim(@$_POST["ct"]);
                $ce = trim(@$_POST["ce"]);
                if($ca != "" && $ct != "" && $ce != "") {
                    if($db->query("UPDATE system_table SET adres='$ca', tel='$ct', eposta='$ce'")) {
                        echo "yes";
                    }
                    else {
                        echo "no";
                    }
                }
                else {
                    echo "no";
                }
};break;
            case "msgs":{
                global $db;
                $sonuc = "<table class=\"table\"><thead><tr><th>Adı Soyadı</th><th>E-Postası</th><th>Mesajı</th><th>Gönderme Tarihi</th><th>Sil</th></tr></thead><tbody>";
                foreach($db->query("SELECT * FROM contact_table") as $str) {
                    $sonuc .= "<tr id=\"".$str["id"]."\"><td>".$str["name"]."</td><td>".$str["eposta"]."</td><td>".$str["message"]."</td><td>".$str["create_time"]."</td><td><button class=\"tf-btn\" type=\"button\" onclick=\"deleteMsg(".$str["id"].")\">Sil</button></td></tr>";
                }
                $sonuc .= "</tbody></table>";
                echo $sonuc;
};break;
            case "dMsg":{
                $id = intval($_POST["id"]);
                if($db->query("DELETE FROM contact_table WHERE id = $id")) {
                    echo "yes";
                }
                else {
                    echo "no";
                }
};break;
            case "getSystem":{
                $g = $db->query("SELECT * FROM system_table")->fetch();
                echo "<form id=\"sysForm\">Admin Kullanıcı adı<br />
                <input value=\"".$g["admin_user"]."\" type=\"text\" class=\"tf-input\" name=\"au\" /><br /><br />Admin Parolası<br />
                <input value=\"".$g["admin_password"]."\" type=\"text\" class=\"tf-input\" name=\"ap\" /><br /><br />Facebook Adresi (/' dan sonrası)<br />
                <input value=\"".$g["facebook"]."\" type=\"text\" class=\"tf-input\" name=\"fba\" /><br /><br />Twitter Adresi (/' dan sonrası)<br />
                <input value=\"".$g["twitter"]."\" type=\"text\" class=\"tf-input\" name=\"twa\" /><br /><br />Pinteres Adresi (/' dan sonrası)<br />
                <input value=\"".$g["pinterest"]."\" type=\"text\" class=\"tf-input\" name=\"pta\" /><br /><br />Google+ Adresi (/' dan sonrası)<br />
                <input value=\"".$g["google_maps"]."\" type=\"text\" class=\"tf-input\" name=\"gpa\" /><br /><br />Google Maps Eklemesi (Google Maps Kordinatları yani 41.123546,39.5463546) gibi olan<br />
                <input type=\"text\" value=\"".$g["google_maps"]."\" class=\"tf-input\" name=\"gme\" /><br /><br />Slogan <br />
                <input type=\"text\" value=\"".$g["slogan"]."\" class=\"tf-input\" name=\"s\" /><br /><br />Kuruluş Adı<br />
                <input value=\"".$g["company_name"]."\" type=\"text\" class=\"tf-input\" name=\"cn\" /><br /><br />Google Site Verification İçeriği (meta'da content olan)<br />
                <input value=\"".$g["google_site_verification"]."\" type=\"text\" class=\"tf-input\" name=\"gsv\" /><br /><br />Copyright Yazısı<br />
                <input value=\"".$g["copyright"]."\" type=\"text\" class=\"tf-input\" name=\"cp\" /><br /><br />
                <button type=\"button\" onclick=\"updateSystem()\" class=\"tf-btn tf-btn-green pull-right\">Güncelle</button></form>";
};break;
            case "updateSystem":{
                $au = trim($_POST["au"]);
                $ap = trim($_POST["ap"]);
                $fba = trim($_POST["fba"]);
                $twa = trim($_POST["twa"]);
                $pta = trim($_POST["pta"]);
                $gpa = trim($_POST["gpa"]);
                $gme = trim($_POST["gme"]);
                $cn = trim($_POST["cn"]);
                $gsv = trim($_POST["gsv"]);
                $cp = trim($_POST["cp"]);
                $s = trim($_POST["s"]);
                if($au != "" && $ap != "" && $fba != "" && $twa != "" && $pta != "" && $gpa != "" && $gme != "" && $cn != "" && $gsv != "") {
                    if($db->query("UPDATE system_table SET admin_user='$au',admin_password='$ap',facebook='$fba',twitter='$twa',pinterest='$pta',google_plus='$gpa',google_maps='$gme',company_name='$cn',google_site_verification='$gsv', copyright='$cp', slogan='$s'")) {
                        echo "yes";
                    }
                    else {
                        echo "no";
                    }
                }
                else {
                    echo "no";
                }
};break;
            case "deleteSlider":{
                $id = intval(@$_POST["id"]);
                if($id != 0) {
                    if($db->query("DELETE FROM slider_table WHERE id = $id")) {
                        unlink("../kit/slider/$id.jpg");
                        echo "yes";
                    }
                    else {
                        echo "no";
                    }
                }
                else {
                    echo "no";
                }
            };break;
            case "addSlider":{
            	echo "<meta charset=\"utf-8\" />";
                if(isset($_FILES["img"])) {
                    $date = date("Y-m-d H:i:s");
                    if($db->query("INSERT INTO slider_table (create_time) VALUES ('".$date."')")) {
                        $id = $db->lastInsertId();
                        $file = "../kit/slider/".$id.".jpg";
                        if(move_uploaded_file($_FILES["img"]["tmp_name"], $file)) {
                            echo "Resim Yüklendi Kayıt Yapıldı";
                            echo "<script>setTimeout(function() {window.location.assign(\"dashboard.php\")},2500)</script>";
                        }
                        else {
                            echo "Resim  Yüklenemedi";
                            echo "<script>setTimeout(function() {window.location.assign(\"dashboard.php\")},2500)</script>";
                        }
                    }
                    else {
                        echo "Veritabanı ile alakalı bir sorun yaşanıyor";
                        echo "<script>setTimeout(function(){window.location.assign(\"dashboard.php\")},2500)</script>";
                    }
                }
                else {
                    echo "Resim Seçilmemiş";
                        echo "<script>setTimeout(function(){window.location.assign(\"dashboard.php\")},2500)</script>";
                }
            };break;
            case "cikis":{
                session_start();
                session_destroy();
                header("Location: index.php");
            };break;
        }
    }
}
?>