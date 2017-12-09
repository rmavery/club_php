<!DOCTYPE HTML>


<html>
	<head>
		<title>Classifieds Club Web</title>
		<?php include $_SERVER['DOCUMENT_ROOT']."/shared/styles.inc"; ?>
	</head>


	<body>
	<?php
// this may not be required if you use php autoload function
require_once($_SERVER['DOCUMENT_ROOT']."/models/classified_category.php"); // assuming we have put models in models/ folder

$_category=new Category();
$cats=$_category->list_count();

require_once($_SERVER['DOCUMENT_ROOT']."/views/index.html");
?>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

						<?php include $_SERVER['DOCUMENT_ROOT']."/shared/header.php"; ?>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Classifieds Page</h1>
									</header>

									<!-- <span class="image main"><img src="/images/pic11.jpg" alt="" /></span> -->

									<hr class="major" />

									<h2>Section Heading</h2>
									<p>This is text and stuff</p>
									<a href="http://blog.calendarscripts.info/phpmysql-tutorial-classifieds-software-in-1-hour/">PHP Classifieds Tutorial</a>

								</section>

						</div>
					</div>

					<?php include $_SERVER['DOCUMENT_ROOT']."/shared/leftnav.php"; ?>

			</div>

			<?php include $_SERVER['DOCUMENT_ROOT']."/shared/scripts.inc"; ?>

	</body>
	
</html>