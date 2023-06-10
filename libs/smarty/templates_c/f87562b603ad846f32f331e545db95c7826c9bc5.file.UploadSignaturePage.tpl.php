<?php /* Smarty version Smarty-3.1.12, created on 2023-05-31 18:22:45
         compiled from "C:wamp\www\student-online-clearance-system-master\SOCS\views\signatory_views\UploadSignaturePage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25737647790754a92c4-48354561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f87562b603ad846f32f331e545db95c7826c9bc5' => 
    array (
      0 => 'C:wamp\\www\\student-online-clearance-system-master\\SOCS\\views\\signatory_views\\UploadSignaturePage.tpl',
      1 => 1364151211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25737647790754a92c4-48354561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'signatureImage' => 0,
    'hasImageSet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_647790755b6188_08866726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_647790755b6188_08866726')) {function content_647790755b6188_08866726($_smarty_tpl) {?><!-- Breadcrumb-->
<?php smarty_template_function_breadcrumb($_smarty_tpl,array('lvl2'=>7,'activelvl'=>2));?>


<div class="row">
    <div class="span3">

        <!-- Header-->
        <h4 class="well center-text well-small">Upload Signature</h4>

        <!-- Navigations-->
        <div class="row">
            <div class="span3">
                <?php smarty_template_function_nav_signatory($_smarty_tpl,array('index'=>3));?>

            </div>
        </div>

    </div>
    <div class="span9">

        <!-- Header-->
        <h4 class="well center-text well-small">Signature</h4>

        <div class="row">
            <div class="span5">
                <form action='UploadSignature.php?action=uploadSignature' method='post' class="form-horizontal" enctype="multipart/form-data">

                    <legend>Upload new signature</legend>

                    <div class="control-group">
                        <label class="control-label"><b>Upload Picture: </b></label>
                        <div class="controls">

                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-exists fileupload-preview thumbnail" style="width: 200px; height: 35px;"></div>
                                <div class="fileupload-controls">
                                    <span class="btn btn-file">
                                        Browse<input type="file" name="signatureimage" required>
                                    </span>
                                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>

                            <span class="help-block">Only 200 x 35 image dimensions are allowed. Max 1MB size.</span>
                        </div>
                    </div>

                    

                    <div class="form-actions">
                        <div class="pull-right">
                            <input class="btn btn-primary" type='Submit' value='Upload' name='upload' />
                            <button class="btn" type="button" onclick="window.history.back();">Back</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="span4">
                <legend>Current signature image</legend>
                <img src="<?php echo $_smarty_tpl->tpl_vars['signatureImage']->value;?>
" class="img-polaroid" width="200" height="35"></br>
                <?php if ($_smarty_tpl->tpl_vars['hasImageSet']->value=='1'){?>
                    <a href="uploadSignature.php?action=reset">Remove Signature</a>
                <?php }?>

            </div>
        </div>
    </div>
</div>

<?php }} ?>