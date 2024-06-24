@extends('admin.app')
@section('content')


    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script> --}}

    <main>
    <div class="container-fluid px-4">
            <h1 class="mt-10">Dashboard</h1>
            <div class="card mb-4">
            <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Employee
            </div >
                <div class="card-body">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                </th>
                                <th>No<br>
                                <th>Full Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone No</th>
                                <th>Company Name</th>
                            </tr>
                            <tr>
                                <th></th> <!-- Empty cell for alignment -->
                                <th><input type="search" id="name-search" placeholder="Search Name"></th>
                                <th><input type="search" id="name-lsearch" placeholder="Search Last Name"></th>
                                <th><input type="search" id="email-search" placeholder="Search Email"></th>
                                <th><input type="search" id="phone-search" placeholder="Search Phone No"></th>
                                <th><input type="search" id="company-search" placeholder="Search Company"></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>


    <script>
            $(function () {
                var table = $(".data-table").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('users.index') }}",
                    columns: [
                        { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                        { data: 'fist_name', name: 'fist_name' },
                        { data: 'last_name', name: 'last_name' },
                        { data: 'email', name: 'email' },
                        { data: 'phone', name: 'phone' },
                        { data: 'company_name', name: 'company_name', orderable: false, searchable: false },
                        // { data: 'created_at', name: 'created_at' },
                        // { data: 'updated_at', name: 'updated_at', orderable: false, searchable: false }
                    ]
                });

                // Add event listener for the search input
                $('#name-search').on('keyup', function() {
                    table.column(1).search(this.value).draw();
                });

                $('#name-lsearch').on('keyup', function() {
                    table.column(2).search(this.value).draw();
                });

                $('#email-search').on('keyup', function() {
                    table.column(3).search(this.value).draw();
                });

                $('#phone-search').on('keyup', function() {
                    table.column(4).search(this.value).draw();
                });

                $('#company-search').on('keyup', function() {
                    table.column(5).search(this.value).draw();
                });


            });
    </script>

@endsection


