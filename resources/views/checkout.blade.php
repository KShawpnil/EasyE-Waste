<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
    <title>EasyE-waste</title>
</head>
<body>
    <ul>
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="aboutUs.html">About Us</a></li>
        <li><a href="ourServices.html">Our Services</a></li>
        <li><a href="contactUs.html">Contact Us</a></li>
    </ul>
    <div class="checkout">
        <div class='row'>
            <h2>Checkout</h2>
            <div class='col-md-12'>
                <div class="card">
                    <div class="card-header">
                    Checkout details
                    </div>
                    <div class="card-body">
                    <table id="checkoutTable" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Product Type</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
<!--                             <th style="width:10%"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">
                                            @foreach($item as $i)
                                                {{ $i->productname }}
                                            @endforeach
                                        </h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Product Type">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">
                                            @foreach($item as $i)
                                                {{ $i->producttype }}
                                            @endforeach
                                        </h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">৳500</td>
                            <td data-th="Quantity">
                                @foreach($item as $i)
                                <input type="number" value="{{ $i->productamount }}" class="form-control quantity cart_update" min="1" />
                                @endforeach
                            </td>
                            <td data-th="Subtotal">৳500</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" style="text-align:right;"><h3><strong>Total ৳500</strong></h3></td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align:right;">
                                <form action="/session" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type='hidden' name="total" value="500">
                                    <input type='hidden' name="producttype" value="{{ $i->producttype }}">
                                    
                                    <input type='hidden' name="productamount" value="{{ $i->productamount }}">
                                    
                                    <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i>Checkout</button>
                                </form>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-distributed">

        <div class="footer-left">
  
          <h3>Error<span>Sage</span></h3>
  
          <p class="footer-links">
            <a href="#" class="link-1">Home</a>
                 
          
            <a href="#">About</a>
            
            <a href="faq.html">Faq</a>
            
            <a href="#">Contact</a>
          </p>
  
          <p class="footer-company-name">ErrorSage © 2023</p>
        </div>
  
        <div class="footer-center">
  
          <div>
            <i class="fa fa-map-marker"></i>
            <p><span>United International University</span> Madani Ave, Dhaka</p>
          </div>
  
  
          <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">error.sage@gmail.com</a></p>
          </div>
  
        </div>
  
        <div class="footer-right">
  
          <p class="footer-company-about">
            <span>About the company</span>
            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
          </p>
  
  
        </div>
  
      </footer>

    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>