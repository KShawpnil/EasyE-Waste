<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/formpart2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}">
    <title>QFD</title>
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

    <form action="{{ url('/') }}/create3" method="GET">
    @csrf
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

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                {{-- 2 --}}
                <tr>
                    <td>Recycling of materials</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                {{-- 3 --}}
                <tr>
                    <td>Extraction of heavy materials</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                {{-- 4 --}}
                <tr>
                    <td>Transfer of e-waste</td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                {{-- 5 --}}
                <tr>
                    <td>Remaining waste disposal</td>
                    
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td colspan="6" align="center"> <button id="submit" type="submit" name="submit" value="submit">Order Complete</button></td>
                </tr>
            </table>
        </div>
    </div>
</form>
</body>

</html>