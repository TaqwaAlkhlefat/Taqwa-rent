@extends('admin.layout1.master')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
           Lessors
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        {{-- <th>password</th> --}}
                        <th>phone_number</th>
                        <th>address</th>
                        <th>city</th>
                        <th>image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lessors as $lessor)
                        <tr>
                            <td>{{ $lessor->name }}</td>
                            <td>{{ $lessor->email }}</td>
                            {{-- <td>{{ $user->password }}</td> --}}
                            <td>{{ $lessor->phone_number }}</td>
                            <td>{{ $lessor->address }}</td>
                            <td>{{ $lessor->city }}</td>
                            <td>{{ $lessor->image }}</td>
                            <td>
                                <a href="{{ route('lessordashboard.show', $lessor->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ route('lessordashboard.edit', $lessor->id) }}" class="btn btn-success">Edit</a>
                                <form action="{{ route('lessordashboard.destroy', $lessor->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
