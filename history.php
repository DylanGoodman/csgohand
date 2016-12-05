<?php

require ('app/init.php');

?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page row" style="margin:0;">
				<div class="col-md-12 grid_box1">
                    <div style="padding:0" class="calender widget-shadow">
                        <h4 class="title3 text-center"><i class="fa fa-exchange"></i> Deposit History</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID #</th>
                                    <th>Items(s)</th>
                                    <th>Amount Received</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Gun</td>
                                    <td><i class="fa fa-star"></i> 3500</td>
                                    <td class="tdGreen"><i class="fa fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Gun</td>
                                    <td><i class="fa fa-star"></i> 3500</td>
                                    <td class="tdGreen"><i class="fa fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Gun</td>
                                    <td><i class="fa fa-star"></i> 3500</td>
                                    <td class="tdGreen"><i class="fa fa-check"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div style="padding:0" class="calender widget-shadow">
                        <h4 class="title3 text-center"><i class="fa fa-star"></i> Withdraw History</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID #</th>
                                    <th>Items(s)</th>
                                    <th>Amount Paid</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Gun</td>
                                    <td><i class="fa fa-star"></i> 3500</td>
                                    <td class="tdGreen"><i class="fa fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Gun</td>
                                    <td><i class="fa fa-star"></i> 3500</td>
                                    <td class="tdGreen"><i class="fa fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Gun</td>
                                    <td><i class="fa fa-star"></i> 3500</td>
                                    <td class="tdGreen"><i class="fa fa-check"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div style="padding:0" class="calender widget-shadow">
                        <h4 class="title3 text-center"><i class="fa fa-gamepad"></i> Game History</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Game Type</th>
                                    <th>ID #</th>
                                    <th>Pick</th>
                                    <th>Amount Bet</th>
                                    <th>Payout/Loss</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Roulette</th>
                                    <th scope="row">1</th>
                                    <td>Green</td>
                                    <td><i class="fa fa-star"></i> 3500</td>
                                    <td class="tdGreen">+ <i class="fa fa-star"></i> 49000</td>
                                </tr>
                                <tr>
                                    <th scope="row">Roulette</th>
                                    <th scope="row">2</th>
                                    <td>Red</td>
                                    <td><i class="fa fa-star"></i> 3500</td>
                                    <td class="tdRed">- <i class="fa fa-star"></i> 3500</td>
                                </tr>
                                <tr>
                                    <th scope="row">Roulette</th>
                                    <th scope="row">3</th>
                                    <td>Red</td>
                                    <td><i class="fa fa-star"></i> 3500</td>
                                    <td class="tdRed">- <i class="fa fa-star"></i> 3500</td>
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
