@extends('layouts.app')

@section('content')
    <h1 class="my-5">Create Monthly Payment</h1>

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
            <label for="year" class="form-label">Year</label>
            <input type="text" class="form-control" id="year" name="year" maxlength="4" required>
        </div>
        
        <div class="mb-3">
            <label for="month" class="form-label">Month</label>
            <select class="form-control" id="month" name="month" required>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
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

        <button type="submit" class="btn btn-warning">Save Monthly Payment</button>
    </form>
@endsection