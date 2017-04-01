<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title>PERAK</title>
	
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/bootstrap/css/custom.css');?>" rel="stylesheet">


	<!-- 1edited -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo base_url ('assets/css1/bootstrap.min.css');?>" />
		<link rel="stylesheet" href="<?php echo base_url ('assets/css1/bootstrap-responsive.min.css');?>" />
		<link rel="stylesheet" href="<?php echo base_url ('assets/css1/matrix-login.css');?>" />
        <link rel="stylesheet" href="<?php echo base_url ('assets/css1/cloud.css');?>" />
		<link href="<?php echo base_url ('assets/font-awesome1/css/font-awesome.css');?>" rel="stylesheet" />
	<!-- 2edited -->

	<!--[if lt IE 9]>
			<script src="<?php echo base_url('assets/html5shiv.min.js');?>"></script>
			<script src="<?php echo base_url('assets/respond.min.js');?>"></script>
		<![endif]-->
        <style>
		#Clouds {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            height: 30%;
            overflow: hidden;
            -webkit-animation: FadeIn 3s ease-out;
            animation: FadeIn 3s ease-out;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        @-webkit-keyframes FadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        @keyframes FadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .Cloud {
            position: absolute;
            width: 100%;
            background-repeat: no-repeat;
            background-size: auto 100%;
            height: 70px;
            -webkit-animation-duration: 120s;
            animation-duration: 120s;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            -webkit-animation-name: Float, FadeFloat;
            animation-name: Float, FadeFloat;
            z-index: 1;
        }
        .Cloud.Foreground {
            height: 10%;
            min-height: 20px;
            z-index: 3;
        }
        .Cloud.Background {
            height: 9.09090909%;
            min-height: 3px;
            -webkit-animation-duration: 210s;
            animation-duration: 210s;
        }
        @-webkit-keyframes Float {
            from {
                -webkit-transform: translateX(100%) translateZ(0);
                transform: translateX(100%) translateZ(0);
            }
            to {
                -webkit-transform: translateX(-15%) translateZ(0);
                transform: translateX(-15%) translateZ(0);
            }
        }
        @keyframes Float {
            from {
                -webkit-transform: translateX(100%) translateZ(0);
                transform: translateX(100%) translateZ(0);
            }
            to {
                -webkit-transform: translateX(-15%) translateZ(0);
                transform: translateX(-15%) translateZ(0);
            }
        }
        /*
        @keyframes Float {
          from { transform: translateX(100%) translateY(-100%) translateZ(0); }
          50% { transform: translateX(55%) translateY(0) translateZ(0); }
          to { transform: translateX(-5%) translateY(-100%) translateZ(0); }
        }
        */
        @-webkit-keyframes FadeFloat {
            0%,
            100% {
                opacity: 0;
            }
            5%,
            90% {
                opacity: 1;
            }
        }
        @keyframes FadeFloat {
            0%,
            100% {
                opacity: 0;
            }
            5%,
            90% {
                opacity: 1;
            }
        }
        .Cloud:nth-child(10) {
            -webkit-animation-delay: -184.61538462s;
            animation-delay: -184.61538462s;
            top: 30%;
        }
        .Cloud.Foreground:nth-child(10) {
            -webkit-animation-duration: 80s;
            animation-duration: 80s;
            height: 35%;
        }
        .Cloud.Background:nth-child(10) {
            -webkit-animation-duration: 110s;
            animation-duration: 110s;
            height: 53.40909091%;
        }
        .Cloud:nth-child(9) {
            -webkit-animation-delay: -166.15384615s;
            animation-delay: -166.15384615s;
            top: 54%;
        }
        .Cloud.Foreground:nth-child(9) {
            -webkit-animation-duration: 84s;
            animation-duration: 84s;
            height: 32.5%;
        }
        .Cloud.Background:nth-child(9) {
            -webkit-animation-duration: 114s;
            animation-duration: 114s;
            height: 29.15909091%;
        }
        .Cloud:nth-child(8) {
            -webkit-animation-delay: -147.69230769s;
            animation-delay: -147.69230769s;
            top: 48%;
        }
        .Cloud.Foreground:nth-child(8) {
            -webkit-animation-duration: 88s;
            animation-duration: 88s;
            height: 30%;
        }
        .Cloud.Background:nth-child(8) {
            -webkit-animation-duration: 118s;
            animation-duration: 118s;
            height: -0.90909091%;
        }
        .Cloud:nth-child(7) {
            -webkit-animation-delay: -129.23076923s;
            animation-delay: -129.23076923s;
            top: 42%;
        }
        .Cloud.Foreground:nth-child(7) {
            -webkit-animation-duration: 92s;
            animation-duration: 92s;
            height: 27.5%;
        }
        .Cloud.Background:nth-child(7) {
            -webkit-animation-duration: 122s;
            animation-duration: 122s;
            height: 40.34090909%;
        }
        .Cloud:nth-child(6) {
            -webkit-animation-delay: -110.76923077s;
            animation-delay: -110.76923077s;
            top: 36%;
        }
        .Cloud.Foreground:nth-child(6) {
            -webkit-animation-duration: 96s;
            animation-duration: 96s;
            height: 25%;
        }
        .Cloud.Background:nth-child(6) {
            -webkit-animation-duration: 126s;
            animation-duration: 126s;
            height: 41.59090909%;
        }
        .Cloud:nth-child(5) {
            -webkit-animation-delay: -92.30769231s;
            animation-delay: -92.30769231s;
            top: 30%;
        }
        .Cloud.Foreground:nth-child(5) {
            -webkit-animation-duration: 100s;
            animation-duration: 100s;
            height: 22.5%;
        }
        .Cloud.Background:nth-child(5) {
            -webkit-animation-duration: 130s;
            animation-duration: 130s;
            height: 2.84090909%;
        }
        .Cloud:nth-child(4) {
            -webkit-animation-delay: -73.84615385s;
            animation-delay: -73.84615385s;
            top: 24%;
        }
        .Cloud.Foreground:nth-child(4) {
            -webkit-animation-duration: 104s;
            animation-duration: 104s;
            height: 20%;
        }
        .Cloud.Background:nth-child(4) {
            -webkit-animation-duration: 134s;
            animation-duration: 134s;
            height: 54.09090909%;
        }
        .Cloud:nth-child(3) {
            -webkit-animation-delay: -55.38461538s;
            animation-delay: -55.38461538s;
            top: 0.28%;
        }
        .Cloud.Foreground:nth-child(3) {
            -webkit-animation-duration: 108s;
            animation-duration: 108s;
            height: 37.5%;
        }
        .Cloud.Background:nth-child(3) {
            -webkit-animation-duration: 138s;
            animation-duration: 138s;
            height: 5.34090909%;
        }
        .Cloud:nth-child(2) {
            -webkit-animation-delay: -36.92307692s;
            animation-delay: -36.92307692s;
            top: 12%;
        }
        .Cloud.Foreground:nth-child(2) {
            -webkit-animation-duration: 112s;
            animation-duration: 112s;
            height: 15%;
        }
        .Cloud.Background:nth-child(2) {
            -webkit-animation-duration: 142s;
            animation-duration: 142s;
            height: 56.59090909%;
        }
        .Cloud:nth-child(1) {
            -webkit-animation-delay: -18.46153846s;
            animation-delay: -18.46153846s;
            top: 56%;
        }
        .Cloud.Foreground:nth-child(1) {
            -webkit-animation-duration: 116s;
            animation-duration: 116s;
            height: 35.5%;
        }
        .Cloud.Background:nth-child(1) {
            -webkit-animation-duration: 146s;
            animation-duration: 146s;
            height: 7.84090909%;
        }
        .Cloud {
            background-image: url(assets/img1/rpcoin.png);
        }
        .Cloud.Background {
            background-image: url(assets/img1/perakcoin.png);
        }
        html,
        body {
            margin: 0;
            padding: 0;
            margin-top: 5%
        }
        html {
            height: 100%;
        }
        body {
            min-height: 100%;
        }
        body {
            color: #FFF;
            background-color: #dcdcdc;
            background-image: -webkit-radial-gradient(circle, #ffffff 0%, #d7d7d7 70%, #979797 100%);
            background-image: radial-gradient(circle, #ffffff 0%, #d7d7d7 70%, #979797 100%);
        }
        </style>
	
</head>
<!-- 1edited -->



<script type="text/javascript">
	function cekform()
	{
		if (!$("#username").val())
		{
			alert('Maaf Username tidak boleh kosong');
			$("#username").focus();
			return false;
		}
		if (!$("#password").val())
		{
			alert('Maaf Password tidak boleh kosong');
			$("#password").focus();
			return false;
		}
	}
</script>

<div id="loginbox">            
            <form id="loginform" class="form-vertical" action="<?php echo site_url('auth/login');?>" method="post" onSubmit="return cekform();">
				 <div class="control-group normal_text"> <h3><img src="assets/img1/logo2.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" class="form-control" id="username" name="username" placeholder="Username"  />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                    <span class="pull-right"><button type="submit" class="btn btn-success">Login <span class="glyphicon glyphicon-log-in"></span></button></span>
                     
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>
        </div>

        <div id="Clouds">
            <div class="Cloud Foreground"></div>
            <div class="Cloud Background"></div>
            <div class="Cloud Foreground"></div>
            <div class="Cloud Background"></div>
            <div class="Cloud Foreground"></div>
            <div class="Cloud Background"></div>
            <div class="Cloud Background"></div>
            <div class="Cloud Foreground"></div>
            <div class="Cloud Background"></div>
            <div class="Cloud Background"></div>
            <!--  <svg viewBox="0 0 40 24" class="Cloud"><use xlink:href="#Cloud"></use></svg>-->
        </div>
         <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="40px" height="24px" viewBox="0 0 40 24" enable- xml:space="preserve">
  <defs>
    <path id="Cloud" d="M33.85,14.388c-0.176,0-0.343,0.034-0.513,0.054c0.184-0.587,0.279-1.208,0.279-1.853c0-3.463-2.809-6.271-6.272-6.271
    c-0.38,0-0.752,0.039-1.113,0.104C24.874,2.677,21.293,0,17.083,0c-5.379,0-9.739,4.361-9.739,9.738
    c0,0.418,0.035,0.826,0.084,1.229c-0.375-0.069-0.761-0.11-1.155-0.11C2.811,10.856,0,13.665,0,17.126
    c0,3.467,2.811,6.275,6.272,6.275c0.214,0,27.156,0.109,27.577,0.109c2.519,0,4.56-2.043,4.56-4.562
    C38.409,16.43,36.368,14.388,33.85,14.388z"/>
  </defs>
</svg>


<!-- 2edited -->
<!-- bgian bawah

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">



		
		<div class="container-fluid">		
			<div class="row">
				<div class="col-md-12">
					<?php echo $_menu2;?>
				</div>
			</div>
		
		
	</div>
	
 -->

<script src="<?php echo base_url ('js/jquery.min.js');?>"></script>  
<script src="<?php echo base_url ('js/matrix.login.js');?>"></script> 

<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>

</body>
</html>



















