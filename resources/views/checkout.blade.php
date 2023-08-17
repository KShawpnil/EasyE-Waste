<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class='row'>
            <h1>Checkout</h1>
            <div class='col-md-12'>
                <div class="card">
                    <div class="card-header">
                    Checkout details
                    </div>
                    <div class="card-body">
                    <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:35%">Product</th>
                            <th style="width:15%">Product Type</th>
                            <th style="width:10%">Price</th>
                            <th style="width:8%">Quantity</th>
                            <th style="width:22%" class="text-center">Subtotal</th>
<!--                             <th style="width:10%"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">
                                            @foreach($item as $i)
                                                {{ $i->productname }}
                                        </h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Product Type">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">
                                            @foreach($item as $i)
                                                {{ $i->producttype }}
                                        </h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">$6</td>
                            <td data-th="Quantity">
                                @foreach($item as $i)
                                <input type="number" value="{{ $i->productamount }}" class="form-control quantity cart_update" min="1" />
                            </td>
                            <td data-th="Subtotal" class="text-center"></td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i>Delete</button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" style="text-align:right;"><h3><strong>Total </strong></h3></td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align:right;">
                                <form action="/session" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type='hidden' name="total" value="100">
                                    <input type='hidden' name="producttype" value="{{ $i->producttype }}">
                                    @endforeach
                                    @endforeach
                                    <input type='hidden' name="productamount" value="{{ $i->productamount }}">
                                    @endforeach
                                    <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i>Checkout</button>
                                </form>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>