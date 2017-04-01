<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>PERAK - rektor</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!--basic styles-->
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<!-- 1edited -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/bootstrap.min.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/bootstrap-responsive.min.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/fullcalendar.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/matrix-style.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/matrix-mediaRektor.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome1/css/font-awesome.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/jquery.gritter.css');?>" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel="stylesheet" type="text/css">

		<!-- 2edited -->
	
	</head>

	<body>
		
		<?php echo $_top_menu;?>

		<?php echo $_sidebar;?>			

		<!-- 1edited buat home > lohh breadcrumbs-->
		<div id="content">
			<div id="content-header">
   				 <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  			</div>
		
		<!-- 2edited  end breadcrumbs-->



			<div class="container-fluid">
				    <?php echo $_content;?>
	
			</div>
		</div>
	


		<!--basic scripts-->

		<!--[if !IE]>-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->
		<!-- 1edited -->

		<script type="text/javascript">
		    // This function is called from the pop-up menus to transfer to
		    // a different page. Ignore if the value returned is a null string:
		    function goPage (newURL) {

		        // if url is empty, skip the menu dividers and reset the menu selection to default
		        if (newURL != "") {

		            // if url is "-", it is this page -- reset the menu:
		            if (newURL == "-" ) {
		                resetMenu();
		            }
		            // else, send page to designated URL
		            else {
		                document.location.href = newURL;
		            }
		        }
		    }

		    // resets the menu selection upon entry to this page:
		    function resetMenu() {
		        document.gomenu.selector.selectedIndex = 2;
		    }
		</script>
		
		<script src="<?php echo base_url('assets/js1/excanvas.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/jquery.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/jquery.ui.custom.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/bootstrap.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/jquery.flot.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/jquery.flot.resize.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/jquery.peity.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/fullcalendar.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/matrix.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/matrix.dashboard.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/jquery.gritter.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/matrix.interface.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/matrix.chat.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/jquery.validate.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/matrix.form_validation.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/jquery.wizard.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/jquery.uniform.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/select2.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/matrix.popover.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/jquery.dataTables.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js1/matrix.tables.js');?>"></script>
	</body>
</html>
