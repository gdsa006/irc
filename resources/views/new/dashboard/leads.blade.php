@extends('new.dashboard.layout')
@section('dashboard-content')

<div class="d-block mb-5">
<h2 class="float-left">Leads</h2>
<a class="btn btn-warning float-right" href="{{ route('export') }}">Export Data</a>
</div>


<div class="table-responsive">
  <table class="table">
    <tbody>
    @foreach($leads as $k=>$lead)
      <tr>
        <td>{{ $lead->id }}</td>
        <td>{{ $lead->fname ? $lead->fname . $lead->lname : '-' }} </td>
        <td>{{ $lead->mobile ? $lead->mobile : '-' }}</td>
        <td>{{ $lead->address }}</td>
        <td><a href="/dashboard/leads/{{ $lead->id }}">Details</a></td>
      </tr>
@endforeach
<tr>
    <td colspan="4">{{ $leads->links('pagination::bootstrap-4') }}</td>
</tr>
    </tbody>
    
  </table>
</div>








    
@endsection