<?php /* Smarty version Smarty-3.1.12, created on 2023-06-08 10:06:01
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\main_views\UIsections.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56306474f098dda7f3-19117532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7be58eab8949fbde1f8f031e6479bf65ccfd03f1' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\main_views\\UIsections.tpl',
      1 => 1686218709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56306474f098dda7f3-19117532',
  'function' => 
  array (
    'welcome_navigations' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'nav_admin' => 
    array (
      'parameter' => 
      array (
        'index' => 0,
      ),
      'compiled' => '',
    ),
    'search_input' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'schoolyear_sem_inputs' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'search' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'archiveSearch' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'nav_user_accounts' => 
    array (
      'parameter' => 
      array (
        'index' => 0,
      ),
      'compiled' => '',
    ),
    'nav_signatories' => 
    array (
      'parameter' => 
      array (
        'index' => 0,
      ),
      'compiled' => '',
    ),
    'nav_departments' => 
    array (
      'parameter' => 
      array (
        'flag' => 0,
        'index' => 0,
      ),
      'compiled' => '',
    ),
    'nav_signatory' => 
    array (
      'parameter' => 
      array (
        'index' => 0,
      ),
      'compiled' => '',
    ),
    'upload_excel' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'replace_dept_signatory' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'add_dept_signatory' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'breadcrumb' => 
    array (
      'parameter' => 
      array (
        'lvl2' => 0,
        'lvl3' => 0,
        'lvl4' => 0,
        'lvl5' => 0,
        'activelvl' => 0,
        'sig_name' => '',
        'dept_name' => '',
        'course_name' => '',
      ),
      'compiled' => '',
    ),
    'forgot_pass_modal' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_6474f099793467_42052952',
  'variables' => 
  array (
    'index' => 0,
    'host' => 0,
    'filter' => 0,
    'user_type' => 0,
    'mySchool_Year' => 0,
    'sy_attended' => 0,
    'year' => 0,
    'currentSchool_Year' => 0,
    'currentSemester' => 0,
    'clearedStatus' => 0,
    'flag' => 0,
    'Dept_name' => 0,
    'excel_file' => 0,
    'SignatoryList' => 0,
    'i' => 0,
    'activelvl' => 0,
    'lvl2' => 0,
    'arr_level2' => 0,
    'arr_level2_links' => 0,
    'lvl3' => 0,
    'arr_level3' => 0,
    'sig_name' => 0,
    'dept_name' => 0,
    'lvl4' => 0,
    'arr_level4' => 0,
    'lvl5' => 0,
    'arr_level5' => 0,
    'course_name' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6474f099793467_42052952')) {function content_6474f099793467_42052952($_smarty_tpl) {?><!-- Welcome Navigations-->
<?php if (!function_exists('smarty_template_function_welcome_navigations')) {
    function smarty_template_function_welcome_navigations($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['welcome_navigations']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <ul class="nav">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="index.php?action=student_registrationForm">Register</a>
        </li>
    </ul>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<!-- Admin Navigations-->
<?php if (!function_exists('smarty_template_function_nav_admin')) {
    function smarty_template_function_nav_admin($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['nav_admin']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <ul class="nav nav-tabs nav-stacked">
        <li class="<?php if ($_smarty_tpl->tpl_vars['index']->value==1){?>active<?php }?>">
            <a href='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/index.php?user_type=Student'>
                <i class="icon-user"></i> User Accounts
            </a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['index']->value==2){?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/signatory_list_manager.php">
                <i class="icon-edit"></i> Signatories
            </a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['index']->value==3){?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/department_list_manager.php">
                <i class="icon-socs-library"></i> Departments
            </a>
        </li>
    </ul>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<!-- Search Inputs-->
<?php if (!function_exists('smarty_template_function_search_input')) {
    function smarty_template_function_search_input($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['search_input']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php if (isset($_smarty_tpl->tpl_vars['filter']->value)){?>
        <input type="hidden" value="filter" name="action">
        <input id="search" class="span3" type="search" placeholder="Search..." value="<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
" name="filterName">
        <?php if (isset($_smarty_tpl->tpl_vars['user_type']->value)){?>
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user_type']->value;?>
" name="user_type">
        <?php }?>
    <?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<!-- School Year and Semester Inputs-->
<?php if (!function_exists('smarty_template_function_schoolyear_sem_inputs')) {
    function smarty_template_function_schoolyear_sem_inputs($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['schoolyear_sem_inputs']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>

    <select id="school_year" class="select2 input-medium" name="school_year">
        <?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['year']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mySchool_Year']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value){
$_smarty_tpl->tpl_vars['year']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['year']->key;
?>

            <?php if ($_smarty_tpl->tpl_vars['sy_attended']->value>=$_smarty_tpl->tpl_vars['year']->value){?>
                <?php if ($_smarty_tpl->tpl_vars['year']->value==$_smarty_tpl->tpl_vars['currentSchool_Year']->value){?>
                    <option selected><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
                <?php }else{ ?>
                    <option><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
                <?php }?>
            <?php }?>

        <?php } ?>
    </select>

    <select id="semester" class="select2 input-medium" name="semester">

        <?php if ($_smarty_tpl->tpl_vars['currentSemester']->value=='First'){?>
            <option selected>First</option>
            <option>Second</option>
            <option>Summer</option>
        <?php }elseif($_smarty_tpl->tpl_vars['currentSemester']->value=='Second'){?>
            <option>First</option>
            <option selected>Second</option>
            <option>Summer</option>
        <?php }else{ ?>
            <option>First</option>
            <option>Second</option>
            <option selected>Summer</option>
        <?php }?>

    </select>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<!-- Search Bar-->
<?php if (!function_exists('smarty_template_function_search')) {
    function smarty_template_function_search($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['search']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php if (isset($_smarty_tpl->tpl_vars['filter']->value)){?>

        <form class="navbar-form pull-right">
            <input type="hidden" value="filter" name="action">
            <input id="search" class="span3" type="search" placeholder="Search..." value="<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
" name="filterName">
            <?php if (isset($_smarty_tpl->tpl_vars['user_type']->value)){?>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user_type']->value;?>
" name="user_type">
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['clearedStatus']->value)){?>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['clearedStatus']->value;?>
" name="status">
            <?php }?>

            <button class="btn btn-success" type="submit">
                <i class="icon-search icon-white"></i>
            </button>
        </form>

    <?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<!-- Archive Search Bar-->
<?php if (!function_exists('smarty_template_function_archiveSearch')) {
    function smarty_template_function_archiveSearch($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['archiveSearch']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>

    <form class="navbar-form pull-right" method="post">

        <select id="school_year" class="select2 input-large" name="school_year">
            <?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['year']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mySchool_Year']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value){
$_smarty_tpl->tpl_vars['year']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['year']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['year']->value==$_smarty_tpl->tpl_vars['currentSchool_Year']->value){?>
                    <option selected><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
                <?php }else{ ?>
                    <option><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
                <?php }?>
            <?php } ?>
        </select>

        <select class="select2 input-large" id="semester" name="semester">
            <?php if ($_smarty_tpl->tpl_vars['currentSemester']->value=='First'){?>
                <option selected>First</option>
                <option>Second</option>
                <option>Summer</option>
            <?php }elseif($_smarty_tpl->tpl_vars['currentSemester']->value=='Second'){?>
                <option>First</option>
                <option selected>Second</option>
                <option>Summer</option>
            <?php }else{ ?>
                <option>First</option>
                <option>Second</option>
                <option selected>Summer</option>
            <?php }?>
        </select>

        <button class="btn btn-primary" type="submit" name="GO">
            <i class="icon-search"></i>
        </button>
    </form>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<!-- Admin Functions-->

<!-- User Accounts Navigation-->
<?php if (!function_exists('smarty_template_function_nav_user_accounts')) {
    function smarty_template_function_nav_user_accounts($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['nav_user_accounts']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>

    <ul class="nav">

        <li class="divider-vertical"></li>

        <?php if ($_smarty_tpl->tpl_vars['index']->value==4){?>
            <li>
                <a class="tips" href="#" title="Back">
                    <i class="icon-arrow-left"></i>
                </a>
            </li>

            <li class="divider-vertical"></li>
        <?php }?>

        <li <?php if ($_smarty_tpl->tpl_vars['index']->value==1){?>class="active" <?php }?>>
            <a class="tips" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/index.php?user_type=Student" title="List of Students">
                <i class="icon-user"></i>
            </a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['index']->value==2){?>class="active" <?php }?>>
            <a class="tips" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/index.php?user_type=Signatory"
                title="List of Signatories-in-charge">
                <i class="icon-coffee"></i>
            </a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['index']->value==3){?>class="active" <?php }?>>
            <a class="tips" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/unconfirmed_signatory.php"
                title="List of Unconformed Signatories-in-charge">
                <i class="icon-warning-sign"></i>
            </a>
        </li>
        <li class="divider-vertical"></li>

        <?php if ($_smarty_tpl->tpl_vars['index']->value==1){?>
            <li class="dropdown">
                <a class="tips" href="#upload_excel" data-toggle="modal" title="Upload Enrolled Students">
                    <i class="icon-user"></i><i class="icon-arrow-up icon-tail"></i>
                </a>
            </li>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['index']->value!=1){?>
            <li class="dropdown">
                <a class="tips" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/index.php?action=addSignatoryInCharge"
                    title="Add Signatory-in-charge">
                    <i class="icon-coffee"></i><i class="icon-plus icon-tail"></i>
                </a>
            </li>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['index']->value!=4){?>
            
        <?php }?>

        <li class="divider-vertical"></li>
    </ul>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<!-- Signatories Navigations-->
<?php if (!function_exists('smarty_template_function_nav_signatories')) {
    function smarty_template_function_nav_signatories($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['nav_signatories']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>

    <ul class="nav">

        <li class="divider-vertical"></li>

        <?php if ($_smarty_tpl->tpl_vars['index']->value==2){?>
            <li>
                <a class="tips" href="#" title="Back">
                    <i class="icon-arrow-left"></i>
                </a>
            </li>

            <li class="divider-vertical"></li>
        <?php }?>

        <li <?php if ($_smarty_tpl->tpl_vars['index']->value==2){?>class="active" <?php }?>>
            <a class="tips" title="Add Signatory"
                href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/signatory_list_manager.php?action=addSignatory">
                <i class="icon-edit"></i><i class="icon-plus icon-tail"></i>
            </a>
        </li>

        <?php if ($_smarty_tpl->tpl_vars['index']->value!=2){?>
            
        <?php }?>

        <li class="divider-vertical"></li>
    </ul>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<!-- Departments Navigations-->
<?php if (!function_exists('smarty_template_function_nav_departments')) {
    function smarty_template_function_nav_departments($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['nav_departments']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>

    <ul class="nav">
        <li class="divider-vertical"></li>

        <?php if ($_smarty_tpl->tpl_vars['flag']->value==1){?>

            <li>
                <a class="tips" data-toggle="tooltip" title="Add Department"
                    href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/department_list_manager.php?action=addDepartment">
                    <i class="icon-socs-library"></i><i class="icon-plus icon-tail"></i>
                </a>
            </li>

        <?php }else{ ?>

            <li <?php if ($_smarty_tpl->tpl_vars['index']->value==1){?>class="active" <?php }?>>
                <a class="tips" data-toggle="tooltip" title="List of Course under <?php echo $_smarty_tpl->tpl_vars['Dept_name']->value;?>
"
                    href='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/course_list_byDepartment.php'>
                    <i class="icon-book"></i>
                </a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['index']->value==2){?>class="active" <?php }?>>
                <a class="tips" data-toggle="tooltip" title="List of Signatory for undergraduates under <?php echo $_smarty_tpl->tpl_vars['Dept_name']->value;?>
"
                    href='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/signatorialList.php'>
                    <i class="icon-socs-profile"></i>
                </a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['index']->value==3){?>class="active" <?php }?>>
                <a class="tips" data-toggle="tooltip" title="List of Signatory for graduates under <?php echo $_smarty_tpl->tpl_vars['Dept_name']->value;?>
"
                    href='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/Grad_SignatorialList.php'>
                    <i class="icon-socs-graduate"></i>
                </a>
            </li>
            <li class="divider-vertical"></li>

            <?php if ($_smarty_tpl->tpl_vars['index']->value==1){?>
                <li class="dropdown">
                    <a class="tips" data-toggle="tooltip" title="Add Course under <?php echo $_smarty_tpl->tpl_vars['Dept_name']->value;?>
"
                        href='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/course_list_byDepartment.php?action=addCourse'>
                        <i class="icon-book"></i><i class="icon-plus icon-tail"></i>
                    </a>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['index']->value!=1){?>
                <li class="dropdown">
                    <a class="tips" data-toggle="modal" title="Add Signatory under <?php echo $_smarty_tpl->tpl_vars['Dept_name']->value;?>
" href='#add_dept_signatory'>
                        <i class="icon-edit"></i><i class="icon-plus icon-tail"></i>
                    </a>
                </li>
            <?php }?>
        <?php }?>
        <li class="divider-vertical"></li>
    </ul>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<!-- Signatory-in-charge Functions-->

<!-- Signatory Navigation-->
<?php if (!function_exists('smarty_template_function_nav_signatory')) {
    function smarty_template_function_nav_signatory($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['nav_signatory']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <ul class="nav nav-tabs nav-stacked">
        <li <?php if ($_smarty_tpl->tpl_vars['index']->value==0){?>class="active" <?php }?>>
            <a href='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/signatory/index.php'>
                <i class="icon-user"></i> Students
            </a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['index']->value==1){?>class="active" <?php }?>>
            <a href='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/signatory/bulletin.php'>
                <i class="icon-bullhorn"></i> Bulletin
            </a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['index']->value==2){?>class="active" <?php }?>>
            <a href='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/signatory/requirements.php'>
                <i class="icon-socs-folder-check"></i> Requirements
            </a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['index']->value==3){?>class="active" <?php }?>>
            <a href='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/signatory/uploadsignature.php'>
                <i class="icon-upload-alt"></i> Upload Signature
            </a>
        </li>
    </ul>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<!-- Upload Signatory Modal-->
<?php if (!function_exists('smarty_template_function_upload_excel')) {
    function smarty_template_function_upload_excel($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['upload_excel']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>

    <div id="upload_excel" class="modal hide fade">
        <div class="modal-header">
            <button class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
            <h4>Upload List of Enrolled Students</h4>
        </div>

        <div class="fileupload fileupload-new" data-provides="fileupload">
            <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/index.php?action=upload_excel_file" method="post"
                enctype="multipart/form-data">
                <div class="modal-body">
                    <?php if (isset($_smarty_tpl->tpl_vars['excel_file']->value)){?>

                        <div class="control-group">
                            <label class="control-label">
                                <b>Current File: </b>
                            </label>
                            <div class="controls">
                                <i class="icon-ms-excel" style="font-size: 22px;"></i> student_current_enroll.xls
                            </div>
                        </div>

                        

                    <?php }?>

                    <div class="control-group">
                        <label class="control-label">
                            <b>Upload MS Excel File: </b>
                        </label>
                        <div class="controls">
                            <span class="btn btn-file">
                                Browse<input type="file" name="excel_file" />
                            </span>
                        </div>
                    </div>

                    <div class="control-group fileupload-exists alert alert-info">
                        <label class="control-label">
                            <b>To be uploaded file: </b></label>
                        <div class="controls">
                            <i class="icon-file-alt icon-2x"></i>
                            <span class="fileupload-preview"></span>
                            <div class="pull-right">
                                <button class="btn pull-right" data-dismiss="fileupload" type="button">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary fileupload-exists" type="submit" name="save">Upload</button>
                    <button class="btn fileupload-exists" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary fileupload-new" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<!-- Replace Signatory in departmet Modal-->
<?php if (!function_exists('smarty_template_function_replace_dept_signatory')) {
    function smarty_template_function_replace_dept_signatory($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['replace_dept_signatory']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <div id="edit_dept_signatory" class="modal hide fade">
        <div class="modal-header">
            <button class="close" data-dismiss="modal">
                <i class="icon-remove"></i>
            </button>
            <h4>Replace <span id="signatory_name"></span> Signatory</h4>
        </div>

        <form class="form-horizontal">
            <div class="modal-body" style="min-height: 75px;">
                <div class="control-group">
                    <label class="control-label"><b> Signatory Name: </b></label>
                    <div class="controls">
                        <input type="hidden" name="action" value="editSignatorialList" />
                        <?php if (isset($_smarty_tpl->tpl_vars['SignatoryList']->value)){?>
                            <select class='select2 input-large' id='editSignatorialList' name="newSign_Name"
                                data-placeholder="Select Signatory" required>
                                <option></option>
                                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SignatoryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                    <option><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                <?php } ?>
                            </select>
                        <?php }?>
                        <span id="hidden_input"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type='submit' class='btn btn-primary' value='Save' id='save'>
                <input type='button' class='btn' value='Cancel' data-dismiss="modal">
            </div>
        </form>
    </div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<!-- Add Signatory to a department Modal-->
<?php if (!function_exists('smarty_template_function_add_dept_signatory')) {
    function smarty_template_function_add_dept_signatory($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['add_dept_signatory']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <div id="add_dept_signatory" class="modal hide fade">
        <div class="modal-header">
            <button class="close" data-dismiss="modal">
                <i class="icon-remove"></i>
            </button>
            <h4>Add Signatory</h4>
        </div>

        <form class="form-horizontal">
            <div class="modal-body" style="min-height: 75px;">
                <label class="control-label">
                    <b>Signatory Name</b>
                </label>
                <div class="controls">
                    <input type="hidden" name="action" value="addSignatory">

                    <?php if (isset($_smarty_tpl->tpl_vars['SignatoryList']->value)){?>
                        <select name="cmdSignatory" class="select2 input-large" data-placeholder="Select Signatory" required>
                            <option></option>
                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SignatoryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                <option><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                            <?php } ?>
                        </select>
                    <?php }?>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Add</button>
                <button type='button' class='btn' data-dismiss="modal">Cancel</button>
            </div>
        </form>
    </div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<!-- Breadcrumb-->
<?php if (!function_exists('smarty_template_function_breadcrumb')) {
    function smarty_template_function_breadcrumb($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['breadcrumb']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>

    <?php $_smarty_tpl->tpl_vars['arr_level2'] = new Smarty_variable(array('','User Accounts','Signatories','Department','Students','Bulletin','Requirements','Upload Signature','Settings'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['arr_level2_links'] = new Smarty_variable(array('','administrator/index.php','administrator/signatory_list_manager.php','administrator/department_list_manager.php','signatory/index.php','signatory/bulletin.php','signatory/requirements.php','signatory/uploadsignature.php'), null, 0);?>

    <?php $_smarty_tpl->tpl_vars['arr_level3'] = new Smarty_variable(array('','List of Students','List of Signatories-in-charge','Add Signatory-in-charge','List of Unconfirmed Signatories-in-charge','Add Signatory','Edit ','Add Department','','Post Announcement','View Announcement','Edit Requirement','Add Requirement'), null, 0);?>

    <?php $_smarty_tpl->tpl_vars['arr_level4'] = new Smarty_variable(array('','Courses','Signatories for Undergraduates','Signatories for Graduates'), null, 0);?>

    <?php $_smarty_tpl->tpl_vars['arr_level5'] = new Smarty_variable(array('','Add Course','Edit '), null, 0);?>

    <ul class="breadcrumb">
        <li>

            <?php if ('lvl2'>4){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/signatory/index.php">Home</a>
            <?php }else{ ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/index.php">Home</a>
            <?php }?>

            <span class="divider">
                <i class="icon-chevron-right"></i>
            </span>
        </li>

        <?php if ($_smarty_tpl->tpl_vars['activelvl']->value==2&&$_smarty_tpl->tpl_vars['lvl2']->value!=0){?>
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['arr_level2']->value[$_smarty_tpl->tpl_vars['lvl2']->value];?>
</li>
        <?php }elseif($_smarty_tpl->tpl_vars['lvl2']->value!=0){?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['arr_level2_links']->value[$_smarty_tpl->tpl_vars['lvl2']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['arr_level2']->value[$_smarty_tpl->tpl_vars['lvl2']->value];?>
</a>
                <span class="divider">
                    <i class="icon-chevron-right"></i>
                </span>
            </li>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['activelvl']->value==3&&$_smarty_tpl->tpl_vars['lvl3']->value!=0){?>
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['arr_level3']->value[$_smarty_tpl->tpl_vars['lvl3']->value];?>
<?php echo $_smarty_tpl->tpl_vars['sig_name']->value;?>
<?php echo $_smarty_tpl->tpl_vars['dept_name']->value;?>
</li>
        <?php }elseif($_smarty_tpl->tpl_vars['lvl3']->value!=0){?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/course_list_byDepartment.php"><?php echo $_smarty_tpl->tpl_vars['arr_level3']->value[$_smarty_tpl->tpl_vars['lvl3']->value];?>
<?php echo $_smarty_tpl->tpl_vars['dept_name']->value;?>
</a>
                <span class="divider">
                    <i class="icon-chevron-right"></i>
                </span>
            </li>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['activelvl']->value==4&&$_smarty_tpl->tpl_vars['lvl4']->value!=0){?>
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['arr_level4']->value[$_smarty_tpl->tpl_vars['lvl4']->value];?>
</li>
        <?php }elseif($_smarty_tpl->tpl_vars['lvl4']->value!=0){?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/administrator/course_list_byDepartment.php"><?php echo $_smarty_tpl->tpl_vars['arr_level4']->value[$_smarty_tpl->tpl_vars['lvl4']->value];?>
</a>
                <span class="divider">
                    <i class="icon-chevron-right"></i>
                </span>
            </li>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['activelvl']->value==5&&$_smarty_tpl->tpl_vars['lvl5']->value!=0){?>
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['arr_level5']->value[$_smarty_tpl->tpl_vars['lvl5']->value];?>
<?php echo $_smarty_tpl->tpl_vars['course_name']->value;?>
</li>
        <?php }?>
    </ul>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<?php if (!function_exists('smarty_template_function_forgot_pass_modal')) {
    function smarty_template_function_forgot_pass_modal($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['forgot_pass_modal']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <div id="forgot_pass" class="modal hide fade">
        <div class="modal-header">
            <a class="close" href="#" data-dismiss="modal">
                <i class="icon-remove"></i>
            </a>
            <h4>Input your username</h4>
        </div>

        <form class="form-horizontal" method="post" action="index.php?action=ForgotPass">

            <div class="modal-body">
                <div class="control-group" id="forgotPass">
                    <label class="control-label">
                        <b>Username:</b> </label>
                    <div class="controls">
                        <input type="text" placeholder="Enter Your Username" name="ForgotPass">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="control-group" id="forgotOk">
                    <label class="control-label"></label>
                    <div class="controls">
                        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                        <button class="btn" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>
<?php }} ?>