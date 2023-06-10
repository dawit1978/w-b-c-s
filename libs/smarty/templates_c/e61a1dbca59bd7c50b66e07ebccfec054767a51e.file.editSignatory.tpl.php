<?php /* Smarty version Smarty-3.1.12, created on 2023-05-30 20:00:53
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\administrator_views\editSignatory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16161647655f5943c12-99332967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e61a1dbca59bd7c50b66e07ebccfec054767a51e' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\administrator_views\\editSignatory.tpl',
      1 => 1364151211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16161647655f5943c12-99332967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'editSignatory_Name' => 0,
    'editSignatory_Desc' => 0,
    'index_tabs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_647655f678d6c2_52739087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_647655f678d6c2_52739087')) {function content_647655f678d6c2_52739087($_smarty_tpl) {?><!-- Breadcrumb-->
<?php smarty_template_function_breadcrumb($_smarty_tpl,array('lvl2'=>2,'lvl3'=>6,'activelvl'=>3,'sig_name'=>((string)$_smarty_tpl->tpl_vars['editSignatory_Name']->value)));?>


<div class="row">
    <div class="span3">

        <!-- Header-->
        <h4 class="well center-text well-small">Signatories</h4>

        <!-- Admin Navigations--> 
        <?php smarty_template_function_nav_admin($_smarty_tpl,array('index'=>2));?>


    </div>
    <div class="span9">

        <!-- Header-->
        <h4 class="well center-text well-small">Edit Signatory</h4>

        

        <!-- Edit Signatory-->
        <form action="" method='post' class="form-horizontal">
            <legend>Signatory Information:</legend>
            <div class="control-group">
                <label class="control-label"><b>Signatory Name: </b></label>
                <div class="controls">
                    <input class="span5" type ='text' name='sign_name' value='<?php echo $_smarty_tpl->tpl_vars['editSignatory_Name']->value;?>
' required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"><b>Description: </b></label>
                <div class="controls">
                    <textarea class="span5" name='sign_description' rows="5" cols="50" required><?php echo $_smarty_tpl->tpl_vars['editSignatory_Desc']->value;?>
</textarea>
                </div>
            </div>
            <div class="control-group form-actions">
                <div class="pull-right">
                    <input class="btn btn-primary" type='Submit' value='Save' name ='editSave'>
                    <button class="btn" type="button" <?php if ($_smarty_tpl->tpl_vars['index_tabs']->value==0){?> onclick="window.location.href = 'signatory_list_manager.php'" <?php }?> <?php if ($_smarty_tpl->tpl_vars['index_tabs']->value==1){?> onclick="window.location.href = 'grad_signatory_list_manager.php'" <?php }?>>Back</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php }} ?>