@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tr>
                <td>Amount</td>
                <td>Rp. {{ $total }}</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>Rp. 0</td>
            </tr>
            <tr>
                <td>Delivery</td>
                <td>Rp. 20.000</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>Rp. {{ $total + 10000 }}</td>
            </tr>
        </table>
        <form action="/orderplace" method="post">
            @csrf
            <div class="bottom ml-3">
                <div class="form-group">
                    <textarea name="address" placeholder="Enter your address" rows="3" class=" w-50"></textarea>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Online payment
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Emi payment
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Payment on Delivery
                    </label>
                </div>
                <button type="submit" class="btn btn-success mt-3">Order Now</button>
            </div>
        </form>
    </div>
</div>
@endsection
