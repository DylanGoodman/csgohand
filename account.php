<?php

require ('app/init.php');

if (!isset($_SESSION['steamid'])) {
	header("Location: ../");
}

?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page row" style="margin:0;">
				<div class="col-md-12 grid_box1">
					<?php if(!$user->hasSetTradeUrl($_SESSION['steamid'])) {?>
                    <div id="tradeUrlWarning" class="alert alert-danger">
                        <i class="fa fa-warning"></i> <b>Your Steam Trade URL is not set, please set it below before attempting to deposit or play.</b>
                    </div>
					<?php } ?>
                    <div class="col-md-4 profile widget-shadow">
						<h4 class="title3">Account</h4>
						<div class="profile-top">
							<img width="92px" src="<?php echo $steamprofile['avatarfull']; ?>" alt="">
							<h4><?php echo $steamprofile['personaname']; ?></h4>
						</div>
                        <a href="#" data-toggle="modal" data-target="#tUrl" onclick="getTradeUrl()">
    						<div class="profile-text">
                                    <div class="profile-row">
        								<div class="profile-left">
        									<i class="fa fa-steam-square profile-icon"></i>
        								</div>
        								<div class="profile-right">
        									<h4>Steam Trade URL</h4>
											<?php if($user->hasSetTradeUrl($_SESSION['steamid'])) { ?>
											<p><span id="userTradeUrl"><?php echo $userData['tradeUrl']; ?></span></p>
											<?php } else { ?>
        									<p><span id="userTradeUrl">Not set... Click here to set it.</span></p>
											<?php } ?>
        								</div>
        								<div class="clearfix"> </div>
        							</div>
    						</div>
                        </a>
						<div class="profile-btm">
							<ul>
								<li>
                                    <h3><i class="fa fa-thumbs-up"></i></h3>
									<h4>420</h4>
									<h5>Wins</h5>
								</li>
								<li>
                                    <h3><i class="fa fa-thumbs-down"></i></h3>
									<h4>100</h4>
									<h5>Losses</h5>
								</li>
								<li>
                                    <h3><i class="fa fa-university"></i></h3>
									<h4><?php echo $levelData['level']; ?></h4>
									<h5>Level</h5>
								</li>
							</ul>
						</div>
                        <div class="profile-text"> <!-- 12,000 exp per level -->
                            <div class="profile-level">
                                <i class="fa fa-university"></i> <?php echo $levelData['level']; ?>
                            </div>
                            <div class="progress progress-striped active">
                                <div class="bar blue" style="width: 100%;"></div>
                            </div>
                            <p style="text-align:center;margin-top:5px;color:#6F6F6F">(<?php echo $levelData['exp']; ?>/<?php echo $level->getLevelData(); ?> exp)</p>
                        </div>
                        <div style="background-color: #e4e4e4;padding:5px;" class="profile-btm">
                            <p style="text-align: center;font-size:.8em">Congrats, you achieved the maxiumum level!</p>
                        </div>
					</div>
                    <div class="col-md-4 profile chat-mdl-grid widget-shadow">
                        <h4 class="title3">How to Level</h4>
                        <div class="profile-top">
							<h4>The following tasks give exp. every time they are completed:</h4>
						</div>
                        <div class="profile-text">
                            <h5>Depositing <i class="fa fa-star"></i> 1000 = 50 exp</h5>
                            <h5>Winning <i class="fa fa-star"></i> 1000 = 25 exp</h5>
                            <h5>Referring a friend = 600 exp and <i class="fa fa-star"></i> 100</h5>
                            <h5>Hitting green on Roulette = 1,000 exp</h5>
                        </div>
                        <div class="profile-top">
							<h4>The following tasks give exp. only once upon completion:</h4>
						</div>
                        <div class="profile-text">
                            <h5>Deposit over <i class="fa fa-star"></i> 200,000 at once  = 10,000 exp</h5>
                            <h5>Place 1,000 bets on Roulette  = 5,000 exp</h5>
                            <h5>Refer 25 people  = 5,000 exp</h5>
                            <h5>Refer 75 people  = 20,000 exp and <i class="fa fa-star"></i> 5,000</h5>
                        </div>
                        <div style="background-color: #080505;" class="profile-top">
							<h4>Did you know? You gain <b>double exp.</b> while you have 'CSGOHand.com' in your Steam username!</h4>
						</div>
                    </div>
                    <div class="col-md-4 profile widget-shadow">
                        <h4 class="title3">Referrals</h4>
                        <div class="profile-top">
							<h4>Your code: 3DHY</h4>
                            <h5>Send the above code to your friends/fans for them to redeem <i class="fa fa-star"></i> 100</h5>
						</div>
                        <div class="profile-btm">
							<ul>
								<li>
                                    <h3><i class="fa fa-users"></i></h3>
									<h4>0</h4>
									<h5>Referred</h5>
								</li>
								<li>
                                    <h3><i class="fa fa-star"></i></h3>
									<h4>100</h4>
									<h5>Profit</h5>
								</li>
								<li>
                                    <h3><i class="fa fa-close"></i></h3>
									<h4>0/1</h4>
									<h5>Claimed</h5>
								</li>
							</ul>
						</div>
                        <div class="profile-text">
                            <form class="form-inline">
                                <div class="form-group ">
                                    <input type="ref" class="form-control" id="red" placeholder="Referral Code">
                                </div>
                                    <button style="float:right" type="submit" class="btn btn-primary">Claim</button>
                                </form>
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
                           <label for="recipient-name" class="control-label">Steam Trade URL: <a href="http://steamcommunity.com/profiles/<?php echo $_SESSION['steamid']; ?>/tradeoffers/privacy#trade_offer_access_url" target="_blank">Find it here!</a> </label>
                           <input type="text" class="form-control" id="tradeUrl" placeholder="Paste your full Trade URL here">
                       </div>
                   </form>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   <button type="button" id="tradeSubmit" class="btn btn-primary">Set Trade URL</button>
               </div>
           </div>
       </div>
   </div>
<script src="js/core.js"></script>
</body>
</html>
