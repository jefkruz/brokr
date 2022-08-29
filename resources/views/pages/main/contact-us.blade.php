@extends('layouts.main')
@section('content')
    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div id="googlemaps" class="google-map mt-0" style="height: 500px;"></div>

    <div class="container">

        <div class="row py-4">
            <div class="col-lg-6">

                <h2 class="font-weight-bold text-8 mt-2 mb-0">Contact Us</h2>
                <p class="mb-4">Feel free to ask for details, don't save any questions!</p>

                @include('includes.portal.alerts')
                <form class="contact-form" action="" method="POST">
                    @csrf


                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="form-label mb-1 text-2">Full Name</label>
                            <input type="text" value="{{old('fullname')}}"  class="form-control text-3 h-auto py-2" d name="fullname" required>

                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-label mb-1 text-2">Email Address</label>
                            <input type="email" value="{{old('email')}}" class="form-control text-3 h-auto py-2" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label mb-1 text-2">Subject</label>
                            <input type="text" value="{{old('subject')}}" data-msg-required="Please enter the subject."  class="form-control text-3 h-auto py-2" name="subject" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label mb-1 text-2">Message</label>
                            <textarea  data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="note" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-6">

                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                    <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                    <ul class="list list-icons list-icons-style-2 mt-2">
                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> No. 11A, Road 2 Ikota Villa Estate off Lekki-Epe Expressway, Ikota. Lagos</li>
                        <li> <a href="tel:+234 912 544 3001"><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong>+234 912 544 3001</a></li>

                        <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:info@brokr.ng">info@brokr.ng</a></li>
                    </ul>
                </div>

                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                    <h4 class="pt-5">Business <strong>Hours</strong></h4>
                    <ul class="list list-icons list-dark mt-2">
                        <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                        <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                        <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                    </ul>
                </div>

            </div>

        </div>

    </div>
    <section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9">
                    <div class="call-to-action-content">
                        <h2 class="font-weight-normal text-6 mb-0">Brokr is <strong class="font-weight-extra-bold">everything</strong> you need to get <strong class="font-weight-extra-bold">awesome</strong> Property!</h2>
                        <p class="mb-0">The Best Relator Portal </p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="call-to-action-btn">
                        <a href="{{route('register')}}"  class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Sign Up Now</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('maps')


    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script>

        /*
        Map Settings

            Find the Latitude and Longitude of your address:
                - https://www.latlong.net/
                - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

        */
        function initializeGoogleMaps() {
            // Map Markers
            var mapMarkers = [{
                address: "New York, NY 10017",
                html: "<strong>New York Office</strong><br>New York, NY 10017",
                icon: {
                    image: "img/pin.png",
                    iconsize: [26, 46],
                    iconanchor: [12, 46]
                },
                popup: true
            }];

            // Map Initial Location
            var initLatitude = 40.75198;
            var initLongitude = -73.96978;

            // Map Extended Settings
            var mapSettings = {
                controls: {
                    draggable: (($.browser.mobile) ? false : true),
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: true,
                    streetViewControl: true,
                    overviewMapControl: true
                },
                scrollwheel: false,
                markers: mapMarkers,
                latitude: initLatitude,
                longitude: initLongitude,
                zoom: 11
            };

            var map = $('#googlemaps').gMap(mapSettings);
        }

        // Initialize Google Maps when element enter on browser view
        theme.fn.intObs( '.google-map', 'initializeGoogleMaps()', {} );

        // Map text-center At
        var mapCenterAt = function(options, e) {
            e.preventDefault();
            $('#googlemaps').gMap("centerAt", options);
        }

    </script>

@endsection

