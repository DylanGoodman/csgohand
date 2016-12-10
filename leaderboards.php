<?php

require ('app/init.php');

?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page row" style="margin:0;">
				<div class="col-md-12 grid_box1">
                    <div style="padding:0" class="calender widget-shadow">
                        <h4 class="title3 text-center"><i class="fa fa-trophy"></i> Leaderboards - Top 100</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="10%">Rank</th>
                                    <th width="25%">Username</th>
                                    <th width="15%">Level</th>
                                    <th width="15%">Amount Won</th>
                                    <th width="15%">Amount Wagered</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tdGreen">
                                    <th scope="row"><i class="fa fa-trophy"></i> 1</th>
                                    <td scope="row"><img style="width:18px;margin-top:-3px;" src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/05/05aea756a7c81e54735993c220a86e73732390f1_full.jpg" alt=""> Haste CSGOHand.com</td>
                                    <td><i class="fa fa-university"></i> 30</td>
                                    <td><i class="fa fa-star"></i> 456,034,835</td>
                                    <td><i class="fa fa-star"></i> 21,244,193</td>
                                </tr>
                                <tr>
                                    <th scope="row"><i class="fa fa-trophy"></i> 2</th>
									<td scope="row"><img style="width:18px;margin-top:-3px;" src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/05/05aea756a7c81e54735993c220a86e73732390f1_full.jpg" alt=""> Haste CSGOHand.com</td>
                                    <td><i class="fa fa-university"></i> 11</td>
                                    <td><i class="fa fa-star"></i> 56,034,835</td>
                                    <td><i class="fa fa-star"></i> 2,244,193</td>
                                </tr>
                                <tr>
                                    <th scope="row"><i class="fa fa-trophy"></i> 3</th>
									<td scope="row"><img style="width:18px;margin-top:-3px;" src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/05/05aea756a7c81e54735993c220a86e73732390f1_full.jpg" alt=""> Haste CSGOHand.com</td>
                                    <td><i class="fa fa-university"></i> 16</td>
                                    <td><i class="fa fa-star"></i> 56,034,835</td>
                                    <td><i class="fa fa-star"></i> 2,244,193</td>
                                </tr>
                                <tr>
                                    <th scope="row"><i class="fa fa-trophy"></i> 4</th>
									<td scope="row"><img style="width:18px;margin-top:-3px;" src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/05/05aea756a7c81e54735993c220a86e73732390f1_full.jpg" alt=""> Haste CSGOHand.com</td>
                                    <td><i class="fa fa-university"></i> 22</td>
                                    <td><i class="fa fa-star"></i> 56,034,835</td>
                                    <td><i class="fa fa-star"></i> 2,244,193</td>
                                </tr>
                            </tbody>
                        </table>
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

   <div class="modal fade" id="tUrl" tabindex="-1" role="dialog" aria-labelledby="tUrl">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <h4 class="modal-title" id="exampleModalLabel">Set your Steam Trade URL</h4>
               </div>
               <div class="modal-body">
                   <form>
                       <div class="form-group">
                           <label for="recipient-name" class="control-label">Steam Trade URL:</label>
                           <input type="text" class="form-control" id="tradeUrl" placeholder="Paste your full Trade URL here">
                       </div>
                   </form>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-primary">Set Trade URL</button>
               </div>
           </div>
       </div>
   </div>
</body>
</html>
