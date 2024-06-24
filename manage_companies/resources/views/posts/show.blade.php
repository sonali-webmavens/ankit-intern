<div class="row">
    @foreach ($postImages as $image)
        <div class="col-md-4">
            <img src="{{ Storage::url($image->id.'/media/'.$image->file_name) }}" alt="Post Image" class="img-fluid">
        </div>
    @endforeach
</div>
<div class="container">
    <div class="row">
        @foreach ($postImages as $image)
            <div class="col-md-4 mb-3">
                {{-- Displaying the original image --}}
                {{-- <img src="{{ Storage::url($image->id.'/'.$image->file_name) }}" alt="Original Image" class="img-fluid"> --}}
                <div class="mt-2"></div> {{-- Optional spacing between images --}}

                {{-- Displaying the converted image --}}
                <img src="{{ Storage::url($image->id.'/conversions/'.$image->file_name) }}" alt="Converted Image" class="img-fluid">
            </div>
        @endforeach
    </div>
</div>


