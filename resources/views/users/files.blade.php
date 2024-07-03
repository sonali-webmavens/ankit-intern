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
    <h2>User Name: {{ $user->name }}</h2>
    <h2>User Email: {{ $user->email }}</h2>
    <div class="row">
        @foreach($signedUrls as $url)
            <div class="col-md-4 mb-3">
                <img src="{{ $url }}" alt="Uploaded File" class="img-fluid rounded" style="max-width: 20%;">
            </div>
        @endforeach
    </div>
</div> --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">User Details</h2>
                </div>
                <div class="card-body">
                    <h3>Name: {{ $user->name }}</h3>
                    <p>Email: {{ $user->email }}</p>
                    <hr>
                    <h3>Uploaded Files</h3>
                    <div class="row">
                        @forelse($signedUrls as $url)
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="{{ $url }}" alt="Uploaded File" class="card-img-top img-fluid rounded">
                                    <div class="card-body">
                                        <p class="card-text">File</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <p>No files uploaded yet.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
