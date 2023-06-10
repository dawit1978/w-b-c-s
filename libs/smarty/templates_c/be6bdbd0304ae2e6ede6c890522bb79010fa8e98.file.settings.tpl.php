<?php /* Smarty version Smarty-3.1.12, created on 2023-05-30 09:42:16
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\main_views\settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17256475c4f80806b9-94020654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be6bdbd0304ae2e6ede6c890522bb79010fa8e98' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\main_views\\settings.tpl',
      1 => 1364151211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17256475c4f80806b9-94020654',
  'function' => 
  array (
    'settings' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'account_type' => 0,
    'surname' => 0,
    'firstname' => 0,
    'middlename' => 0,
    'email_add' => 0,
    'user_type' => 0,
    'ug_signatories' => 0,
    'signatory' => 0,
    'current_assignSign' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_6475c4f84dd224_77335829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6475c4f84dd224_77335829')) {function content_6475c4f84dd224_77335829($_smarty_tpl) {?><!-- Settings-->
<?php if (!function_exists('smarty_template_function_settings')) {
    function smarty_template_function_settings($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['settings']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <h4 class="well center-text well-small">Settings</h4>

    <?php if ($_smarty_tpl->tpl_vars['account_type']->value!="System Administrator"&&$_smarty_tpl->tpl_vars['account_type']->value!="Signatory in Charge"){?>
        <div class="alert alert-block alert-info">
            Choose to advance settings? <a href="student/index.php?action=advance_settings">Click Here</a>
        </div>  
    <?php }?>

    <form action='settings.php?action=verify' method='post' class="form-horizontal" enctype="multipart/form-data">

        <legend>Account Details: </legend>

        <div class="control-group">
            <label class="control-label"><b>Surname: </b></label>
            <div class="controls">
                <input type ='text' name='surname' value="<?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
" pattern="[A-Za-z\s]+" required title="Letters and spaces only">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><b>First Name: </b></label>
            <div class="controls">
                <input type='text' name='firstname' value="<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
" pattern="[A-Za-z\s\.]+" required title="Letters and spaces only">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><b>Middle Name: </b></label>
            <div class="controls">
                <input type='text'name='middleName' value="<?php echo $_smarty_tpl->tpl_vars['middlename']->value;?>
" pattern="[A-Za-z\s]+" required title="Letters and spaces only">
            </div>
        </div>

        

        <div class="control-group">
            <label class="control-label"><b>Email Address: </b></label>
            <div class="controls">
                <input type='text'name='emailAdd' value="<?php echo $_smarty_tpl->tpl_vars['email_add']->value;?>
" pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)" required>
            </div>
        </div>

        <legend>Change Password: </legend>

        <div class="control-group">
            <label class="control-label"><b>New password: </b></label>
            <div class="controls">
                
                    <input type='password' name='newpass' pattern="^.{7,50}$" title="Password minimum of 7 characters">
                
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><b>Confirm new password: </b></label>
            <div class="controls">
                <input type='password' name='confirmpass'>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['user_type']->value=="Signatory"){?>
            <legend>Signatory Designation: </legend>

            <div class="control-group">
                <label class="control-label"><b>Signatory: </b></label>
                <div class="controls">
                    <select id="sign_name" name="sign_name" class="select2 input-large"  required>
                        <?php  $_smarty_tpl->tpl_vars['signatory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['signatory']->_loop = false;
 $_smarty_tpl->tpl_vars['pk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ug_signatories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['signatory']->key => $_smarty_tpl->tpl_vars['signatory']->value){
$_smarty_tpl->tpl_vars['signatory']->_loop = true;
 $_smarty_tpl->tpl_vars['pk']->value = $_smarty_tpl->tpl_vars['signatory']->key;
?>
                            <option <?php if ($_smarty_tpl->tpl_vars['signatory']->value==$_smarty_tpl->tpl_vars['current_assignSign']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['signatory']->value;?>
</option>
                        <?php } ?>
                    </select>

                    
                </div>
            </div>
        <?php }?>

        <legend>Upload Picture</legend>

        <div class="control-group">
            <label class="control-label"><b>Upload Picture: </b></label>
            <div class="controls">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-preview thumbnail" style="width: 256px; height: 256px;"></div><br>
                    <span class="btn btn-file">
                        Browse<input type="file" name="photo">
                    </span>
                    <input type="button" class="btn fileupload-exists" value="Cancel" data-dismiss="fileupload" />
                </div>
                <span class="help-block">
                    <p class="text-info">Image file shall not exceed to 1MB. Recommended size is 256 x 256</p>
                </span>
            </div>
        </div>

        

        <legend>Authentication: </legend>

        <div class="control-group">
            <label class="control-label"><b>Old password: </b></label>
            <div class="controls">
                <input type='password' name='oldpass' required>
            </div>
        </div>

        <div class="control-group form-actions">
            <div class="controls pull-right">
                <input class="btn btn-primary" type='submit' value='Save'>
                <input class="btn" type='button' value='Cancel' onclick="window.history.back();">
            </div>
        </div>
    </form>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<?php if ($_smarty_tpl->tpl_vars['account_type']->value!="System Administrator"&&$_smarty_tpl->tpl_vars['account_type']->value!="Signatory in Charge"){?>
    <?php smarty_template_function_settings($_smarty_tpl,array());?>

<?php }else{ ?>

    <?php smarty_template_function_breadcrumb($_smarty_tpl,array('lvl2'=>8,'activelvl'=>2));?>


    <div class="row">
        <div class="span3">
            <?php if ($_smarty_tpl->tpl_vars['account_type']->value=="System Administrator"){?>
                <h4 class="well center-text well-small">Settings</h4>
                <?php smarty_template_function_nav_admin($_smarty_tpl,array());?>

            <?php }elseif($_smarty_tpl->tpl_vars['account_type']->value=="Signatory in Charge"){?>
                <h4 class="well center-text well-small">Settings</h4>
                <?php smarty_template_function_nav_signatory($_smarty_tpl,array('index'=>5));?>

            <?php }?>

        </div>
        <div class="span9">
            <?php smarty_template_function_settings($_smarty_tpl,array());?>

        </div>
    </div>
<?php }?><?php }} ?>