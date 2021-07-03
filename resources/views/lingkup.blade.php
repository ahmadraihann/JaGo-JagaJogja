@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
            <div class="card-body">
 
                <div class="fontku">Lingkup Masalah</div>

                <div class="knn">
                    <button type="button" class="btn btn-primary btnrpt" data-toggle="modal" data-target="#exampleModal">Tambah</button>
                </div>

                <br/>
                <table id="datatable" class="table table-bordered table-striped tbody tr:nth-of-type table-hover">
                    <thead class="thead-green">
                        <tr>
                            <th>Id</th>
                            <th>Lingkup</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                        @foreach($data_divisi as $laporan)
                        <tr>
                            <th> {{$laporan->id}} </th>
                            <th> {{$laporan->lingkup}} </th>
                            <th> {{$laporan->deskripsi}} </th>
                            <th style="text-align: center;">  
                                <a href="#" class="btn btn-success edit">Edit</a> | 
                                <a href="#" class="btn btn-danger delete ">Hapus</a>
                            </th>
                        </tr>
                        @endforeach
                </table>
                {{ $data_divisi->links() }}
            </div>
        </div>
    </div>

    <!-- Modal Add -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <form action="{{ action('DivisiController@store') }}" method="POST" onsubmit="return confirm('Apakah anda yakin?')">
                <div class="modal-body">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label> Lingkup </label>
                        <input type="text" name="lingkup" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Deskripsi </label>
                        <input type="text" name="deskripsi" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <form action="/divisi" method="POST" id="editForm" onsubmit="return confirm('Apakah anda yakin?')">

                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="modal-body">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label> Lingkup </label>
                        <input type="text" name="lingkup" id="lingkup" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Deskripsi </label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <form action="/divisi" method="POST" id="deleteForm">

                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="modal-body">

                    <input type="hidden" nama="_method" value="DELETE">
                    <p> Apakah anda Yakin? </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus Data</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
         $(document).ready(function(){

            $('.edit').on('click', function(){

                $tr = $(this).closest('tr');
                
                var data = $tr.children("th").map(function(){
                    return $(this).text();
                }).get();

                console.log(data);

                $('#lingkup').val(data[1]);
                $('#deskripsi').val(data[2]);

                $('#editForm').attr('action', '/divisi/'+data[0]);
                $('#editModal').modal('show');
            })
        })

        $(document).ready(function(){

            $('.delete').on('click', function(){
                $tr = $(this).closest('tr');
                
                var data = $tr.children("th").map(function(){
                    return $(this).text();
                }).get();

                console.log(data);

                $('#deleteForm').attr('action', '/divisi/'+data[0])

                $('#deleteModal').modal('show');
            })
        })
    </script>

    <script>
        @if(Session::has('addsuccess'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data berhasil ditambahkan',
                showConfirmButton: true,
                timer: 2000
            });
        @endif

        @if(Session::has('updatesuccess'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data berhasil diupdate',
                showConfirmButton: true,
                timer: 2000
            });
        @endif

        @if(Session::has('deletesuccess'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data berhasil dihapus',
                showConfirmButton: true,
                timer: 2000
            });
        @endif
    </script>
@endsection