<!DOCTYPE HTML>


<html>
	<head>
		<title>Generic Page Club Web</title>
		<?php include $_SERVER['DOCUMENT_ROOT']."/shared/styles.inc"; ?>
		<?php include $_SERVER['DOCUMENT_ROOT']."/config/db.config"; ?>
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
										<h1>Generic Page</h1>
									</header>

									<!-- <span class="image main"><img src="/images/pic11.jpg" alt="" /></span> -->

									<hr class="major" />

									<h2>Section Heading</h2>
									<p>This is text and stuff</p>
									<h4>Test Result: dbpass = <?php echo($s_dbPass); ?></h4>

								</section>

						</div>
					</div>

					<?php include $_SERVER['DOCUMENT_ROOT']."/shared/leftnav.php"; ?>

			</div>

			<?php include $_SERVER['DOCUMENT_ROOT']."/shared/scripts.inc"; ?>

	</body>
	
</html>