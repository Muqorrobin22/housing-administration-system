@extends('layouts.app')

@section('content')
    <h1>Monthly Payments</h1>

    <a href="{{ route('payments.create') }}" class="btn btn-primary">Create Monthly Payment</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Is Paid</th>
                <th>Rumah ID</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $payment->category }}</td>
                    <td>{{ $payment->is_paid ? 'Yes' : 'No' }}</td>
                    <td>{{ $payment->perumahan->nama_rumah }}</td>
                    <td>{{ $payment->month }}</td>
                    <td>{{ $payment->year }}</td>
                    <td>
                        <!-- Add links/buttons for edit and delete actions -->
                        <a href="{{ route('payments.edit', $payment->id) }}" class="btn  btn-warning">Edit</a>
                        <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn  btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection