<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>EasyE-waste</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/style.css')}}" rel="stylesheet" />

        <!-- login css link -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="{{asset('css/style2.css')}}">
        <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
        <link rel="stylesheet" href="{{asset('css/trackOrder.css')}}">
        <link rel="stylesheet" href="{{asset('css/searchBar.css')}}">

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{url('/#page-top')}}">EasyE-waste</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/dashboard/#trackOrder">Previous Orders</a></li>
                        <li class="nav-item"><a class="nav-link" href="/dashboard/#trackOrder">Track My Order</a></li>
                        <li class="nav-item"><a class="nav-link" href="/checkout">Cart</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup"><img src="{{asset('images/bell_icon_255865.ico')}}" width= "30px" alt=""></a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Username</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                    <div class="dashboardItems">
        <div class="gif">
            
        </div>
        <div class="description">
            <h2 id='appointmentHeader'>Book Appointment</h2>
            <p  id="bookingParagraph">
                Book your appointment with us for selling or recycling or e-waste. We assure you a great service. Thank you
        
            </p>
            <a class="btn btn-primary" href="/appointment">Book Appointment</a>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </header>
        

        <!-- Previous Orders -->


        <!-- Track Order -->
        <section id="trackOrder" style="background-color: #eee;">
        <h2 id="PreviousOrdersHeading">Previous Orders</h2>
        <!-- Search -->
        <div class="container justify-content-center">
    
            <div class="row" >

                <div class="col-md-8" id="searchRow">
           
                    <div class="input-group mb-3" id="searchDiv">
                        <input type="text" class="form-control input-text" placeholder="Search products...." aria-label="Recipient's username" aria-describedby="basic-addon2" id="searchBar">
                        <div class="input-group-append">
                            <button class="btn btn-outline-warning btn-lg" type="button"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
           
                </div>        
        
            </div>
    
    
        </div>
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-8">
                    <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
                    <div class="card-body p-5">

                        <p class="lead fw-bold mb-5" style="color: #f37a27;">Purchase Reciept</p>

                        <div class="row">
                        <div class="col mb-3">
                            <p class="small text-muted mb-1">Date</p>
                            <p>10 April 2021</p>
                        </div>
                        <div class="col mb-3">
                            <p class="small text-muted mb-1">Order No.</p>
                            <p>012j1gvs356c</p>
                        </div>
                        </div>

                        <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                        <div class="row">
                            <div class="col-md-8 col-lg-9">
                            <p>BEATS Solo 3 Wireless Headphones</p>
                            </div>
                            <div class="col-md-4 col-lg-3">
                            <p>BDT299.99</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-lg-9">
                            <p class="mb-0">Shipping</p>
                            </div>
                            <div class="col-md-4 col-lg-3">
                            <p class="mb-0">BDT33.00</p>
                            </div>
                        </div>
                        </div>

                        <div class="row my-4">
                        <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                            <p class="lead fw-bold mb-0" style="color: #f37a27;">BDT262.99</p>
                        </div>
                        </div>

                        <p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">Tracking Order</p>

                        <div class="row">
                        <div class="col-lg-12">

                            <div class="horizontal-timeline">

                            <ul class="list-inline items d-flex justify-content-between">
                                <li class="list-inline-item items-list">
                                <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">In Inventory</p
                                    class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                                </li>
                                <li class="list-inline-item items-list">
                                <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Processing</p
                                    class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                                </li>
                                <li class="list-inline-item items-list">
                                <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">On the way
                                </p>
                                </li>
                                <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                                <p style="margin-right: -8px;">Delivered</p>
                                </li>
                            </ul>

                            </div>

                        </div>
                        </div>

                        <p class="mt-4 pt-2 mb-0">Want any help? <a href="#!" style="color: #f37a27;">Please contact
                            us</a></p>

                    </div>
                    </div>
                </div>
                </div>
            </div>


            <!-- another div -->
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-8">
                    <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
                    <div class="card-body p-5">

                        <p class="lead fw-bold mb-5" style="color: #f37a27;">Purchase Reciept</p>

                        <div class="row">
                        <div class="col mb-3">
                            <p class="small text-muted mb-1">Date</p>
                            <p>10 April 2021</p>
                        </div>
                        <div class="col mb-3">
                            <p class="small text-muted mb-1">Order No.</p>
                            <p>012j1gvs356c</p>
                        </div>
                        </div>

                        <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                        <div class="row">
                            <div class="col-md-8 col-lg-9">
                            <p>BEATS Solo 3 Wireless Headphones</p>
                            </div>
                            <div class="col-md-4 col-lg-3">
                            <p>BDT299.99</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-lg-9">
                            <p class="mb-0">Shipping</p>
                            </div>
                            <div class="col-md-4 col-lg-3">
                            <p class="mb-0">BDT33.00</p>
                            </div>
                        </div>
                        </div>

                        <div class="row my-4">
                        <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                            <p class="lead fw-bold mb-0" style="color: #f37a27;">BDT262.99</p>
                        </div>
                        </div>

                        <p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">Tracking Order</p>

                        <div class="row">
                        <div class="col-lg-12">

                            <div class="horizontal-timeline">

                            <ul class="list-inline items d-flex justify-content-between">
                                <li class="list-inline-item items-list">
                                <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">In Inventory</p
                                    class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                                </li>
                                <li class="list-inline-item items-list">
                                <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Processing</p
                                    class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                                </li>
                                <li class="list-inline-item items-list">
                                <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">On the way
                                </p>
                                </li>
                                <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                                <p style="margin-right: -8px;">Delivered</p>
                                </li>
                            </ul>

                            </div>

                        </div>
                        </div>

                        <p class="mt-4 pt-2 mb-0">Want any help? <a href="#!" style="color: #f37a27;">Please contact
                            us</a></p>

                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                  
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-darkgreen">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">United International University</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">error.sage@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+880 1602441585</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-darkgreen small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Error Sage 2023</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <!-- login js -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
