<?php /* Smarty version Smarty-3.1.7, created on 2017-09-26 16:20:23
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/EmailTemplates/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130837927659ca7e47ac74a0-62553221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5e59956d549ca3c8ef23c58af66be4102fea454' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/EmailTemplates/partials/SidebarHeader.tpl',
      1 => 1506436380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130837927659ca7e47ac74a0-62553221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ca7e47b0271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ca7e47b0271')) {function content_59ca7e47b0271($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["APP_IMAGE_MAP"] = new Smarty_variable(array('MARKETING'=>'fa-users','SALES'=>'fa-dot-circle-o','SUPPORT'=>'fa-life-ring','INVENTORY'=>'vicon-inventory','PROJECT'=>'fa-briefcase'), null, 0);?>
 
<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
    <div class="row" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
        <span class="app-indicator-icon fa vicon-emailtemplates"></span>
    </div>
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>