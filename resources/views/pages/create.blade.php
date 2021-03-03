@extends('template.main')

@section('content')
    <div class="container mt-5">
        <h1 class="my-5">Ajouter des images</h1>

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

        <form action="/images" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <h3>Image : </h3>
            <input type="file" name="src" id="">
            <button type="submit" class="btn btn-success">ADD</button>
        </form>
    </div>
@endsection