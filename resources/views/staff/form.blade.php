@extends('bootstrap-theme')

@section('content')
<div class="row">
    
    <div class="form-group col-lg-6 ">
        <label>{{ 'Name' }}</label>
        <input class="form-control form-control-sm" name="Name" type="text" value="{{ isset($staff->Name) ? $staff->Name : ''}}" > 
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Age' }}</label>
        <input class="form-control form-control-sm" name="Age" type="number" value="{{ isset($staff->Age) ? $staff->Age : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Salary' }}</label>
        <input class="form-control form-control-sm" name="Salay" type="number" value="{{ isset($staff->Salay) ? $staff->Salay : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Phone' }}</label>
        <input class="form-control form-control-sm" name="Phone" type="number" value="{{ isset($staff->Phone) ? $staff->Phone : ''}}" >    
    </div>
    
</div>





