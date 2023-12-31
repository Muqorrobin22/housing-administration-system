@extends('layouts.app') <!-- You might need to adjust this based on your actual layout structure -->

@section('content')
    <h1 class="my-5">Rekap Data</h1>
    <h5 class="my-5">Data Ini diambil otomatis dari Gabungan <b>Pembayaran</b> dan <b>Pemilik Rumah</b></h5>

    <table class="table table-striped table-hover">
        <thead class="table-light" >
            <tr>
                <th>No</th>
                <th>Rumah</th>
                <th>Nomor Rumah</th>
                <th>Nama Pemilik</th>
                <th>Status Rumah</th>
                <th>Kategori Iuran</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Status Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recapData as $data)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $data->rumah->nama_rumah }}</td>
                    <td>{{ $data->rumah->no_rumah }}</td>
                    <td>{{ $data->pemilikRumah->nama_lengkap }}</td>
                    <td>{{ $data->rumah->is_occupied ? "Ditempati" : "Kosong" }}</td>
                    <td>{{ $data->monthPayment->category }}</td>
                    <td>{{ $data->monthPayment->month }}</td>
                    <td>{{ $data->monthPayment->year }}</td>
                    <td>{{ $data->monthPayment->is_paid ? "Lunas" : "Belum Dibayar" }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection