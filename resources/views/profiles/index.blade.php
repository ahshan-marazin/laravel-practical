@extends('layout.layout')

@section('content2')


<h1></h1>Profile Index Page!</h1>
 @if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>

  @endif

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone No</th>
              <th scope="col">Address</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Description</th>
              <th scope="col">Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($values as $value)
            <tr>
              <th scope="row">{{ $value->id }}</th>
              <td>{{ $value->crud->first_name }}</td>
              <td>{{ $value->crud->last_name }}</td>
              <td>{{ $value->crud->email }}</td>
              <td>{{ $value->crud->phone }}</td>
              <td>{{ $value->crud->address }}</td>
              <td>{{ $value->name }}</td>
              <td>{{ $value->email }}</td>
              <td>{{ $value->description }}</td>
              <td>

                <a href="{{ route('profile.edit', $value->id) }}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('profile.destroy', $value->id) }}" method="POST" style="display: inline;">
                  @csrf @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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
