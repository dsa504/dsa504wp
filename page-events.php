<?php
/*

 Template Name: Events

*/
?>
<?php get_header(); ?>


			<div id="content" class="wrap">

				<div id="inner-content" class="cf">

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">
							<div class="intro-section-header">Upcoming Events</div>
<iframe src="https://calendar.google.com/calendar/embed?src=vv0uj9uhqrl6j6m0pugu90uo6c%40group.calendar.google.com&ctz=America%2FChicago&amp;mode=WEEK" style="border: 0" width="600" height="600" frameborder="0" scrolling="no"></iframe>
							<div id="dsa-cal-app">
							</div>
							<!-- new react calendar -->
							<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/library/js/main.376b83fd.chunk.js"></script>
							<!-- new react calendar css fixes -->
							<style>
							#dsa-cal-app a {
								text-decoration:none;
							}
							#dsa-cal-app a:hover {
								text-decoration:underline;
							}
							@media only screen and (max-width: 800px) {
								#dsa-cal-app {
									text-align: left; 
									padding: 10px 20px 10px 10px;
								}
							}
							</style>


							<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>   
							<!-- Calendar-specific stuff -->
							<?php //include("addons/calendar-og-scripts.php"); ?>


						</div>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
