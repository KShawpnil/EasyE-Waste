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
                <p>Select Product Type</p>
                <label for="plastic">Plastic</label>
                <input type="radio" name="producttype" id="plastic" value="plastic">
                <label for="metal">Metal</label>
                <input type="radio" name="producttype" id="metal" value="metal">
                <label for="glass">Glass</label>
                <input type="radio" name="producttype" id="glass" value="glass">
            </div>
            <div class="form-group">
                <label for="productamount">Enter Product amount(KG)</label>
                <input type="number" name="productamount" id="productamount" min="1" max="10">
            </div>
            <div class="form-group">
                <p>Select Outcome</p>
                <label for="recylce">Recylce</label>
                <input type="radio" name="endproduct" id="recylce" value="recylce">
                <label for="reuse">Reuse</label>
                <input type="radio" name="endproduct" id="reuse" value="reuse">
                <label for="reduce">Reduce</label>
                <input type="radio" name="endproduct" id="reduce" value="reduce">
            </div>
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <div class="form-group">
                <input type="submit" value="Go to QFD">
            </div>
        </div>
    </form>
</body>
</html>