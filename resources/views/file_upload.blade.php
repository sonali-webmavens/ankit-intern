@extends('admin.app')
@section('content')

<div class="container px-3 px-lg-2 my-3">

<form action="{{ route('import.import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" required>
    <button type="submit">Upload</button>
</form>


@endsection
