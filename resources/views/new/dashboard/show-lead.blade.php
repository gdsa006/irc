@extends('new.dashboard.layout')
@section('dashboard-content')


<h2>Leads: {{ $lead->fname }} {{ $lead->lname }} </h2>
<h5>{{ $lead->email }}
<h5>{{ $lead->mobile }}
<hr>
<p class="font-weight-bold">Location: </p><p style="font-size: 15px">{{ $lead->address }}</p><br>
<p class="font-weight-bold">Homes Square Footage: </p><p style="font-size: 15px">{{ $lead->sqft }} Sqft</p><br>
<p class="font-weight-bold">Steep Roof: </p><p style="font-size: 15px">{{ $lead->steep }}</p><br>
<p class="font-weight-bold">Currently on your Roof: </p><p style="font-size: 15px">{{ $lead->existingmaterial }}</p><br>
<p class="font-weight-bold">Urgency: </p><p style="font-size: 15px">{{ $lead->urgency }}</p><br>
<p class="font-weight-bold">Insurance to repair your Roof: </p><p style="font-size: 15px">{{ $lead->true }}</p><br>
<p class="font-weight-bold">Liked on your Roof: </p><p style="font-size: 15px">{{ $lead->material }}</p><br>
<p class="font-weight-bold">Interested in Financing this Project Over Time: </p><p style="font-size: 15px">{{ $lead->isinterestedinfinancing }}</p><br>
@endsection