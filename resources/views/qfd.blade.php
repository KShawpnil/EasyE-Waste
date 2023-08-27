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
        <link href="{{asset('css/formpart2.css')}}" rel="stylesheet" />
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
                    <form action="{{ url('/') }}/qfd" method="POST">
                @csrf
                <div id="div1">
                    <div id="div2">
                        <table id="qfdTable">
                            <tr>
                                <th></th> <th></th> <th colspan="4" align="center" id="impth">Importance</th>
                            </tr>
                            <tr>
                                <th>Customer Requirments</th>
                                <th>CR Rank</th>
                                <th>Waste Management</th>
                                <th>Waste Minimization</th>
                                <th>Waste Collection</th>
                                <th>Product Durability</th>
                            </tr>

                            {{-- 1 --}}
                            <tr>
                                <td>Biodegradable</td>

                                <td><label for="1">1</label>
                                    <input type="radio" name="crrank1" id="1" value="1">

                                    <label for="2">2</label>
                                    <input type="radio" name="crrank1" id="2" value="2">

                                    <label for="3">3</label>
                                    <input type="radio" name="crrank1" id="3" value="3">

                                    <label for="4">4</label>
                                    <input type="radio" name="crrank1" id="4" value="4">

                                    <label for="5">5</label>
                                    <input type="radio" name="crrank1" id="5" value="5">
                                </td>

                                {{-- <td> Waste management</td> --}}
                                <td><label for="9">9</label>
                                    <input type="radio" name="wastemanage1" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="wastemanage1" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="wastemanage1" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="wastemanage1" id="0" value="0">
                                </td>

                                {{-- <td> Waste minization</td> --}}
                                <td><label for="9">9</label>
                                    <input type="radio" name="wastemini1" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="wastemini1" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="wastemini1" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="wastemini1" id="0" value="0">
                                </td>

                                {{-- <td>Waste collection</td> --}}
                                <td><label for="9">9</label>
                                    <input type="radio" name="wastecollect1" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="wastecollect1" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="wastecollect1" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="wastecollect1" id="0" value="0">
                                </td>

                                {{-- <td>Product Durability</td> --}}
                                <td><label for="9">9</label>
                                    <input type="radio" name="produra1" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="produra1" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="produra1" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="produra1" id="0" value="0">
                                </td>
                            </tr>
                            
                            {{-- 2 --}}
                            <tr>
                                <td>Recyleing of materials</td>

                                <td> <label for="1">1</label>
                                    <input type="radio" name="crrank2" id="1" value="1">

                                    <label for="2">2</label>
                                    <input type="radio" name="crrank2" id="2" value="2">

                                    <label for="3">3</label>
                                    <input type="radio" name="crrank2" id="3" value="3">

                                    <label for="4">4</label>
                                    <input type="radio" name="crrank2" id="4" value="4">

                                    <label for="5">5</label>
                                    <input type="radio" name="crrank2" id="5" value="5">
                                </td>

                                {{-- <td> Waste management</td> --}}
                                <td><label for="9">9</label>
                                    <input type="radio" name="wastemanage2" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="wastemanage2" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="wastemanage2" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="wastemanage2" id="0" value="0">
                                </td>

                                {{-- <td> Waste minization</td> --}}
                            <td><label for="9">9</label>
                                    <input type="radio" name="wastemini2" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="wastemini2" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="wastemini2" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="wastemini2" id="0" value="0">
                                </td>

                                {{-- <td>Waste collection</td> --}}
                            <td><label for="9">9</label>
                                    <input type="radio" name="wastecollect2" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="wastecollect2" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="wastecollect2" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="wastecollect2" id="0" value="0">
                                </td>

                                {{-- <td>Product Durability</td> --}}
                                <td><label for="9">9</label>
                                    <input type="radio" name="produra2" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="produra2" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="produra2" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="produra2" id="0" value="0">
                                </td>
                            </tr>
                            {{-- 3 --}}
                            <tr>
                                <td>Extraction of heavy materials</td>

                                <td> <label for="1">1</label>
                                    <input type="radio" name="crrank3" id="1" value="1">

                                    <label for="2">2</label>
                                    <input type="radio" name="crrank3" id="2" value="2">

                                    <label for="3">3</label>
                                    <input type="radio" name="crrank3" id="3" value="3">

                                    <label for="4">4</label>
                                    <input type="radio" name="crrank3" id="4" value="4">

                                    <label for="5">5</label>
                                    <input type="radio" name="crrank3" id="5" value="5">
                                </td>

                                {{-- <td> Waste management</td> --}}
                                <td><label for="9">9</label>
                                    <input type="radio" name="wastemanage3" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="wastemanage3" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="wastemanage3" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="wastemanage3" id="0" value="0">
                                </td>

                                {{-- <td> Waste minization</td> --}}
                                <td><label for="9">9</label>
                                    <input type="radio" name="wastemini3" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="wastemini3" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="wastemini3" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="wastemini3" id="0" value="0">
                                </td>

                                {{-- <td>Waste collection</td> --}}
                                <td><label for="9">9</label>
                                    <input type="radio" name="wastecollect3" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="wastecollect3" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="wastecollect3" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="wastecollect3" id="0" value="0">
                                </td>

                                {{-- <td>Product Durability</td> --}}
                                <td><label for="9">9</label>
                                    <input type="radio" name="produra3" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="produra3" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="produra3" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="produra3" id="0" value="0">
                                </td>
                            </tr>








                            {{-- 4 --}}
                            <tr>
                                <td>Transfer of ewaste</td>

                                <td> <label for="1">1</label>
                                    <input type="radio" name="crrank4" id="1" value="1">

                                    <label for="2">2</label>
                                    <input type="radio" name="crrank4" id="2" value="2">

                                    <label for="3">3</label>
                                    <input type="radio" name="crrank4" id="3" value="3">

                                    <label for="4">4</label>
                                    <input type="radio" name="crrank4" id="4" value="4">

                                    <label for="5">5</label>
                                    <input type="radio" name="crrank4" id="5" value="5">
                                </td>

                                {{-- <td> Waste management</td> --}}
                                <td><label for="9">9</label>
                                    <input type="radio" name="wastemanage4" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="wastemanage4" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="wastemanage4" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="wastemanage4" id="0" value="0">
                                </td>

                                {{-- <td> Waste minization</td> --}}
                            <td><label for="9">9</label>
                                    <input type="radio" name="wastemini4" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="wastemini4" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="wastemini4" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="wastemini4" id="0" value="0">
                                </td>

                                {{-- <td>Waste collection</td> --}}
                                <td><label for="9">9</label>
                                    <input type="radio" name="wastecollect4" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="wastecollect4" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="wastecollect4" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="wastecollect4" id="0" value="0">
                                </td>

                                {{-- <td>Product Durability</td> --}}
                                <td><label for="9">9</label>
                                    <input type="radio" name="produra4" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="produra4" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="produra4" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="produra4" id="0" value="0">
                                </td>
                            </tr>





                            {{-- 5 --}}
                            <tr>
                                <td>Remaining waste disposal</td>

                                <td> <label for="1">1</label>
                                    <input type="radio" name="crrank5" id="1" value="1">

                                    <label for="2">2</label>
                                    <input type="radio" name="crrank5" id="2" value="2">

                                    <label for="3">3</label>
                                    <input type="radio" name="crrank5" id="3" value="3">

                                    <label for="4">4</label>
                                    <input type="radio" name="crrank5" id="4" value="4">

                                    <label for="5">5</label>
                                    <input type="radio" name="crrank5" id="5" value="5">
                                </td>

                                {{-- <td> Waste management</td> --}}
                                <td><label for="9">9</label>
                                    <input type="radio" name="wastemanage5" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="wastemanage5" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="wastemanage5" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="wastemanage5" id="0" value="0">
                                </td>

                                {{-- <td> Waste minization</td> --}}
                                <td><label for="9">9</label>
                                    <input type="radio" name="wastemini5" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="wastemini5" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="wastemini5" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="wastemini5" id="0" value="0">
                                </td>

                                {{-- <td>Waste collection</td> --}}
                            <td><label for="9">9</label>
                                    <input type="radio" name="wastecollect5" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="wastecollect5" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="wastecollect5" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="wastecollect5" id="0" value="0">
                                </td>

                                {{-- <td>Product Durability</td> --}}
                                <td><label for="9">9</label>
                                    <input type="radio" name="produra5" id="9" value="9">

                                    <label for="3">3</label>
                                    <input type="radio" name="produra5" id="3" value="3">

                                    <label for="1">1</label>
                                    <input type="radio" name="produra5" id="1" value="1">

                                    <label for="0">0</label>
                                    <input type="radio" name="produra5" id="0" value="0">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="6" align="center"> <button id="submit" type="submit" name="submit" value="submit">Submit</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        
        <!-- Quality Function Deployment-->
        <section class="qfdClass" id="qfdSection">
            
        </section>
        
        <!-- Contact-->
        <section class="signup-section" id="signup">
            
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
    </body>
</html>
