@extends('bootstrap-theme')

@section('content')
<h1>Thailand Coronavirus Report</h1>
<a href="{{ url('/staffs/create') }}" class="btn btn-sm btn-success mr-4">New Record</a> 

<form action="{{ url('/staffs') }}" method="GET" class="my-4">
    <input name="search" id="search" value="{{ request('search') }}" />
    <button type="submit">Search</button>
</form>
<table class="table table-sm table-bordered text-right"style="width:100%    " >
    <tr>
        <th>#</th> <th>Name</th> <th>Age</th> <th>Salary</th> <th>Phone</th> <th>Actions</th></tr>
    @foreach($staffs as $item)
    <tr>

    <td>{{ $item->id }}</td>
        <td>{{ $item->Name }}</td>
        <td>{{ $item->Age  }}</td>
        <td>{{  $item->Salay  }}</td>
        <td>{{  $item->Phone  }}</td>
        
    </button>
</form>
</td>


    </tr>
    @endforeach
</table>
<div class="mt-4">{{ $staffs->appends(['search' => request('search')])->links() }}</div>
@endsection
