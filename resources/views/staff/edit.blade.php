@extends('bootstrap-theme')

@section('content')

<h1>Edit staff #3{{ $staff->id }}</h1>

<form method="POST" action="{{ url('/covid19/' . $covid19->id) }}" enctype="multipart/form-data" style="width:50%">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}

    @include ('staff.form')

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Update">
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Create">
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Create">
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Create">
    </div>

</form>
@endsection
