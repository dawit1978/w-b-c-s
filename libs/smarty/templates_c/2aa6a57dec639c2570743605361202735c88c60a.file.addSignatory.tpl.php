<?php /* Smarty version Smarty-3.1.12, created on 2023-06-03 18:53:12
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\administrator_views\addSignatory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4446478d0016e6a53-91249614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aa6a57dec639c2570743605361202735c88c60a' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\administrator_views\\addSignatory.tpl',
      1 => 1685818380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4446478d0016e6a53-91249614',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_6478d00184fb94_42601178',
  'variables' => 
  array (
    'index_tabs' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6478d00184fb94_42601178')) {function content_6478d00184fb94_42601178($_smarty_tpl) {?><!-- Breadcrumb-->
<?php smarty_template_function_breadcrumb($_smarty_tpl,array('lvl2'=>2,'lvl3'=>5,'activelvl'=>3));?>


<div class="row">
    <div class="span3">

        <!-- Header-->
        <h4 class="well center-text well-small">Signatories</h4>

        <!-- Admin Navigations-->
        <?php smarty_template_function_nav_admin($_smarty_tpl,array('index'=>2));?>


    </div>
    <div class="span9">

        <!-- Header-->
        <h4 class="well center-text well-small">Add Signatory</h4>

        

        <!-- Adding Form-->
        <form <?php if ($_smarty_tpl->tpl_vars['index_tabs']->value==0){?> action="signatory_list_manager.php?action=add_signatory" <?php }?> <?php if ($_smarty_tpl->tpl_vars['index_tabs']->value==1){?>
            action="grad_signatory_list_manager.php?action=add_signatory" <?php }?> method='post' class="form-horizontal">
            <legend>Signatory Information: </legend>
            <div class="control-group">
                <label class="control-label"><b>Signatory Name: </b></label>
                <div class="controls">
                    <input class="span5" type='text' name='sign_name'>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"><b>Description: </b></label>
                <div class="controls">
                    <textarea class="span5" name='sign_description' rows="5"></textarea>
                </div>
            </div>
            <div class="form-actions control-group">
                <div class="pull-right">
                    <input class="btn btn-primary" type='Submit' value='Save' />
                    <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/signatory_list_manager.php">Back</a>
                </div>
            </div>
        </form>
    </div>
</div><?php }} ?>