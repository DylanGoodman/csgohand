<?php

require ('app/init.php');

?>

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page row" style="margin:0;">
				<div class="col-md-12 grid_box1">
					<div style="padding:0;background-color: #080505;" class="calender widget-shadow">
						<h2 style="color:#008aff" class="title3 text-center">Welcome to CSGOHand V2.0</h2>
                        <h4 style="color:#fff;text-align:center;padding:0px 150px 0px 150px">The #1 Skin Platform is back and better than ever. We redesigned our website from the ground up
                        in order to provide the greatest CS:GO gambling experience. With a <span style="color:#008aff">never before seen life-like Roulette experience</span>, Live Chat,
                        <span style="color:#008aff">Leveling 0-30 with rewards</span>, Refferals, and a hell of a lot more on the way!  </h4>
                        <br>
						<div style="margin-top:0;" class="widget_1 row elements">
							<div class="col-sm-4 widget_1_box">
								<div style="width:100%;padding:7px;" class="widget_1_box wid-social vimeo">
								<div class="social-icon">
									<i class="fa fa-star text-light icon-xlg "></i>
								</div>
								<div class="social-info">
									<h3 class="number_counter bold count text-light start_timer counted">2,400,000</h3>
									<h4 class="counttype text-light">Won today</h4>
								</div>
								<div style="margin-top:10px;" class="tile-progress bg-success">
                                    <div class="content">
										<h4><i class="fa fa-dollar icon-sm"></i> Win Big</h4>
										<h4 style="padding-top:20px;">Our users are winning huge!</h4>
									</div>
								</div>
							</div>
							</div>
							<div class="col-sm-4 widget_1_box">
								<div style="width:100%;padding:7px;" class="col-sm-4 widget_1_box wid-social vimeo">
								<div class="social-icon">
									<i class="fa fa-user text-light icon-xlg "></i>
								</div>
								<div class="social-info">
									<h3 class="number_counter bold count text-light start_timer counted">6,100+</h3>
									<h4 class="counttype text-light">Users</h4>
								</div>
								<a href="roulette.html"><div style="margin-top:10px;" class="tile-progress bg-success">
									<div class="content">
										<h4><i class="fa fa-trophy icon-sm"></i> Roulette</h4>
										<h4 style="padding-top:20px;">Play our all new Roulette!</h4>
									</div>
								</div></a>
							</div>
							</div>
							<div class="col-sm-4 widget_1_box">
								<div style="width:100%;padding:7px;" class="col-sm-4 widget_1_box wid-social vimeo">
								<div class="social-icon">
									<i class="fa fa-star text-light icon-xlg "></i>
								</div>
								<div class="social-info">
									<h3 class="number_counter bold count text-light start_timer counted">74,145,000</h3>
									<h4 class="counttype text-light">Won all time</h4>
								</div>
								<div style="margin-top:10px;" class="tile-progress bg-success">
                                    <div class="content">
										<h4><i class="fa fa-university icon-sm"></i> Level Up</h4>
										<h4 style="padding-top:20px;">Level 0-30 and win prizes!</h4>
									</div>
								</div>
							</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>


				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer" id="footer">
		   <p>&copy; 2016 CSGOHand - Version 2.00.13.45</p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body,
                footer = document.getElementById( 'footer' );

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
                classie.toggle( footer, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};


			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}

			$(document).ready(function() {
				$("html").niceScroll({background:"#F1F1F1"});
			});

		</script>


	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
    <script src="js/core.js"></script>
</body>
</html>
