@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">
 
            <div class="fontku">Feedback</div>
    
            <br/>
            <table class="table table-bordered table-striped tbody tr:nth-of-type table-hover">
                <thead class="thead-green">
                    <tr>
                        <th>Date Stamp</th>
                        <th>Hero</th>
                        <th>Kasus</th>
                        <th>Uraian</th>
                        <th>Rate</th>
                        <th> </th>
                    </tr>
                </thead>
                    @foreach($data_feedback as $fb)
                    <tr>
                        <th  style="display:none;"> {{$fb->id}} </th>
                        <th> {{Carbon\Carbon::parse($fb->created_at)->format('d-m-Y')}} </th>
                        <th> {{$fb->hero}} </th>
                        <th> {{$fb->kasus}} </th>
                        <th> {{$fb->umpanbalik}} </th>
                        <th> {{$fb->rate}} </th>
                        <th style="text-align: center;">
                            <form action="{{ action('FeedbackReportController@destroy', $fb->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"> Delete</button>
                            </form>
                        </th>
                    </tr>
                    @endforeach
            </table>
            {{ $data_feedback->links() }}
        </div>
    </div>

    <script>
    @if(Session::has('successdelete'))
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