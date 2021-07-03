@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">

            <div class="fontku">Kontribusi Saya</div>
            <div class="pjkknn">
                <a style="font-weight: bold;">total aksi: <div class="persegi"> {{ $users->laporan->count() }} aksi</div></a>
                <a style="font-weight: bold;">total point: <div class="persegi"> {{$point}} point</div></a>
            </div>
            <table class="table table-bordered table-striped tbody tr:nth-of-type table-hover" id="tablesdata">
                <thead class="thead-green">
                    <tr>
                        <th>Foto</th>
                        <th>Date</th>
                        <th>Poin</th>
                        <th>Hero</th>
                        <th>Lingkup</th>
                        <th>Deskripsi</th>
                        <th>Lokasi</th>
                    </tr>
                </thead>
                <tbodY>
                    @foreach($users->laporan as $l)
                    <tr>
                        <th> <img src="{{ asset('uploads/laporan/' . $l->gambar)}}" alt="Image" height="50px"> </th>
                        <th> {{Carbon\Carbon::parse($l->created_at)->format('d-m-Y')}} </th>
                        <th> {{$l->point}} </th>
                        <th> {{$l->hero}} </th>
                        <th> {{$l->lingkup}} </th>
                        <th> {{$l->deskripsi}} </th>
                        <th> {{$l->lokasi}} </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
