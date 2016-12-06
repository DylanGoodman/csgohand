<?php

require ('app/init.php');

?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page row" style="margin:0;">
				<div class="col-md-8 grid_box1">
					<div style="padding:0;background-color: #F1F1F1;" class="calender text-center">
						<h4 class="title3 text-center">Next roll in 45 seconds...</h4>
						<div style="margin-top:0" class="widget_1 row elements">
							<div class="col-sm-4 widget_1_box">
								<div class="tile-progress vimeo">
									<div class="content">
										<h4><i class="fa fa-star"></i> 3578900</h4>
									</div>
								</div>
							</div>
							<div class="col-sm-4 widget_1_box">
								<div class="tile-progress bg-green">
									<div class="content">
										<h4><i class="fa fa-star"></i> 3500</h4>
									</div>
								</div>
							</div>
							<div class="col-sm-4 widget_1_box">
							   <div class="tile-progress bg-red">
									<div class="content">
										<h4><i class="fa fa-star"></i> 3500</h4>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="progress progress-striped active">
							 <div id="timer" class="bar black" style="width: 50%;"></div>
						</div>

						<div class="col-md-12 text-center">
							<h2>
								<span class="fa-stack col-md-1">
									<i style="color:#A43741"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">32</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#080505"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">5</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#A43741"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">32</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#A43741"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">5</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#080505"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">32</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#080505"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">5</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#080505"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">32</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#080505"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">5</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#A43741"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">32</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#A43741"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">5</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#A43741"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">32</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#A43741"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">5</strong>
								</span>
							</h2>
						</div>
					</div>

					<div class="row">
						<div style="margin-top:55px;" id="rouletteTable">
							<div class="col-xs-7" id="rouletteWheel"></div>
							<div class="col-xs-5" id="ballWheel"></div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 grid_box1">
					<div style="padding:0" class="calender widget-shadow">
						<h4 class="title3 text-center">Place Bet</h4>

						<div style="margin-top:0" class="row">
							<button style="border-radius:0;" type="clear" class="btn col-md-4 btn-default">Black</button>
							<button style="border-radius:0;color:#55AA55" type="clear" class="btn col-md-4  btn-default">Green</button>
							<button style="border-radius:0;color:#A43741" type="clear" class="btn col-md-4  btn-default">Red</button>
						</div>

						<input  type="text" class="form-control1" placeholder="Choose bet below or type custom # here">

						<div style="margin-top:0" class="row">
							<button style="border-radius:0;" type="clear" class="btn col-md-3  btn-default">+100</button>
							<button style="border-radius:0;" type="clear" class="btn col-md-3  btn-default">+1000</button>
							<button style="border-radius:0;" type="clear" class="btn col-md-3  btn-default">+5000</button>
							<button style="border-radius:0;" type="clear" class="btn col-md-3  btn-default">+10000</button>
							<button style="border-radius:0;" type="clear" class="btn col-md-2 btn-default">1/2</button>
							<button style="border-radius:0;" type="clear" class="btn col-md-2  btn-default">2x</button>
							<button style="border-radius:0;" type="clear" class="btn col-md-2  btn-default">0</button>
							<button style="border-radius:0;" type="clear" class="btn col-md-3  btn-default">Last</button>
							<button style="border-radius:0;" type="clear" class="btn col-md-3  btn-default">Max</button>
						</div>
					</div>

					<div style="margin-top:10px;padding:0" class="calender widget-shadow">
						<h4 class="title3 text-center">Chat</h4>
						<div id="chatbox" class="scrollbar scrollbar1" tabindex="5000" style="overflow: hidden; outline: none;height:300px;">
							<!--<div class="activity-row activity-row1 activity-right">
								<div class="chatMsg">
									<div class="chatHead admin">
										<h5><img style="width:18px" class="img-circle" src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/05/05aea756a7c81e54735993c220a86e73732390f1_full.jpg" alt=""><b>Haste CSGOHand.com</b> <div class="chatRole"><i class="fa fa-star"></i> Admin</div></h5>
									</div>
									<div class="activity-desc-sub">
										<p>testing dank new chat</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>

							<div class="activity-row activity-row1 activity-right">
								<div class="chatMsg">
									<div class="chatHead mod">
										<h5><img style="width:18px" class="img-circle" src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/05/05aea756a7c81e54735993c220a86e73732390f1_full.jpg" alt=""><b>Mod CSGOHand.com</b> <div class="chatRole"><i class="fa fa-user-secret"></i> Mod</div></h5>
									</div>
									<div class="activity-desc-sub">
										<p>testing dank new chat, this chat is so dank that some times i think i forget to light it up
										and smoke that bitch, ya feel me?</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="activity-row activity-row1 activity-right">
								<div class="chatMsg">
									<div class="chatHead maxLvl">
										<h5><img style="width:18px" class="img-circle" src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/05/05aea756a7c81e54735993c220a86e73732390f1_full.jpg" alt=""><b>MaxedLVL CSGOHand.com</b> <div class="chatRole"><i class="fa fa-trophy"></i> 30</div></h5>
									</div>
									<div class="activity-desc-sub">
										<p>testing dank new chat, this chat is so dank that some times i think i forget to light it up
										and smoke that bitch, ya feel me?</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="activity-row activity-row1 activity-right">
								<div class="chatMsg">
									<div class="chatHead maxLvl">
										<h5><img style="width:18px" class="img-circle" src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/05/05aea756a7c81e54735993c220a86e73732390f1_full.jpg" alt=""><b>MaxedLVL CSGOHand.com</b> <div class="chatRole"><i class="fa fa-trophy"></i> 30</div></h5>
									</div>
									<div class="activity-desc-sub">
										<p>testing dank new chat, this chat is so dank that some times i think i forget to light it up
										and smoke that bitch, ya feel me?</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="activity-row activity-row1 activity-right">
								<div class="chatMsg">
									<div class="chatHead maxLvl">
										<h5><img style="width:18px" class="img-circle" src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/05/05aea756a7c81e54735993c220a86e73732390f1_full.jpg" alt=""><b>MaxedLVL CSGOHand.com</b> <div class="chatRole"><i class="fa fa-trophy"></i> 30</div></h5>
									</div>
									<div class="activity-desc-sub">
										<p>testing dank new chat, this chat is so dank that some times i think i forget to light it up
										and smoke that bitch, ya feel me?</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>-->
						</div>
						<div class="chat-bottom">
							<?php if(isset($_SESSION['steamid'])){ ?>
								<input id="chattext" type="text" placeholder="Say something... don't be shy!" required=""></input>
							<?php } else {?>
							<input id="chattext" type="text" disabled placeholder="Login to chat!!" required=""></input>
							<?php } ?>
						</div>
					</div>

					<div style="margin-top:20px;" class="	" id="controls">
						<ul>
							<li><a href="#" onclick="rouletteSpinner.doTogglePause()">Pause / Play</a></li>
							<li><a href="#" onclick="rouletteSpinner.doRollBall()">Roll Ball</a></li>
							<li><a href="#" onclick="rouletteSpinner.doTakeBall()">Take Ball</a></li>
						</ul>
					</div>
				</div>




			</div>
		</div>
		<div class="footer" id="footer">
		   <p>&copy; 2016 CSGOHand - Version 2.00.13.45</p>
		</div>
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
				$("html").niceScroll({background:"#00F"});
			});

		</script>


	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
    <script src="js/core.js"></script>
<script src="js/roulette.js"></script>
</body>
</html>
