<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/formpart2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/img/background.png') }}"> --}}
    <title>formpart2</title>
</head>

<body>
    {{-- <img src="img/background.png" alt=""> --}}
    <!-- Navbar -->
    <ul>
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="aboutUs.html">About Us</a></li>
        <li><a href="ourServices.html">Our Services</a></li>
        <li><a href="contactUs.html">Contact Us</a></li>
        <li style="float:right"><a href="login.html">Login/Registration</a></li>
    </ul>
    <!-- End of Navbar -->

    <form action="{{ url('/') }}/create2" method="POST">
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

                    <td><label class="container"> 1
                            <input type="radio" checked="checked" name="checkbox2" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 2
                            <input type="radio" name="checkbox2" value="2">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox2" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 4
                            <input type="radio" name="checkbox2" value="4">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 5
                            <input type="radio" name="checkbox2" value="5">
                            <span class="checkmark"></span>
                        </label>
                    </td>

                    {{-- <td> Waste management</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox21" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox21" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox21" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox21" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>

                    {{-- <td> Waste minization</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox22" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox22" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox22" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox22" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>

                    {{-- <td>Waste collection</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox23" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox23" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox23" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox23" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>

                    {{-- <td>Price of recyling materials</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox24" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox24" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox24" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox24" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>
                </tr>

                {{-- 2 --}}
                <tr>
                    <td>Recycling of materials</td>

                    <td><label class="container"> 1
                            <input type="radio" checked="checked" name="checkbox3" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 2
                            <input type="radio" name="checkbox3" value="2">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox3" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 4
                            <input type="radio" name="checkbox3" value="4">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 5
                            <input type="radio" name="checkbox3" value="5">
                            <span class="checkmark"></span>
                        </label>
                    </td>

                    {{-- <td> Waste management</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox31" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox31" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox31" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox31" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>

                    {{-- <td> Waste minization</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox32" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox32" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox32" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox32" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>

                    {{-- <td>Waste collection</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox33" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox33" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox33" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox33" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>

                    {{-- <td>Price of recyling materials</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox34" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox34" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox34" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox34" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>
                </tr>

                {{-- 3 --}}
                <tr>
                    <td>Extraction of heavy materials</td>

                    <td><label class="container"> 1
                            <input type="radio" checked="checked" name="checkbox4" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 2
                            <input type="radio" name="checkbox4" value="2">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox4" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 4
                            <input type="radio" name="checkbox4" value="4">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 5
                            <input type="radio" name="checkbox4" value="5">
                            <span class="checkmark"></span>
                        </label>
                    </td>

                    {{-- <td> Waste management</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox41" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox41" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox41" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox41" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>

                    {{-- <td> Waste minization</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox42" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox42" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox42" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox42" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>

                    {{-- <td>Waste collection</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox43" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox43" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox43" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox43" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>

                    {{-- <td>Price of recyling materials</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox44" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox44" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox44" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox44" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>
                </tr>

                {{-- 4 --}}
                <tr>
                    <td>Transfer of e-waste</td>

                    <td><label class="container"> 1
                            <input type="radio" checked="checked" name="checkbox5" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 2
                            <input type="radio" name="checkbox5" value="2">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox5" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 4
                            <input type="radio" name="checkbox5" value="4">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 5
                            <input type="radio" name="checkbox5" value="5">
                            <span class="checkmark"></span>
                        </label>
                    </td>

                    {{-- <td> Waste management</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox51" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox51" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox51" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox51" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>

                    {{-- <td> Waste minization</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox52" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox52" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox52" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox52" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>

                    {{-- <td>Waste collection</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox53" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox53" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox53" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox53" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>

                    {{-- <td>Price of recyling materials</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox54" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox54" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox54" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox54" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>
                </tr>

                {{-- 5 --}}
                <tr>
                    <td>Remaining waste disposal</td> 

                    <td><label class="container"> 1
                            <input type="radio" checked="checked" name="checkbox6" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 2
                            <input type="radio" name="checkbox6" value="2">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox6" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 4
                            <input type="radio" name="checkbox6" value="4">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 5
                            <input type="radio" name="checkbox6" value="5">
                            <span class="checkmark"></span>
                        </label>
                    </td>

                    {{-- <td> Waste management</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox61" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox61" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox61" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox61" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>

                    {{-- <td> Waste minization</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox62" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox62" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox62" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox62" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>

                    {{-- <td>Waste collection</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox63" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox63" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox63" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox63" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>

                    {{-- <td>Price of recyling materials</td> --}}
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox64" value="9">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox64" value="3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox64" value="1">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox64" value="0">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>
                </tr>
                
                {{-- <tr>
                    <td> Waste management</td>
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox77">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox77">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox77">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox77">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Waste minimization</td>

                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox44">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox44">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox44">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox44">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>
                </tr>
                <tr> 
                    <td>Waste collection</td>

                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox55">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox55">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox55">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox55">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>Price of recyling materials</td>

                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox22">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox22">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox22">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox22">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>
                </tr>--}}
                <tr>
                    <td colspan="6" align="center"> <button id="submit" type="submit" name="submit" value="submit">Submit</button></td>
                </tr>
            </table>
        </div>
    </div>
</form>
</body>

</html>