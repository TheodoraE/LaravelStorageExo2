<div class="container mt-5">
    <div>
        <h1>Animals</h1>
        <a class="btn btn-success" href="/animals/create">ADD</a>
    </div>
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Src</th>
            <th scope="col"> </th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($animals as $animal)
            <tr>
                <th scope="row">{{$animal->id}}</th>
                <td>{{$animal->name}}</td>
                <td>
                  <img height="100px" src="{{asset('storage/img/'.$animal->src)}}" alt="">
                </td>
                <td>
                  <a href="/animals-download/{{$animal->id}}" class="btn btn-info">DOWNLOAD</a>
                </td>
                <td>
                  <form action="/animals/{{$animal->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                  </form>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>