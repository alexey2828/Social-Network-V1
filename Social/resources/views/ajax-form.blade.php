@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    <form action="/store" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="input" id="file" name="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control" id="ajax-submit">
                        </div>
                    </form>

                    


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div class="alert22" style="display: none;"></div>
@foreach($posts as $post)
{{ $post->body }}<br><br><br>
@endforeach
@endsection



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function function_name() {
        $('#ajax-submit').click(function(e){
        	e.preventDefault();
        	//console.log($("meta[name='csrf-token']").attr('content'));
        	$.ajaxSetup({
        		headers: {
        			'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
        		}
        	});

        	$.ajax({
        		url: "{{ url('/ajax') }}",
        		method: 'POST',
        		data: {file: $("#file").val() },
        		success: function (result) {
        			//console.log(result);
        			$(".alert22").show();
        			$(".alert22").html(result.data);
        		}
        	});

        });
    })
</script>