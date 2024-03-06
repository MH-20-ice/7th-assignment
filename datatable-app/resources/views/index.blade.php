<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make a Data Table in laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container p-4">
        <div class="test-center">
            <h1 class=""><center>Make a DataTable using laravel</center></h1>
        </div>
        <a href="/create" class="btn btn-md btn-primary">Add new user</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>

            <tbody>

            @foreach ($users as $user)
             <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="" class="btn btn-sm btn-{{$user->status ? 'success':'danger'}}">
                        {{$user->status ? 'Enable':'Disable'}}
                    </a>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    
</body>
</html>