<?php /* Smarty version 3.1.27, created on 2017-05-22 23:26:24
         compiled from "C:\xampp\htdocs\Projekt_JPDSI\app\login\LoginView.html" */ ?>
<?php
/*%%SmartyHeaderCode:1396159235780d5c9f2_98596009%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ecd4fcd3379dbef9feb5bc3604db51c2fb5132b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_JPDSI\\app\\login\\LoginView.html',
      1 => 1495488382,
      2 => 'file',
    ),
    '0ec36aa128b2b57f2582113b88167535e2b9e320' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_JPDSI\\templates\\main.html',
      1 => 1495487418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1396159235780d5c9f2_98596009',
  'variables' => 
  array (
    'conf' => 0,
    'user' => 0,
    'mainTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59235780dc8e27_82836587',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59235780dc8e27_82836587')) {
function content_59235780dc8e27_82836587 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1396159235780d5c9f2_98596009';
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="description" content="Projekt zaliczeniowy JPDSI">
    <meta name="author" content="Michał Kisiel">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/favicon-16x16.png">
    <title>Projekt_JPDSI</title>


    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom style -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
home">Projekt_JPDSI</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
            <div class="navbar-form navbar-right">
                <a href="" class="btn btn-primary"> Witaj <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logoutAction" class="btn btn-danger">Wyloguj</a>
            </div>
            <?php } else { ?>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
loginAction" method="post" class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Login" class="form-control" name="login">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Hasło" class="form-control" name="pass">
                </div>
                <button type="submit" class="btn btn-success">Zaloguj</button>
            </form>
            <?php }?>
        </div><!--/.navbar-collapse -->
    </div>
</nav>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <?php if (isset($_smarty_tpl->tpl_vars['mainTitle']->value)) {?>
        <h1><?php echo $_smarty_tpl->tpl_vars['mainTitle']->value;?>
</h1>
        <?php } else { ?>
        <h1>default</h1>
        <?php }?>
    </div>
</div>


<div class="container">

    <!-- POSTS -->
     


</div> <!-- /container -->
<div class="container">

    <hr>
    <footer>
        <p>&copy; 2017 Michał Kisiel</p>
    </footer>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
?>