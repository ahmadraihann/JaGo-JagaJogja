@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="apply" method="POST" enctype="multipart/form-data" class="row" onsubmit="return confirm('Apakah anda yakin?');">
                <div class="col-md-9">
                    <div class="fontku"> mengirimkan feedback </div>
                    @csrf

                    <input type="hidden" name="hero" value="{{ Auth::user()->name }}">

                    <div class="form-group">
                        <label>pilih kasus*</label>
                        <select class="form-control inputku" name="kasus" required>
                            <option value=" " disabled selected hidden></option>
                            @foreach ($Classname_array as $data)
                                <option> {{ $data->deskripsi }} </option>
                            @endforeach 
                        </select>
                    </div>

                    <div class="form-group">
                        <label>umpan balik*</label>
                        <textarea class="form-control inputku" rows="5" name="umpanbalik" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>rating*</label>
                        <br>
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
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
    $(':radio').change(function() {
        console.log('New star rating: ' + this.value);
    });
</script>
@endsection