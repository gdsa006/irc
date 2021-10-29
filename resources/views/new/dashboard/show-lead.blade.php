@extends('new.dashboard.layout')
@section('dashboard-content')
<h2 class="mb-3">Lead</h2>

<div class="row mb-5">
<div class="col-6">
    <h6 style="text-transform: capitalize;">{{ $lead->fname }} {{ $lead->lname }} </h6>
</div>
<div class="col-6">
    <h6>{{ $lead->email }}</h6>
    <h6>{{ $lead->mobile }}</h6>
</div>
</div>


<table class="table" style="font-size: 15px">
   
    <tbody>
      <tr>
        <td><p>Location:</td>
        <td><p>{{ $lead->address }}</p></td>
      </tr>

      <tr>
        <td><p>Homes Square Footage:</p></td>
        <td><p>{{ $lead->sqft }}</p></td>
      </tr>

      <tr>
        <td><p>Steep Roof:</p></td>
        <td><p>{{ $lead->steep }}</p></td>
      </tr>

      <tr>
        <td><p>Currently on your Roof:</p></td>
        <td><p>{{ $lead->existingmaterial }}</p></td>
      </tr>

      <tr>
        <td><p>Urgency:</p></td>
        <td><p>{{ $lead->urgency }}</p></td>
      </tr>

      <tr>
        <td><p>Insurance to repair your Roof:<p></td>
        <td><p>{{ $lead->true }}</p></td>
      </tr>

      <tr>
        <td><p>Liked on your Roof:</p></td>
        <td><p>{{ $lead->material }}</p></td>
      </tr>

      <tr>
        <td>Interested in Financing this Project Over Time:</td>
        <td>{{ $lead->isinterestedinfinancing }}</td>
      </tr>
    </tbody>
</table>



@endsection