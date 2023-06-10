<?php /* Smarty version Smarty-3.1.12, created on 2023-05-29 12:37:23
         compiled from "C:\xampp\htdocs\projects\student-online-clearance-system-master\SOCS\views\templates\bootstrap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144185552964749c835e28a2-52586411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93aea204dfe7ba28d69b86c03689b3172526f04b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\student-online-clearance-system-master\\SOCS\\views\\templates\\bootstrap.tpl',
      1 => 1364151211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144185552964749c835e28a2-52586411',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'host' => 0,
    'username' => 0,
    'photo' => 0,
    'surname' => 0,
    'firstname' => 0,
    'middlename' => 0,
    'account_type' => 0,
    'assign_sign' => 0,
    'alert' => 0,
    'content' => 0,
    'sy_attended' => 0,
    'sem_attended' => 0,
    'most_current_sy' => 0,
    'most_current_sem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_64749c8456ccb4_17908889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64749c8456ccb4_17908889')) {function content_64749c8456ccb4_17908889($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\projects\\student-online-clearance-system-master\\SOCS\\libs\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
 - Student Online Clearance System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/css/font-awesome-ext.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/css/bootstrap-fileupload.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/select2/select2.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/socs-icons/socs-icons.css">
        <style>

            @media (min-width: 480px) {

                body{
                    background-image: url('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/img/background.png');
                }
                
                .socs-content{
                    background-color: white;
                    box-shadow: 5px 5px 7px #444;
                    padding-left: 20px;
                    padding-right: 20px;
                    padding-top: 10px;
                    padding-bottom: 20px;
                    opacity: 0.9;
                    margin-bottom: 5px;
                }
            }
            
            @media (max-width: 480px) {

                body{
                    font-size: 75%;
                }
            }

            body{
                padding-top: 45px;
                padding-bottom: 40px;
                background-attachment: fixed;
                background-position: top;
                background-repeat: repeat-x;
            }

            #welcome{
                background: url('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/img/title.png');
                background-position: bottom right;
                background-repeat: no-repeat;
            }

            #header{
                background-image: url('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/img/header.png');
                background-position: right;
                background-repeat: no-repeat;
            }

        </style>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/css/main.css">

        <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/js/calendarview.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/js/prototype.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <?php echo $_smarty_tpl->getSubTemplate ('UIsections.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <div class="navbar navbar-inverse navbar-fixed-top" id="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.php"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/img/logo.png"> SOCS</a>
                    <div class="nav-collapse collapse">

                        <?php if (isset($_smarty_tpl->tpl_vars['username']->value)){?>
                            <div class="btn-group pull-right">
                                <button class="btn btn-inverse" onclick="window.location.href = 'index.php';">
                                    <i class="icon-user icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

                                </button>
                                <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/settings.php"><i class="icon-wrench"></i> Settings</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/index.php?action=logout"><i class="icon-off"></i> Logout</a>
                                    </li>
                                </ul>
                            </div>

                        <?php }elseif(isset($_GET['action'])&&!isset($_smarty_tpl->tpl_vars['username']->value)){?>

                            <?php smarty_template_function_welcome_navigations($_smarty_tpl,array());?>


                            <?php if ($_GET['action']=="student_registrationForm"){?>
                                <form class="navbar-form pull-right" action="index.php?action=login" method="post">
                                    <input class="span2" type="text" placeholder="Username" name="username" required>
                                    <input class="span2" type="password" placeholder="Password" name="password" required>
                                    <button type="submit" class="btn"><i class="icon-check"></i> Sign in</button>
                                </form>
                            <?php }?>

                        <?php }else{ ?>
                            <?php smarty_template_function_welcome_navigations($_smarty_tpl,array());?>


                            <form class="navbar-form pull-right" action="index.php?action=login" method="post">
                                <input class="span2" type="text" placeholder="Username" name="username" required>
                                <input class="span2" type="password" placeholder="Password" name="password" required>
                                <button type="submit" class="btn"><i class="icon-check"></i> Sign in</button>
                            </form>
                        <?php }?>

                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <?php if (isset($_smarty_tpl->tpl_vars['username']->value)){?>
            <div id="header" class="container socs-content">
                <div class="row">
                    <div class="span1">

                        <?php if (isset($_smarty_tpl->tpl_vars['photo']->value)){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" class="img-polaroid"/>
                        <?php }else{ ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/photos/default.png" class="img-polaroid"/>
                        <?php }?>

                    </div>
                    <div class="span5">
                        <h4><?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['middlename']->value;?>
.</h4>
                        <h5>- <?php echo $_smarty_tpl->tpl_vars['account_type']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['assign_sign']->value;?>
</h5>
                    </div>
                </div>
            </div>
        <?php }?>

        <div class="container socs-content">

            <?php if (isset($_GET['action'])){?>
                <?php if ($_smarty_tpl->tpl_vars['alert']->value!=''&&$_GET['action']=="logout"||$_GET['action']=="login_error"){?>
                    <?php echo $_smarty_tpl->tpl_vars['alert']->value;?>

                <?php }?>   
            <?php }?>

            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


            <hr>

            <footer>
                <p>&copy; University of Southeastern Philippines - Institute of Computing - Student Online Clearance System <?php echo smarty_modifier_date_format(time(),"%Y");?>
</p>
            </footer>

        </div>

        <?php smarty_template_function_upload_excel($_smarty_tpl,array());?>

        <?php smarty_template_function_replace_dept_signatory($_smarty_tpl,array());?>

        <?php smarty_template_function_add_dept_signatory($_smarty_tpl,array());?>

        <?php smarty_template_function_forgot_pass_modal($_smarty_tpl,array());?>


        <?php if (isset($_GET['action'])){?>
            <?php if ($_smarty_tpl->tpl_vars['alert']->value!=''&&$_GET['action']!="logout"&&$_GET['action']!="login_error"){?>
                <div id="socs-alert" class="modal hide fade">
                    <div class="modal-body">
                        <?php echo $_smarty_tpl->tpl_vars['alert']->value;?>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            <?php }?>
        <?php }?>

        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
        <!--<script>window.jQuery || document.write('<script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>-->

        <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/js/vendor/jquery-1.8.3.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/js/vendor/bootbox.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/js/vendor/bootstrap-fileupload.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/js/vendor/bootstrap-progressbar.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/select2/select2.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/js/vendor/jquery.cookie.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/js/main.js"></script>

        <?php if (isset($_smarty_tpl->tpl_vars['sy_attended']->value)&&isset($_smarty_tpl->tpl_vars['sem_attended']->value)){?>
            <?php if (($_smarty_tpl->tpl_vars['sy_attended']->value!=$_smarty_tpl->tpl_vars['most_current_sy']->value||$_smarty_tpl->tpl_vars['sem_attended']->value!=$_smarty_tpl->tpl_vars['most_current_sem']->value)){?>
                <script type="text/javascript">

                    var renew = "<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/student/index.php?action=renew_student";
                    var username = <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 + "";

                    
                        $(document).ready(function() {

                            if ($.cookie(username) !== "no") {
                                bootbox.confirm("<div class='alert alert-info'><i class='icon-info-sign'></i> <strong>Alright!</strong> Classes are already starting. Do you want to renew your clearance?</div>", function(result) {
                                    if (result === true) {
                                        window.location.href = renew;
                                        $.removeCookie(username);
                                    } else {
                                        $.cookie(username, 'no', {expires: 1});
                                    }
                                });
                            }
                        });

                        $('#socs-renew').on('click', function() {
                            bootbox.confirm("<div class='alert alert-info'><i class='icon-info-sign'></i> <strong>Alright!</strong> Classes are already starting. Do you want to renew your clearance?</div>", function(result) {
                                if (result === true) {
                                    window.location.href = renew;
                                }
                            });
                        });
                    
                </script>
            <?php }?>
        <?php }?>

        

    </body>
</html>
<?php }} ?>