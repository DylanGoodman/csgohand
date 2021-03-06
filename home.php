<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 28-Jan-17
 * Time: 1:41 AM
 */
require 'header.php';

?>

<!-- Breadcrumbs Start -->
<div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <ul class="breadcrumbs">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li>Dashboard</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<div class="row">
    <div class="col-md-6">
        <div class="boxed social-stats">
            <div class="title-bar">
                <i class="fa fa-shopping-cart"></i>
                Place your order
            </div>
            <div class="inner">
                <form class="basic-form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="platform">Select Platform:</label>
                            <select id="platform">
                                <option selected value="instagram">Instagram</option>
                                <option value="twitter">Twitter</option>
                                <option value="facebook">FaceBook</option>
                                <option value="soundcloud">SoundCloud</option>
                                <option value="youtube">YouTube</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="amount">Amount:</label>
                            <input type="number" id="amount">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="service">Select Service:</label>
                            <select id="service">

                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="orderUrl">URL:</label>
                            <input type="text" id="orderUrl">
                            <span class="description">Make sure your profile is set to public!</span>
                        </div>
                    </div>
                    <button style="margin: 15px 0px 0px 0px !important" type="button" class="btn btn-success" id="orderSubmit">Place Order</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="boxed projects mail-container">
            <div class="title-bar">
                <i class="fa fa-book"></i>
                Service Prices
            </div>
            <div class="inner">
                <table id="datatables-table" class="datatables">
                  <thead>
                  <th>Service Name</th>
                  <th>Price Per 1000</th>
                  <th>Start Time</th>
                  <th>Min. Order</th>
                  <th>Max. Order</th>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Twitter Followers - 10k/day</td>
                    <td><i class="fa fa-dollar"></i> 2.00</td>
                    <td>Instant</td>
                    <td>100</td>
                    <td>300,000</td>
                  </tr>
                  <tr>
                    <td>Twitter Followers - 15k/day</td>
                    <td><i class="fa fa-dollar"></i> 2.40</td>
                    <td>0-2 Hour(s)</td>
                    <td>100</td>
                    <td>500,000</td>
                  </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php
require 'footer.php';
?>
