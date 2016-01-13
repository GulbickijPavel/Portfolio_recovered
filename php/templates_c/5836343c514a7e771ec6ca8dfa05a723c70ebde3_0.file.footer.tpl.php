<?php /* Smarty version 3.1.24, created on 2015-10-20 13:24:00
         compiled from "/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6511206556261640804a81_58741578%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5836343c514a7e771ec6ca8dfa05a723c70ebde3' => 
    array (
      0 => '/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/footer.tpl',
      1 => 1444919660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6511206556261640804a81_58741578',
  'variables' => 
  array (
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5626164080ddb0_10263882',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5626164080ddb0_10263882')) {
function content_5626164080ddb0_10263882 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6511206556261640804a81_58741578';
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