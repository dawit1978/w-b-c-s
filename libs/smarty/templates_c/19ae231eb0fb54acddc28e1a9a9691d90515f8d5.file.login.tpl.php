<?php /* Smarty version Smarty-3.1.12, created on 2023-05-29 18:37:29
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\main_views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35846474f0e966d038-22834930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19ae231eb0fb54acddc28e1a9a9691d90515f8d5' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\main_views\\login.tpl',
      1 => 1364151211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35846474f0e966d038-22834930',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_6474f0e96f1a68_20969001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6474f0e96f1a68_20969001')) {function content_6474f0e96f1a68_20969001($_smarty_tpl) {?>

<div class="row">
    <div class="span3">
        <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/img/title.png" />
    </div>
    <div class="span5">
        <form action="index.php?action=login" method="post" class="form-horizontal">
            <legend>Login</legend>
            <div class="control-group">
                <label class="control-label">Username: </label>
                <div class="controls">
                    <input type="text" placeholder="Enter Your Username" name = "username" autofocus required>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Password: </label>
                <div class="controls">
                    <input type="password" placeholder="Enter Your Password" name = "password" required>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <button class="btn btn-primary" type="submit">
                        <i class="icon-signin icon-white"></i>  Login
                    </button>
                    <a href="#forgot_pass" class="btn btn-link" data-toggle="modal">Forgot Password?</a>
                </div>
            </div>    
        </form>
        
        
    </div>
</div>

<?php }} ?>