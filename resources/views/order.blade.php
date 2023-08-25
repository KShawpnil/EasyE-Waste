<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
    <form action="{{url('/')}}/placeorder" method="POST">
        @csrf
        <div class="container">
            <h1>Place your order</h1>
            <div class="form-group">
                <label for="productname">Enter Product name</label>
                <input type="text" name="productname" id="productname">
            </div>
            <div class="form-group">
                <label for="producttype">Enter Product Type</label>
                <input type="text" name="producttype" id="producttype">
            </div>
            <div class="form-group">
                <label for="productamount">Enter Product amount(KG)</label>
                <input type="number" name="productamount" id="productamount" min="1" max="10">
            </div>
                <label for="endproduct">Enter Product Outcome</label>
                <input type="text" name="endproduct" id="endproduct">
            <div class="form-group">
                <input type="submit" value="Go to QFD">
            </div>
        </div>
    </form>
</body>
</html>