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
        body{background-color: rgba(25,95,255,0.8)}.no-padding{padding: 0px}#loginWindow{background-color: rgba(255,255,255,0.8);border-radius: 10px;}.color-green{color: rgb(25,175,95)}.baslik{padding:10px 0px}</style>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript">
    $(function() {});
    </script>
</head>
<body>
    <div class="nav no-padding">
        <div class="container no-padding">
            <br /><br />
            <center><img src="../kit/other/logo.png" /></center>
            <div class="col-xs-11 col-sm-8 col-md-6 col-lg-4 pull-center" id="loginWindow">
                <h3 class="text-center color-green baslik">Admin Girişi</h3>
                <form method="post" action="secureLogin.php">
                    <input type="text" autocomplete="off" placeholder="Admin Kullanıcı adı" class="tf-input" name="au" />
                    <br />
                    <br />
                    <input type="password" autocomplete="off" placeholder="Admin Parolası" class="tf-input" name="ap" />
                    <br />
                    <br />
                    <button type="submit" class="tf-btn tf-btn-green pull-center" style="display:block;width: 100% ">Giriş Yap</button>
                    <br />
                </form>
            </div>
            <div class="nav text-center ud-g-c" style="margin-top: 10px">Powered By ARICPRESS SYSTEMS - &copy; 2016</div>
        </div>
    </div>
</body>
</html>