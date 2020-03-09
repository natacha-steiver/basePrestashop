<?php /* Smarty version Smarty-3.1.19, created on 2020-03-09 15:45:11
         compiled from "C:\MAMP\htdocs\prestashop_1.6.1.24\prestashop\admin046fbedfi\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15099103185e6656771c72c1-60930757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce2fb1e42da7dc43ba4ef5b031df2228e7a0ed8' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\prestashop_1.6.1.24\\prestashop\\admin046fbedfi\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1583753680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15099103185e6656771c72c1-60930757',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e6656771c84f1_14841662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6656771c84f1_14841662')) {function content_5e6656771c84f1_14841662($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
