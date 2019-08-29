@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Create Car Part</h5>
                    <p class="card-text">
                        <form action="/part/create">
                            <p>
                                Name: <input name="name" class="form-control"/>
                            </p>
                            <p>
                                Description: <input name="description" class="form-control"/>
                            </p>
                            <p>
                                Price: <input name="price"  class="form-control"/>
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
    @foreach($car_parts as $part)
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <div class="card">
                    <img class="card-img-top" src="{{$part->photopath}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">{{$part->name}}</h5>
                    <p class="card-text">
                        <form action="/part/update/{{$part->id}}">
                            <p>
                                Description: 
                                    <textarea name="description" class="form-control" rows="10">
                                        {{$part->description}}
                                    </textarea>
                            </p>
                            <button class="btn btn-primary">Update Part</button>                     
                        </form>
                    </p>
                    <p>
                        <a href="/part/delete/{{$part->id}}" class="btn btn-danger">Delete Part</a>
                    </p>
                    </div>
                </div>  
            </div>
        </div>
    @endforeach
</div>
@endsection
