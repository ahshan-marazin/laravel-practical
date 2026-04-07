<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <h1>index page!</h1>

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
              <th scope="col">Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($values as $value)
            <tr>
              <th scope="row">{{ $value->id }}</th>
              <td>{{ $value->first_name }}</td>
              <td>{{ $value->last_name }}</td>
              <td>{{ $value->email }}</td>
              <td>{{ $value->phone }}</td>
              <td>{{ $value->address }}</td>
              <td>
                <a href="{{ route('crud.edit', $value->id) }}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('crud.destroy', $value->id) }}" method="POST" style="display: inline;">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  </script>
</body>

</html>