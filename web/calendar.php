<!DOCTYPE HTML>

<html>
	<head>
		<title>Calendar/Events</title>
		<?php include $_SERVER['DOCUMENT_ROOT']."/shared/styles.inc"; ?>
		<?php include $_SERVER['DOCUMENT_ROOT']."/shared/calendar.styles.inc"; ?>
</head>


<body>
<!-- Wrapper -->
		<div id="wrapper">
				<!-- Main -->
					<div id="main">
						<div class="inner">
						<?php include $_SERVER['DOCUMENT_ROOT']."/shared/header.php"; ?>
							<!-- Content -->
								<!-- <section>
									<header class="main">
										<h1>Calendar Page</h1>
									</header>
								</section> -->
								<div id='calendar'></div>
						</div>
					</div>
					<?php include $_SERVER['DOCUMENT_ROOT']."/shared/leftnav.php"; ?>
			</div>

			<?php include $_SERVER['DOCUMENT_ROOT']."/shared/scripts.inc"; ?>
			<?php include $_SERVER['DOCUMENT_ROOT']."/shared/calendar.scripts.inc"; ?>
		
		<script>

			$(document).ready(function() {

				$('#calendar').fullCalendar({
					defaultDate: new Date(),
					editable: true,
					eventLimit: true, // allow "more" link when too many events
					// events: [
					// 	{
					// 		title: 'All Day Event',
					// 		start: '2017-11-01'
					// 	},
					// 	{
					// 		title: 'Long Event',
					// 		start: '2017-11-07',
					// 		end: '2017-11-10'
					// 	},
					// 	{
					// 		id: 999,
					// 		title: 'Repeating Event',
					// 		start: '2017-11-09T16:00:00'
					// 	},
					// 	{
					// 		id: 999,
					// 		title: 'Repeating Event',
					// 		start: '2017-11-16T16:00:00'
					// 	},
					// 	{
					// 		title: 'Conference',
					// 		start: '2017-11-11',
					// 		end: '2017-11-13'
					// 	},
					// 	{
					// 		title: 'Meeting',
					// 		start: '2017-11-12T10:30:00',
					// 		end: '2017-11-12T12:30:00'
					// 	},
					// 	{
					// 		title: 'Lunch',
					// 		start: '2017-11-12T12:00:00'
					// 	},
					// 	{
					// 		title: 'Meeting',
					// 		start: '2017-11-12T14:30:00'
					// 	},
					// 	{
					// 		title: 'Happy Hour',
					// 		start: '2017-11-12T17:30:00'
					// 	},
					// 	{
					// 		title: 'Dinner',
					// 		start: '2017-11-12T20:00:00'
					// 	},
					// 	{
					// 		title: 'Birthday Party',
					// 		start: '2017-11-13T07:00:00'
					// 	},
					// 	{
					// 		title: 'Click for Google',
					// 		url: 'http://google.com/',
					// 		start: '2017-11-28'
					// 	}
					// ]
				});
				
			});

		</script>
	</body>
	
</html>
