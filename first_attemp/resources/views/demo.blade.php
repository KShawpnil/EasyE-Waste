<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/formpart2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}">
    <title>demo</title>
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

    <form action="{{ url('/') }}/demo" method="POST">
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
                    <td><input type="text" name="cdr"></td>

                    <td><label for="1">1</label>
                        <input type="radio" name="checkbox2" id="1" value="1">

                        <label for="2">2</label>
                        <input type="radio" name="checkbox2" id="2" value="2">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox2" id="3" value="3">

                        <label for="4">4</label>
                        <input type="radio" name="checkbox2" id="4" value="4">

                        <label for="5">5</label>
                        <input type="radio" name="checkbox2" id="5" value="5">
                    </td>

                    {{-- <td> Waste management</td> --}}
                    <td><label for="9">9</label>
                        <input type="radio" name="checkbox21" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox21" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox21" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox21" id="0" value="0">
                    </td>

                    {{-- <td> Waste minization</td> --}}
                    <td><label for="9">9</label>
                        <input type="radio" name="checkbox22" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox22" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox22" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox22" id="0" value="0">
                    </td>

                    {{-- <td>Waste collection</td> --}}
                    <td><label for="9">9</label>
                        <input type="radio" name="checkbox23" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox23" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox23" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox23" id="0" value="0">
                    </td>

                    {{-- <td>Price of recyling materials</td> --}}
                    <td><label for="9">9</label>
                        <input type="radio" name="checkbox24" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox24" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox24" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox24" id="0" value="0">
                    </td>
                </tr>




                
                {{-- 2 --}}
                <tr>
                    <td><input type="text" name="cdr"></td>

                    <td> <label for="1">1</label>
                        <input type="radio" name="checkbox3" id="1" value="1">

                        <label for="2">2</label>
                        <input type="radio" name="checkbox3" id="2" value="2">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox3" id="3" value="3">

                        <label for="4">4</label>
                        <input type="radio" name="checkbox3" id="4" value="4">

                        <label for="5">5</label>
                        <input type="radio" name="checkbox3" id="5" value="5">
                    </td>

                    {{-- <td> Waste management</td> --}}
                    <td><label for="9">9</label>
                        <input type="radio" name="checkbox31" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox31" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox31" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox31" id="0" value="0">
                    </td>

                    {{-- <td> Waste minization</td> --}}
                   <td><label for="9">9</label>
                        <input type="radio" name="checkbox32" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox32" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox32" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox32" id="0" value="0">
                    </td>

                    {{-- <td>Waste collection</td> --}}
                   <td><label for="9">9</label>
                        <input type="radio" name="checkbox33" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox33" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox33" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox33" id="0" value="0">
                    </td>

                    {{-- <td>Price of recyling materials</td> --}}
                    <td><label for="9">9</label>
                        <input type="radio" name="checkbox34" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox34" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox34" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox34" id="0" value="0">
                    </td>
                </tr>









                {{-- 3 --}}
                <tr>
                    <td><input type="text" name="cdr"></td>

                    <td> <label for="1">1</label>
                        <input type="radio" name="checkbox4" id="1" value="1">

                        <label for="2">2</label>
                        <input type="radio" name="checkbox4" id="2" value="2">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox4" id="3" value="3">

                        <label for="4">4</label>
                        <input type="radio" name="checkbox4" id="4" value="4">

                        <label for="5">5</label>
                        <input type="radio" name="checkbox4" id="5" value="5">
                    </td>

                    {{-- <td> Waste management</td> --}}
                    <td><label for="9">9</label>
                        <input type="radio" name="checkbox41" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox41" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox41" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox41" id="0" value="0">
                    </td>

                    {{-- <td> Waste minization</td> --}}
                    <td><label for="9">9</label>
                        <input type="radio" name="checkbox42" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox42" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox42" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox42" id="0" value="0">
                    </td>

                    {{-- <td>Waste collection</td> --}}
                    <td><label for="9">9</label>
                        <input type="radio" name="checkbox43" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox43" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox43" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox43" id="0" value="0">
                    </td>

                    {{-- <td>Price of recyling materials</td> --}}
                    <td><label for="9">9</label>
                        <input type="radio" name="checkbox44" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox44" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox44" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox44" id="0" value="0">
                    </td>
                </tr>








                {{-- 4 --}}
                <tr>
                    <td><input type="text" name="cdr"></td>

                    <td> <label for="1">1</label>
                        <input type="radio" name="checkbox5" id="1" value="1">

                        <label for="2">2</label>
                        <input type="radio" name="checkbox5" id="2" value="2">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox5" id="3" value="3">

                        <label for="4">4</label>
                        <input type="radio" name="checkbox5" id="4" value="4">

                        <label for="5">5</label>
                        <input type="radio" name="checkbox5" id="5" value="5">
                    </td>

                    {{-- <td> Waste management</td> --}}
                    <td><label for="9">9</label>
                        <input type="radio" name="checkbox51" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox51" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox51" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox51" id="0" value="0">
                    </td>

                    {{-- <td> Waste minization</td> --}}
                  <td><label for="9">9</label>
                        <input type="radio" name="checkbox52" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox52" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox52" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox52" id="0" value="0">
                    </td>

                    {{-- <td>Waste collection</td> --}}
                    <td><label for="9">9</label>
                        <input type="radio" name="checkbox53" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox53" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox53" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox53" id="0" value="0">
                    </td>

                    {{-- <td>Price of recyling materials</td> --}}
                    <td><label for="9">9</label>
                        <input type="radio" name="checkbox54" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox54" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox54" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox54" id="0" value="0">
                    </td>
                </tr>





                {{-- 5 --}}
                <tr>
                    <td><input type="text" name="cdr"></td>

                    <td> <label for="1">1</label>
                        <input type="radio" name="checkbox6" id="1" value="1">

                        <label for="2">2</label>
                        <input type="radio" name="checkbox6" id="2" value="2">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox6" id="3" value="3">

                        <label for="4">4</label>
                        <input type="radio" name="checkbox6" id="4" value="4">

                        <label for="5">5</label>
                        <input type="radio" name="checkbox6" id="5" value="5">
                    </td>

                    {{-- <td> Waste management</td> --}}
                    <td><label for="9">9</label>
                        <input type="radio" name="checkbox61" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox61" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox61" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox61" id="0" value="0">
                    </td>

                    {{-- <td> Waste minization</td> --}}
                    <td><label for="9">9</label>
                        <input type="radio" name="checkbox62" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox62" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox62" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox62" id="0" value="0">
                    </td>

                    {{-- <td>Waste collection</td> --}}
                  <td><label for="9">9</label>
                        <input type="radio" name="checkbox63" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox63" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox63" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox63" id="0" value="0">
                    </td>

                    {{-- <td>Price of recyling materials</td> --}}
                    <td><label for="9">9</label>
                        <input type="radio" name="checkbox64" id="9" value="9">

                        <label for="3">3</label>
                        <input type="radio" name="checkbox64" id="3" value="3">

                        <label for="1">1</label>
                        <input type="radio" name="checkbox64" id="1" value="1">

                        <label for="0">0</label>
                        <input type="radio" name="checkbox64" id="0" value="0">
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