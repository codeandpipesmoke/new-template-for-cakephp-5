<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>BTB Admin | Home</title>
    <!-- Favicon-->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/plugins/animate-css/animate.css" rel="stylesheet" />

<?php if(isset($_GET["m"]) and $_GET["m"] == "caroussel"){ ?>
    
    
<?php } ?>
<?php if(isset($_GET["m"]) and $_GET["m"] == "add"){ ?>

    <!-- Sweet Alert Css -->
    <link href="/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Bootstrap Spinner Css -->
    <link href="/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="/plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="/plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

<?php /*
    <!-- Colorpicker Css -->
    <link href="/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
*/ ?>
<?php } ?>

    <!-- Custom Css -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
	<?php //include_once("page-loader.php") ?>
	<?php include_once("search-bar.php") ?>
	<?php include_once("navbar.php") ?>
	
    <section>
		<?php include_once("aside-left.php") ?>
		<?php include_once("aside-right.php") ?>
    </section>
	
    <section class="content">
        <div class="container-fluid">
<?php if(!isset($_GET["m"]) or $_GET["m"] == "table"){ ?>
		    <?php //include("template-table.php") ?>
<?php } ?>
<?php if(isset($_GET["m"]) and $_GET["m"] == "add"){ ?>
		    <?php include("template-add.php") ?>
<?php } ?>
<?php if(isset($_GET["m"]) and $_GET["m"] == "gallery"){ ?>
		    <?php include("template-gallery.php") ?>
<?php } ?>
<?php if(isset($_GET["m"]) and $_GET["m"] == "caroussel"){ ?>
		    <?php include("template-caroussel.php") ?>
<?php } ?>

        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="/plugins/node-waves/waves.js"></script>

<?php if(isset($_GET["m"]) and $_GET["m"] == "add"){ ?>
<?php /*
    <!-- Bootstrap Colorpicker Js -->
    <script src="/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="/plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="/plugins/nouislider/nouislider.js"></script>
*/ ?>

    <!-- Light Gallery Plugin Js -->
    <script src="/plugins/light-gallery/js/lightgallery-all.js"></script>


    <!-- Ckeditor -->
    <script src="/plugins/ckeditor/ckeditor.js"></script>

    <!-- TinyMCE -->
    <script src="/plugins/tinymce/tinymce.js"></script>


    <!-- Slimscroll Plugin Js -->
    <script src="/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="/plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="/plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js for textarea -->
    <script src="/plugins/autosize/autosize.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="/plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
    
    <!-- Dropzone Plugin Js -->
    <script src="/plugins/dropzone/dropzone.js"></script>

    <!-- Moment Plugin Js -->
    <script src="/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<?php } ?>

    <!-- Custom Js -->
    <script src="/js/admin.js"></script>
<?php if(isset($_GET["m"]) and $_GET["m"] == "gallery"){ ?>
    <script src="/plugins/light-gallery/js/lightgallery-all.js"></script>
    <script src="/js/pages/medias/image-gallery.js"></script>
<?php } ?>
<?php if(isset($_GET["m"]) and $_GET["m"] == "caroussel"){ ?>
    
    
<?php } ?>
<?php if(isset($_GET["m"]) and $_GET["m"] == "add"){ ?>
    <script src="/js/pages/forms/basic-form-elements.js"></script>
    <script src="/js/pages/forms/advanced-form-elements.js"></script>
    <script src="/js/pages/forms/form-validation.js"></script>
    <script src="/js/pages/forms/editors.js"></script>
<?php }else{ ?>
    <script src="/js/pages/ui/tooltips-popovers.js"></script>    
<?php } ?>

    <!-- Demo Js -->
    <script src="/js/demo.js"></script>
</body>

</html>
