@extends('new.dashboard.layout')
@section('dashboard-content')


<h2>Leads</h2>
<hr>


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