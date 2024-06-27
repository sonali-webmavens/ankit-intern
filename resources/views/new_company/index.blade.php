@extends('admin.app')
@section('content')

<div class="container px-3 px-lg-2 my-3">
    <h1>Companies</h1>

        <a href="{{ route('companies.export.excel') }}" class="btn btn-success btn-sm mr-2">Export to Excel</a>
        <a href="{{ route('companies.export.csv') }}" class="btn btn-primary btn-sm">Export to CSV</a>




    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Contact No.</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comp as $comp2)
            <tr>
                <td>{{ $comp2->name }}</td>
                <td>{{ $comp2->address }}</td>
                <td>{{ $comp2->contact_no }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection


