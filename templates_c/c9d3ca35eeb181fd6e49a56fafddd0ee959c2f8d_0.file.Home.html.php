<?php /* Smarty version 3.1.27, created on 2017-05-26 20:34:46
         compiled from "C:\xampp\htdocs\Projekt_JPDSI\app\home\Home.html" */ ?>
<?php
/*%%SmartyHeaderCode:2307359287546be7141_93734093%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9d3ca35eeb181fd6e49a56fafddd0ee959c2f8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_JPDSI\\app\\home\\Home.html',
      1 => 1495741124,
      2 => 'file',
    ),
    '0ec36aa128b2b57f2582113b88167535e2b9e320' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_JPDSI\\templates\\main.html',
      1 => 1495823637,
      2 => 'file',
    ),
    '538fd47d0e6e5d4bc1043f2e1b762a4fd0f78463' => 
    array (
      0 => '538fd47d0e6e5d4bc1043f2e1b762a4fd0f78463',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2307359287546be7141_93734093',
  'variables' => 
  array (
    'conf' => 0,
    'user' => 0,
    'mainTitle' => 0,
    'msgs' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59287546d561c6_01524425',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59287546d561c6_01524425')) {
function content_59287546d561c6_01524425 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2307359287546be7141_93734093';
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
<?php
$_from = $_smarty_tpl->tpl_vars['msgs']->value->getMessages();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['msg']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
$foreach_msg_Sav = $_smarty_tpl->tpl_vars['msg'];
?>

<div class="row">
        <div class="alert alert-danger">
                <p><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</p>
    </div>
</div>
<?php
$_smarty_tpl->tpl_vars['msg'] = $foreach_msg_Sav;
}
?>
</div>



<div class="container">

    <!-- CONTENT -->
    <?php
$_smarty_tpl->properties['nocache_hash'] = '2307359287546be7141_93734093';
?>


<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
createPost" method="post" class="">

    <div class="panel panel-default">
        <div class="panel-heading">
            <input type="text" placeholder="Tytuł" class="form-control" name="title">
        </div>
        <div class="panel-body">
            <div class="form-group ">
                <textarea type="textarea" placeholder="Treść" class="form-control" name="content"></textarea>
            </div>

            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-success">Opublikuj</button>
            </div>

        </div>
    </div>

</form>
    <?php } else { ?>
    <div class="row">
        <div class="alert alert-warning">
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" class="alert-link">Zaloguj się</a> lub <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register" class="alert-link">Zarejestruj</a> aby dodawać posty.
        </div>
    </div>


<?php }?>


<?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_p'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_p']->value['index']++;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_p']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_p']->value['index'] : null)%2 == 0) {?>
<div class="row">
    <?php }?>
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value["title"], ENT_QUOTES, 'UTF-8', true);?>
</h3>
            </div>
            <div class="panel-body">
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value["content"], ENT_QUOTES, 'UTF-8', true);?>
</p>
                <button class="btn btn-primary">Więcej...</button>
            </div>
        </div>
    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_p']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_p']->value['index'] : null)%2 == 1) {?>
</div>
<?php }?>
<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>





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