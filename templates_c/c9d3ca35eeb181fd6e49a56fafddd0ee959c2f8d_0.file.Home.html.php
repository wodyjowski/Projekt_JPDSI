<?php /* Smarty version 3.1.27, created on 2017-05-16 23:41:38
         compiled from "C:\xampp\htdocs\Projekt_JPDSI\app\home\Home.html" */ ?>
<?php
/*%%SmartyHeaderCode:18707591b721217b828_56754298%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9d3ca35eeb181fd6e49a56fafddd0ee959c2f8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_JPDSI\\app\\home\\Home.html',
      1 => 1494970471,
      2 => 'file',
    ),
    '0ec36aa128b2b57f2582113b88167535e2b9e320' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_JPDSI\\templates\\main.html',
      1 => 1494970896,
      2 => 'file',
    ),
    '84c67b8c389049dc2a2132ae20ffd87b817fd5dc' => 
    array (
      0 => '84c67b8c389049dc2a2132ae20ffd87b817fd5dc',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '18707591b721217b828_56754298',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_591b72121ec434_62635862',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591b72121ec434_62635862')) {
function content_591b72121ec434_62635862 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18707591b721217b828_56754298';
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
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a
            jumbotron and three supporting pieces of content. Use it as a starting point to create something more
            unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
$_smarty_tpl->properties['nocache_hash'] = '18707591b721217b828_56754298';
?>


<div>
    <h1>Home page</h1>
</div>


        </div>
    </div>

    <hr>

    <footer>
        <p>&copy; 2017 Michał Kisiel</p>
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"><?php echo '</script'; ?>
>

</html>
<?php }
}
?>