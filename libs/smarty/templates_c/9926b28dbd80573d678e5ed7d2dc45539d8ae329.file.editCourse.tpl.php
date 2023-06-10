<?php /* Smarty version Smarty-3.1.12, created on 2023-06-01 17:00:48
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\administrator_views\editCourse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:321426478cec00ce8f4-26880051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9926b28dbd80573d678e5ed7d2dc45539d8ae329' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\administrator_views\\editCourse.tpl',
      1 => 1364151211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321426478cec00ce8f4-26880051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Dept_name' => 0,
    'editCourse_Name' => 0,
    'Dept_desc' => 0,
    'editCourse_Usability' => 0,
    'editCourse_Desc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_6478cec0181be4_93537318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6478cec0181be4_93537318')) {function content_6478cec0181be4_93537318($_smarty_tpl) {?><!-- Breadcrumb-->
<?php smarty_template_function_breadcrumb($_smarty_tpl,array('lvl2'=>3,'lvl3'=>8,'lvl4'=>1,'lvl5'=>2,'activelvl'=>5,'dept_name'=>((string)$_smarty_tpl->tpl_vars['Dept_name']->value),'course_name'=>((string)$_smarty_tpl->tpl_vars['editCourse_Name']->value)));?>


<div class="row">
    <div class="span3">

        <!-- Header-->
        <h4 class="well center-text well-small">Departments</h4>
        
        <!-- Admin Navigations--> 
        <?php smarty_template_function_nav_admin($_smarty_tpl,array('index'=>3));?>


    </div>
    <div class="span9">

        <!-- Header-->
        <div class="well center-text well-small">
            <h4><?php echo $_smarty_tpl->tpl_vars['Dept_name']->value;?>
 </h4>
            <small><?php echo $_smarty_tpl->tpl_vars['Dept_desc']->value;?>
</small>
        </div>

        <!-- Edit Course-->
        <form action="" method='post' class="form-horizontal">
            <legend>Edit Course:</legend>
            <div class="control-group">
                <label class="control-label"><b>Course Name: </b></label>
                <div class="controls">
                    <input class="span5" type ='text' name='course_name' value='<?php echo $_smarty_tpl->tpl_vars['editCourse_Name']->value;?>
'>
                </div>
            </div>
            <div class="control-group form-inline">
                <div class="controls form-inline">
                    <input type="radio" <?php if ($_smarty_tpl->tpl_vars['editCourse_Usability']->value=="Under Graduate"){?>checked<?php }?> name="course_usability" value="Under Graduate"> <label><b>Under Graduate</b></label>
                    <input type="radio" <?php if ($_smarty_tpl->tpl_vars['editCourse_Usability']->value=="Graduate"){?>checked<?php }?> name="course_usability" value="Graduate"> <label><b>Graduate </b></label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"><b>Description: </b></label>
                <div class="controls">
                    <textarea class="span5" name='course_description' rows="5" cols="50" id='course_desc'><?php echo $_smarty_tpl->tpl_vars['editCourse_Desc']->value;?>
</textarea>
                </div>
            </div>
            <div class="control-group form-actions">
                <div class="pull-right">
                    <input class="btn btn-primary" type='Submit' value='Save' name="editSave">
                    <input class="btn" type="button" value="Back" onclick="window.location.href='course_list_byDepartment.php'">
                </div>
            </div>
        </form>
    </div>
</div>

<?php }} ?>