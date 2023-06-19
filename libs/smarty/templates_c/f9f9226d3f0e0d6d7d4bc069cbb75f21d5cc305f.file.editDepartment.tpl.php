<?php /* Smarty version Smarty-3.1.12, created on 2023-06-16 12:15:21
         compiled from "C:wamp\www\wbcms\w-b-c-s\views\administrator_views\editDepartment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14605648c5259e7d8e9-79520575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9f9226d3f0e0d6d7d4bc069cbb75f21d5cc305f' => 
    array (
      0 => 'C:wamp\\www\\wbcms\\w-b-c-s\\views\\administrator_views\\editDepartment.tpl',
      1 => 1686563966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14605648c5259e7d8e9-79520575',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'editDepartment_Name' => 0,
    'editDepartment_Desc' => 0,
    'dept_logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_648c525a291939_09245350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_648c525a291939_09245350')) {function content_648c525a291939_09245350($_smarty_tpl) {?><!-- Breadcrumb-->
<?php smarty_template_function_breadcrumb($_smarty_tpl,array('lvl2'=>3,'lvl3'=>6,'activelvl'=>3,'dept_name'=>((string)$_smarty_tpl->tpl_vars['editDepartment_Name']->value)));?>


<div class="row">
    <div class="span3">

        <!-- Header-->
        <h4 class="well center-text well-small">Departments</h4>

        <!-- Admin Navigations--> 
        <?php smarty_template_function_nav_admin($_smarty_tpl,array('index'=>3));?>


    </div>
    <div class="span9">

        <!-- Header-->
        <h4 class="well center-text well-small">Edit Department</h4>
        
        <!-- Edit Form-->
        <form action="" method='post' class="form-horizontal" enctype="multipart/form-data">
            <legend>Department Information:</legend>
            <div class="control-group">
                <label class="control-label"><b>Department Name: </b></label>
                <div class="controls">
                    <input class="span5" type ='text' name='dept_name' value='<?php echo $_smarty_tpl->tpl_vars['editDepartment_Name']->value;?>
' required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"><b>Description: </b></label>
                <div class="controls">
                    <textarea class="span5" name='dept_description' rows="5" cols="50" required><?php echo $_smarty_tpl->tpl_vars['editDepartment_Desc']->value;?>
</textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label"><b>Upload Logo: </b></label>
                <div class="controls">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail" style="width: 150px; height: 150px;"></div>
                        <?php if ($_smarty_tpl->tpl_vars['dept_logo']->value!=null){?>
                            <div class="thumbnail" style="width: 150px; height: 150px;">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['dept_logo']->value;?>
" />
                            </div>
                        <?php }?>
                        <br>
                        <span class="btn btn-file">
                            Browse<input type="file" name="dept_logo" required />
                        </span>
                        <input type="button" class="btn fileupload-exists" value="Cancel" data-dismiss="fileupload" />
                    </div>

                    <span class="help-block">
                        <p class="text-info">Image file shall not exceed to 1MB. Recommended size is 150 x 150</p>
                    </span>
                </div>
            </div>

            <div class="control-group form-actions">
                <div class="pull-right">
                    <input class="btn btn-primary" type='Submit' value='Save' name="editSave">
                    <button class="btn" type="button" onclick="window.location.href = 'department_list_manager.php'">Back</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php }} ?>