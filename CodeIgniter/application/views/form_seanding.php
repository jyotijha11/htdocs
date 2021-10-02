<!DOCTYPE HTML>
<html>
	<head>
		<title>Northside Boxing</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css'); ?>" />
		<noscript><link rel="stylesheet" href="<?php echo base_url('assets/css/noscript.css'); ?>" /></noscript>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Northside Boxing</a></h1>
						
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Northside Boxing</h2>
							<p>NSW 2099</p>
						</div>
						<a href="#one" class="more scrolly">Learn More</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>Boxing for all levels</h2>
								<p>Boxing for all levels on Sydney's Northern Beaches. Currently restricted to Outdoor/One on One training only due to Covid restrictions.</p>
								<p>For all training enquiries, please send email via the form at the bottom of the site. Thanks!</p>
							</header>
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="<?php echo base_url('images/pic01.jpg'); ?>" alt="" /></div><div class="content">
								<h2>One on One Boxing Training</h2>
								<p>One on One Boxing Coaching with level one accredited Boxing Australia/NSW coach Zelky, at The Boxing Gym Brookvale.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="<?php echo base_url('images/pic02.jpg'); ?>" alt="" /></div><div class="content">
								<h2>Outdoor Boxing Training</h2>
								<p>One on One Boxing Coaching with level one accredited Boxing Australia/NSW coach Zelky, at Curl Curl Sports Centre.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="<?php echo base_url('images/pic03.jpg'); ?>" alt="" /></div><div class="content">
								<h2>Personal Training</h2>
								<p>Personal Training with Certificate IV accredited Personal Trainer Zelky, at The Boxing Gym Brookvale and Curl Curl Sports Centre.</p>
							</div>
						</section>
					</section>
					
				<!-- Form -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<section>
									<h4>Email Us</h4>
									<form method="post" action="">
										<div id="mail-status"></div>
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<label>Name</label>
												<input type="text" name="demo-name" id="demo-name" value="" class="demoInputBox" placeholder="Name" />
												<span id="demo-name-info" class="info"></span>
											</div>
											<div class="col-6 col-12-xsmall">
												<label>Email</label>
												<input type="email" name="demo-email" id="demo-email" value="" class="demoInputBox" placeholder="Email" />
												<span id="demo-email-info" class="info"></span>
											</div>
											
											 <div class="col-6 col-12-small">
												<input type="checkbox" class="demoInputBox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">Not a robot</label>
												<span id="demo-human-info" class="info"></span>
											</div> 
											<div class="col-12">
												<label>Message</label>
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6" class="demoInputBox"></textarea>
												<span id="demo-message-info" class="info"></span>
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Send Message" class="primary" id="sendmessage"/></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="https://www.instagram.com/northsideboxing_2099" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; 2021 | Northside Boxing | northside-boxing.com</li>
						</ul>

				

					</footer>

			</div>
		<!-- Scripts -->
			<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
			<script src="<?php echo base_url('assets/js/jquery.scrollex.min.js'); ?>"></script>
			<script src="<?php echo base_url('assets/js/jquery.scrolly.min.js'); ?>"></script>
			<script src="<?php echo base_url('assets/js/browser.min.js'); ?>"></script>
			<script src="<?php echo base_url('assets/js/breakpoints.min.js'); ?>"></script>
			<script src="<?php echo base_url('assets/js/util.js'); ?>"></script>
			<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
 			<script >
				$(document).ready(function(evt){
				$("#sendmessage").click(function(evt){
					evt.preventDefault();
					    var valid;	
					    valid = validateContact();
					    if(valid) {
					        jQuery.ajax({.
					            url: "<?php echo site_url('newsite/mail'); ?>",
					            data:'demo-name='+$("#demo-name").val()+'&demo-email='+
					            $("#demo-email").val()+'&demo-message='+
					            $("#demo-message").val(),
					            type: "POST",
					            success:function(data){
					                $("#mail-status").html(data);
					            },
					            error:function (){}
					        });
					    }
					    
					});
				});
				</script>

				<script>
				function validateContact() {

				    var valid = true;	
				    // $(".demoInputBox").css('background-color','');
				    $(".info").html('');
				    if(!$("#demo-name").val()) {
				        $("#demo-name-info").html("(Required)");
				        // $("#demo-name").css('background-color','#FFFFDF');
				        valid = false;
				    }
				    if(!$("#demo-email").val()) {
				        $("#demo-email-info").html("(Required)");
				        // $("#demo-email").css('background-color','#FFFFDF');
				        valid = false;
				    }
				    if(!$("#demo-email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
				        $("#demo-email-info").html("(Invalid)");
				        // $("#demo-email").css('background-color','#FFFFDF');
				        valid = false;
				    }
				    // if(!$("#demo-human").is(":checked"))  {
				    //     $("#demo-human-info").html("(Required)");
				    //     // $("#demo-message").css('background-color','#FFFFDF');
				    //     valid = false;
				    // }
				    if(!$("#demo-message").val()) {
				        $("#demo-message-info").html("(Required)");
				        // $("#demo-message").css('background-color','#FFFFDF');
				        valid = false;
				    }
				    return valid;
				}
				</script>
	</body>
</html>