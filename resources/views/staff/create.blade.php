@extends('bootstrap-theme')

@section('content')
<h1>Create New staff </h1>
<form method="POST" 
action="{{ url('/staffs') }}" enctype="multipart/form-data" style="width:50%">
    {{ method_field('POST') }}
    {{ csrf_field() }}

    @include ('staff.form')

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Create">
    </div>
</form>
@endsection
