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
           <h1>Pojects</h1>
</div>
      </div>
      <div class="container mt-4">
      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('projects.create') }}" class="btn btn-primary">Add Project</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Project Name</th>
                <th>Description</th>
                <th>Duration</th>
                <th>Website Link</th>
                <th>Skills</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->project_name }}</td>
                    <td>{{ $project->project_description }}</td>
                    <td>{{ $project->project_duration }}</td>
                    <td>{{ $project->website_link }}</td>
                    <td>{{ $project->skills->pluck('skill_name')->implode(', ') }}</td>
                    <td>
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-link me-2">
                        <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link" title="Delete" onclick="return confirm('Are you sure you want to delete this service?');">
                            <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    </div>
    <!-- JavaScript files-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>

    <script>
    $(document).ready(function() {
        $('#skill_ids').select2({
            placeholder: 'Select skills',
            allowClear: true
        });
    });
</script>
  </body>
</html>