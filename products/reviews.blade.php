@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Product Reviews</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <select name="rating" id="rating" class="form-select" required>
                <option value="">Select rating</option>
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }} Star{{ $i > 1 ? 's' : '' }}</option>
                @endfor
            </select>
        </div>
        <div class="mb-3">
            <label for="review" class="form-label">Review</label>
            <textarea name="review" id="review" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>

    <hr>

    <h3>All Reviews</h3>
    @forelse ($reviews as $review)
        <div class="card mb-2">
            <div class="card-body">
                <strong>{{ $review['user']['name'] ?? 'Anonymous' }}</strong>
                <span class="text-warning">
                    @for ($i = 1; $i <= 5; $i++)
                        <i class="fa{{ $i <= $review['rating'] ? 's' : 'r' }} fa-star"></i>
                    @endfor
                </span>
                <p>{{ $review['review'] }}</p>
                <small class="text-muted">{{ \Carbon\Carbon::parse($review['created_at'])->diffForHumans() }}</small>
            </div>
        </div>
    @empty
        <p>No reviews yet.</p>
    @endforelse
</div>
@endsection