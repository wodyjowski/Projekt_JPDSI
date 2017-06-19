<?php /* Smarty version 3.1.27, created on 2017-06-19 23:16:44
         compiled from "C:\xampp\htdocs\Projekt_JPDSI\app\home\Home.html" */ ?>
<?php
/*%%SmartyHeaderCode:2199059483f3c8e6880_72620438%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9d3ca35eeb181fd6e49a56fafddd0ee959c2f8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_JPDSI\\app\\home\\Home.html',
      1 => 1497901935,
      2 => 'file',
    ),
    '0ec36aa128b2b57f2582113b88167535e2b9e320' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_JPDSI\\templates\\main.html',
      1 => 1497906629,
      2 => 'file',
    ),
    '9e5fa38387cd899667620258aad44e15b0b17d0d' => 
    array (
      0 => '9e5fa38387cd899667620258aad44e15b0b17d0d',
      1 => 0,
      2 => 'string',
    ),
    '0a6f669f75cbc69d78517140f8abb88b92333f80' => 
    array (
      0 => '0a6f669f75cbc69d78517140f8abb88b92333f80',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2199059483f3c8e6880_72620438',
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
  'unifunc' => 'content_59483f3c9c5ac6_90476189',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59483f3c9c5ac6_90476189')) {
function content_59483f3c9c5ac6_90476189 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_escape')) require_once 'C:\\xampp\\htdocs\\Projekt_JPDSI\\lib\\smarty\\plugins\\modifier.escape.php';

$_smarty_tpl->properties['nocache_hash'] = '2199059483f3c8e6880_72620438';
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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/simditor.css" />

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
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showProfile" class="btn btn-primary ">
                    <img  class="profilePicSmall" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/data/<?php echo $_smarty_tpl->tpl_vars['user']->value["img"];?>
">
                   <?php echo $_smarty_tpl->tpl_vars['user']->value["username"];?>
 <span class="badge"></span></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logoutAction" class="btn btn-danger">Wyloguj</a>
            </div>
            <?php } else { ?>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
loginAction" method="post" class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Login" class="form-control" name="login" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Hasło" class="form-control" name="pass">
                </div>
                <button type="submit" class="btn btn-login">Zaloguj</button>
            </form>
            <?php }?>
        </div>
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


<!-- ALERTS -->

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
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
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
$_smarty_tpl->properties['nocache_hash'] = '2199059483f3c8e6880_72620438';
?>


<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
createPost" method="post">

    <div class="panel panel-default">
        <div class="panel-heading">
            <input type="text" placeholder="Tytuł" class="form-control" name="title" autocomplete="off"  pattern="{1,40}"   <?php if (isset($_smarty_tpl->tpl_vars['form']->value->title)) {?>  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->title;?>
" <?php }?> >
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="fr-view">
                <textarea id="editor" type="textarea" placeholder="Treść" class="form-control" name="content" autocomplete="off"  pattern="{1,}" > <?php if (isset($_smarty_tpl->tpl_vars['form']->value->content)) {?>  <?php echo $_smarty_tpl->tpl_vars['form']->value->content;?>
 <?php }?>  </textarea>
                </div>
            </div>

            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-login">Opublikuj</button>
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

<div id="postList">

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
    <div class="col-md-12 custom">
        <div class="panel panel-default panel-post masthead">
            <div class="panel-heading ">

                <div class="dropdown pull-right">
                    <a class="btn btn-nice btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value["username"], ENT_QUOTES, 'UTF-8', true);?>

                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Profil użytkownika</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['p']->value["username"] == $_smarty_tpl->tpl_vars['user']->value) {?>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Edytuj post</a></li>
                        <li><a href="#">Usuń post</a></li>
                        </form>
                        <?php }?>
                    </ul>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['p']->value["title"];?>

            </div>
            <div class="panel-body">
                <p><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value["content"], 'javascrpit');?>
</p>
                <a href="#" class="btn btn-nice btn-sm pull-right" onclick="postID('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
commentView','<?php echo $_smarty_tpl->tpl_vars['p']->value["postID"];?>
')">Komentarze</a>
            </div>
        </div>
    </div>

<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
</div>

<div class="row text-center">
<div id="loading"  hidden>  <button class="btn btn-default btn-lg"><i class="fa fa-circle-o-notch fa-spin"></i> Loading</button> </div>
</div>




</div> <!-- /container -->
<div class="container">

    <hr>
    <footer>
        <p>&copy; 2017 Michał Kisiel</p>
    </footer>
</div>


<!-- ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- Include Editor style. -->

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2199059483f3c8e6880_72620438';
?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/module.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/hotkeys.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/uploader.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/simditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/mobilecheck.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    prepareView('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
');
<?php echo '</script'; ?>
>



</body>

</html>
<?php }
}
?>