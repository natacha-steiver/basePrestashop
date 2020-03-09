<?php /* Smarty version Smarty-3.1.19, created on 2020-03-09 16:23:26
         compiled from "C:\MAMP\htdocs\prestashop_1.6.1.24\prestashop\themes\default-bootstrap\modules\mymodule\mymodule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6928910085e665f6e790fd0-54038957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54d5c6be21431a56ac8114bc09e3fb2d957b1bf8' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\prestashop_1.6.1.24\\prestashop\\themes\\default-bootstrap\\modules\\mymodule\\mymodule.tpl',
      1 => 1583762487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6928910085e665f6e790fd0-54038957',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_module_name' => 0,
    'my_module_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e665f6e794515_38509471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e665f6e794515_38509471')) {function content_5e665f6e794515_38509471($_smarty_tpl) {?><!-- Block mymodule -->
<div id="mymodule_block_home" class="block">
  <h4>Welcome!</h4>
  <div class="block_content">
    <p>Hello,
       <?php if (isset($_smarty_tpl->tpl_vars['my_module_name']->value)&&$_smarty_tpl->tpl_vars['my_module_name']->value) {?>
           <?php echo $_smarty_tpl->tpl_vars['my_module_name']->value;?>

       <?php } else { ?>
           World
       <?php }?>
       !
    </p>
    <ul>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['my_module_link']->value;?>
" title="Click this link">Click me!</a></li>
    </ul>
  </div>
</div>
<!-- /Block mymodule -->
<?php }} ?>
