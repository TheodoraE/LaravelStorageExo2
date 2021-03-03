<div class="container mt-5">
    <div>
        <h1>Images</h1>
    </div>
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Src</th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($images as $img)
            <tr>
                <th scope="row">{{$img->id}}</th>
                <td>
                  <img height="100px" src="{{$img->src}}" alt="">
                </td>
                <td>
                    
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>