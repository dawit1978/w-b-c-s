<?php /* Smarty version Smarty-3.1.12, created on 2023-06-16 11:55:27
         compiled from "C:wamp\www\wbcms\w-b-c-s\views\main_views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32362648c4d413533f9-52610953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43f9698cb0b97668bc0504bddc9a735516890c41' => 
    array (
      0 => 'C:wamp\\www\\wbcms\\w-b-c-s\\views\\main_views\\login.tpl',
      1 => 1686916524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32362648c4d413533f9-52610953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_648c4d41396ad3_01397400',
  'variables' => 
  array (
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_648c4d41396ad3_01397400')) {function content_648c4d41396ad3_01397400($_smarty_tpl) {?>

<div class="row">
    <div class="span3">
        <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/img/fg.png" />
        <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/img/m5.jpg" />
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