@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($cars as $car)
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <div class="card">
                    <img class="card-img-top" src="{{$car->photopath}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">{{$car->name}}</h5>
                    <p class="card-text">
                            <p>
                                Transmission: {{$car->transmission}}
                            </p>
                            <p>
                                Fuel type: {{$car->fuel_type}}
                            </p>
                            <p>
                                Gearbox: {{$car->gear_box}}
                            </p>
                            <p>
                                Price: Rs. {{$car->price}}
                            </p>
                            <p>
                                Mileage: {{$car->price}} Kmpl
                            </p>
                    </p>
                    <p>
                        <a class="btn btn-success" href="/add-car-to-cart/{{$car->id}}">Add to Cart</a>                     
                    </p>
                    </div>
                </div>  
            </div>
        </div>
    @endforeach
</div>
@endsection
