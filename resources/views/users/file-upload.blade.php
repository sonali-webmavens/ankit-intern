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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Upload Files for {{ $user->name }}</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.store_files', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="files">Files</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="files" name="files[]" multiple>
                                <label class="custom-file-label" for="files" data-browse="Choose files">Choose files</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(".custom-file-input").on("change", function() {
        var files = $(this)[0].files;
        var fileCount = files.length;
        var fileName = fileCount > 1 ? `${fileCount} files selected` : `1 file selected`;
        $(this).next(".custom-file-label").attr("data-browse", fileName);
    });
</script>

</body>
</html>
