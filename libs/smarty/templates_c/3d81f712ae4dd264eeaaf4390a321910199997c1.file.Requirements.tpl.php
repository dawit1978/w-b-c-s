<?php /* Smarty version Smarty-3.1.12, created on 2023-06-08 09:18:35
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\student_views\Requirements.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1286464819ceb10ac42-41874443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d81f712ae4dd264eeaaf4390a321910199997c1' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\student_views\\Requirements.tpl',
      1 => 1364151211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1286464819ceb10ac42-41874443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sign_name' => 0,
    'sign_id' => 0,
    'n_count' => 0,
    'clearanceList' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_64819cebf3d227_50092884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64819cebf3d227_50092884')) {function content_64819cebf3d227_50092884($_smarty_tpl) {?><!-- Header-->
<h4 class="well well-small center-text"><?php echo $_smarty_tpl->tpl_vars['sign_name']->value;?>
 Clearance Requirements</h4>

<!-- Archive Search Box-->
<div class="navbar">
    <div class="navbar-inner">

        <form class="navbar-form" method="post">

            <?php smarty_template_function_schoolyear_sem_inputs($_smarty_tpl,array());?>


            <button class="btn btn-success" type="button" name="GO" onclick="change_schoolYear('1', '<?php echo $_smarty_tpl->tpl_vars['sign_id']->value;?>
', '1');">
                <i class="icon-search icon-white"></i>
            </button>

        </form>
    </div>
</div>



<!-- Requirements Table-->
<?php if ($_smarty_tpl->tpl_vars['n_count']->value==0){?>
    <p class="text-success">This signatory has no requirements yet.</p>
<?php }else{ ?>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Requirement</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['clearanceList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                <tr <?php if ($_smarty_tpl->tpl_vars['clearanceList']->value[$_smarty_tpl->tpl_vars['k']->value][3]!="Not Cleared"){?>class="success"<?php }else{ ?>class="error"<?php }?>>
                    <td><?php echo $_smarty_tpl->tpl_vars['clearanceList']->value[$_smarty_tpl->tpl_vars['k']->value][1];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['clearanceList']->value[$_smarty_tpl->tpl_vars['k']->value][3];?>
</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php }?>

<div class="form-actions">
    <!-- Back Button-->
    <input class="btn btn-primary pull-right" type="button" value="Back" onclick="window.location.href = 'index.php'">
</div><?php }} ?>