<?php

require ('app/init.php');

?>

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page row" style="margin:0;">
				<div class="tos col-md-12 grid_box1">
                    <div style="width:100%;" class="profile widget-shadow">
    					<h4 class="title3">Frequently Asked Questions</h4>
                        <br />
                        <div style="padding:20px;">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                            How do I sign in?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        You sign in by clicking "Sign in with Steam" in the top right of the top navigation bar.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                            How much is <i class="fa fa-star"></i> 1 worth?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        <i class="fa fa-star"></i> 1000 is equal to $1.00, so <i class="fa fa-star"></i> 1 would be worth .001 cent(s).
                                    </div>
                                </div>
                            </div>
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
