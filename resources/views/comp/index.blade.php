
@extends('admin.app')
@section('content')

<header class="">
    <div class="container px-3 px-lg-2 my-3">
        <h1>Companies</h1>
        <h6 >Total Active Companies: {{ $companyCount }}</h6>

        <a href="{{ route('compony.create') }}" class="btn btn-info">Add Company</a>
        <a href="{{ route('compony.trashed') }}" class="btn btn-warning">Trashed Companies</a>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Logo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comp as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td><img src="{{ asset('ankit_img/imagepath/' . $company->logo) }}" height="100px" width="100px"></td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('compony.edit', $company->id) }}">Edit</a>

                        <form action="{{ route('compny.destroy', $company->id) }}" method="POST" enctype="multipart/form-form-data" style="display: inline">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Trash" class="btn btn-danger" onclick="return confirm('Are You Sure...')">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</header>

@endsection
