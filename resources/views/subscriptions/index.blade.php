<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Subscriptions</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Plan</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subscriptions as $subscription)
                                <tr>
                                    <td>{{ $subscription->id }}</td>
                                    <td>{{ $subscription->plan }}</td>
                                    <td>{{ $subscription->price }}</td>
                                    <td>
                                        <a href="{{ route('subscriptions.edit', $subscription->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('subscriptions.destroy', $subscription->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('subscriptions.create') }}" class="btn btn-success">Add Subscription</a>
                </div>
            </div>
        </div>
    </div>
</div>
