@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        
                    {{ __('You are logged in!') }}
                </div>
                <a href="{{url('/placeorder')}}"><button>Place Order</button></a>
                <h1>
                @foreach($status as $status)
                    @if($status->status=='paid')
                    <p>Your order {{ $status->id }} has been Paid</p>
                    @endif
                    @if($status->status=='delivered')
                    <p>Your order {{ $status->id }} has been Delivered</p>
                    @endif
                @endforeach
                </h1>
            </div>
        </div>
    </div>
</div>
@endsection
