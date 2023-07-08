<form action="{{ url('/') }}/create" method="POST">
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
</form>