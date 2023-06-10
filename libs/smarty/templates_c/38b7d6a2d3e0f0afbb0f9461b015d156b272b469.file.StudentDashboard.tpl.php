<?php /* Smarty version Smarty-3.1.12, created on 2023-06-08 10:40:56
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\student_views\StudentDashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60536476f7e532d503-73980994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38b7d6a2d3e0f0afbb0f9461b015d156b272b469' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\student_views\\StudentDashboard.tpl',
      1 => 1686218633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60536476f7e532d503-73980994',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_6476f7e5dfdcf9_22740867',
  'variables' => 
  array (
    'myListOfSign_underDeptName' => 0,
    'k' => 0,
    'myStudent_ClearanceStatus' => 0,
    'num_cleared' => 0,
    'currentSchool_Year' => 0,
    'sy_attended' => 0,
    'currentSemester' => 0,
    'sem_attended' => 0,
    'sy_sem_id' => 0,
    'status' => 0,
    'most_current_sy' => 0,
    'most_current_sem' => 0,
    'myKey_signID' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6476f7e5dfdcf9_22740867')) {function content_6476f7e5dfdcf9_22740867($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\wamp\\www\\student-online-clearance-system-master\\SOCS\\libs\\smarty\\plugins\\function.math.php';
?><?php $_smarty_tpl->tpl_vars['num_cleared'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['myListOfSign_underDeptName']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>

    <?php if ($_smarty_tpl->tpl_vars['myStudent_ClearanceStatus']->value[$_smarty_tpl->tpl_vars['k']->value]=='Cleared'||$_smarty_tpl->tpl_vars['myStudent_ClearanceStatus']->value[$_smarty_tpl->tpl_vars['k']->value]=='No Requirements'){?>
        <?php $_smarty_tpl->tpl_vars['num_cleared'] = new Smarty_variable($_smarty_tpl->tpl_vars['num_cleared']->value+1, null, 0);?>
    <?php }?>

<?php } ?>
<?php echo var_dump($_smarty_tpl->tpl_vars['num_cleared']->value);?>


<!-- Header-->
<h4 class="well well-small center-text">Student's Clearance</h4>

<!-- Archive Search Box-->
<div class="navbar">
    <div class="navbar-inner">

        <form class="navbar-form pull-right" method="post">

            <?php smarty_template_function_schoolyear_sem_inputs($_smarty_tpl,array());?>


            <button class="btn btn-success" type="submit" name="GO">
                <i class="icon-search"></i>
            </button>

        </form>

        <ul class="nav">

            <li class="divider-vertical"></li>
            <li>

                <?php if ($_smarty_tpl->tpl_vars['currentSchool_Year']->value==$_smarty_tpl->tpl_vars['sy_attended']->value&&$_smarty_tpl->tpl_vars['currentSemester']->value==$_smarty_tpl->tpl_vars['sem_attended']->value){?>
                <a class="tips" title="Export the clearance file"
                    href="export1.php?sy_sem_id=<?php echo $_smarty_tpl->tpl_vars['sy_sem_id']->value;?>
&status=<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
" target="_blank">
                    <i class="icon-socs-export"></i>
                </a>
                <?php }else{ ?>
                <a class="tips" title="Export the clearance file" href="#"
                    onclick="bootbox.alert('<div class=\'alert alert-info alert-block\'><i class=\'icon-info-sign\'></i> <strong>Oops!</strong> Must be in current school year and semester.</div>');">
                    <i class="icon-socs-export"></i>
                </a>
                <?php }?>

            </li>

            <li class="divider-vertical"></li>

            <?php if (isset($_smarty_tpl->tpl_vars['sy_attended']->value)&&isset($_smarty_tpl->tpl_vars['sem_attended']->value)){?>
            <?php if (($_smarty_tpl->tpl_vars['sy_attended']->value!=$_smarty_tpl->tpl_vars['most_current_sy']->value||$_smarty_tpl->tpl_vars['sem_attended']->value!=$_smarty_tpl->tpl_vars['most_current_sem']->value)){?>
            <li class="dropdown">
                <a id="socs-renew" class="tips" href="#" title="Renew Clearance">
                    <i class="icon-legal"></i>
                </a>
            </li>

            <li class="divider-vertical"></li>
            <?php }?>
            <?php }?>
        </ul>

    </div>
</div>

<p>Clearance Overall Status: </p>
<div class="progress">
    <div id="clearance_status" class="bar"
        data-percentage="<?php echo smarty_function_math(array('equation'=>"(c / i) * 100",'i'=>(count($_smarty_tpl->tpl_vars['myListOfSign_underDeptName']->value)),'c'=>$_smarty_tpl->tpl_vars['num_cleared']->value,'format'=>"%d"),$_smarty_tpl);?>
">
    </div>
</div>

<!-- Clearance-->
<div class="row">

    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['myListOfSign_underDeptName']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>

    <div class="span3">

        <table class="table table-bordered">
            <tr class="info">
                <td colspan="2">
                    <div id="hover_link"
                        onclick='window.location.href = "index.php?action=viewRequirements&Tsign_ID=<?php echo $_smarty_tpl->tpl_vars['myKey_signID']->value[$_smarty_tpl->tpl_vars['k']->value];?>
&page=1";'>
                        <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 </div>
                </td>
            </tr>
            <tr>
                <td>Status: </td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['myStudent_ClearanceStatus']->value[$_smarty_tpl->tpl_vars['k']->value]=='Cleared'||$_smarty_tpl->tpl_vars['myStudent_ClearanceStatus']->value[$_smarty_tpl->tpl_vars['k']->value]=='No Requirements'){?>
                    <span class="label label-success hidden-tablet"><?php echo $_smarty_tpl->tpl_vars['myStudent_ClearanceStatus']->value[$_smarty_tpl->tpl_vars['k']->value];?>
</span>
                    <span class="badge badge-success visible-tablet"><i class="icon-check"></i></span>
                    <?php }else{ ?>
                    <span class="label label-important hidden-tablet"><?php echo $_smarty_tpl->tpl_vars['myStudent_ClearanceStatus']->value[$_smarty_tpl->tpl_vars['k']->value];?>
</span>
                    <span class="badge badge-important visible-tablet"><i class="icon-remove"></i></span>
                    <?php }?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div id="hover_link"
                        onclick="window.location.href = 'index.php?action=viewRequirements&Tsign_ID=<?php echo $_smarty_tpl->tpl_vars['myKey_signID']->value[$_smarty_tpl->tpl_vars['k']->value];?>
&page=1';">
                        <i class="icon-list-alt"></i> Requirements
                    </div>

                    <div id="hover_link"
                        onclick="window.location.href = 'index.php?action=viewMessages&Tsign_ID=<?php echo $_smarty_tpl->tpl_vars['myKey_signID']->value[$_smarty_tpl->tpl_vars['k']->value];?>
&page=1';">
                        <i class="icon-bullhorn"></i> Announcements
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <?php } ?>
</div><?php }} ?>