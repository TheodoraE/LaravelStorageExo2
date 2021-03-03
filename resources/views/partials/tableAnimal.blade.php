<div class="container mt-5">
    <div>
        <h1>Animals</h1>
    </div>
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Src</th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($animals as $animal)
            <tr>
                <th scope="row">{{$animal->id}}</th>
                <td>{{$animal->name}}</td>
                <td>
                  <img height="100px" src="{{$animal->src}}" alt="">
                </td>
                <td>
                    
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>