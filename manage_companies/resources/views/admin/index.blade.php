@extends('admin.app')
@section('content')

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-10">Dashboard</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Employee
                </div>
                <div class="card-body" id="#myTable">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>@lang('auth.full_name')</th>
                                <th>@lang('auth.l_name')</th>
                                <th>@lang('auth.mail')</th>
                                <th>Phone No</th>
                                <th>@lang('auth.cont')</th>
                                <th>Create at</th>
                                <th>Updated at</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>

                                <nav class="navbar navbar-light bg-light">
                                    <div class="container-fluid">
                                      <form  method="GET" action="search" class="d-flex">
                                        <input class="form-control me-2" name="search" type="search" placeholder="Search by Name..." aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                      </form>
                                    </div>
                                  </nav>

                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone No</th>
                                <th>Contry</th>
                                <th>Create at</th>
                                <th>Updated at</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($employ as $employ_data )
                                <tr>
                                <td>{{ $employ_data->fist_name }}</td>
                                <td>{{ $employ_data->last_name }}</td>
                                <td>{{ $employ_data->email }}</td>
                                <td>{{ $employ_data->phone }}</td>
                                <td>{{ $employ_data->company->name }}</td>
                                <td>{{ $employ_data->created_at }}</td>
                                <td>{{ $employ_data->updated_at }}</td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>


@endsection
