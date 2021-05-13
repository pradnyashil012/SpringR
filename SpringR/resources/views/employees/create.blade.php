@extends('layouts.app')

@section('content')

<h1>Employees Records</h1>
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

<form action="{{ route('employees.store') }}" method="post">
    
    @csrf
    
    <input type="text" name="email" class="form-control mb-3" placeholder="Email"/>

    <input type="text" name="fullname" class="form-control mb-3" placeholder="Full Name"/>
    
    <input type="date" name="doj" class="form-control mb-3" placeholder="Date of Joining"/>

    <input type="date" name="dol" class="form-control mb-3" placeholder="Date of Leaving"/>

    <input type="checkbox" class="form-control mb-3"> Still Working

    <input type="file" name="image" class="form-control mb-3">
     
    <button class="btn btn-primary float-end px-5" type="submit">Save</button>
</form>

@endsection
