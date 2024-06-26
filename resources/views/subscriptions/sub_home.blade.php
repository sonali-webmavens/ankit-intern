
@extends('app') <!-- Assuming you have a main layout file, adjust as per your setup -->

@section('content')


<div class="container">
    <form action="{{ route('subscriptions.sendnotificatin') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="plan" class="form-label">Select Plan:</label>
            <select name="plan" id="plan" class="form-select">
                <option value="">Select a Plan</option>
                @foreach($plans as $plan)
                    <option value="{{ $plan->plan }}">{{ $plan->plan }} - ${{ $plan->price }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>



@endsection
