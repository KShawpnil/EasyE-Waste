<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/formpart2.css') }}">
    <title>formpart2</title>
</head>

<body>
    {{-- <img src="img/background.png" alt=""> --}}
    <div id="div1">
        <!-- <h1>Customer Requirments</h1> -->
        <div id="div2">
            <h2>Customer Requirments</h2>
            <table>
                <tr>
                    <th>Customer Requirments</th>
                    <th>Select</th>
                    <th>Rank</th>
                </tr>
                <tr>
                    <td>Biodegradable</td>
                    <td><label class="container"> Select or not
                            <input type="checkbox" checked="checked" name="1checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td><label class="container"> 1
                            <input type="radio" checked="checked" name="checkbox2">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 2
                            <input type="radio" name="checkbox2">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox2">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 4
                            <input type="radio" name="checkbox2">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 5
                            <input type="radio" name="checkbox2">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Recycling of materials</td>
                    <td><label class="container"> Select or not
                            <input type="checkbox" checked="checked" name="2checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td><label class="container"> 1
                            <input type="radio" checked="checked" name="checkbox3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 2
                            <input type="radio" name="checkbox3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 4
                            <input type="radio" name="checkbox3">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 5
                            <input type="radio" name="checkbox3">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Extraction of heavy materials</td>
                    <td><label class="container"> Select or not
                            <input type="checkbox" checked="checked" name="3checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td><label class="container"> 1
                            <input type="radio" checked="checked" name="checkbox4">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 2
                            <input type="radio" name="checkbox4">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox4">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 4
                            <input type="radio" name="checkbox4">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 5
                            <input type="radio" name="checkbox4">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Transfer of e-waste</td>
                    <td><label class="container"> Select or not
                            <input type="checkbox" checked="checked" name="4checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td><label class="container"> 1
                            <input type="radio" checked="checked" name="checkbox5">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 2
                            <input type="radio" name="checkbox5">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox5">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 4
                            <input type="radio" name="checkbox5">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 5
                            <input type="radio" name="checkbox5">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Re-manufacturing</td>
                    <td><label class="container"> Select or not
                            <input type="checkbox" checked="checked" name="5checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td><label class="container"> 1
                            <input type="radio" checked="checked" name="checkbox6">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 2
                            <input type="radio" name="checkbox6">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox6">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 4
                            <input type="radio" name="checkbox6">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 5
                            <input type="radio" name="checkbox6">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Batteries separation from waste</td>
                    <td><label class="container"> Select or not
                            <input type="checkbox" checked="checked" name="6checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td><label class="container"> 1
                            <input type="radio" checked="checked" name="checkbox7">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 2
                            <input type="radio" name="checkbox7">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox7">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 4
                            <input type="radio" name="checkbox7">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 5
                            <input type="radio" name="checkbox7">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Remaining waste disposal</td>
                    <td><label class="container"> Select or not
                            <input type="checkbox" checked="checked" name="7checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td><label class="container"> 1
                            <input type="radio" checked="checked" name="checkbox8">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 2
                            <input type="radio" name="checkbox8">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox8">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 4
                            <input type="radio" name="checkbox8">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 5
                            <input type="radio" name="checkbox8">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                </tr>
                <!-- <tr>
                    <td colspan="2" align="center">
                    <input id="submit" type="submit" value="Submit" name="submit"></td>
                </tr> -->
                <tr>
                    <td colspan="3" align="center"> <button id="submit" type="submit" name="submit">Submit</button></td>
                </tr>
            </table>




            

            <h2>Importance</h2>
            <table>
                <tr>
                    <th>Importance</th>
                    <th>Select</th>
                    <th>Point</th>
                </tr>
                <tr>
                    <td>Price of e-waste materials</td>
                    <td><label class="container"> Select or not
                            <input type="checkbox" checked="checked" name="11checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
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
                </tr>
                <tr>
                    <td>Awareness</td>
                    <td><label class="container"> Select or not
                            <input type="checkbox" checked="checked" name="22checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox33">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox33">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox33">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox33">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Waste minimization</td>
                    <td><label class="container"> Select or not
                            <input type="checkbox" checked="checked" name="33checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
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
                    <td><label class="container"> Select or not
                            <input type="checkbox" checked="checked" name="44checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
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
                    <td>Authorized collector</td>
                    <td><label class="container"> Select or not
                            <input type="checkbox" checked="checked" name="55checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox66">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox66">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox66">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox66">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>
                </tr>
                <tr>
                    <td> Waste management</td>
                    <td><label class="container"> Select or not
                            <input type="checkbox" checked="checked" name="66checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
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
                    <td>Transportation cost</td>
                    <td><label class="container"> Select or not
                            <input type="checkbox" checked="checked" name="77checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td><label class="container"> 9
                            <input type="radio" checked="checked" name="checkbox88">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 3
                            <input type="radio" name="checkbox88">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 1
                            <input type="radio" name="checkbox88">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                        <label class="container"> 0
                            <input type="radio" name="checkbox88">
                            <span class="checkmark"></span>
                            &nbsp;
                        </label>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center"> <button id="submit" type="submit" name="submit">Submit</button></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>