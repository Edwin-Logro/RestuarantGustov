<?php
if(isset($_POST['submit']))
{
$dop=$_post[date];
$result=exploide('-',$dob);
$date=$result[2];
$month=$result[1];
$year=$result[0];
$new=$date.'-'.$month.'-'.$year;
//echo $new;

}
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>GUSTOV</title>
    <link rel="apple-touch-icon" src="{{asset('ventas') }}/app-assets/images/logo/logos.png">
    <link rel="" type="image" href="{{asset('ventas') }}/app-assets/images/logo/logos.png " >   
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title">7 Notificaciones</span><span class="text-bold-400 cursor-pointer">Marcar como leidos</span></div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="{{ asset('ventas') }}/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Congratulate Socrates Itumay</span> for work anniversaries</h6><small class="notification-text">Mar 15 12:32pm</small>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-flex justify-content-between read-notification cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="{{ asset('ventas') }}/app-assets/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">New Message</span> received</h6><small class="notification-text">You have 18 unread messages</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center py-0">
                                            <div class="media-left pr-0"><img class="mr-1" src="{{ asset('ventas') }}/app-assets/images/icon/sketch-mac-icon.png" alt="avatar" height="39" width="39"></div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Updates Available</span></h6><small class="notification-text">Sketch 50.2 is currently newly added</small>
                                            </div>
                                            <div class="media-right pl-0">
                                                <div class="row border-left text-center">
                                                    <div class="col-12 px-50 py-75 border-bottom">
                                                        <h6 class="media-heading text-bold-500 mb-0">Update</h6>
                                                    </div>
                                                    <div class="col-12 px-50 py-75">
                                                        <h6 class="media-heading mb-0">Close</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                               </div>
                                            <div class="media-body">
                                                 </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">Leer todo</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name">Edwin Logro</span><span class="user-status text-muted">Administrador</span></div><span><img class="round" src="{{ asset('ventas') }}/app-assets/images/portrait/small/user.png" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="page-user-profile.html"><i class="bx bx-user mr-50"></i> Perfil</a>
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="auth-login.html"><i class="bx bx-power-off mr-50"></i> Salir</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{asset('ventas') }}/html/ltr/vertical-menu-boxicons-template/index.html">
                        <div class="brand-logo"><img  src="{{asset('ventas') }}/app-assets/images/logo/logos.png" width="120" heigth="180" style="margin-left:-20px;margin-top:-20px"/></div>
                       <h2 class="brand-text mb-0" > <div class="titulo" style="margin-left:40px; margin-top:20px">GUSTOV</div> </h2>
                    </a></li>
               </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">  <br><br> 
            <li class=" nav-item"><a href="#"><i class="bx bx-menu"></i><span class="menu-title" data-i18n="Menu Levels">Menú</span></a>    <ul class="menu-content">
                        <li><a href="{{ url('/menu/create') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Avatar">Register Menú</a>
                        </li>
                        <li><a href="{{ url('/menu/') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Divider">Lists Menu</span></a>
                        </li>
                    </ul>
                </li>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bx-menu"></i><span class="menu-title" data-i18n="Menu Levels">Sale</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ url('/invoice/create') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">Register Sale</span></a>
                        </li>
                        <li><a href="{{ url('/report/create') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">Reports</span></a>
                            
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                    
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Pick-A-Date Picker start -->
                <section id="pick-a-date">
                    <div class="carsd">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                </div>
                                <div class="col-md-4 text-center">
                                    <fieldset class="form-group">
                                    <h3 class="card-title">report of sale</h3>
                                        
                                    </fieldset>
                                </div>
                            <form class="form form-vertical " action="{{url('/report') }}" method="post" enctype="multipart/form-data">
                             @csrf
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8 text-center">
                                        <div class="mb-1">
                                            <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                                <h4 for="first-name-icon">Add Date </h4>
                                                <input type="date" class="form-control round form-control-lg shadow pl-2" name="date1" id="date1">
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-14 text-center">
                                        <div class="mb-1">
                                            <div class="col-md-2 text-center">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1">Generate</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </form>
                        </div>
                    </div>
                </section>
                <!-- Pick-A-Date Picker end -->
                <!-- Timeline Widget Starts -->
                <div class="col-xl-12 col-md-6 timline-card">
                    <?php  $i=0; ?>
            
                @foreach($invoices as $invoice)
                  
                    @if($invoice->created_at->format('Y-m-d')==$reports->dateReports)

                            @foreach($customers as $custome)
                                 @if($custome->id==$invoice->id)
                                    <div class="card ">
                                            <div class="card-header">
                                                
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <ul class="widget-timeline">
                                                
                                                        <li class="timeline-items timeline-icon-success active">
                                                            <div class="timeline-time"></div>
                                                  
                                                            <h6 class="timeline-title">{{$custome['name']}}</h6>
                                                            <p class="timeline-text">Nit <a href="JavaScript:void(0);">{{$custome['nit']}}</a></p>
                                                            <p class="timeline-text">Ci <a href="JavaScript:void(0);">{{$custome['ci']}}</a></p>
                                                            <div class="timeline-content">
                                                            <p class="timeline-text">total Venta <td>{{$invoice['total']}}</td> bs</p></div>
                                                            <?php 
                                                                $i=$i+$invoice['total'];
                                                            ?>
                                                   
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>
                                
                                 @endif
                            @endforeach
                             
                    @endif 
                @endforeach
                                             
                                              <div class="card ">
                                <div class="card-header">
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="widget-timeline">
                                            <li class="timeline-items timeline-icon-primary active">
                                                <div class="timeline-time"> </div>
                                                <h6 class="timeline-title">Total Sales Made</h6>
                                                <p class="timeline-text"> <a href="JavaScript:void(0);"><?php  echo $i?></a> bs</p>
                                         
                                                    <img src="{{asset('ventas') }}/app-assets/images/icon/sketch.png" alt="document" height="36" width="27" class="mr-50">
                                               
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                </div>
                                
                        </div>
                 </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('ventas') }}/app-assets/vendors/js/vendors.min.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('ventas') }}/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/vendors/js/pickers/daterange/moment.min.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('ventas') }}/app-assets/js/core/app-menu.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/js/core/app.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/js/scripts/components.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('ventas') }}/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>