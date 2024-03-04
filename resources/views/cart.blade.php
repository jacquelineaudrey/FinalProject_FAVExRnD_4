@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Cart Page</h1>
        <div class="row">
            <div class="table table-hover">
                <thead>
                    <tr>
                        <th width="50%">Product</th>
                        <th width="10%">Price</th>
                        <th width="8%">Quantity</th>
                        <th width="22%">Sub Total</th>
                        <th width="10%"></th>
                        </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product Image and product Name</td>
                        <td>Product Price</td>
                        <td>Product Quantity</td>
                        <td>Product Subtotal</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm">X</a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Continue Shooping</td>
                        <td colspan="2"></td>
                        <td><strong>Total Amount</strong></td>
                    </tr>
                </tfoot>
            </div>
        </div>
    </div>

@endsection