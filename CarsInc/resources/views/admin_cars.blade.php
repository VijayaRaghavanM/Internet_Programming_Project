@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Create Car</h5>
                    <p class="card-text">
                        <form action="/car/create">
                            <p>
                                Name: <input name="name" class="form-control"/>
                            </p>
                            <p>
                                Transmission: <input name="transmission" class="form-control"/>
                            </p>
                            <p>
                                Fuel type: <input name="fuel_type"  class="form-control"/>
                            </p>
                            <p>
                                Gearbox: <input name="gear_box"  class="form-control"/>
                            </p>
                            <p>
                                Price: <input name="price"  class="form-control"/>
                            </p>
                            <p>
                                Mileage: <input name="mileage"  class="form-control"/>
                            </p>
                            <p>
                                Photo URL: <input name="photopath"  class="form-control"/>
                            </p>
                            <button class="btn btn-primary form-control">Create Car</button>                     
                        </form>
                    </p>

                    </div>
                </div>  
            </div>
        </div>
    @foreach($cars as $car)
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <div class="card">
                    <img class="card-img-top" src="{{$car->photopath}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">{{$car->name}}</h5>
                    <p class="card-text">
                        <form action="/car/update/{{$car->id}}">
                            <p>
                                Transmission: <input name="transmission" value="{{$car->transmission}}" />
                            </p>
                            <p>
                                Fuel type: <input name="fuel_type" value="{{$car->fuel_type}}" />
                            </p>
                            <p>
                                Gearbox: <input name="gear_box" value="{{$car->gear_box}}" />
                            </p>
                            <p>
                                Price: <input name="price" value="{{$car->price}}" />
                            </p>
                            <p>
                                Mileage: <input name="mileage" value="{{$car->mileage}}" />
                            </p>
                            <button class="btn btn-primary">Update Car</button>                     
                        </form>
                    </p>
                    <p>
                        <a href="/car/delete/{{$car->id}}" class="btn btn-danger">Delete Car</a>
                    </p>
                    </div>
                </div>  
            </div>
        </div>
    @endforeach
</div>
@endsection
