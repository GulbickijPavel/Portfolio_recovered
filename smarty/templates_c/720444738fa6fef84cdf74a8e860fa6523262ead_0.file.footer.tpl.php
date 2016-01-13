<?php /* Smarty version 3.1.24, created on 2015-11-19 12:53:07
         compiled from "smarty/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2111552063564daa13191f14_18408021%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '720444738fa6fef84cdf74a8e860fa6523262ead' => 
    array (
      0 => 'smarty/templates/footer.tpl',
      1 => 1447930381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2111552063564daa13191f14_18408021',
  'variables' => 
  array (
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_564daa131e7e94_35633331',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564daa131e7e94_35633331')) {
function content_564daa131e7e94_35633331 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2111552063564daa13191f14_18408021';
?>
        <?php if ($_smarty_tpl->tpl_vars['cms']->value == 'false') {?>
        <footer>
            <div class="fixed-contacts"></div>
            &copy; PGulbickij.lt 2015
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