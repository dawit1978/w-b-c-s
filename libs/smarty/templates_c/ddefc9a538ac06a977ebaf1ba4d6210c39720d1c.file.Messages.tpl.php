<?php /* Smarty version Smarty-3.1.12, created on 2023-06-19 13:27:40
         compiled from "C:wamp\www\wbcms\w-b-c-s\views\student_views\Messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2486649057cc6c1e93-39718256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddefc9a538ac06a977ebaf1ba4d6210c39720d1c' => 
    array (
      0 => 'C:wamp\\www\\wbcms\\w-b-c-s\\views\\student_views\\Messages.tpl',
      1 => 1686563966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2486649057cc6c1e93-39718256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sign_name' => 0,
    'sign_id' => 0,
    'my_messages' => 0,
    'k' => 0,
    '_date' => 0,
    '_time' => 0,
    'i' => 0,
    'stud_message_length' => 0,
    'start' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_649057cc887da8_82502884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_649057cc887da8_82502884')) {function content_649057cc887da8_82502884($_smarty_tpl) {?><!-- Header-->
<h4 class="well well-small center-text"><?php echo $_smarty_tpl->tpl_vars['sign_name']->value;?>
 Bulletin</h4>

<!-- Archive Search Box-->
<div class="navbar">
    <div class="navbar-inner">

        <form class="navbar-form" method="post">

            <?php smarty_template_function_schoolyear_sem_inputs($_smarty_tpl,array());?>


            <button class="btn btn-success" type="button" name="GO" onclick="change_schoolYear('0', '<?php echo $_smarty_tpl->tpl_vars['sign_id']->value;?>
', '1')">
                <i class="icon-search icon-white"></i>
            </button>

        </form>
    </div>
</div>



<?php if (count($_smarty_tpl->tpl_vars['my_messages']->value)!=0){?>

    <!-- Announcements-->
    <div class="media">
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['my_messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
            <div class="media-body well">
                <h6 class="media-heading muted">
                    Posted on <?php echo $_smarty_tpl->tpl_vars['_date']->value[$_smarty_tpl->tpl_vars['k']->value];?>
 at <?php echo $_smarty_tpl->tpl_vars['_time']->value[$_smarty_tpl->tpl_vars['k']->value];?>

                </h6>
                <p><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</p>
            </div>
        <?php } ?>
    </div>

    <!-- Pagination-->
    <div class="row">
        <div class="span12">
            <div class="pull-right">
                Jump to: 
                <select id="jump_studMessages" class="input-mini" onchange="jumpToPageMessages('0',<?php echo $_smarty_tpl->tpl_vars['sign_id']->value;?>
)">
                    <option>--</option>
                    <?php $_smarty_tpl->tpl_vars['start'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['start']->step = 1;$_smarty_tpl->tpl_vars['start']->total = (int)ceil(($_smarty_tpl->tpl_vars['start']->step > 0 ? $_smarty_tpl->tpl_vars['stud_message_length']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['stud_message_length']->value)+1)/abs($_smarty_tpl->tpl_vars['start']->step));
if ($_smarty_tpl->tpl_vars['start']->total > 0){
for ($_smarty_tpl->tpl_vars['start']->value = 1, $_smarty_tpl->tpl_vars['start']->iteration = 1;$_smarty_tpl->tpl_vars['start']->iteration <= $_smarty_tpl->tpl_vars['start']->total;$_smarty_tpl->tpl_vars['start']->value += $_smarty_tpl->tpl_vars['start']->step, $_smarty_tpl->tpl_vars['start']->iteration++){
$_smarty_tpl->tpl_vars['start']->first = $_smarty_tpl->tpl_vars['start']->iteration == 1;$_smarty_tpl->tpl_vars['start']->last = $_smarty_tpl->tpl_vars['start']->iteration == $_smarty_tpl->tpl_vars['start']->total;?>
                        <option><?php echo $_smarty_tpl->tpl_vars['start']->value;?>
</option>
                    <?php }} ?>
                </select>
            </div>
        </div>
    </div>

<?php }else{ ?>
    <p class="text-success">This signatory has no announcements yet.</p>
<?php }?>

<div class="row">
    <div class="span12">
        <div class="form-actions"> 
            <input class="btn btn-primary pull-right" type="button" value="Back" onclick="window.location.href = 'index.php'">
        </div>
    </div>
</div><?php }} ?>