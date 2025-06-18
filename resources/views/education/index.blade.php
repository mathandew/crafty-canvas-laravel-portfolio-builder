<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
           <h1>Education</h1>
</div>
      </div>
      <div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Institute Name</th>
                <th>City</th>
                <th>Country</th>
                <th>Address</th>
                <th>Enrolled Year</th>
                <th>Passing Year</th>
                <th>Result</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($educations as $education)
                <tr>
                    <td>{{ $education->id }}</td>
                    <td>{{ $education->title }}</td>
                    <td>{{ $education->institute_name }}</td>
                    <td>{{ $education->institute_city }}</td>
                    <td>{{ $education->institute_country }}</td>
                    <td>{{ $education->institute_address }}</td>
                    <td>{{ $education->enrolled_year }}</td>
                    <td>{{ $education->passing_year }}</td>
                    <td>{{ $education->result }}</td>
                    <td>
    <div class="d-flex justify-content-center">
        <a href="{{ route('education.edit', $education->id) }}" class="btn btn-link" title="Edit">
            <i class="fas fa-edit"></i>
        </a>
        <form action="{{ route('education.destroy', $education->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-link" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                <i class="fas fa-trash-alt"></i>
            </button>
        </form>
    </div>
</td>

                </tr>
            @empty
                <tr>
                    <td colspan="10" class="text-center">No education details found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <a href="{{ url('education/create') }}" class="btn btn-primary mt-3">Add Education</a>
</div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
  </body>
</html>