@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="submit" method="POST" enctype="multipart/form-data" class="row" onsubmit="return confirm('Apakah anda yakin?');">
                <div class="col-md-9">
                    <div class="fontku"> mengirimkan bukti </div>
                    <br>
                    @csrf
                    <input type="hidden" name="status" value="Telah diselesaikan">
                    <div class="form-group">
                        <label>pilih kasus*</label>
                        <select class="form-control inputku" name="kasus" required>
                            <option value=" " disabled selected hidden></option>
                            @foreach ($case_array as $data)
                                <option> {{ $data->deskripsi }} </option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="form-group">
                        <label>unggah foto pendukung*</label>
                        <br>
                        <div class="fileUpload btn btn-orange">
                            <span>Unggah</span>
                            <input type="file" class="upload" name="gambar" onchange="readURL(this);"  accept=".jpg,.jpeg,.png"/>
                        </div>
                        <div class="">
                            <img id="blah" src="http://placehold.jp/270x270.png" alt="your image" width="200px" height="200px"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="form-group">
                            <input type="submit" id="aksisubmit" class="btn btn-sukses btnaksi btnsubmit"/>
                            <input type="reset" class="btn btn-danger btnaksi"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    @if(Session::has('pesan'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Data berhasil dikirim',
            showConfirmButton: true,
            timer: 2000
        });
    @endif
</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(':radio').change(function() {
        console.log('New star rating: ' + this.value);
    });
</script>
@endsection