@extends('layouts.app')

@section('content')
    <h1>Create Monthly Payment</h1>

    <form action="{{ route('payments.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-control" id="category" name="category" required>
                <option value="Kebersihan">Kebersihan</option>
                <option value="Satpam">Satpam</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="is_paid" class="form-label">Is Paid</label>
            <select class="form-control" id="is_paid" name="is_paid">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="rumah_id" class="form-label">Rumah ID</label>
            <select class="form-control" id="rumah_id" name="rumah_id" required>
                @foreach ($perumahan as $rumahId => $rumahName)
                    <option value="{{ $rumahId }}">{{ $rumahName }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save Monthly Payment</button>
    </form>
@endsection