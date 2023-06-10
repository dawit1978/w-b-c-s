<?php /* Smarty version Smarty-3.1.12, created on 2023-06-07 09:18:31
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\administrator_views\Add_SignatoryInCharge.tpl" */ ?>
<?php /*%%SmartyHeaderCode:314546475c0a8e40555-73954399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '841294aabc14539f8f8b34e9a4cdd597e76da553' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\administrator_views\\Add_SignatoryInCharge.tpl',
      1 => 1686129500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314546475c0a8e40555-73954399',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_6475c0a938f7d0_24630542',
  'variables' => 
  array (
    'ug_signatories' => 0,
    'i' => 0,
    'signatories' => 0,
    'signatory' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6475c0a938f7d0_24630542')) {function content_6475c0a938f7d0_24630542($_smarty_tpl) {?><script>
    function newOptions() {
        var select = document.getElementById("sign_name");
        var hide = document.getElementById("hide").value;
        var flag = document.getElementById("flag").value;
        var count = 0;
        var temp = 0;
        if (select.value == "---------Next--------") {
            var holder = flag == 1 ? parseInt(hide) + 20 : parseInt(hide) + 10;
            select.innerHTML = "";
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ug_signatories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                if (count >= (holder - 10) && count < holder) {
                    select.options[select.options.length] = new Option("<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
");
                    temp = count + 1;
                }
                count++;
            <?php } ?>
            select.options[select.options.length] = new Option("---------Back--------");
            if (temp % 10 == 0) {
                select.options[select.options.length] = new Option("---------Next--------");
            }

            document.getElementById("hide").value = holder;
            document.getElementById("flag").value = "0";
        } else if (select.value == "---------Back--------") {


            var holder = parseInt(flag) == 0 ? parseInt(hide) - 20 : parseInt(hide) - 10;
            select.innerHTML = "";

            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ug_signatories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                if (count >= holder && count < holder + 10) {
                    select.options[select.options.length] = new Option("<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
");
                }
                count++;
            <?php } ?>

            if (parseInt(holder) != 0) {
                select.options[select.options.length] = new Option("---------Back--------");
            }
            select.options[select.options.length] = new Option("---------Next--------");

            document.getElementById("hide").value = holder;
            document.getElementById("flag").value = "1";
        }
    }
</script>

<!-- Breadcrumb-->
<?php smarty_template_function_breadcrumb($_smarty_tpl,array('lvl2'=>1,'lvl3'=>3,'activelvl'=>3));?>


<div class="row">
    <div class="span3">

        <!-- Header-->
        <h4 class="well center-text well-small">User Accounts</h4>

        <!-- Admin Navigations-->
        <?php smarty_template_function_nav_admin($_smarty_tpl,array('index'=>1));?>


    </div>
    <div class="span9">

        <!-- Header-->
        <h4 class="well center-text well-small">Add Signatory In-Charge</h4>

        

        <form method='post' class="form-horizontal">
            
                <legend>Login Information: </legend>

                <div class="control-group">
                    <label class="control-label"><b>Username: </b></label>
                    <div class="controls">
                        <input class="span3" type='text' name='uname' value="" maxlength="15" pattern="[A-Za-z\s\-]+"
                            required title="Letters and numbers only">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label"><b>Password: </b></label>
                    <div class="controls">
                        <input id="password_entered" class="span3" type='password' name='newpass'
                            pattern="[0-9a-zA-Z]{7,32}" title="Password minimum of 7 characters" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label"><b>Re-type Password: </b></label>
                    <div class="controls">
                        <input id="retyped_password_entered" class="span3" type='password' name='confirmpass'
                            pattern="[0-9a-zA-Z]{7,50}" onblur="checkPasswordEquality()" required>
                    </div>
                </div>

                <legend>Personal Information: </legend>

                <div class="control-group">
                    <label class="control-label"><b>Surname: </b></label>
                    <div class="controls">
                        <input class="span3" type='text' name='surname' value="" pattern="[A-Za-z\s]{2,15}" required
                            title="Letters and spaces only">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label"><b>First Name: </b></label>
                    <div class="controls">
                        <input class="span3" type='text' name='firstname' value="" pattern="[A-Za-z\s]{2,15}" required
                            title="Letters and spaces only">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label"><b>Middle Name: </b></label>
                    <div class="controls">
                        <input class="span3" type='text' name='middleName' value="" pattern="[A-Za-z\s]{1,15}" required
                            title="Letters and spaces only">
                    </div>
                </div>
            

            <legend>Signatory Designation: </legend>

            <div class="control-group">
                <label class="control-label">
                    <b>Signatory: </b>
                </label>
                <div class="controls">

                    <?php if (!isset($_smarty_tpl->tpl_vars['signatories']->value)){?>
                        <?php $_smarty_tpl->tpl_vars['signatories'] = new Smarty_variable(array("OCSC","OSS","CTLC","ICLC"), null, 0);?>
                    <?php }?>

                    <select class="select2 input-large" id="sign_name" name="sign_name" required
                        data-placeholder="Select Signatory">
                        <option></option>
                        <?php  $_smarty_tpl->tpl_vars['signatory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['signatory']->_loop = false;
 $_smarty_tpl->tpl_vars['pk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ug_signatories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['signatory']->key => $_smarty_tpl->tpl_vars['signatory']->value){
$_smarty_tpl->tpl_vars['signatory']->_loop = true;
 $_smarty_tpl->tpl_vars['pk']->value = $_smarty_tpl->tpl_vars['signatory']->key;
?>
                            <option><?php echo $_smarty_tpl->tpl_vars['signatory']->value;?>
</option>
                        <?php } ?>
                    </select>

                    
                    

                    
                    </div>
                </div>

                <div class="form-actions control-group">
                    <div class="pull-right">
                        <input class="btn btn-primary" type='Submit' value='Register' name='Register'>
                        <button class="btn" onclick="window.history.back();">Back</button>
                    </div>
                </div>
            </form>
        </div>
    </div><?php }} ?>