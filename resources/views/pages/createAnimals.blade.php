@extends('template.main')

@section('content')
    <div class="container mt-5">
        <h1 class="my-5">Ajouter des animaux</h1>

        <div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <form action="/animals" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="group-form">
                <label for="">Name :</label>
                <input type="text" name="name" id="">    
            </div>

            <div class="row d-flex my-3">
                @foreach ($images as $item)
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                        <input type="radio" aria-label="Radio button for following text input" value="{{$item->src}}" name="src">
                        </div>
                        </div>
                        <img src="{{asset('storage/img/'.$item->src)}}" alt="" height="100px">
                    </div>
                @endforeach
            </div>

            <button type="submit" class="btn btn-success">ADD</button>
        </form>
    </div>
@endsection