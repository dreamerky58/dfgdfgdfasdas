<?php

$jsn = ["mysql","mysql.hostinger.web.tr","u793707534_vt","u793707534_vt","147258369"];

# TRY Database Connection
try {
    $db = new PDO($jsn[0].":host=".$jsn[1].";dbname=".$jsn[2], $jsn[3], $jsn[4]);
    if($db) {
        $db->query("SET NAMES UTF8");
    }
}
catch(PDOException $e) {
    echo "HATA: " + $e->getMessage();
}

?>