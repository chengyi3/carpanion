<?php
function isactive($myurl){
    $url = $_SERVER['REQUEST_URI'];
    $main = explode("/",$url);
    $active = end($main);

    if($myurl==$active){
        return "active";
    }
}


$customer_id=$this->session->userdata('id');
if($customer_id){
    $customer_name=$this->session->userdata('name');
    $mymenu =  "<li class='nav-item ".isactive("")."'><a href='".base_url()."' class='nav-link'>Home</a></li>
        <li class='nav-item ".isactive("find_ride")."'><a href='".base_url()."find_ride' class='nav-link'>Find a ride</a></li>
        <li class='nav-item ".isactive("offer_ride")."'><a href='".base_url()."offer_ride' class='nav-link'>Offer a ride</a></li>
        <li class='nav-item ".isactive("contact")."'><a href='".base_url()."contact' class='nav-link'>Contact us</a></li>
        <li class='nav-item dropdown active'><a href='#' class='nav-link dropdown-toggle'  data-toggle='dropdown'><b>Welcome $customer_name</b></a>
            <ul class='dropdown-menu dropdown-menu-right'>
                <li class='nav-item dropdown-item ".isactive("account")."'><a href='".base_url()."account' class='nav-link'>Account</a></li>
                <li class='nav-item dropdown-item ".isactive("my_rides")."'><a href='".base_url()."my_rides' class='nav-link'>My rides</a></li>
                <li class='nav-item dropdown-item ".isactive("my_bookings")."'><a href='".base_url()."my_bookings' class='nav-link'>My bookings</a></li>
            </ul>
        </li>
        <li class='nav-item '><a href='".base_url()."login/logout' class='nav-link'>Logout</a></li>";
}else{
    $base_url = base_url()."login";
    $mymenu =  "<li class='nav-item ".isactive('')."'><a href='".base_url()."' class='nav-link'>Home</a></li>
        <li class='nav-item ".isactive('find_ride')."'><a href='".base_url()."login' class='nav-link'>Find a ride</a></li>
        <li class='nav-item ".isactive('offer_ride')."'><a href='".base_url()."login' class='nav-link'>Offer a ride</a></li>
        <li class='nav-item ".isactive('contact')."'><a href='".base_url()."contact' class='nav-link'>Contact us</a></li>
        <li class='nav-item ".isactive('register')."'><a href='".base_url()."register' class='nav-link'>Register</a></li>
        <li class='nav-item ".isactive('login')."'><a href='".base_url()."login' class='nav-link'>Login</a></li>";
        if(isactive("find_ride")=="active"){
            header("location: $base_url");
        }
        if(isactive("offer_ride")=="active"){
            header("location: $base_url");
        }
        if(isactive("account")=="active"){
            header("location: $base_url");
        }
        if(isactive("my_rides")=="active"){
            header("location: $base_url");
        }
        if(isactive("my_bookings")=="active"){
            header("location: $base_url");
        }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CarPanion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Miss+Fajardose&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light scrolled awake" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?=base_url()?>">CarPanion</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="oi oi-menu"></span> Menu </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <?=$mymenu?>
                </ul>
            </div>
        </div>
    </nav>

    <?=$main_content?>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container-fluid px-md-5 px-3">
            <!-- <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Appetizer</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Open Hours</h2>
                        <ul class="list-unstyled open-hours">
                        <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
                        <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                        <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                        <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                        <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                        <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                        <li class="d-flex"><span>Sunday</span><span> 9:00 - 02:00</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Newsletter</h2>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                        <form action="#" class="subscribe-form">
                        <div class="form-group">
                            <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="form-control submit px-3">
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Instagram</h2>
                        <div class="thumb d-sm-flex">
                            <a href="#" class="thumb-menu img" style="background-image: url(<?=base_url()."assets/"?>images/insta-1.jpeg);">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image: url(<?=base_url()."assets/"?>images/insta-2.jpeg);">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image: url(<?=base_url()."assets/"?>images/insta-3.jpeg);">
                            </a>
                        </div>
                        <div class="thumb d-flex">
                            <a href="#" class="thumb-menu img" style="background-image: url(<?=base_url()."assets/"?>images/insta-4.jpeg);">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image: url(<?=base_url()."assets/"?>images/insta-5.jpeg);">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image: url(<?=base_url()."assets/"?>images/insta-6.jpeg);">
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://innefu.com" target="_blank">IDK</a>
                </div>
            </div>
        </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="<?=base_url()."assets/"?>js/jquery.min.js"></script>
    <script src="<?=base_url()."assets/"?>js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?=base_url()."assets/"?>js/popper.min.js"></script>
    <script src="<?=base_url()."assets/"?>js/bootstrap.min.js"></script>
    <script src="<?=base_url()."assets/"?>js/jquery.easing.1.3.js"></script>
    <script src="<?=base_url()."assets/"?>js/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()."assets/"?>js/jquery.stellar.min.js"></script>
    <script src="<?=base_url()."assets/"?>js/owl.carousel.min.js"></script>
    <script src="<?=base_url()."assets/"?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url()."assets/"?>js/aos.js"></script>
    <script src="<?=base_url()."assets/"?>js/jquery.animateNumber.min.js"></script>
    <script src="<?=base_url()."assets/"?>js/bootstrap-datepicker.js"></script>
    <script src="<?=base_url()."assets/"?>js/jquery.timepicker.min.js"></script>
    <script src="<?=base_url()."assets/"?>js/scrollax.min.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
    <!-- <script src="<?=base_url()."assets/"?>js/google-map.js"></script> -->
    <script src="<?=base_url()."assets/"?>js/main.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#intell_table1').DataTable({
                aaSorting: [[0, 'desc']]
            });
        });
    </script>
</body>
</html>
