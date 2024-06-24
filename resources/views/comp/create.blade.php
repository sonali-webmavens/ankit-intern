@extends('admin.app')
@section('content')


        <header class="">
            <div class="col-lg-12">
                <h1 class="my-4">Add Company</h1>

                <form action="{{ route('compony.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                Name:
                <br>
                <input type="text" name="name" value="" class="form-control"/>
                <br>
                Email:
                <br>
                <input type="email" name="email" value="" class="form-control"/>
                <br>
                logo:
                <br>
                <input type="file" name="logo" value="" />
                <br><br>

                <input type="submit" class="btn btn-primary" value="save"/>
                <br><br>


                </form>

            </div>
        </header>

@endsection


