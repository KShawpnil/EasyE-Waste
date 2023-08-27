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
                    <div id="div1">
        <div id="div2">
            <table>
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

                    <td>
                        @foreach($item as $i)
                            {{ $i->crrank1 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->wastemanage1 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->wastemini1 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->wastecollect1 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->produra1 }}
                        @endforeach
                    </td>
                </tr>

                {{-- 2 --}}
                <tr>
                    <td>Recycling of materials</td>

                    <td>
                        @foreach($item as $i)
                            {{ $i->crrank2 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->wastemanage2 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->wastemini2 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->wastecollect2 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->produra2 }}
                        @endforeach
                    </td>
                </tr>

                {{-- 3 --}}
                <tr>
                    <td>Extraction of heavy materials</td>

                    <td>
                        @foreach($item as $i)
                            {{ $i->crrank3 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->wastemanage3 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->wastemini3 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->wastecollect3 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->produra3 }}
                        @endforeach
                    </td>
                </tr>

                {{-- 4 --}}
                <tr>
                    <td>Transfer of e-waste</td>

                    <td>
                        @foreach($item as $i)
                            {{ $i->crrank4 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->wastemanage4 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->wastemini4 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->wastecollect4 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->produra4 }}
                        @endforeach
                    </td>
                </tr>

                {{-- 5 --}}
                <tr>
                    <td>Remaining waste disposal</td>
                    
                    <td>
                        @foreach($item as $i)
                            {{ $i->crrank5 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->wastemanage5 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->wastemini5 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->wastecollect5 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item as $i)
                            {{ $i->produra5 }}
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Total Importance</td>
                    <td>{{ $data[0] }}</td>
                    <td>{{ $data[1] }}</td>
                    <td>{{ $data[2] }}</td>
                    <td>{{ $data[3] }}</td>
                </tr>
                <tr>
                    <td colspan="2">Performance</td>
                    <td>{{ $performance[0] }}</td>
                    <td>{{ $performance[1] }}</td>
                    <td>{{ $performance[2] }}</td>
                    <td>{{ $performance[3] }}</td>
                </tr>
                <tr>
                    <form action="{{url('/')}}/qfdresults" method="POST">
                    @csrf
                        <input type="hidden" name="total_importance1" value="{{ $data[0] }}">
                        <input type="hidden" name="total_importance2" value="{{ $data[1] }}">
                        <input type="hidden" name="total_importance3" value="{{ $data[2] }}">
                        <input type="hidden" name="total_importance4" value="{{ $data[3] }}">
                        <input type="hidden" name="performance1" value="{{ $performance[0] }}">
                        <input type="hidden" name="performance2" value="{{ $performance[1] }}">
                        <input type="hidden" name="performance3" value="{{ $performance[2] }}">
                        <input type="hidden" name="performance4" value="{{ $performance[3] }}">
                        <td colspan="6" align="center"><input type="submit" value="Next"></td>
                    </form>
                </tr>
            </table>
        </div>
    </div>
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