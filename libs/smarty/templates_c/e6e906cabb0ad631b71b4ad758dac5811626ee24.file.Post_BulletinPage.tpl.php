<?php /* Smarty version Smarty-3.1.12, created on 2023-06-04 11:37:43
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\signatory_views\Post_BulletinPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29800647c7787ae2ff6-52060004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6e906cabb0ad631b71b4ad758dac5811626ee24' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\signatory_views\\Post_BulletinPage.tpl',
      1 => 1364151211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29800647c7787ae2ff6-52060004',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentSchool_Year' => 0,
    'currentSemester' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_647c7788022416_88762366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_647c7788022416_88762366')) {function content_647c7788022416_88762366($_smarty_tpl) {?><!-- Breadcrumb-->
<?php smarty_template_function_breadcrumb($_smarty_tpl,array('lvl2'=>5,'lvl3'=>9,'activelvl'=>3));?>

<div class="row">
    <div class="span3">

        <!-- Header-->
        <h4 class="well center-text well-small">Bulletin</h4>

        <!-- Navigations-->
        <div class="row">
            <div class="span3">
                <?php smarty_template_function_nav_signatory($_smarty_tpl,array('index'=>1));?>

            </div>
        </div>

    </div>
    <div class="span9">

        <!-- Header-->
        <h4 class="well center-text well-small">Post Announcement</h4>

        <!-- Post Bulletin-->
        <form class="form-horizontal" method="post">

            <legend>Announcement Details:</legend>

            <div class="control-group">
                <div class="control-label"><b>Announcement: </b></div>
                <div class="controls">
                    <textarea required class="input-block-level" placeholder="Post a bulletin here....." name='post_message' rows="10"></textarea>
                </div>
            </div>
            
            <!-- Temporary kani lng sah... wala pa mn nnu nakapa ang backend-->
            <input type="hidden" name="school_year" value="<?php echo $_smarty_tpl->tpl_vars['currentSchool_Year']->value;?>
" />
            
            <!-- Temporary kani lng sah... wala pa mn nnu nakapa ang backend-->
            <input type="hidden" name="semester" value="<?php echo $_smarty_tpl->tpl_vars['currentSemester']->value;?>
" />

            

            <div class="control-group form-actions">
                <div class="pull-right">
                    <input type="submit" class="btn btn-primary" value="Post" name="postBulletin">
                    <input type="button" class="btn" value="Back" onclick="window.location.href = '../signatory/bulletin.php'">
                </div>
            </div>
        </form>
    </div>
</div><?php }} ?>