
{{-- <!DOCTYPE html>
<html>
<head>
    <title>Upload Files</title>
</head>
<body>
    <h1>Upload Files</h1>
    <h1>{{ $user->exists ? 'Edit User' : 'Create User' }}</h1>
    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="files">Choose files:</label>
        <input type="file" id="files" name="files[]" multiple>
        <button type="submit">Upload</button>
    </form>

    <a href="{{ route('users.show') }}">View Uploaded Files</a>
</body>
</html> --}}


<a href="{{ route('files.show') }}">View Uploaded Files</a>
<h1>Create User</h1>

<form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>

    <div>
        <label for="profile_picture">Profile Picture:</label>
        <input type="file" id="profile_picture" name="profile_picture">
    </div>

    <button type="submit">Create User</button>
</form>
