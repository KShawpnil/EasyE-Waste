<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>EasyE-waste</title>
</head>
<body>
    <!-- Navbar -->
    <ul>
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="aboutUs.html">About Us</a></li>
        <li><a href="ourServices.html">Our Services</a></li>
        <li><a href="contactUs.html">Contact Us</a></li>
        <li style="float:right"><a href="{{ route('login') }}">Login/Registration</a></li>
    </ul>
    <!-- End of Navbar -->

    <!-- <div id="logo">
        
    </div> -->
    <div id="ImageSlideshowDiv">
        <div class="image-slideshow">
            <div class="image fade">
            <!-- <img src="./images/go-green-web.jpg" alt="Mountain Top" class="slideImg"> -->
            <img src="{{URL('images/go-green-web.jpg')}}" alt="">
            </div>        
            <div class="image fade">
            <!-- <img src="./images/green earth.jpg" alt="Palm Trees" class="slideImg"> -->
            <img src="{{URL('images/green earth.jpg')}}" alt="">
            </div>        
            <div class="image fade">
            <!-- <img src="./images/TW-earth-day.webp" alt="Neon Sign" class="slideImg"> -->
            <img src="{{URL('images/TW-earth-day.webp')}}" alt="">

            </div>
          </div>
    </div>
    

    <div id="quoteDiv">
        <h2 id="quote">"Earth is what we all have in common"</h2>
        <h3 id="author">-Welldon Berry</h3>
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

    <script src="script.js"></script>
</body>
</html>