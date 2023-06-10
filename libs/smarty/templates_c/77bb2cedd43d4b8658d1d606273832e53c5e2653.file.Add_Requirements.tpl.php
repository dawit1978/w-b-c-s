<?php /* Smarty version Smarty-3.1.12, created on 2023-05-31 18:22:28
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\signatory_views\Add_Requirements.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32397647790646c7d97-25249518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77bb2cedd43d4b8658d1d606273832e53c5e2653' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\signatory_views\\Add_Requirements.tpl',
      1 => 1364151211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32397647790646c7d97-25249518',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listOfSignatory' => 0,
    'index' => 0,
    'i' => 0,
    'listOfSignatoryID' => 0,
    'listOfCourse_UnderSign' => 0,
    'listOfCourse_UnderSignID' => 0,
    'currentSchool_Year' => 0,
    'currentSemester' => 0,
    'listOfDepartments' => 0,
    'k' => 0,
    'listOfDepartmentsID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_64779064de6691_19959251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64779064de6691_19959251')) {function content_64779064de6691_19959251($_smarty_tpl) {?><script>
    //var select = document.getElementById("req_appliesTo").value;
    //alert(select);
    
    function change_req_appliesTo(){
    //var select = document.getElementById("req_appliesTo").value;
        
    var x = document.getElementById("req_appliesTo").selectedIndex;
    var select = document.getElementById("req_appliesTo").options;
        
    var SelectedIndex = select[x].index;
        
    $(document).ready(function(){
    $("#selected_Dept").hide();
    $("#selected_Course").hide();
    $("#selected_YearLevel").hide();
    $("#selected_Program").hide();
        
    if(parseInt(SelectedIndex) == 1){ $("#selected_Dept").show(); 
}else if(parseInt(SelectedIndex) == 2){ $("#selected_Course").show();
}else if(parseInt(SelectedIndex) == 3){ $("#selected_YearLevel").show();
}else if(parseInt(SelectedIndex) == 4){ $("#selected_Program").show();
}  
}); 
}
/*-------- end function ----------*/

function change_reqType(){
var x = document.getElementById("requirement_type").selectedIndex;
var select = document.getElementById  ("requirement_type").options;
        
var SelectedIndex = select[x].index;
        
$(document).ready(function(){
if(parseInt(SelectedIndex) == 1){ $("#Sign").show(); 
}else { $("#Sign").hide();
}  
}); 
}
/*-------- end function ----------*/


function newOptions(finder){
    var select = finder == 0 ? document.getElementById("sign_name") : document.getElementById("course_name");
    var hide = finder == 0 ? document.getElementById("hide").value : document.getElementById("course_hide").value;
    var flag = finder == 0 ? document.getElementById("flag").value : document.getElementById("course_flag").value;
    
    var hide_temp = finder == 0 ? document.getElementById("hide") : document.getElementById("course_hide");
    var flag_temp = finder == 0 ? document.getElementById("flag"): document.getElementById("course_flag");
    
    var newAssignArray = finder == 0 ? newAssignArray = getSignList() : getCourseList();
    
    var count = 0;
    var temp = 0;
    
    if(select.value == "---------Next--------"){ 
    var holder = flag == 1 ? parseInt(hide) + 20 : parseInt(hide) + 10;
    select.innerHTML = "";

    for(var x = 0; x < newAssignArray.length; x ++){
            if(count >= (holder - 10) && count <  holder){
            select.options[select.options.length] = new Option(newAssignArray[x][0],newAssignArray[x][1]);  temp = count + 1;
        }
        count ++;
    }     
    
        //alert(newAssignArray.length % temp);
       
        //if(!((newAssignArray.length % temp) == 0 && (temp % 10) > 0)){
            //if(!(newAssignArray.length == temp && (temp % 10) == 0)){
                select.options[select.options.length] = new Option("---------Back--------");
            //}
            if(!((newAssignArray.length == temp))){
                select.options[select.options.length] = new Option("---------Next--------");
            }
        //}
        
    hide_temp.value = holder;
    flag_temp.value = "0";
    }else if(select.value == "---------Back--------"){
    
    
    var holder = parseInt(flag) == 0 ? parseInt(hide) - 20 : parseInt(hide) - 10;
    select.innerHTML = "";
        for(var x = 0; x < newAssignArray.length; x ++){
            if(count >= holder && count <  holder + 10){
                select.options[select.options.length] = new Option(newAssignArray[x][0],newAssignArray[x][1]);  
            }
            count ++;
        }

    if(parseInt(holder) != 0){
        select.options[select.options.length] = new Option("---------Back--------"); 
    }
    select.options[select.options.length] = new Option("---------Next--------");

    hide_temp.value = holder;
    flag_temp.value = "1";
    }
}

function getSignList(){
    var this_val = new Array();
    
    <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(0, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listOfSignatory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
        this_val[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
] = new Array(2);
        this_val[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][0] = "<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
";
        this_val[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][1] = <?php echo $_smarty_tpl->tpl_vars['listOfSignatoryID']->value[$_smarty_tpl->tpl_vars['index']->value];?>
;
        <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['index']->value+1, null, 0);?>
    <?php } ?>
    
    return this_val;
}

function getCourseList(){
    var this_val = new Array();
    
    <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(0, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listOfCourse_UnderSign']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
        this_val[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
] = new Array(2);
        this_val[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][0] = "<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
";
        this_val[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][1] = <?php echo $_smarty_tpl->tpl_vars['listOfCourse_UnderSignID']->value[$_smarty_tpl->tpl_vars['index']->value];?>
;
        <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['index']->value+1, null, 0);?>
    <?php } ?>
    
    return this_val;    
}


</script>

<!-- Breadcrumb-->
<?php smarty_template_function_breadcrumb($_smarty_tpl,array('lvl2'=>6,'lvl3'=>12,'activelvl'=>3));?>


<div class="row">
    <div class="span3">

        <!-- Header-->
        <h4 class="well center-text well-small">Requirements</h4>
        
        <!-- Navigations-->
        <div class="row">
            <div class="span3">
                <?php smarty_template_function_nav_signatory($_smarty_tpl,array('index'=>2));?>

            </div>
        </div>

    </div>
    <div class="span9">

        <!-- Header-->
        <h4 class="well center-text well-small">Add Requirement</h4>

        <!--Archive Search Bar -->
        <form method='post' class="form-horizontal" action="requirements.php?action=viewAdd_Requirements_submit">

            <legend>Requirement Details:</legend>
            <div class="control-group">
                <label class="control-label"><b>Title: </b></label>
                <div class="controls">
                    <input required class="span5" type ='text' name='requirement_title'>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"><b>Description: </b></label>
                <div class="controls">
                    <textarea required class="span5" name='requirement_description' rows="5" cols="50"></textarea>
                </div>    
            </div>

            <div class="control-group">
                <label class="control-label"><b>Requirement Type: </b></label>
                <div class="controls">
                    <select id="requirement_type" name="requirement_type" class="select2 input-xlarge" onchange="change_reqType()">
                        <option>Textual</option>
                        <option>Prerequisite</option>
                    </select>
                </div>    
            </div>

            <!-- Temporary kani lng sah... wala pa mn nnu nakapa ang backend-->
            <input type="hidden" name="school_year" value="<?php echo $_smarty_tpl->tpl_vars['currentSchool_Year']->value;?>
" />
            
            <!-- Temporary kani lng sah... wala pa mn nnu nakapa ang backend-->
            <input type="hidden" name="semester" value="<?php echo $_smarty_tpl->tpl_vars['currentSemester']->value;?>
" />
            
            

            <div class="control-group" id="Sign" hidden>
                <label class="control-label"><b>Select Signatory: </b></label>
                <div class="controls">
                    
                    <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(0, null, 0);?>
                    <select id="sign_name" name="signatory" class="select2 input-xlarge" >
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listOfSignatory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                            
                                <option value="<?php echo $_smarty_tpl->tpl_vars['listOfSignatoryID']->value[$_smarty_tpl->tpl_vars['index']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['listOfSignatory']->value[$_smarty_tpl->tpl_vars['index']->value];?>
</option>
                            
                            <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['index']->value+1, null, 0);?>
                        <?php } ?>
                    </select>
                </div>    
            </div>    

            <legend>This Requirements applies to...</legend>

            <div class="control-group">
                <label class="control-label"><b> Select: </b></label>
                <div class="controls">
                    <select id="req_appliesTo" name="req_appliesTo" class="select2 input-xlarge" onchange="change_req_appliesTo()">
                        <option value="All">All Students:</option>
                        <option value="By Department">Students from the following department:</option>
                        <option value="By Course">Students from the following course:</option>
                        <option value="By Year Level">Students from a particular level:</option>
                        <option value="By Program">Students from a particular program:</option>
                    </select>
                </div>    
            </div>  

            <div class="control-group" id="selected_Dept" hidden>
                <label class="control-label"><b> Departments: </b></label>
                <div class="controls">
                    <select name="Departments" class="select2 input-xlarge">   
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listOfDepartments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['listOfDepartmentsID']->value[$_smarty_tpl->tpl_vars['k']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['listOfDepartments']->value[$_smarty_tpl->tpl_vars['k']->value];?>
</option>
                        <?php } ?>
                    </select>
                </div>    
            </div>

            <div class="control-group" id="selected_Course" hidden>
                <label class="control-label"><b> Courses: </b></label>
                <div class="controls">
                    <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(0, null, 0);?>
                    <select id="course_name" name="Courses" class="select2 input-xlarge" onchange="">   
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listOfCourse_UnderSign']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                            
                            <option value="<?php echo $_smarty_tpl->tpl_vars['listOfCourse_UnderSignID']->value[$_smarty_tpl->tpl_vars['k']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['listOfCourse_UnderSign']->value[$_smarty_tpl->tpl_vars['k']->value];?>
</option>
                            <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['index']->value+1, null, 0);?>
                        <?php } ?>
                        
                    </select>
                            
                </div>    
            </div>

            <div class="control-group" id="selected_YearLevel" hidden>
                <label class="control-label"><b> Year level: </b></label>
                <div class="controls">
                    <select name="Year_level" class="select2 input-xlarge">   
                        <option>First Year</option>
                        <option>Second Year</option>
                        <option>Third Year</option>
                        <option>Fourth Year</option>
                        <option>Fifth Year</option>
                    </select>
                </div>    
            </div>

            <div class="control-group" id="selected_Program" hidden>
                <label class="control-label"><b> Program: </b></label>
                <div class="controls">
                    <select name="Program" class="select2 input-xlarge">   
                        <option>Day</option>
                        <option>Evening</option>
                    </select>
                </div>    
            </div>

            <!--
            <div class="row">
            <div class="control-group offset1">
            <div class="control-group">
            <label class="control-label">Description: </label>
            <div class="controls">
            <textarea class="span5" name='requirement_description' rows="5" cols="50"></textarea>
            </div>    
            
            
            
            <!--
            <label> <input type="radio" id="example_radio1" name="radioA" /><b> All Students</label>
            
            <label><input type="radio" id="example_radio2" name="radioA" /> <b>Students from the following department:</label>
            <label class="offset1">
            Department: <select id="" class="input-medium">
            <option>Institute of Computing</option>
            </select>
            </label>
            
            <label><input type="radio" id="example_radio3" name="radioA" /> <b>Students from the following course:</label>
            <label class="offset1">
            Course:<select id="" class="input-medium">
            <option>BSIT</option>
            </select>
            </label> 
            
            <label><input type="radio" id="example_radio4" name="radioA" /> <b>Students from a particular level:</label>
            <label class="offset1">
            Year level: <select id="" class="input-medium">
            <option>4th year</option>
            </select>
            </label>
            
            <label><input type="radio" id="example_radio5" name="radioA" /> <b>Students from a particular program:</label>
            <label class="offset1">
            Year level: <select id="" class="input-medium">
            <option>Day</option>
            <option>Evening</option>
            </select>
            </label>
            
            
            
            </div>  
            </div>   
            -->
            <div class="form-actions control-group">
                <div class="pull-right">
                    <input class="btn btn-primary" type='Submit' value='Add' name="Save">
                    <button class="btn" type="button" onclick="window.location.href='../signatory/requirements.php'">Back</button> 
                </div>
            </div>
        </form>
    </div>
</div><?php }} ?>