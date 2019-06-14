<?php
date_default_timezone_set("Europe/Istanbul");
include("dbManager.php");

$ns = @$_POST["ns"];
$ep = @$_POST["ep"];
$msg = @$_POST["msg"];
if(trim($ns) != "" && trim($ep) != "" && trim($msg) != "") {
    if(filter_var($ep, FILTER_VALIDATE_EMAIL)) {
        $dt = date("Y-m-d H:i:s");
        if($db->query("INSERT INTO contact_table (name, eposta, message, create_time) VALUES ('$ns','$ep','$msg','$dt')")) {
            echo "yes";
        }
        else {
            echo "no";
        }
    }
    else {
        echo "ep";
    }
}
else {
    echo "null";
}

?>