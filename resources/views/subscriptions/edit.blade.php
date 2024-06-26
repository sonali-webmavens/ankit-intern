<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Subscription</div>

                <div class="card-body">
                    <form action="{{ route('subscriptions.update', $subscription->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="plan">Plan</label>
                            <input type="text" name="plan" id="plan" class="form-control" value="{{ $subscription->plan }}">
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control" value="{{ $subscription->price }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Update Subscription</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
