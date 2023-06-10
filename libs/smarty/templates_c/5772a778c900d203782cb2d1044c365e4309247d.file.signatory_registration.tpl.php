<?php /* Smarty version Smarty-3.1.12, created on 2023-06-06 17:31:56
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\main_views\signatory_registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:628364765ad5f25b11-26232750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5772a778c900d203782cb2d1044c365e4309247d' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\main_views\\signatory_registration.tpl',
      1 => 1686072710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '628364765ad5f25b11-26232750',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_64765ad64fa7f9_89125994',
  'variables' => 
  array (
    'ug_signatories' => 0,
    'i' => 0,
    'host' => 0,
    's_name' => 0,
    'f_name' => 0,
    'm_name' => 0,
    'e_add' => 0,
    'signatory' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64765ad64fa7f9_89125994')) {function content_64765ad64fa7f9_89125994($_smarty_tpl) {?><script>
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
");  temp = count + 1;
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

<form method='post' class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/signatory_registration.php?action=register"
    enctype="multipart/form-data">
    
        <legend>Login Information: </legend>

        <div class="control-group">
            <label class="control-label"><b>Username: </b></label>
            <div class="controls">
                <input type='text' name='uname' value="" maxlength="15" pattern="[A-Za-z\s\.\-]+" required
                    title="Letters and numbers only.">

            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><b>Password: </b></label>
            <div class="controls">

                <input id="password_entered" type='password' name='newpass' pattern=".{4,32}" title="Minimum 4 characters"
                    required>

            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><b>Re-type Password: </b></label>
            <div class="controls">
                <input id="retyped_password_entered" type='password' name='confirmpass' pattern=".{4,32}"
                    onblur="checkPasswordEquality()" required>
            </div>
        </div>

        <legend>Personal Information: </legend>

        <div class="control-group">
            <label class="control-label"><b>Surname: </b></label>
            <div class="controls">
                <input type='text' name='surname'  
                    <?php if (isset($_smarty_tpl->tpl_vars['s_name']->value)){?> value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" 
                    <?php }?> 
                    
                            pattern="[A-Za-z\s\-]{2,32}" required title="Letters and spaces only">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label"><b>First Name: </b></label>
                    <div class="controls">
                        <input type='text' name='firstname'  
                            <?php if (isset($_smarty_tpl->tpl_vars['f_name']->value)){?> value="<?php echo $_smarty_tpl->tpl_vars['f_name']->value;?>
" 
                            <?php }?> 
                            
                                    pattern="[A-Za-z\s\.\-]{2,32}" required title="Letters and spaces only">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label"><b>Middle Initial: </b></label>
                            <div class="controls">
                                <input type='text' name='middleName' maxlength="1"  
                                    <?php if (isset($_smarty_tpl->tpl_vars['m_name']->value)){?> value="<?php echo $_smarty_tpl->tpl_vars['m_name']->value;?>
" 
                                    <?php }?>
                                         pattern="[A-Za-z\s\-]+" required title="Letters and spaces only">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label"><b>Email Address: </b></label>
                                    <div class="controls">
                                        <input type='text' name='emailAdd'  
                                            <?php if (isset($_smarty_tpl->tpl_vars['e_add']->value)){?> value="<?php echo $_smarty_tpl->tpl_vars['e_add']->value;?>
" 
                                            <?php }?> 
                                            
                                                pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)"  required>
                                        </div>
                                    </div>

                                    <legend>Signatory Designation: </legend>

                                    <div class="control-group">
                                        <label class="control-label"><b>Signatory: </b></label>
                                        <div class="controls">
                                            <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
                                            <select id="sign_name" name="sign_name" class="select2 input-large" required onchange="">
                                                <?php  $_smarty_tpl->tpl_vars['signatory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['signatory']->_loop = false;
 $_smarty_tpl->tpl_vars['pk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ug_signatories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['signatory']->key => $_smarty_tpl->tpl_vars['signatory']->value){
$_smarty_tpl->tpl_vars['signatory']->_loop = true;
 $_smarty_tpl->tpl_vars['pk']->value = $_smarty_tpl->tpl_vars['signatory']->key;
?>
                                                    <option><?php echo $_smarty_tpl->tpl_vars['signatory']->value;?>
</option>
                                                    <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
                                                <?php } ?>
                                                
                                            </select>
                                            

                                            
                                            </div>
                                        </div>

                                        <legend>Personal Identification: </legend>

                                        <div class="control-group">
                                            <label class="control-label"><b>Upload Picture: </b></label>
                                            <div class="controls">
                                                <input type="file" name="photo">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <div class="controls">
                                                <input class="btn btn-primary" type='Submit' value='Register' name='Register'>
                                                <a href='/student-online-clearance-system-master/SOCS/index.php'> Cancel</a>
                                            </div>
                                        </div>
                                    </form><?php }} ?>