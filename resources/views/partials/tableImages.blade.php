<div class="container mt-5">
    <div>
        <h1>Images</h1>
        <a class="btn btn-success" href="/images/create">ADD</a>
    </div>
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Src</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($images as $img)
            <tr>
                <th scope="row">{{$img->id}}</th>
                <td>
                  <img height="100px" src="{{asset('storage/img/'.$img->src)}}" alt="">
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>