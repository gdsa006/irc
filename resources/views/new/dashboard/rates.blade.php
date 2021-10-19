@extends('new.dashboard.layout')
@section('dashboard-content')


<h2>Rates</h2>
<hr>
<form method="post">
    <div class="input-group">
        <label class="col-md-2">Asphalt</label> &nbsp;
        <input type="text" name="asphalt-mellow" value="32" placeholder="mellow">
        &nbsp;
        <input type="text" name="steep-steep" value="43" placeholder="steep">
    </div>

    <div class="input-group mt-2">
        <label class="col-md-2">Flat</label> &nbsp;
        <input type="text" name="asphalt-mellow" value="23" placeholder="mellow">
        &nbsp;
        <input type="text" name="steep-steep" value="56" placeholder="steep">
    </div>

    <div class="input-group mt-2">
        <label class="col-md-2">Metal</label> &nbsp;
        <input type="text" name="asphalt-mellow" value="34" placeholder="mellow">
        &nbsp;
        <input type="text" name="steep-steep" value="34" placeholder="steep">
    </div>

    <div class="input-group mt-2">
        <label class="col-md-2">Other</label> &nbsp;
        <input type="text" name="asphalt-mellow" value="33" placeholder="mellow">
        &nbsp;
        <input type="text" name="steep-steep" value="45" placeholder="steep">
    </div>
    <hr>
    <input type="button" class="btn btn-lg btn-primary" value="Update">
</form>
@endsection