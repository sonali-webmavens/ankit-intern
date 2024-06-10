@extends('app')
@section('content')

        <header class="">
            <div class="col-lg-12">
                <h1 class="my-4">Add Employ</h1>

                <form action="{{ route('employ.update', $edit_emp->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                first_name:
                <br>
                <input type="text" name="fist_name" value="" class="form-control"/>
                <br>
                last_name:
                <br>
                <input type="text" name="last_name" value="" class="form-control"/>
                <br>


                <br>
                email:
                <br>
                <input type="text" name="email" value="" class="form-control"/>
                <br>
                <br>
                phone:
                <br>
                <input type="text" name="phone" value="" class="form-control"/>
                <br>

                Select Categories:
                <br>
                <select type="text" name="company_id" value="" class="form-control">
                    @foreach ($edit_conp as $edit_conp2)
                        <option value="{{ $edit_conp2->id }}" @if ($edit_conp2->id == old('company_id')) selected @endif>{{ $edit_conp2->name }}</option>
                    @endforeach
                </select>
                {{-- Select Categories:
                <br>
                <select type="text" name="company_id" value="" class="form-control">
                    @foreach ($edit_conp as $edit_conp2)
                        <option value="{{ $edit_conp2->id }}">{{ $edit_conp2->name }}</option>
                    @endforeach
                </select> --}}

                <input type="submit" class="btn btn-primary" value="save"/>
                <br><br>


                </form>

            </div>
        </header>

@endsection


