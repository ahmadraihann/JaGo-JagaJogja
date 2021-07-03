@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">
 
            <div class="fontku">Laporan Masalah</div>
            
            <br/>
            <table class="table table-bordered table-striped tbody tr:nth-of-type table-hover" id="tablesdata">
                <thead class="thead-green">
                    <tr>
                        <th>Foto</th>
                        <th>Date</th>
                        <th>Hero</th>
                        <th>Lingkup</th>
                        <th>Deskripsi</th>
                        <th>Lokasi</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_laporan as $laporan)
                    <tr>
                        <th> <img src="{{ asset('uploads/laporan/' . $laporan->gambar)}}" alt="Image" witdh="50px" height="50px"></th>
                        <th> {{Carbon\Carbon::parse($laporan->created_at)->format('d-m-Y')}} </th>
                        <th> {{$laporan->hero}} </th>
                        <th> {{$laporan->lingkup}} </th>
                        <th> {{$laporan->deskripsi}} </th>
                        <th> {{$laporan->lokasi}} </th>
                        <th style="display:none;"> {{$laporan->email}} </th>
                        <th style="display:none;"> {{$laporan->user_id}} </th>
                        <th style="text-align: center;"> 
                            <a href="#" class="btn btn-success showbtn"> Selesaikan </a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data_laporan->links() }}
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fontku" id="exampleModalLabel">delegasikan tugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/laporan/submit" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Apakah anda yakin?');">
                    {{ csrf_field()}}
                    <div class="row">
                        <div class="col-md-6" style="margin-top: 20px;">

                            <input type="hidden" name="user_id" id="user_id">
                            <a style="font-weight: bold;">Date Stamp: </a>
                                <input type="text" class="form-control-sm inputku inline" name="date" id="date" readonly>
                            <a style="font-weight: bold;">Hero: <a>
                                <input type="text" class="form-control-sm inputku inline" name="hero" id="hero" readonly>
                            <br>
                            <label style="margin-top: 20px; font-weight: bold;">Email</label>
                                <input type="email" class="form-control inputku" name="email" id="email" readonly>
                            <label style="margin-top: 20px; font-weight: bold;">Deskripsi Masalah</label>
                                <textarea class="form-control inputku" rows="5" name="deskripsi" id="deskripsi" readonly></textarea>
                            <label style="margin-top: 20px; font-weight: bold;">Lokasi</label>
                                <input type="text" class="form-control inputku" name="lokasi" id="lokasi" readonly>
                        </div>
                        <div class="col-md-12 ml-auto">
                            <div class="fontku">pilih petugas</div>
                            <table class="tableku table-bordered table-striped table-hover thtable">
                                <thead class="thead-gray">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Divisi</th>
                                        <th>Point</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @foreach($data_pekerja as $pekerja)
                                <tr>
                                    <th> {{$pekerja->id}} </th>
                                    <th> {{$pekerja->name}} </th>
                                    <th> {{$pekerja->email}} </th>
                                    <th> 7500 </th>
                                    <th> 
                                        <button type="submit" class="btn btn-success" style="text-align: center;"> {{ __('tugaskan') }} </button>
                                    </th>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
                    </div>
                </form>
            </div> 
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('dataTables/datatables.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('dataTables/datatables.min.css') }}">

    
    <script>
        @if(Session::has('pesan'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data berhasil dikirim',
                showConfirmButton: true,
                timer: 3000
            });
        @endif

        $(document).ready(function(){
            $('.showbtn').on('click', function(){

                $tr = $(this).closest('tr');
                
                var data = $tr.children("th").map(function(){
                    return $(this).text();
                }).get();

                console.log(data);

                $('#date').val(data[1]);
                $('#hero').val(data[2]);
                $('#deskripsi').val(data[4]);
                $('#lokasi').val(data[5]);
                $('#email').val(data[6]);
                $('#user_id').val(data[7]);

                $('#showModal').modal('show');
            })
        })

        $(document).ready(function(){
            $('#tablesdata').DataTable();
        }); 
    </script>
@endsection

