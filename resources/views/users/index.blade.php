<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

{{-- <div class="container">
    <h2>All Users</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Profile Picture</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if(isset($signedUrls[$loop->index]))
                        <img src="{{ $signedUrls[$loop->index] }}" alt="Profile Picture" style="width: 100px; height: 100px;">
                    @else
                        <p>No profile picture available</p>
                    @endif
                </td>
                <td>
                    <a href="{{ route('user.file_upload', $user->id) }}" class="btn btn-primary btn-sm">Upload File</a>
                    <br>
                    <a href="{{ route('user.files', $user->id) }}" class="btn btn-secondary btn-sm">Files</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">All Users</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Profile Picture</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if(isset($signedUrls[$loop->index]))
                                        <img src="{{ $signedUrls[$loop->index] }}" alt="Profile Picture" class="img-thumbnail" style="width: 50px; height: 50px;">
                                    @else
                                        <p>No profile picture available</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('user.file_upload', $user->id) }}" class="btn btn-primary btn-sm">Upload File</a>
                                    <a href="{{ route('user.files', $user->id) }}" class="btn btn-secondary btn-sm">Files</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
