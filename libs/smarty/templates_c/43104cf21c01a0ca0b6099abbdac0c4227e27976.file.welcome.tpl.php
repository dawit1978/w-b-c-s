<?php /* Smarty version Smarty-3.1.12, created on 2023-05-29 18:36:10
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\main_views\welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290236474f09a89c741-27078383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43104cf21c01a0ca0b6099abbdac0c4227e27976' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\main_views\\welcome.tpl',
      1 => 1364151211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290236474f09a89c741-27078383',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_6474f09a983c73_49409329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6474f09a983c73_49409329')) {function content_6474f09a983c73_49409329($_smarty_tpl) {?><div id="socs-carousel" class="carousel slide hidden-phone">
    <div class="carousel-inner">
        <div class="item active">
            <div class="container">
                <img class="carousel-images" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/img/carousel/1.jpg" alt="" />

                <div class="carousel-caption socs-welcome hero-unit">
                    <h1>Welcome to SOCS!</h1>
                    <p class="lead">The Student Online Clearance System of The University of Southeastern Philippines, Davao City.</p>
                    <a class="btn btn-primary btn-large" href="#socs_about">Learn More &raquo;</a>
                </div>

            </div>
        </div>
        <div class="item">
            <div class="container">
                <img class="carousel-images" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/img/carousel/2.jpg" alt="" />
                
            </div>
        </div>
        <div class="item">
            <div class="container">
                <img class="carousel-images" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/img/carousel/3.jpg" alt="" />
                
            </div>
        </div>
    </div>
    <a class="carousel-control left" href="#socs-carousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#socs-carousel" data-slide="next">&rsaquo;</a>
</div>

<div class="row">
    <div class="span12">
        <div class="visible-phone">
            <h1>Welcome to SOCS!</h1>
            <p>The Student Online Clearance System of The University of Southeastern Philippines, Davao City.</p>
            <a class="btn btn-primary btn-large">Learn More &raquo;</a><br>
        </div>
    </div>
</div>

<div class="row">
    <div class="span3">
        <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/img/title.png" />
    </div>
    <div class="span9">

        <h1 id="socs_about">About</h1>
        <p>A Clearance is defined as the act or process of clearing.</p>
        <p>The Student’s Online Clearance System (SOCS) is system that will systematically checks balances, 
            fees and other obligations of the students at the University of Southeastern Philippines through online.</p>
        <p>The main objective of this project is to have an easy way of signing clearance for the student and 
            also for the offices because this system is automated.</p>
        <p>The system also helps every student to accomplish their clearances without so much pressure on time.</p>
        <p>Every offices, departments and teachers have also their benefits in the system in such a way that they 
            can check student’s accounts ahead of time without pressuring their selves. They can have less work 
            during clearance day because all they have to do is to check on the students who have not yet complied 
            their requirements.</p>
        <p>Developed by the students of the University of Southeastern Philippines - Institute of Computing: 
            Victorio Biloy (Back-end Programmer and Database Administrator), 
            Fortunato Estorgio (Back-end Programmer and Database Administrator),
            Jayson Torres (Researcher and System Analyst), 
            Kristoffer Anore (Graphic Artist and Front-end Programmer),
            Ozy Hale Manipis (Front-end Programmer and Project Planner)</p>

        <div class="row">
            <div class="span3 offset1">
                <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/student/logo.jpg" style="max-width: 150px; max-height: 150px;" />
            </div>
            <div class="span3 offset1">
                <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/public/img/ic-logo.png" style="max-width: 150px; max-height: 150px;" />
            </div>
        </div>

            <br>
            
        <div class="row">
            <div class="span9">
                <blockquote>
                    <p>The Internet is becoming the town square for the global village of tomorrow.</p>
                    <small>Bill Gates</small>
                </blockquote>
            </div>
        </div>
    </div>
</div><?php }} ?>