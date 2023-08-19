<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/formpart2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <title>QFD</title>
</head>

<body>
    <!-- Navbar -->
    <ul>
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="aboutUs.html">About Us</a></li>
        <li><a href="ourServices.html">Our Services</a></li>
        <li><a href="contactUs.html">Contact Us</a></li>
    </ul>
    <!-- End of Navbar -->

    <form action="{{ url('/') }}/qfd" method="POST">
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
</body>
</html>