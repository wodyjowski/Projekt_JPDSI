<?php /* Smarty version 3.1.27, created on 2017-05-21 21:38:30
         compiled from "C:\xampp\htdocs\Projekt_JPDSI\app\home\Home.html" */ ?>
<?php
/*%%SmartyHeaderCode:161835921ecb6d0db48_94687034%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9d3ca35eeb181fd6e49a56fafddd0ee959c2f8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_JPDSI\\app\\home\\Home.html',
      1 => 1495391131,
      2 => 'file',
    ),
    '0ec36aa128b2b57f2582113b88167535e2b9e320' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_JPDSI\\templates\\main.html',
      1 => 1495395507,
      2 => 'file',
    ),
    'baeaa3fafc3b2e6c680f3fa56f351e509f054dd0' => 
    array (
      0 => 'baeaa3fafc3b2e6c680f3fa56f351e509f054dd0',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '161835921ecb6d0db48_94687034',
  'variables' => 
  array (
    'conf' => 0,
    'user' => 0,
    'mainTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5921ecb6d85933_88057590',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5921ecb6d85933_88057590')) {
function content_5921ecb6d85933_88057590 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '161835921ecb6d0db48_94687034';
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
            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home">Projekt_JPDSI</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
                <?php if (!isset($_smarty_tpl->tpl_vars['user']->value) || !$_smarty_tpl->tpl_vars['user']->value->areValues()) {?>
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
                <?php } else { ?>
            <div class="navbar-form navbar-right">
                <a href="" class="btn btn-primary">  Witaj <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
.</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="btn btn-danger">Wyloguj</a>
            </div>
                <?php }?>
        </div><!--/.navbar-collapse -->
    </div>
</nav>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1><?php echo $_smarty_tpl->tpl_vars['mainTitle']->value;?>
</h1>
    </div>
</div>


<div class="container">

    <!-- POSTS -->
    <?php
$_smarty_tpl->properties['nocache_hash'] = '161835921ecb6d0db48_94687034';
?>


<?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['p']->value["title"];?>
</h3>
            </div>
            <div class="panel-body">
                <p><?php echo $_smarty_tpl->tpl_vars['p']->value["content"];?>
</p>
                <button class="btn btn-primary">Więcej...</button>
            </div>
        </div>
    </div>
</div>
<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>





    <hr>

    <footer>
        <p>&copy; 2017 Michał Kisiel</p>
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
?>