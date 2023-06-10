<?php /* Smarty version Smarty-3.1.12, created on 2023-06-06 19:51:28
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\signatory_views\ClearancePage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10619647f8e40607576-75747409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4985720d14600b0953edb3d87b30abbf3e8d1ae' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\signatory_views\\ClearancePage.tpl',
      1 => 1364151211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10619647f8e40607576-75747409',
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
    'stud_id' => 0,
    'clearanceStatus' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_647f8e433ac5d8_98819001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_647f8e433ac5d8_98819001')) {function content_647f8e433ac5d8_98819001($_smarty_tpl) {?><div class="row">
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
            <div class="span8  well">
                <?php if (isset($_smarty_tpl->tpl_vars['stud_photo']->value)){?>
                    <div class="span1"><img src="<?php echo $_smarty_tpl->tpl_vars['stud_photo']->value;?>
" class="img-polaroid" /></div>
                    <?php }else{ ?>
                    <div class="span1"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/photos/default_student.png" class="img-polaroid" /></div>
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

        <form method='get' class="form-horizontal" action="index.php?action=viewClearancePage_submit&stud_id=<?php echo $_smarty_tpl->tpl_vars['stud_id']->value;?>
">
            <div class="row">
                <div class="span7 offset1">
                    <table class="table table-hover">     
                        <tr>
                            <th>Checked</th>
                            <th>Requirements</th>       
                        </tr>

                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['clearanceStatus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                            <tr>

                                <td>
                                    <input name="requirements" value="<?php echo $_smarty_tpl->tpl_vars['clearanceStatus']->value[$_smarty_tpl->tpl_vars['k']->value][0];?>
" id="rq<?php echo $_smarty_tpl->tpl_vars['clearanceStatus']->value[$_smarty_tpl->tpl_vars['k']->value][0];?>
" type="checkbox"
                                           <?php if ($_smarty_tpl->tpl_vars['clearanceStatus']->value[$_smarty_tpl->tpl_vars['k']->value][3]=='Cleared'){?>
                                               checked=""
                                           <?php }?>
                                           <?php if ($_smarty_tpl->tpl_vars['clearanceStatus']->value[$_smarty_tpl->tpl_vars['k']->value][4]=='Prerequisite'){?>
                                               disabled
                                           <?php }?>>
                                </td>
                                <td>
                                    <p><?php echo $_smarty_tpl->tpl_vars['clearanceStatus']->value[$_smarty_tpl->tpl_vars['k']->value][1];?>
</p>
                                </td>

                            </tr>
                        <?php } ?>
                    </table> 
                </div>
            </div>

            <div class="row">
                <div class="form-actions">
                    <div class="pull-right">
                        <input class="btn btn-primary" type='button' value='Save' name="Save" onclick="submitClearanceStatus()">
                        <!-- <input type="button" class="btn btn-primary" value="Save" onclick="window.location.href='../signatory/index.php?action=saveClearanceStatus'"> -->
                        <input type="button" class="btn" value="Back" onclick="window.location.href = '../signatory/index.php'">
                    </div>
                </div>
            </div>
        </form> 
    </div>
</div>

<script>
                            function submitClearanceStatus() {
                                var vSelected = "";
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['clearanceStatus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                                vSelected += "&rq[<?php echo $_smarty_tpl->tpl_vars['clearanceStatus']->value[$_smarty_tpl->tpl_vars['k']->value][0];?>
]=" + (document.getElementById("rq<?php echo $_smarty_tpl->tpl_vars['clearanceStatus']->value[$_smarty_tpl->tpl_vars['k']->value][0];?>
").checked == true ? 1 : 0);
    <?php } ?>
                                window.location.assign("index.php?action=viewClearancePage_submit&stud_id=<?php echo $_smarty_tpl->tpl_vars['stud_id']->value;?>
&selected=" + vSelected);
                            }
</script>
<?php }} ?>