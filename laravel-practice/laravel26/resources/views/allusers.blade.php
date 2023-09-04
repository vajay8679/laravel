<!DOCTYPE html>
<head>
<title> All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    {{-- <style>

        nav .w-5{
display:none;
        }
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </style> --}}
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Users List Data</h1>
        <a href="/newuser" class="btn btn-success btn-sm mb-3">Add New</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                        <th>Update</th>
                        <th>Delete</th>

                    </tr>

                    @foreach ($data as $id=> $user )

                    <tr>
                        <td>{{ $user->id }} </td>
                        <td>{{ $user->name }} </td>
                        <td> {{ $user->email }} </td>
                        <td>{{ $user->age }}</td>
                        <td> {{ $user->city }} </td>
                        <td><a href="{{ route('view.user',$user->id)}}" class="btn btn-primary btn-sm"> View </a></td>
                        <td><a href="{{ route('update.page',$user->id)}}" class="btn btn-warning btn-sm"> Update </a></td>
                        <td><a href="{{ route('delete.user',$user->id)}}" class="btn btn-danger btn-sm"> Delete </a></td>

                    </tr>

                    @endforeach
                </table>
                <div class="mt-5">
                </div>
                {{-- {{ $data->links('pagination::bootstrap-5')}} --}}

                {{ $data->links()}}
            </div>
            {{-- </div>
                   Current Page: {{ $data->currentPage()}}<br>
                   Total User: {{ $data->total()}}
            </div> --}}
            </div>
        </div>
    </div>
</body>
</html>


{{--
@foreach ($data as $id=> $user )

<h3> {{ $user->name }} |  {{ $user->email }} |  {{ $user->age }} |  {{ $user->city }} </h3>

@endforeach --}}
