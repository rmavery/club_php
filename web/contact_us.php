<!DOCTYPE HTML>


<html>
	<head>
		<title>Contact Us Club Web</title>
		<?php include $_SERVER['DOCUMENT_ROOT']."/config/global.config"; ?>
		<?php include $_SERVER['DOCUMENT_ROOT']."/shared/styles.inc"; ?>
	</head>


	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

						<?php include $_SERVER['DOCUMENT_ROOT']."/shared/header.php"; ?>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Contact Us</h1>
									</header>

									<!-- <span class="image main"><img src="/images/pic11.jpg" alt="" /></span> -->

									<hr class="major" />

									<h3>Send me a message</h3>

										<form role="form" id="contactForm" data-toggle="validator" class="shake">
											<div class="row">
												<div class="form-group col-sm-6">
													<label for="name" class="h4">Name</label>
													<input type="text" class="form-control" id="name" placeholder="Enter name" required data-error="NEW ERROR MESSAGE">
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group col-sm-6">
													<label for="email" class="h4">Email</label>
													<input type="email" class="form-control" id="email" placeholder="Enter email" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="message" class="h4 ">Message</label>
												<textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
												<div class="help-block with-errors"></div>
											</div>
											<button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div>
											<div class="clearfix"></div>
										</form>
									


								</section>

						</div>
					</div>

					<?php include $_SERVER['DOCUMENT_ROOT']."/shared/leftnav.php"; ?>

			</div>

			<?php 
			include $_SERVER['DOCUMENT_ROOT']."/shared/scripts.inc"; 
			echo '<link rel="stylesheet" typc="text/css" href="'.SCRIPT_ROOT.'/assets/css/animate.css">' ;
			echo '<script  type="text/javascript" src="'.SCRIPT_ROOT.'assets/js/jquery.min.js"></script>' ; 
			echo '<script type="text/javascript" src="'.SCRIPT_ROOT.'assets/js/validator.min.js"></script>' ;
			echo '<script type="text/javascript" src="'.SCRIPT_ROOT.'assets/js/form-scripts.js"></script>' ;
			?>

	</body>
	
</html>