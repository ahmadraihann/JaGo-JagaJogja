@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">

            <div class="fontku">Tugas</div>

            </br>
            <table class="table table-bordered table-striped tbody tr:nth-of-type table-hover">
                <thead class="thead-green">
                    <tr>
                        <th>Date Stamp</th>
                        <th>Hero</th>
                        <th>Pekerjaan</th>
                        <th>Lokasi</th>
                        <th>Deadline</th>
                        <th>Selesaikan Tugas</th>
                    </tr>
                </thead>
                    @foreach($data_tugas as $tugas)
                    <tr>
                        <th> {{Carbon\Carbon::parse($tugas->created_at)->format('d-m-Y')}} </th>
                        <th> {{$tugas->hero}} </th>
                        <th style="display:none;"> {{$tugas->email}} </th>
                        <th> {{$tugas->deskripsi}} </th>
                        <th> {{$tugas->lokasi}} </th>
                        <th  style="display:none;"> {{$tugas->user_id}} </th>
                        <th> 3 hari </th>
                        <th class="text-center"> 
                            <a href="#" class="btn btn-success btnend"> Selesai </a>
                        </th>
                    </tr>
                    @endforeach
            </table>
            {{ $data_tugas->links() }}
        </div>
    </div>

    <nav>
        <div class="modal fade" id="endModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Selesaikan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <div class="modal-body">
                <form action="{{url('send/email')}}" method="POST" onsubmit="return confirm('Apakah anda yakin?');">
                    {{ csrf_field()}}
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 20px;">
                            <input type="hidden" name="message" value="Laporan Anda Telah Kami Selesaikan">
                            <a style="font-weight: bold;">Date Stamp: </a>
                                <input type="text" class="form-control-sm inputku inline" name="date" id="date" readonly>
                            <a style="font-weight: bold;">Hero: <a>
                                <input type="text" class="form-control-sm med inputku inline" name="subject" id="hero" readonly>
                            <br>
                            <label style="margin-top: 20px; font-weight: bold;">Email</label>
                                <input type="email" class="form-control inputku" name="email" id="email" readonly>
                            <label style="margin-top: 20px; font-weight: bold;">Pekerjaan</label>
                                <input type="text" class="form-control inputku" name="pekerjaan" id="pekerjaan" readonly>
                            <label style="margin-top: 20px; font-weight: bold;">Lokasi</label>
                                <input type="text" class="form-control inputku" name="lokasi" id="lokasi" readonly>
                        </div>
                    </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" name="send" class="btn btn-primary">Selesai</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.btnend').on('click', function(){
                $tr = $(this).closest('tr');
                
                var data = $tr.children("th").map(function(){
                    return $(this).text();
                }).get();

                console.log(data);

                $('#date').val(data[0]);
                $('#hero').val(data[1]);
                $('#email').val(data[2]);
                $('#pekerjaan').val(data[3]);
                $('#lokasi').val(data[4]);

                $('#endModal').modal('show');
            })
        })

        @if(Session::has('messagesuccess'))
            Swal.fire({
                icon: 'success',
                title: 'Terima Kasih',
                text: 'Laporan berhasil diselesaikan',
                showConfirmButton: true,
                timer: 2000
            });
        @endif    
    </script>
@endsection