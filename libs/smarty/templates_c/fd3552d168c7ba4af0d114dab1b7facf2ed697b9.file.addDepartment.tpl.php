<?php /* Smarty version Smarty-3.1.12, created on 2023-05-30 20:01:43
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\administrator_views\addDepartment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1997364765627973ef3-48618229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd3552d168c7ba4af0d114dab1b7facf2ed697b9' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\administrator_views\\addDepartment.tpl',
      1 => 1364151211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1997364765627973ef3-48618229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_64765627c46467_81586592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64765627c46467_81586592')) {function content_64765627c46467_81586592($_smarty_tpl) {?><!-- Breadcrumb-->
<?php smarty_template_function_breadcrumb($_smarty_tpl,array('lvl2'=>3,'lvl3'=>7,'activelvl'=>3));?>


<div class="row">
    <div class="span3">

        <!-- Header-->
        <h4 class="well center-text well-small">Departments</h4>

        <!-- Admin Navigations--> 
        <?php smarty_template_function_nav_admin($_smarty_tpl,array('index'=>3));?>


    </div>
    <div class="span9">

        <!-- Header-->
        <h4 class="well center-text well-small">Add Department</h4>

        

        <!-- Adding Form-->
        <form action="department_list_manager.php?action=add_department" method='post' class="form-horizontal" enctype="multipart/form-data">
            <legend>Department Information: </legend>
            <div class="control-group">
                <label class="control-label"><b>Department Name: </b></label>
                <div class="controls">
                    <input class="span5" type ='text' name='dept_name' required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"><b>Description: </b></label>
                <div class="controls">
                    <textarea class="span5" name='dept_description' rows="5" cols="50" required></textarea>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label"><b>Upload Logo: </b></label>
                <div class="controls">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail" style="width: 150px; height: 150px;"></div><br>
                        <span class="btn btn-file">
                            Browse<input type="file" name="dept_logo" required>
                        </span>
                        <input type="button" class="btn fileupload-exists" value="Cancel" data-dismiss="fileupload" />
                    </div>
                    <span class="help-block">
                        <p class="text-info">Image file shall not exceed to 1MB. Recommended size is 150 x 150</p>
                    </span>
                </div>
            </div>
            
            <div class="form-actions control-group">
                <div class="pull-right">
                    <input class="btn btn-primary" type='Submit' value='Save' />
                    <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/department_list_manager.php">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>
<?php }} ?>