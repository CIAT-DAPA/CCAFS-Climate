<?php /* Smarty version Smarty-3.1.11, created on 2013-10-16 18:15:27
         compiled from "D:\DESARROLLO\PHP\xampp\htdocs\CCAFS-Climate\templates\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132525ebb9f3ec276-44598052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d3601ebd902cdeca1dd30f4202aa72ca1672f4d' => 
    array (
      0 => 'D:\\DESARROLLO\\PHP\\xampp\\htdocs\\CCAFS-Climate\\templates\\head.tpl',
      1 => 1366380636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132525ebb9f3ec276-44598052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'pageDescription' => 0,
    'keywords' => 0,
    'jsIncludes' => 0,
    'jsToInclude' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_525ebb9f4aa625_81720701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525ebb9f4aa625_81720701')) {function content_525ebb9f4aa625_81720701($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
    <head profile="http://gmpg.org/xfn/11">
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageTitle']->value)===null||$tmp==='' ? 'CCAFS Climate' : $tmp);?>
</title>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
        <meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageDescription']->value)===null||$tmp==='' ? 'GCM Data Portal' : $tmp);?>
" />
        <meta name="keywords" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['keywords']->value)===null||$tmp==='' ? 'GCM,CIAT' : $tmp);?>
" />
        <meta name="robots" content="index, follow, archive" />
        <meta name="googlebot" content="index" />
        <!-- Stylesheets -->
        <!-- Main -->
        <link rel="stylesheet" type="text/css" href="<?php echo @SMARTY_CSS_URI;?>
/main.css" media="screen" />
        <!-- include specified javascripts -->
        <?php  $_smarty_tpl->tpl_vars['jsToInclude'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jsToInclude']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jsIncludes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jsToInclude']->key => $_smarty_tpl->tpl_vars['jsToInclude']->value){
$_smarty_tpl->tpl_vars['jsToInclude']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['jsToInclude']->value=="jquery"){?>
                <script src="<?php echo @SMARTY_JS_URI;?>
/jquery/jquery-1.8.1.min.js"></script>
            <?php }elseif($_smarty_tpl->tpl_vars['jsToInclude']->value=="index"){?>
                <script src="<?php echo @SMARTY_JS_URI;?>
/index.js"></script>
            <?php }elseif($_smarty_tpl->tpl_vars['jsToInclude']->value=="downscaling"){?>
                <script src="<?php echo @SMARTY_JS_URI;?>
/downscaling.js"></script>
            <?php }elseif($_smarty_tpl->tpl_vars['jsToInclude']->value=="pattern_scaling"){?>
                <script src="<?php echo @SMARTY_JS_URI;?>
/pattern_scaling.js"></script>
            <?php }elseif($_smarty_tpl->tpl_vars['jsToInclude']->value=="data"){?>
                <script src="<?php echo @SMARTY_JS_URI;?>
/data.js"></script>
            <!-- TEMPORAL OPTION -->
            <?php }elseif($_smarty_tpl->tpl_vars['jsToInclude']->value=="data2"){?>
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo @GOOGLE_API_KEY;?>
&sensor=false"></script>
                <script src="<?php echo @SMARTY_JS_URI;?>
/data2.js"></script>
            <?php }elseif($_smarty_tpl->tpl_vars['jsToInclude']->value=="bpopup"){?>
                <!-- Reference http://dinbror.dk/bpopup/ -->
                <script src="<?php echo @SMARTY_JS_URI;?>
/bpopup/jquery.bpopup-0.7.0.min.js"></script>
            <?php }elseif($_smarty_tpl->tpl_vars['jsToInclude']->value=="tiptip"){?>
                <!-- Reference: http://code.drewwilson.com/entry/tiptip-jquery-plugin -->
                <script src="<?php echo @SMARTY_JS_URI;?>
/TipTip-v1.3/jquery.tipTip.minified.js"></script>
                <link rel="stylesheet" type="text/css" href="<?php echo @SMARTY_CSS_URI;?>
/tipTip.css" />
            <?php }elseif($_smarty_tpl->tpl_vars['jsToInclude']->value=="form"){?>
                <script src="<?php echo @SMARTY_JS_URI;?>
/form.js"></script>
            <?php }elseif($_smarty_tpl->tpl_vars['jsToInclude']->value=="file-list"){?>
                <script src="<?php echo @SMARTY_JS_URI;?>
/file-list.js"></script>
            <?php }elseif($_smarty_tpl->tpl_vars['jsToInclude']->value=="tablesorter"){?>
                <link rel="stylesheet" type="text/css" href="<?php echo @SMARTY_CSS_URI;?>
/tablesorter.css" />
                <script src="<?php echo @SMARTY_JS_URI;?>
/tablesorter/jquery.tablesorter.min.js"></script>
            <?php }?>
        <?php } ?>

    </head>

    <body>
<?php }} ?>