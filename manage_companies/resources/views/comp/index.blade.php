@extends('app')
@section('content')

        <header class="">
            <div class="container px-3 px-lg-2 my-3">
                <h1>Categories</h1>

                    <a href="{{ route('compony.create') }}" class="btn btn-info">Add Categorie</a>
                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>email</th>
                                <th>logo</th>
                                <th></th>
                            </tr>

                            @foreach ($comp as $comp2 )
                                <tr>
                                    <td>{{  $comp2->name  }}</td>
                                    <td>{{  $comp2->email  }}</td>
                                    
                                    <td><img src="ankit_img/imagepath/{{$comp2->logo}}"  height="100px" width="100px"></td>
                                    <td>
                                        <a class="btn btn-primary" href="{{  route('compony.edit',$comp2->id)}}">Edit</a>
                                        <form action="{{ route('compony.destroy',$comp2->id) }}" method="POST" enctype="multipart/form-data" style="display: inline">
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


