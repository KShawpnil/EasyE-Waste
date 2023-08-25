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
</body>

</html>