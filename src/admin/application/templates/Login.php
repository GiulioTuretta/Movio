<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php print($docTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css?v=2" />
    <?php print($head); ?>
</head>
<body id="LoginPage">
    <div id="outer">
        <div id="loginbox">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <form id="login" method="post" action="">
                            <img id="logo" src="img/logo/logo-login.png" alt="<?php echo __Config::get('APP_NAME')?>" />
                            <hr class="separator" />
                            <?php if ($error) {?>
                              <div class="alert alert-error"><?php print($error) ?></div>
                            <?php } else {?>
                              <span class="text">Inserisci username e password.</span>
                            <?php }?>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input class="span11" name="loginform_LoginId" type="text" placeholder="Username" />
                            </div>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-lock"></i></span>
                                <input class="span11" name="loginform_Password" type="password" placeholder="Password" />
                            </div>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-asterisk"></i></span>
                                <select id="language" name="loginform_Language" class="span11">
                                    <option value="en">English</option>
                                    <option value="it">Italiano</option>
                                </select>
                            </div>
                            <br />
                            <input type="hidden" name="action" value="login">
                            <input type="submit" id="submit" class="pull-right btn btn-inverse" value="Login" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php print(@$tail); ?>
<script>
if (window.self !== window.top) {
    window.top.location.href = location.href;
}
$(function(){
    var userLang = navigator.language || navigator.userLanguage;
    $('#language').val(userLang.split('-')[0]);
})
</script>
 </body>
</html>