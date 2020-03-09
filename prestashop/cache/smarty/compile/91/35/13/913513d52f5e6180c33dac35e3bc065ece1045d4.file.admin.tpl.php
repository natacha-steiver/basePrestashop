<?php /* Smarty version Smarty-3.1.19, created on 2020-03-09 15:36:49
         compiled from "C:\MAMP\htdocs\prestashop_1.6.1.24\prestashop\modules\themeconfigurator\views\templates\admin\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2680424025e665481b6eee1-52219189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '913513d52f5e6180c33dac35e3bc065ece1045d4' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\prestashop_1.6.1.24\\prestashop\\modules\\themeconfigurator\\views\\templates\\admin\\admin.tpl',
      1 => 1583753772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2680424025e665481b6eee1-52219189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlcontent' => 0,
    'error' => 0,
    'confirmation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e665481b8bc24_09907617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e665481b8bc24_09907617')) {function content_5e665481b8bc24_09907617($_smarty_tpl) {?>

<div id="htmlcontent" class="panel">
    <div class="panel-heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['info']['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 (v.<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['info']['version'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
)</div>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value) {?>
        <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1."messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"main",'text'=>$_smarty_tpl->tpl_vars['error']->value,'class'=>'error'), 0);?>

    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value) {?>
        <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp2."messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"main",'text'=>$_smarty_tpl->tpl_vars['confirmation']->value,'class'=>'conf'), 0);?>

    <?php }?>
    <!-- New -->
    <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp3."new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- Slides -->
    <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp4."items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>
