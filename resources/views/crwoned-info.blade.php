<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<?php  
$crowned =  \App\Models\Crowned::find($id);
if(!$crowned) {
    abort('404');
} 
$vistor=new App\Models\Vistors; $vistor->saveVistor('Visit Crowned');

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$crowned->title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$crowned->bio}}" />
    <meta name="keywords" content="Miss Career, Yegobox, Theeventx,Hireher" />
    <meta name="author" content="Yegobox Team" />

    
    <!--
//////////////////////////////////////////////////////

Website: 		http://yegobox.com/
Email: 			info@yegobox.com
Twitter: 		http://twitter.com/yegobox
Facebook: 		https://www.facebook.com/yegobox

//////////////////////////////////////////////////////
-->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="{{$crowned->title}}" />
    <meta property="og:image" content="{{$crowned->image}}" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="{{$crowned->bio}}" />
    <meta name="twitter:title" content="{{$crowned->title}}}" />
    <meta name="twitter:image" content="{{$crowned->image}}" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="{{$crowned->bio}}" />


    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{$crowned->image}}">
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

    <!-- Stylesheets -->
    <!-- Dropdown Menu -->
    <link rel="stylesheet" href="{{ asset('css/superfish.css') }}">
    <!-- Owl Slider -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
    <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
    <!-- Date Picker -->
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
    <!-- CS Select -->
    <link rel="stylesheet" href="{{ asset('css/cs-select.css') }}">
    <link rel="stylesheet" href="css/cs-skin-border.css">

    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- Flat Icon -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <!-- Icomoon -->
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <div id="fh5co-wrapper" style=" background-image: url('/images/image-2.jpg');
                                    background-repeat: no-repeat;width:100%;
                                    background-size: cover; background-size: center center">
        <div id="fh5co-page">

            <div id="fh5co-blog-section">
                <div class="container" id="contact">
                    <!-- <div class="card border-success mb-3" style="max-width: 100%">
                        <h1 class="text-center"><b>VOTES CLOSED</b></h1>
                        <div class="card-footer bg-transparent border-success">
                            <a href="https://theeventx.com/view-event/30" class="btn btn-success btn-block btn-sm">
                                Get Ticket
                            </a>

                        </div>
                        <img class="img-fluid" src="/images/buy-ticket.jpeg" style="width:100%;">



                    </div> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-success mb-3" style="max-width: 100%">
                                <div class="card-header bg-transparent border-success"><b>{{$crowned->title}}
                                      </b></div>
                                <img class="img-fluid" src="{{$crowned->image}}" style="width:100%;">
                                <div class="card-body text-success">
                                    <h5 class="card-title"><b>Award: {{$crowned->award}}</b></h5>
                                    <b class="card-text">
                                        <hr />
                                        {!! html_entity_decode(str_replace('.', '<br /> <br />', $crowned->bio)) !!}
                                    </b>
                                </div>

                                <div class="card-footer bg-transparent border-success">
                                    <div class="row">
                                    <div class="col-12 mb-2">
                                   
                                   <a href="/donate" class="donate text-center  btn-block">#Donate2HerProject</a>
                               
                                  </div>
                                  <div class="col-12 mt-1">
                                 <a href="https://www.hireherapp.com/register" style="background:#000;border-color:#000" class="btn btn-info btn-block btn-sm">
                                 Get Hired
                                 </a>
                                 </div>

                                        <!-- <div class="col-12">
                                            <a href="https://theeventx.com/view-event/44"
                                                class="btn btn-success btn-block btn-sm">
                                                Get Ticket
                                            </a>
                                        </div> -->
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <footer id="footer" class="fh5co-bg-color">
            <div class="container">

                <div class="row">
                    <div class="float-left col-sm-6">
                        <img src="/images/logo.png" class="img-rounded" style="width: 200px">
                    </div>

                    <div class="col-sm-6 float-right">
                        <ul class="social-icons float-right">
                            <li>
                                <a href="https://twitter.com/Misscareerafric"><i
                                        class="icon-twitter-with-circle"></i></a>
                                <!-- <a href="#"><i class="icon-facebook-with-circle"></i></a> -->
                                <a href="https://www.instagram.com/miss_career_africa20/"><i
                                        class="icon-instagram-with-circle"></i></a>
                                <!-- <a href="#"><i class="icon-linkedin-with-circle"></i></a> -->
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </footer>

    </div>
    <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->
    <!-- Javascripts -->
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>

    <script src="{{ asset('js/mca.js') }}"></script>

</body>

</html>
