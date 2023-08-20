<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/formpart1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}">
    <title>Formpart1</title>
</head>
<body>
    <!-- Navbar -->
    <ul>
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="aboutUs.html">About Us</a></li>
        <li><a href="ourServices.html">Our Services</a></li>
        <li><a href="contactUs.html">Contact Us</a></li>
        <li style="float:right"><a href="login.html">Login/Registration</a></li>
    </ul>
    <!-- End of Navbar -->
    <div id="div">
        <div id="div2">
            <form action="{{ url('/') }}/create" method="POST">
            @csrf
            <br>
                <table>
                    <tr>
                        <td><label for="product_name">Product Name:</label></td>
                        <td><input type="text" name="product_name"></td>
                    </tr>
                
                    <br>
                    <tr>
                        <td><label for="product_type">Product Type:</label></td>
                        <td><input type="text" name="product_type"></td>
                    </tr>
                
                    <br>
                    <tr>
                        <td><label for="product_quantity">Product Quantity:</label></td>
                        <td><input type="text" name="product_quantity"></td>
                    </tr>
                
                    <br>
                    <tr>
                        <td><label for="endproduct">End Product:</label></td>
                        <td><input type="text" name="endproduct"></td>
                    </tr>
                
                    <br>
                    <tr>
                        <td colspan="2" align="center"> 
                            {{-- <a href="create2.blade.php"></a> --}}
                            <button id="submit" type="submit" name="submit">Next</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>