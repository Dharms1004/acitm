<?php include_once("include/header.php") ?>


<!-- Sub banner start -->
<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Contact Us</h1>
                <ul class="breadcrumbs">
                    <li><a href="#l">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Contact body start -->
<div class="contact-body content-area-6">
    <div class="container">
        <div class="row">
        <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success">
                    <?=  $_SESSION['success'] ?>
                </div>
                  <?php  }  ?>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">

                <!-- Contact form start -->
                <div class="contact-form">
                    <div class="main-title">
                        <h1><span>Contact</span> with us</h1>
                    </div>
                    <form id="contact_form" action="<? base_url() ?>pages/contact" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group fullname">
                                    <input type="text" name="username" class="input-text" required placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group enter-email">
                                    <input type="email" name="email" class="input-text" required placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group subject">
                                    <input type="text" name="subject" class="input-text" required placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group number">
                                    <input type="text" name="phone" class="input-text" required placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                                <div class="form-group message">
                                    <textarea class="input-text" name="message" required placeholder="Write message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group send-btn">
                                    <button type="submit" class="button-md button-theme">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>     
                </div>
                <!-- Contact form end -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <!-- Contact details start -->
                <div class="contact-details">
                    <div class="main-title-2">
                        <h1><span>Our</span> address</h1>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="media-body">
                            <h4>Head Office Address</h4>
                            <p>543/61 Sekhpur Alam Nagar  Road Rajaji Puram Lucknow 226017</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h4>Phone Number</h4>
                            <p>
                                <a href="tel:+91 941-590-6146">Office: +91 522-222624</a>
                            </p>
                            <p>
                                <a href="tel:+91 941-590-61461">Mobile: +91 983-939-0740</a>
                            </p>
                        </div>
                    </div>
                    <div class="media mrg-btm-0">
                        <div class="media-left">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h4>Email Address</h4>
                            <p>
                                <a href="mailto:infoACIT@gmail.com"> infoacitm@gmail.com</a>
                            </p>
                            <p>
                                <a href="" target="_blank">www.acitm.co.in</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Contact details end -->
            </div>
        </div>
    </div>
</div>
<!-- Contact body end -->

<!-- Google map start -->
<div class="section">
    <div class="map">
        <div id="map" class="contact-map"></div>
    </div>
</div>
<!-- Google map end -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script>
    function LoadMap(propertes) {
        var defaultLat = 27.048516;
        var defaultLng = 82.213045;
        var mapOptions = {
            center: new google.maps.LatLng(defaultLat, defaultLng),
            zoom: 15,
            scrollwheel: false,
            styles: [
                {
                    featureType: "administrative",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: "water",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: 'poi.business',
                    stylers: [{visibility: 'off'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                },
            ]
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var infoWindow = new google.maps.InfoWindow();
        var myLatlng = new google.maps.LatLng(27.048516, 82.213045);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
        (function (marker) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent("" +
                        "<div class='map-edu contact-map-content'>" +
                        "<div class='map-content'>" +
                        "<p class='address'>Utraula Road, Mankapur, Gonda, UP, </p>" +
                        "<ul class='map-edu-list'> " +
                        "<li><i class='fa fa-phone'></i>  91 941-590-61461</li> " +
                        "<li><i class='fa fa-envelope'></i>  ACITankapur@gmail.com</li> " +
                        "<li><a href='index.html'><i class='fa fa-globe'></i>  http://www.ACIT.co.in</li></a> " +
                        "</ul>" +
                        "</div>" +
                        "</div>");
                infoWindow.open(map, marker);
            });
        })(marker);
    }
    LoadMap();
</script>


<?php include_once("include/footer.php") ?>