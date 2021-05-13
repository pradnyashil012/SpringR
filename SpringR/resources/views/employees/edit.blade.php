@extends('layouts.app')

@section('content')

<h1>Employee Update</h1>
<hr/>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('employees.update', $employee->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="email" class="form-control mb-3" value="{{ $employee->email }}"/>

    <input type="text" name="fullname" class="form-control mb-3" value="{{ $employee->fullname }}"/>
    
    <input type="date" name="doj" class="form-control mb-3" value="{{ $employee->doj }}"/>

    <input type="date" name="dol" class="form-control mb-3" value="{{ $employee->dol }}"/>

    <input type="file" name="image" class="form-control mb-3">
    
    <button class="btn btn-primary float-end px-5" type="submit">Update</button>
</form>

@endsection