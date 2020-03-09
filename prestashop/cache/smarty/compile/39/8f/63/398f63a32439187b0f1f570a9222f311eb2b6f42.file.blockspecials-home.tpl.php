<?php /* Smarty version Smarty-3.1.19, created on 2020-03-09 16:20:32
         compiled from "C:\MAMP\htdocs\prestashop_1.6.1.24\prestashop\modules\blockspecials\views\templates\hook\blockspecials-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15058852715e665ec0df8c38-09987373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '398f63a32439187b0f1f570a9222f311eb2b6f42' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\prestashop_1.6.1.24\\prestashop\\modules\\blockspecials\\views\\templates\\hook\\blockspecials-home.tpl',
      1 => 1583753760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15058852715e665ec0df8c38-09987373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specials' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e665ec0dfc880_87716627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e665ec0dfc880_87716627')) {function content_5e665ec0dfc880_87716627($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['specials']->value)&&$_smarty_tpl->tpl_vars['specials']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['specials']->value,'class'=>'blockspecials tab-pane','id'=>'blockspecials'), 0);?>

<?php } else { ?>
<ul id="blockspecials" class="blockspecials tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
