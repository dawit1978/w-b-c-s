<?php /* Smarty version Smarty-3.1.12, created on 2023-06-06 19:51:50
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\signatory_views\Student_Detailed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25888647f8e567d1ef9-24207577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe6b4d01b3c34465d5a0883086b9495251a0e476' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\signatory_views\\Student_Detailed.tpl',
      1 => 1364151211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25888647f8e567d1ef9-24207577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stud_photo' => 0,
    'host' => 0,
    'student_name' => 0,
    'course_name' => 0,
    'dept_name' => 0,
    'stud_gender' => 0,
    'stud_yr_level' => 0,
    'stud_program' => 0,
    'stud_section' => 0,
    'stud_status' => 0,
    'stud_overall_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_647f8e569ff773_06224144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_647f8e569ff773_06224144')) {function content_647f8e569ff773_06224144($_smarty_tpl) {?><div class="row">
    <div class="span3">

        <!-- Header-->
        <h4 class="well center-text well-small">Students</h4>

        <!-- Navigations-->
        <div class="row">
            <div class="span3">
                <?php smarty_template_function_nav_signatory($_smarty_tpl,array());?>

            </div>
        </div>

    </div>
    <div class="span9">

        <div class="row">
            <div class="span8 well">
                <?php if (isset($_smarty_tpl->tpl_vars['stud_photo']->value)){?>
                    <div class="span1">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['stud_photo']->value;?>
" class="img-polaroid" />
                    </div>
                <?php }else{ ?>
                    <div class="span1">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/photos/default_student.png" class="img-polaroid" />
                    </div>
                <?php }?>
                <div class="span6">
                    <h4><?php echo $_smarty_tpl->tpl_vars['student_name']->value;?>
</h4>
                    <h5><?php echo $_smarty_tpl->tpl_vars['course_name']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['dept_name']->value;?>
</h5>
                </div>
            </div>
        </div>       

        <hr>

        <div class="row">
            <div class="span7 offset1">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Student Details: </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th style="text-align: right">Gender: </th>
                            <td><?php echo $_smarty_tpl->tpl_vars['stud_gender']->value;?>
</td>
                        </tr>
                        <tr>
                            <th style="text-align: right">Year Level: </th>
                            <td><?php echo $_smarty_tpl->tpl_vars['stud_yr_level']->value;?>
</td>
                        </tr>
                        <tr>
                            <th style="text-align: right">Program: </th>
                            <td><?php echo $_smarty_tpl->tpl_vars['stud_program']->value;?>
</td>
                        </tr>
                        <tr>
                            <th style="text-align: right">Section: </th>
                            <td><?php echo $_smarty_tpl->tpl_vars['stud_section']->value;?>
</td>
                        </tr>
                        <tr>
                            <th style="text-align: right">Status: </th>
                            <td><?php echo $_smarty_tpl->tpl_vars['stud_status']->value;?>
</td>
                        </tr>
                        <tr>
                            <th style="text-align: right">Overall Clearance Status: </th>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['stud_overall_status']->value=='Cleared'){?>
                                    <span class="label label-success"> <?php echo $_smarty_tpl->tpl_vars['stud_overall_status']->value;?>
</span>  
                                <?php }elseif($_smarty_tpl->tpl_vars['stud_overall_status']->value=='No Requirements'){?>
                                    <span class="label"><?php echo $_smarty_tpl->tpl_vars['stud_overall_status']->value;?>
</span>
                                <?php }else{ ?>
                                    <span class="label label-important"><?php echo $_smarty_tpl->tpl_vars['stud_overall_status']->value;?>
</span>
                                <?php }?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="form-actions">
            <div class="pull-right">
                <input type="button" class="btn btn-primary" value="Back" onclick="window.location.href='../signatory/index.php';">
            </div>
        </div>
    </div>
</div><?php }} ?>