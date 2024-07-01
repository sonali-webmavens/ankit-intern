@extends('admin.app')
@section('content')
<div class="container">
    <h1>Trashed Companies</h1>
    <h6>Total Trashed Companies: {{ $onlyTrashedCount }}</h6>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Logo</th>
                <th>Deleted At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($onlyTrashed as $company)
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>
                    @if ($company->logo)
                    <img src="{{ asset('ankit_img/imagepath/' . $company->logo) }}" alt="{{ $company->name }}" width="50">
                    @endif
                </td>
                <td>{{ $company->deleted_at->format('Y-m-d H:i:s') }}</td>
                <td>
                    <form action="{{ route('compony.forcedelete', $company->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Permanently Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
