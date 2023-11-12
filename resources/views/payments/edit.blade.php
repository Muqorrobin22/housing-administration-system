@extends('layouts.app')

@section('content')
    <h1>Edit Monthly Payment</h1>

    <form action="{{ route('payments.update', $payment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $payment->category }}" required>
        </div>

        <div class="mb-3">
            <label for="is_paid" class="form-label">Is Paid</label>
            <select class="form-control" id="is_paid" name="is_paid">
                <option value="0" {{ !$payment->is_paid ? 'selected' : '' }}>No</option>
                <option value="1" {{ $payment->is_paid ? 'selected' : '' }}>Yes</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="rumah_id" class="form-label">Rumah ID</label>
            <select class="form-control" id="rumah_id" name="rumah_id" required>
                @foreach ($perumahan as $id => $nama_rumah)
                    <option value="{{ $id }}" {{ $payment->rumah_id == $id ? 'selected' : '' }}>{{ $nama_rumah }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Monthly Payment</button>
    </form>
@endsection