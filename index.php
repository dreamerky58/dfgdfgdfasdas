<?php
include("fn/dbManager.php");
$page = @$_GET["page"];
$gsv = $db->query("SELECT google_site_verification FROM system_table")->fetchColumn();
function getMeta($x) {
    $x = intval($x);
    $snc = null;
    global $db;
    foreach($db->query("SELECT * FROM page_setting_table WHERE id = $x") as $str) {
        $snc .= "<meta name=\"desciription\" content=\"".$str["desciription"]."\" /><meta name=\"keywords\" content=\"".$str["keywords"]."\" />";
    }
    return $snc;
}
$c_n = $db->query("SELECT company_name FROM system_table")->fetchColumn();
?>
<!DOCTYPE html>
<html lang="tr">
  	<head>
	    <meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
	    <?php 
        switch($page) {
            case "hizmetlerimiz":{
                echo "<title>".$c_n." | Hizmetlerimiz</title>";
                echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=uft-8\" />";
                echo "<meta name=\"google-site-verification\" content=\"".$gsv."\">";
                echo "<meta http-equiv=\"Content-Language\" content=\"tr\" />";
                echo "<meta http-equiv=\"Expires\" content=\"-1\" />";
                echo "<meta http-equiv=\"Cahhe-Control\" content=\"no-cache\" />";
                echo "<meta http-equiv=\"Pragma\" content=\"no-cache\" />";
                echo "<meta name=\"Title\" content=\"".$c_n." | Hizmetlerimiz\" />";
                echo getMeta(2);
                echo "<meta name=\"robots\" content=\"noindex, follow\" />";
                echo "<meta name=\"generator\" content=\"ARICPRESS, EmreBALCI\" />";
            };break;
            case "projelerimiz":{
                echo "<title>".$c_n." | Projelerimiz</title>";
                echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=uft-8\" />";
                echo "<meta name=\"google-site-verification\" content=\"".$gsv."\">";
                echo "<meta http-equiv=\"Content-Language\" content=\"tr\" />";
                echo "<meta http-equiv=\"Expires\" content=\"-1\" />";
                echo "<meta http-equiv=\"Cahhe-Control\" content=\"no-cache\" />";
                echo "<meta http-equiv=\"Pragma\" content=\"no-cache\" />";
                echo "<meta name=\"Title\" content=\"".$c_n." | Projelerimiz\" />";
                echo getMeta(3);
                echo "<meta name=\"robots\" content=\"noindex, follow\" />";
                echo "<meta name=\"generator\" content=\"ARICPRESS, EmreBALCI\" />";
            };break;
            case "hakkimizda":{
                echo "<title>".$c_n." | Hakkımızda</title>";
                echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=uft-8\" />";
                echo "<meta name=\"google-site-verification\" content=\"".$gsv."\">";
                echo "<meta http-equiv=\"Content-Language\" content=\"tr\" />";
                echo "<meta http-equiv=\"Expires\" content=\"-1\" />";
                echo "<meta http-equiv=\"Cahhe-Control\" content=\"no-cache\" />";
                echo "<meta http-equiv=\"Pragma\" content=\"no-cache\" />";
                echo "<meta name=\"Title\" content=\"".$c_n." | Hakkımızda\" />";
                echo getMeta(4);
                echo "<meta name=\"robots\" content=\"noindex, follow\" />";
                echo "<meta name=\"generator\" content=\"ARICPRESS, EmreBALCI\" />";
            };break;
            case "iletisim":{
                echo "<title>".$c_n." | İletişim</title>";
                echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=uft-8\" />";
                echo "<meta name=\"google-site-verification\" content=\"".$gsv."\">";
                echo "<meta http-equiv=\"Content-Language\" content=\"tr\" />";
                echo "<meta http-equiv=\"Expires\" content=\"-1\" />";
                echo "<meta http-equiv=\"Cahhe-Control\" content=\"no-cache\" />";
                echo "<meta http-equiv=\"Pragma\" content=\"no-cache\" />";
                echo "<meta name=\"Title\" content=\"".$c_n." | İletişim\" />";
                echo getMeta(5);
                echo "<meta name=\"robots\" content=\"noindex, follow\" />";
                echo "<meta name=\"generator\" content=\"ARICPRESS, EmreBALCI\" />";
            };break;
            case null:{
                echo "<title>".$c_n." | Hoşgeldiniz</title>";
                echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=uft-8\" />";
                echo "<meta name=\"google-site-verification\" content=\"".$gsv."\">";
                echo "<meta http-equiv=\"Content-Language\" content=\"tr\" />";
                echo "<meta http-equiv=\"Expires\" content=\"-1\" />";
                echo "<meta http-equiv=\"Cahhe-Control\" content=\"no-cache\" />";
                echo "<meta http-equiv=\"Pragma\" content=\"no-cache\" />";
                echo "<meta name=\"Title\" content=\"".$c_n." | Hoşgeldiniz\" />";
                echo getMeta(1);
                echo "<meta name=\"robots\" content=\"index, follow\" />";
                echo "<meta name=\"generator\" content=\"ARICPRESS, EmreBALCI\" />";
            };break;
            default:{
                echo "<title>".$c_n." | Hata</title>";
                echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=uft-8\" />";
                echo "<meta name=\"google-site-verification\" content=\"".$gsv."\">";
                echo "<meta name=\"desciription\" content=\"Hata Sayfası\" />";
                echo "<meta http-equiv=\"Content-Language\" content=\"tr\" />";
                echo "<meta http-equiv=\"Expires\" content=\"-1\" />";
                echo "<meta http-equiv=\"Cahhe-Control\" content=\"no-cache\" />";
                echo "<meta http-equiv=\"Pragma\" content=\"no-cache\" />";
                echo "<meta name=\"Title\" content=\"".$c_n." | Hata\" />";
                echo "<meta name=\"robots\" content=\"noindex, follow\" />";
                echo "<meta name=\"generator\" content=\"ARICPRESS, EmreBALCI\" />";
            };break;
        };
        ?>
	    <link href="css/bootstrap.min.css" rel="stylesheet" />
	    <link href="css/framework.min.css" rel="stylesheet" />
        <link rel="icon" href="kit/other/icon.png" />
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
  	</head>
    <body>
        <?php 
        include("top.php");
        switch($page) {
            case "hizmetlerimiz":{
                include("fn/page-inset/services.inset.php");
            };break;
            case "projelerimiz":{
                include("fn/page-inset/projects.inset.php");
            };break;
            case "hakkimizda":{
                include("fn/page-inset/about.inset.php");
            };break;
            case "iletisim":{
                include("fn/page-inset/contact.inset.php");
            };break;
            case null:{
                include("fn/page-inset/index.inset.php");
            };break;
            default:{
                include("fn/page-inset/error.inset.php");
            };break;
        };
        include("bottom.php");
        ?>
    </body>
</html>