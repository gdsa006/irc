@extends('welcome')
@section('content')

<div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">display error</small>
                            </div>
                         
                            <div class="form-group">
                                <input type="button" value="Next" id="stepThree" class="btn custom-btn float-right">
                                <input type="button" value="back" id="back" class="btn custom-btn float-left" onclick="window.location='{{ route('stepOne') }}'">
                            </div>




    <!-- email<input type="text" id="email" class="form-control">
    <br>
    <input type="button" value="next" id="stepThree">
    <input type="button" value="back" id="stepTwoBack">    -->
@endsection

@push('script')
<script>
    $('#exampleModal').modal('show');
</script>
@endpush

@push('script')
<script>
$('#stepThree').on('click',function(){
        $email = $("#email").val();
        $.ajax({
            type : 'get',
            url : '{{ route('stepTwoProcess') }}',
            data:{'email':$email},
            success:function(data){
                console.log(data);
                if(data.status == "s3"){
                    window.location.href = "{{URL::to('stepThree')}}"
                }else{
                    alert("incomplete fields");
                }
            }
        });
    })
</script>
@endpush

