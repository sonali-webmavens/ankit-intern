@extends('admin.app')
@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


        <header class="">
            <div class="col-lg-12">
                <h1 class="my-4">Add Employee</h1>

                <form action="{{ route('employ.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                first_name:
                <br>
                <input type="text" name="fist_name" value="{{ old('fist_name') }}" class="form-control"/>
                <br>
                last_name:
                <br>
                <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control"/>
                <br>

                Select Categories:
                <br>
                <select type="text" name="company_id" value="{{ old('company_id') }}" class="form-control">
                    @foreach ($compny_create as $compny_create2)
                        <option value="{{ $compny_create2->id }}">{{ $compny_create2->name }}</option>
                    @endforeach
                </select>

                <br>
                email:
                <br>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control"/>
                <br>
                <br>
                phone:
                <br>
                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control"/>
                <br>


                <input type="submit" class="btn btn-primary" value="save"/>
                <br><br>


                </form>

            </div>
        </header>

@endsection


