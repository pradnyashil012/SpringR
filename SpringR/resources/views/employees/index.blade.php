@extends('layouts.app')

@section('content')
<h1>Employee CRUD</h1>
<a class="btn btn-link float-end" href="{{ route('employees.create') }}">Create employee</a>

{{-- Display message --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr></tr>
        <tr>
            <th scope="col">Avtar</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Experience</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($employees as $employee) {{-- Loop employees --}}
        <tr>
            <th scope="row"><img src="@if($employee->image){{ asset($employee->image) }} @else {{ asset('website/images/user.png') }} @endif"></th>
            <td>{{ $employee->fullname }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->doj->format('M d, Y') }}</td>
            <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('employees.edit', $employee->id) }}">Edit</a></li> {{-- Edit --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-item">Remove</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>


@endsection