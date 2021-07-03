@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">

        <div class="fontku">Status</div>

        <br/>
        <table class="table table-bordered table-striped tbody tr:nth-of-type table-hover">
            <thead class="thead-green">
                <tr>
                    <th>id</th>
                    <th>Kasus</th>
                    <th>Foto</th>
                    <th>Status</th>
                </tr>
            </thead>
                @foreach($data_bukti as $b)
                <tr>
                    <th> {{$b->id}} </th>
                    <th> {{$b->kasus}} </th>
                    <th> <img src="{{ asset('uploads/laporan/' . $b->gambar)}}" alt="Image" height="50px"> </th>
                    <th> {{$b->status}} </th>
                </tr>
                @endforeach
        </table>
        {{ $data_bukti->links() }}
        </div>
    </div>
</div>
@endsection

