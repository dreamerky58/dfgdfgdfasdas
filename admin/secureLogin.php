<?php
include("../fn/dbManager.php");
if(trim(@$_POST["au"]) != "" && trim(@$_POST["ap"])) {
    $au = $_POST["au"];
    $ap = $_POST["ap"];
    $g = $db->query("SELECT * FROM system_table")->fetch();
    if($au == $g["admin_user"] && $ap == $g["admin_password"]) {
        session_start();
        $_SESSION["admin"] = "okay";
        header("Location: dashboard.php");
    }
    else {
        header("Location: index.php");
    }
}
else {
    header("Location: index.php");
}
?>