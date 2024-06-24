<div class="row">
    @foreach ($postImages as $image)
        <div class="col-md-4">
            <img src="{{ $image->getUrl() }}" alt="Post Image" class="img-fluid">
        </div>
    @endforeach
</div>

