@extends('app')
@section('content')
    <header class="">
        <div class="col-lg-12">
            <h1 class="my-4">Categorie Edit</h1>

            <form action="{{ route('compony.update', $edit_comp->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                Name:
                <br>
                <input type="text" name="name" value="{{ $edit_comp->name }}" class="form-control" />
                <br>
                Email:
                <br>
                <input type="text" name="email" value="{{ $edit_comp->email }}" class="form-control" />
                <br>
                Logo:
                <br>
                <img id="imagePreview" src="/ankit_img/imagepath/{{$edit_comp->logo}}" style="max-width: 200px; ">

                <div class="mb-3">
                  <label for="formGroupExampleInput2" class="form-label">Logo</label>
                  <input type="file" name="logo" class="form-control" id="formGroupExampleInput2">
              </div>
              <br>

                <input type="submit" class="btn btn-primary" value="update" />
                <br><br>


            </form>

        </div>
    </header>
@endsection
