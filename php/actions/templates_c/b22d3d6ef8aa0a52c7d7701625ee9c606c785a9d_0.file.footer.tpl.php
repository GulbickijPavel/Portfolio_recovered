<?php /* Smarty version 3.1.24, created on 2015-10-20 13:24:24
         compiled from "/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12967944075626165846da77_17801652%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b22d3d6ef8aa0a52c7d7701625ee9c606c785a9d' => 
    array (
      0 => '/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/footer.tpl',
      1 => 1444919660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12967944075626165846da77_17801652',
  'variables' => 
  array (
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56261658479494_00162088',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56261658479494_00162088')) {
function content_56261658479494_00162088 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12967944075626165846da77_17801652';
?>
        <?php if ($_smarty_tpl->tpl_vars['cms']->value == 'false') {?>
        <footer>
            <div class="fixed-contacts"></div>
            &copy PGulbickij.lt 2015
        </footer>
        <?php }?>
        <?php echo '<script'; ?>
 type="text/javascript" src=" http://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript" src="js/combined.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="js/script.min.js"><?php echo '</script'; ?>
>

<?php }
}
?>