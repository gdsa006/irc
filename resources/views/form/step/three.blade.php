@extends('welcome')
@section('content')
<div class="form-group">
                                <label for="exampleInputEmail1">Mobile</label>
                                <input type="mobile" class="form-control" id="mobile" aria-describedby="emailHelp" placeholder="Enter mobile">
                                <small id="emailHelp" class="form-text text-muted">display error</small>
                            </div>
                         
                            <div class="form-group">
                                <input type="button" value="Next" id="finalStep" class="btn custom-btn float-right">
                                <input type="button" value="back" id="stepTwoBack" class="btn custom-btn float-left" onclick="window.location='{{ route('stepTwo') }}'">
                            </div>

    <!-- mobile<input type="text" id="mobile" class="form-control">
    <br>
    <input type="button" value="next" id="finalStep">
    <input type="button" value="back" id="stepTwoBack">    -->
@endsection

@push('script')
<script>
    $('#exampleModal').modal('show');
</script>
@endpush

@push('script')
<script>
$('#finalStep').on('click',function(){
        $mobile = $("#mobile").val();
        $.ajax({
            type : 'get',
            url : '{{ route('stepThreeProcess') }}',
            data:{'mobile':$mobile},
            success:function(data){
                console.log(data);
                if(data.status == 'success'){
                    alert("email sent");
                    $('#exampleModal').modal('hide');
                }else{
                    alert("incomplete fields");
                }
            }
        });
    })
</script>
@endpush
