@extends('layouts.app')

@section('content')
    <h1>Edit Monthly Payment</h1>

    <form action="{{ route('payments.update', $payment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-control" id="category" name="category" required>
                <option value="Kebersihan" {{ $payment->category == 'kebersihan' ? 'selected' : '' }}>Kebersihan</option>
                <option value="Satpam" {{ $payment->category == 'satpam' ? 'selected' : '' }}>Satpam</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="text" class="form-control" id="year" name="year" maxlength="4" value="{{ $payment->year }}" required>
        </div>
        
        <div class="mb-3">
            <label for="month" class="form-label">Month</label>
            <select class="form-control" id="month" name="month" required>
                <option value="Januari" {{ $payment->month == 'Januari' ? 'selected' : '' }}>Januari</option>
                <option value="Februari" {{ $payment->month == 'Februari' ? 'selected' : '' }}>Februari</option>
                <option value="Maret" {{ $payment->month == 'Maret' ? 'selected' : '' }}>Maret</option>
                <option value="April" {{ $payment->month == 'April' ? 'selected' : '' }}>April</option>
                <option value="Mei" {{ $payment->month == 'Mei' ? 'selected' : '' }}>Mei</option>
                <option value="Juni" {{ $payment->month == 'Juni' ? 'selected' : '' }}>Juni</option>
                <option value="Juli" {{ $payment->month == 'Juli' ? 'selected' : '' }}>Juli</option>
                <option value="Agustus" {{ $payment->month == 'Agustus' ? 'selected' : '' }}>Agustus</option>
                <option value="September" {{ $payment->month == 'September' ? 'selected' : '' }}>September</option>
                <option value="Oktober" {{ $payment->month == 'Oktober' ? 'selected' : '' }}>Oktober</option>
                <option value="November" {{ $payment->month == 'November' ? 'selected' : '' }}>November</option>
                <option value="Desember" {{ $payment->month == 'Desember' ? 'selected' : '' }}>Desember</option>
            </select>
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