
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
    <title>Invoice - Frest - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{ asset('ventas') }}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ventas') }}/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/vendors/css/vendors.min.css">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/pages/app-invoice.css">
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
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                        </ul>
                      
                        
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us mr-50"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr mr-50"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de mr-50"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt mr-50"></i> Portuguese</a></div>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="template-search">
                                <div class="search-input-close"><i class="bx bx-x"></i></div>
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title">7 new Notification</span><span class="text-bold-400 cursor-pointer">Mark all as read</span></div>
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
                                                <div class="avatar bg-primary bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content text-primary font-medium-2">LD</span></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">New customer</span> is registered</h6><small class="notification-text">1 hrs ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cursor-pointer">
                                        <div class="media d-flex align-items-center justify-content-between">
                                            <div class="media-left pr-0">
                                                <div class="media-body">
                                                    <h6 class="media-heading">New Offers</h6>
                                                </div>
                                            </div>
                                            <div class="media-right">
                                                <div class="custom-control custom-switch">
                                                    <input class="custom-control-input" type="checkbox" checked id="notificationSwtich">
                                                    <label class="custom-control-label" for="notificationSwtich"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar bg-danger bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content"><i class="bx bxs-heart text-danger"></i></span></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Application</span> has been approved</h6><small class="notification-text">6 hrs ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between read-notification cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="{{ asset('ventas') }}/app-assets/images/portrait/small/avatar-s-4.jpg" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">New file</span> has been uploaded</h6><small class="notification-text">4 hrs ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar bg-rgba-danger m-0 mr-1 p-25">
                                                    <div class="avatar-content"><i class="bx bx-detail text-danger"></i></div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Finance report</span> has been generated</h6><small class="notification-text">25 hrs ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center border-0">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="{{ asset('ventas') }}/app-assets/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">New customer</span> comment recieved</h6><small class="notification-text">2 days ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name">John Doe</span><span class="user-status text-muted">Available</span></div><span><img class="round" src="{{ asset('ventas') }}/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="page-user-profile.html"><i class="bx bx-user mr-50"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="bx bx-envelope mr-50"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> Chats</a>
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="auth-login.html"><i class="bx bx-power-off mr-50"></i> Logout</a>
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
                        <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">Reports</span></a>
                            <ul class="menu-content">
                                <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Third Level">Third Level</span></a>
                                </li>
                                <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Third Level">Third Level</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div><div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{asset('ventas') }}/html/ltr/vertical-menu-boxicons-template/index.html">
                        <div class="brand-logo"><img  src="{{asset('ventas') }}/app-assets/images/logo/logos.png" width="120" heigth="180" style="margin-left:-20px;margin-top:-20px"/></div>
                       <h2 class="brand-text mb-0" > <div class="titulo" style="margin-left:40px; margin-top:20px">GUSTOV</div> </h2>
                    </a></li>
               </ul>
        </div>
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
                        <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">Reports</span></a>
                            <ul class="menu-content">
                                <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Third Level">Third Level</span></a>
                                </li>
                                <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Third Level">Third Level</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- app invoice View Page -->
                <section class="invoice-view-wrapper">
                    <div class="row">
                        <!-- invoice view page -->
                        <div class="col-xl-9 col-md-8 col-12">
                            <div class="card invoice-print-area">
                                <div class="card-content">
                                    <div class="card-body pb-0 mx-25">
                                        <!-- header section -->
                                        <div class="row">
                                            <div class="col-xl-4 col-md-12">
                                                <span class="invoice-number mr-50">Invoice#</span>
                                                @foreach($listSale as $lis)
                                                @endforeach
                                                <span> {{$lis->codeBill}}</span>
                                            </div>
                                            <div class="col-xl-8 col-md-12">
                                                <div class="d-flex align-items-center justify-content-xl-end flex-wrap">
                                                    <div class="mr-3">
                                                        <small class="text-muted">Date Issue:</small>
                                                        <span>{{$customers->created_at}}</span>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <!-- logo and title -->
                                        <div class="row my-3">
                                            <div class="col-6">
                                                <h4 class="text-primary">GUSTOV</h4>
                                                <span>TEL: 70634370</span>
                                            </div>
                                            <div class="col-6 d-flex justify-content-end">
                                                <img src="{{ asset('ventas') }}/app-assets/images/pages/logo.png" alt="logo" height="110" width="164">
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- invoice address and contact -->
                                        <div class="row invoice-info">
                                            <div class="col-6 mt-1">
                                                <h6 class="invoice-from">Client</h6>
                                                <div class="mb-1">
                                                    <span>{{$customers->name}}</span>
                                                </div>
                                                <h6 class="invoice-from">Ni</h6>
                                                <div class="mb-1">
                                                    <span>{{$customers->nit}}</span>

                                                </div>
                                                <h6 class="invoice-from">Ci</h6>
                                                <div class="mb-1">
                                                    <span>{{$customers->ci}}</span>
                                                </div>
                                               
                                            </div>
                                          
                                        </div>
                                        <hr>
                                    </div>
                                    <!-- product details table-->
                                    <div class="invoice-product-details table-responsive mx-md-25">
                                        <table class="table table-borderless mb-0">
                                            <thead>
                                                <tr class="border-0">
                                                    <th scope="col">Menú</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col" class="text-right">Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($listSale as $list)   
                                               
                                                <td>{{$list->nameMenu}}</td>
                                               
                                                
                                                <td>{{$list->price}}</td> 
                                               
                                                
                                                <td>{{$list->number}}</td>
                                                
                                                <td class="text-primary text-right font-weight-bold">{{$list->subTotal}}</td>
                                                </tr>
                                             @endforeach  
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- invoice subtotal -->
                                    <div class="card-body pt-0 mx-25">
                                        <hr>
                                        <div class="row">
                                            <div class="col-4 col-sm-6 mt-75">
                                                <p>Thanks for your business.</p>
                                                <?php 
                                                $num=0.12;
                                                $result=0;
                                                $result2=0;
                                                $result=$num*$list->total;
                                                $result2=$list->total-$result;
                                                ?>
                                            </div>
                                            <div class="col-8 col-sm-6 d-flex justify-content-end mt-75">
                                                <div class="invoice-subtotal">
                                                    <div class="invoice-calc d-flex justify-content-between">
                                                        <span class="invoice-title">Sub Total</span>
                                                        <span class="invoice-value"><?php echo $result2?></span>
                                                    </div>
                                                    <div class="invoice-calc d-flex justify-content-between">
                                                        <span class="invoice-title">Iva 13 %</span>
                                                        <span class="invoice-value"><?php echo $result ?></span>
                                                    </div>
                                                    <div class="invoice-calc d-flex justify-content-between">
                                                        <span class="invoice-title">Total </span>
                                                        <span class="invoice-value">{{$list->total}}</span>
                                                    </div>
                                                    
                                                   
                                                <hr>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- invoice action  -->
                        <div class="col-xl-3 col-md-4 col-12">
                            <div class="card invoice-action-wrapper shadow-none border">
                                <div class="card-body">
                                    <div class="invoice-action-btn">
                                        <button class="btn btn-primary btn-block invoice-send-btn">
                                            <i class="bx bx-send"></i>
                                            <span>Send Invoice</span>
                                        </button>
                                    </div>
                                    <div class="invoice-action-btn">
                                        <button class="btn btn-light-primary btn-block invoice-print">
                                            <span>print</span>
                                        </button>
                                    </div>
                                    <div class="invoice-action-btn">
                                        <a href="app-invoice-edit.html" class="btn btn-light-primary btn-block">
                                            <span>Edit Invoice</span>
                                        </a>
                                    </div>
                                    <div class="invoice-action-btn">
                                        <button class="btn btn-success btn-block">
                                            <i class='bx bx-dollar'></i>
                                            <span>Add Payment</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- demo chat-->
    <div class="widget-chat-demo">
        <!-- widget chat demo footer button start -->
        <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo" data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button>
        <!-- widget chat demo footer button ends -->
        <!-- widget chat demo start -->
        <div class="widget-chat widget-chat-demo d-none">
            <div class="card mb-0">
                <div class="card-header border-bottom p-0">
                    <div class="media m-75">
                        <a href="JavaScript:void(0);">
                            <div class="avatar mr-75">
                                <img src="{{ asset('ventas') }}/app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32" height="32">
                                <span class="avatar-status-online"></span>
                            </div>
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
                            <span class="text-muted font-small-3">Active</span>
                        </div>
                        <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                    </div>
                </div>
                <div class="card-body widget-chat-container widget-chat-demo-scroll">
                    <div class="chat-content">
                        <div class="badge badge-pill badge-light-secondary my-1">today</div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>How can we help? 😄</p>
                                    <span class="chat-time">7:45 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat chat-left">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Hey John, I am looking for the best admin template.</p>
                                    <p>Could you please help me to find it out? 🤔</p>
                                    <span class="chat-time">7:50 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                                    <span class="chat-time">8:01 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top p-1">
                    <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                        <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
                        <button type="submit" class="btn btn-primary glow px-1"><i class="bx bx-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- widget chat demo ends -->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; PIXINVENT</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('ventas') }}/app-assets/vendors/js/vendors.min.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('ventas') }}/app-assets/js/core/app-menu.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/js/core/app.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/js/scripts/components.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('ventas') }}/app-assets/js/scripts/pages/app-invoice.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>