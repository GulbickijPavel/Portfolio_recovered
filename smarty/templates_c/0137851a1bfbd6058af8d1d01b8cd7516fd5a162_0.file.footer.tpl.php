<?php /* Smarty version 3.1.24, created on 2015-09-23 11:57:33
         compiled from "smarty/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:269165602697d37c929_40977990%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0137851a1bfbd6058af8d1d01b8cd7516fd5a162' => 
    array (
      0 => 'smarty/templates/footer.tpl',
      1 => 1442998074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269165602697d37c929_40977990',
  'variables' => 
  array (
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5602697d3ab737_21050694',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5602697d3ab737_21050694')) {
function content_5602697d3ab737_21050694 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '269165602697d37c929_40977990';
?>
        <?php if ($_smarty_tpl->tpl_vars['cms']->value == 'false') {?>
        <footer>
            
        </footer>
        <?php }?>
        <?php echo '<script'; ?>
 type="text/javascript" src=" http://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio.lt/js/vendor/velocity.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio.lt/js/unslider.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio.lt/js/vortex/js/jquery.vortex.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio.lt/js/script.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio.lt/js/jquery.fittext.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio.lt/js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio.lt/js/jquery.slides.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio.lt/slider/jquery.bxslider.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio.lt/js/jquery.confirm.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/portfolio.lt/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/portfolio.lt/js/bootswatch.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio.lt/js/magicsuggest-min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="//cdn.ckeditor.com/4.5.3/standard/ckeditor.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio.lt/js/ckeditor/sample.js"><?php echo '</script'; ?>
>
        <?php if ($_smarty_tpl->tpl_vars['cms']->value == 'false') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio.lt/js/imgprev.js"><?php echo '</script'; ?>
>
        <?php }?>

<?php }
}
?>