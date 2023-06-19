<?php /* Smarty version Smarty-3.1.12, created on 2023-06-16 12:19:11
         compiled from "C:wamp\www\wbcms\w-b-c-s\views\signatory_views\UploadSignaturePage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1547648c533fec0375-29123462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bff18bd9291281bd6b1a1993c6c2df5e981829a' => 
    array (
      0 => 'C:wamp\\www\\wbcms\\w-b-c-s\\views\\signatory_views\\UploadSignaturePage.tpl',
      1 => 1686563966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1547648c533fec0375-29123462',
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
  'unifunc' => 'content_648c534002cc58_93226272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_648c534002cc58_93226272')) {function content_648c534002cc58_93226272($_smarty_tpl) {?><!-- Breadcrumb-->
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