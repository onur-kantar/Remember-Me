<?php require_once('static/header.php') ?>
<?php
$myUsername = "admin";
$myPass = "123456";

$username = isset($_POST['username']) ? $_POST['username'] : null;
$pass = isset($_POST['pass']) ? $_POST['pass'] : null;
$remember = isset($_POST['remember']) ? $_POST['remember'] : null;

if ($myUsername == $username && $myPass == $pass) {

    $Text = "Hoşgeldin " . $username;
    $Button = "Çıkış Yap ";

    if (isset($remember)) {
        setcookie("member_username", $_POST["username"], time() + (10 * 365 * 24 * 60 * 60));
        setcookie("member_password", $_POST["pass"], time() + (10 * 365 * 24 * 60 * 60));
    } else {
        setcookie("member_username", "");
        setcookie("member_password", "");
    }
} else {
    $Text = "Yanlış Kullanıcı Adı ve Şifre ";
    $Button = "Geri Dön";
}
?>

<div class="container col-3 mt-5">
    <h5 for="exampleInputUserName1"> <?= $Text ?> </h5>
    <a href="index.php" type="button" class="btn btn-danger"><?= $Button ?></a>
</div>



<?php require_once('static/footer.php') ?>