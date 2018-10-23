<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $head_title ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php
		echo $this->Html->css([ 
						'/assets/css/bootstrap.min.css',
						'/assets/css/font-awesome.min.css',
                        '/assets/css/ionicons.min.css',
                        '/assets/css/font-nunito-sans.css',
                        '/assets/css/file-input.css',
                        '/assets/js/mCustomScrollbar/jquery.mCustomScrollbar.min.css',
						'/assets/js/bootstrap-toastr/toastr.min.css',
						'/assets/css/AdminLTE.css'
			]) ?>

            <?= $this->fetch('select2css'); ?>
            <?= $this->fetch('datepickercss'); ?>
            <?= $this->fetch('adminStyle'); ?>
		<style>
        thead{
            background-color: #f1f1f1;
        }
        body {
            font-size: 13px !important;
        }
        .box .box-body .table {
            margin-bottom: 20px !important;
        }
		fieldset {
			padding: 10px ;
			border: 1px solid #bfb7b7f7;
			margin: 0px;
			border-radius:5px;
		}
		legend{
			margin-left: 15px;
			color:#144277;
			font-size: 17px;
			margin-bottom:0px;
			border:none;
			width:4%!important;
		}
		.required {
			color:#a94442 !important;
		}
		img{
			border:none !important;
		}
	.btn-danger
	{
		background-color:#FB6542 !important;
		color:#FFF;
		border-color:#FB6542 !important;
	}
	
	.form-group.has-error .form-control {
		border-color: #a94442 !important;
	}
	.form-group.has-error label {
		color: #585858 !important;
	}
    .capitalize
    {
        text-transform:capitalize;
    }
    .file-input{
        display: inline-block;
    }
    .fileinput-remove{
        display: inline-flex;
    }
    .file-preview-image
    {
        width: 100% !important;
        height:160px !important;
    }
    .file-preview-frame
    {
        display: contents;
        float:none !important;
    }
    .kv-file-zoom
    {
        display:none;
    }
    .link{
        color:#3c8dbc;
    }
    .link:hover{
        color:#3c8dbc;
    }
    .widgetText{
        font-size: 30px !important;
    }
    .box{
        padding-bottom: 13px;
    }
.content-scroll {
    width: 510px;
    height: 400px;
}
.mCSB_container_wrapper {
    margin-right: 0px !important;
    margin-bottom: 15px !important;
}
th
{
    font-weight: 600 !important;
}
fieldset {
    border: 1px solid #f8f8f8 !important;
}
b,strong{
    font-weight: 600;
}

		</style>
		<link rel="shortcut icon" href="<?php echo $this->Url->build('/img/favicon.png'); ?>"/>
       
    </head>
    <body class="skin-blue fixed" >
    
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <?= $this->Html->image('/img/logo.png',['style'=>'margin-top: 0px;width: 220px;height: 50px;background-color: #374d6c !important;']); ?>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top navbar-fixed-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-left">
                    <h4 style="color: white; margin-left: 10px;margin-top: 15px;">
                        <?php //@$title ?>
                    </h4>
                </div>
                <div class="navbar-left">
                    <a onclick="window.history.back()" class="btn btn-sm btn-info" style="margin-top: 10px;">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                    <!-- <?= $this->Html->link(__('<i class="fa fa-arrow-left"></i> Back'), $this->request->referer(), ['class'=>'btn btn-sm btn-info','style'=>'margin-top: 10px;','escape'=>false]) ?> -->
                </div>

                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Admin<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu" style="width: 100px !important;min-width: 125px !important;">
                                <li class="user-footer" style="background-color: #fff !important;">
                                        <a href="<?php echo $this->Url->build(["controller" => "Users",'action'=>'logout']); ?>" class="btn btn-info btn-flat">Log out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <aside class="left-side sidebar-offcanvas" >
                <section class="sidebar">
                    <ul class="sidebar-menu">
                       <?= $this->element('menu'); ?>
                    </ul>
                </section>
            </aside>
            <aside class="right-side">
					<section class="content" >
						<?= $this->Flash->render() ?>
						<?php echo $this->fetch('content'); ?>
					</section>
			</aside>
        </div>

        
        
    </body>
    <?= $this->Html->script([
                    '/assets/js/jquery.min.js',     
                    '/assets/js/jquery.slimscroll.min.js',
                    '/assets/js/mCustomScrollbar/jquery.mCustomScrollbar.concat.min',
                    '/assets/js/bootstrap-toastr/toastr.min.js',
                    '/assets/js/bootstrap-toastr/ui-toastr.js'
        ]); ?>

        <?= $this->fetch('page_level_js'); ?>
        <?= $this->fetch('select2js'); ?>
        <?= $this->fetch('datepickerjs'); ?>
        <?= $this->fetch('fileinputjs'); ?>
        <?= $this->fetch('validatejs'); ?>
        <?= $this->fetch('block_js'); ?>
        <?= $this->fetch('editorJs'); ?>
   
       
        <?= $this->Html->script([
                    '/assets/js/jquery-ui-1.10.3.min.js',
                    '/assets/js/bootstrap.min.js',
                    '/assets/js/AdminLTE/app.js',
                    ]); ?>
        <?= $this->fetch('advancedFormjs'); ?>
        <?= $this->fetch('scriptPageBottom'); ?>
<script type="text/javascript">
    $(window).load(function(){
    $.mCustomScrollbar.defaults.scrollButtons.enable=true; 
    $.mCustomScrollbar.defaults.axis='yx'; 
    $('.content-scroll').mCustomScrollbar({theme:'dark-3'});
   
});
    function round(value, exp) { 
      if (typeof exp === 'undefined' || +exp === 0)
        return Math.round(value);

      value = +value;
      exp = +exp;

      if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0))
        return 0;

      // Shift
      value = value.toString().split('e');
      value = Math.round(+(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp)));

      // Shift back
      value = value.toString().split('e');
      return +(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp));
    }
</script>
</html>