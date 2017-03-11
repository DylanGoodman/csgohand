<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 28-Jan-17
 * Time: 3:21 PM
 */
require 'header.php';
?>

<!-- Breadcrumbs Start -->
<div class="row breadcrumbs">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <ul class="breadcrumbs">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li>Settings</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <!-- Row Start -->
        <div class="row">

            <!-- Basic Example Start -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="boxed no-padding">

                    <!-- Title Bar Start -->
                    <div class="title-bar white">
                        <h4>Account Settings</h4>
                    </div>
                    <!-- Title Bar End -->

                    <div class="inner no-radius">
                        <div class="row">
                            <div class="notification notification-success" id="accountSuccess">
                                <strong>Success!</strong> Your account has been updated!
                            </div>
                            <div class="notification notification-error" id="accountError">
                                <strong>Error!</strong> <span id="accountErrorMsg"></span>
                            </div>
                        </div>
                        <form method="post" action="#" class="full-form" id="accountForm">
                            <!-- Text Field -->
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="username">Username</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="username" readonly="readonly" value="<?php echo $_SESSION['username']; ?>" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="email" placeholder="<?php echo $_SESSION['email']; ?>" />
                                </div>
                            </div>
                            <!-- Password Field -->
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="password">New Password</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="password" class="jquery-tooltip" id="password" placeholder="Enter your password" title="Enter a new password here if you want one!" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="passwordr">Confirm Password</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="password" id="passwordr" placeholder="Confirm your password" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" placeholder="Current Password" id="confirmPassword" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="button" class="btn btn-success" onclick="updateAccount()">Update</button>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                        </form>

                    </div>
                </div>
            </div>
            <!-- Basic Example End -->

            <!-- Additional Settings Example Start -->
            <div class="boxed col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <!-- Title Bar Start -->
                <div class="title-bar white">
                    <h4>Your Support Tickets</h4>
                </div>
                <!-- Title Bar End -->

                <div class="inner no-radius">

                    <div class="boxed no-padding mail-container">
                        <div class="inner">
                            <table class="support">
                                <tbody>
                                <tr class="checked">
                                    <td><a href="ticket.html">#LTK-84927/3</a></td>
                                    <td><span class="tag urgent">Urgent</span></td>
                                    <td class="hidden-xs">My site is not working well</td>
                                    <td>Feb 12</td>
                                </tr>

                                <tr>
                                    <td><a href="ticket.html">#LTK-84937/3</a></td>
                                    <td><span class="tag urgent">Urgent</span></td>
                                    <td class="hidden-xs">Please tell me how can I make this work</td>
                                    <td>Feb 12</td>
                                </tr>

                                <tr>
                                    <td><a href="ticket.html">#LTK-84947/1</a></td>
                                    <td><span class="tag normal">Normal</span></td>
                                    <td class="hidden-xs">Password changed and I don't know it</td>
                                    <td>Feb 12</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
            <!-- Additional Settings Example End -->

        </div>

<?php
require 'footer.php';
?>
