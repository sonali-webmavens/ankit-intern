<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Subscription</div>

                <div class="card-body">
                    <form action="{{ route('subscriptions.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="plan">Plan</label>
                            <input type="text" name="plan" id="plan" class="form-control" value="{{ old('plan') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Subscription</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
