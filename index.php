<?php require_once('static/header.php') ?>

<div class="container col-3 mt-5">
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="exampleInputUserName1">Kullanıcı Adı</label>
            <input name="username" type="text" value="<?= isset($_COOKIE["member_username"]) ? $_COOKIE["member_username"] : "" ?>" class="form-control" id="exampleInputUserName1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Şifre</label>
            <input name="pass" type="password" value="<?= isset($_COOKIE["member_password"]) ? $_COOKIE["member_password"] : "" ?>" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
            <input name="remember" type="checkbox" <?php if (isset($_COOKIE["member_username"])) { ?> checked <?php } ?> class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
        </div>
        <button type="submit" class="btn btn-primary">Giriş Yap</button>
    </form>
</div>

<?php require_once('static/footer.php') ?>