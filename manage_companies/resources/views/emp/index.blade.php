@extends('app')
@section('content')

        <header class="">
            <div class="container px-3 px-lg-2 my-3">
                <h1>Categories</h1>

                    <a href="{{ route('employ.create') }}" class="btn btn-info">Add Categorie</a>
                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>f name</th>
                                <th>l name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Company Name</th>
                                <th>edite</th>
                                <th>detele</th>
                                <th></th>
                            </tr>

                            @foreach ($show_employ as $show_employ2 )
                                <tr>
                                    <td>{{  $show_employ2->fist_name  }}</td>
                                    <td>{{  $show_employ2->last_name  }}</td>
                                    <td>{{  $show_employ2->email  }}</td>
                                    <td>{{  $show_employ2->phone  }}</td>
                                    <td>{{  $show_employ2->company->name  }}</td>


                                    <td>
                                        <a class="btn btn-primary" href="{{  route('employ.edit',$show_employ2->id)}}">Edit</a>
                                        <form action="{{ route('employ.destroy',$show_employ2->id) }}" method="POST" enctype="multipart/form-data" style="display: inline">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are You Sure...')">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </thead>
                    </table>


                </div>
            </div>
        </header>

@endsection


