<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/formpart1.css') }}">
    <title>Formpart1</title>
</head>
<body>
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
                        <td colspan="2" align="center"> <button id="submit" type="submit" name="submit">Next</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
{{-- <form action="{{ url('/') }}/create" method="POST">
    @csrf
    <br>
    <label for="product_name">Product Name:</label>
    <input type="text" name="product_name"><br>

    <br>
    <label for="product_type">Product Type:</label>
    <input type="text" name="product_type"><br>

    <br>
    <label for="product_quantity">Product Quantity:</label>
    <input type="text" name="product_quantity"><br>

    <br>
    <label for="endproduct">End Product:</label>
    <input type="text" name="endproduct"><br>

    <br>
    <button>Next</button>
</form> --}}