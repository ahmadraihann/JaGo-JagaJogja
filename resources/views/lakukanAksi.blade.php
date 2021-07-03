@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card">
        <div class="card-body">
            <form action="go" method="POST" enctype="multipart/form-data" class="row" onsubmit="return confirm('Apakah anda yakin?');">
                <div class="col-md-12">
                    <div class="fontku"> laporan masalah </div>
                    @csrf
                    <input type="hidden" name="hero" value="{{ Auth::user()->name }}">

                    <input type="hidden" name="email" value="{{ $auth->email }}">

                    <input type="hidden" name="point" value="{{ 100 }}">
  
                    <div class="form-group">
                        <label>lingkup masalah*</label>
                        <select class="form-control inputku" name="lingkup" required>
                            <option value=" " disabled selected hidden></option>
                            @foreach ($divis_array as $data)
                                <option> {{ $data->lingkup }} </option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="form-group">
                        <label>penjelasan singkat*</label>
                        <textarea class="form-control inputku" rows="5" name="deskripsi" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>alamat lokasi*</label>
                        <input type="text" class="form-control inputku" name="lokasi" required>
                    </div>
                    <div class="form-group"> 
                        <label>unggah foto pendukung*</label>
                        <br>
                        <div>
                            <input type="file" name="gambar" onchange="readURL(this);"  accept=".jpg,.jpeg,.png"/>
                        </div>
                        <br>
                        
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <input type="submit" id="aksisubmit" class="btn btn-sukses btnaksi btnsubmit"/>
                            <input type="reset" class="btn btn-danger btnaksi"/>
                        </div>
                    </div>
                </div> 
                <!-- <div class="col-md-6 ml auto">
                    <img id="blah" src="http://placehold.jp/270x270.png" alt="your image" width="270px" height="270px" class="padtop"/>
                    <div class="form-group txt padbot">unggah foto pendukung*</div>
                    <div class="fileUpload btn btn-orange pad panjangbtn">
                        <span>Unggah</span>
                        <input type="file" class="upload" name="gambar" onchange="readURL(this);"  accept=".jpg,.jpeg,.png"/>
                    </div>
                    
                    <script type="text/javascript">                        
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
                    </script>
                </div> -->
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
</script>
@endsection
