<?php /* Smarty version Smarty-3.1.19, created on 2020-03-09 15:43:22
         compiled from "C:\MAMP\htdocs\prestashop_1.6.1.24\prestashop\admin046fbedfi\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6403345115e66560ab84db6-74187295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7143bc119e12ab2fe66d12e793159626990af572' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\prestashop_1.6.1.24\\prestashop\\admin046fbedfi\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1583753674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6403345115e66560ab84db6-74187295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e66560ab8f075_04131483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e66560ab8f075_04131483')) {function content_5e66560ab8f075_04131483($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
