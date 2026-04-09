@extends('layout.layout')

@section('content2')


    <div class="container mt-5">
        <h1>Create Profile</h1>
        <form action="{{ route('profile.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="crud_id" class="form-label">Crud ID</label>

                <select class="form-select" name="crud_id" aria-label="Default select example">
                    @foreach ($values as $value)
                            <option value="{{ $value->id }}">{{ $value->first_name }} {{ $value->last_name }}</option>        
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Profile</button>
        </form>
    </div>

@endsection