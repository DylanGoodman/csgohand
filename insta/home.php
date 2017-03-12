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
                  <th class="id">#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                  </thead>
                  <tbody>
                  <tr>
                    <td class="id">1</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>doe10</td>
                  </tr>
                  <tr>
                    <td class="id">2</td>
                    <td>Jenny</td>
                    <td>Doe</td>
                    <td>jenny83</td>
                  </tr>
                  <tr>
                    <td class="id">1</td>
                    <td>Markus</td>
                    <td>Jacob</td>
                    <td>jacob2</td>
                  </tr>
                  <tr>
                    <td class="id">2</td>
                    <td>Zoltan</td>
                    <td>Zelo</td>
                    <td>zelo</td>
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
