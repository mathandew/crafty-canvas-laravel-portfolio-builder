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
           <h1>Skills</h1>
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
                <th>Skill Name</th>
                <th>Skill Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($skills as $skill)
                <tr>
                    <td>{{ $skill->id }}</td>
                    <td>{{ $skill->skill_name }}</td>
                    <td>{{ ucfirst($skill->skill_level) }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-link me-2" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link" title="Delete" onclick="return confirm('Are you sure you want to delete this skill?');">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No skills found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <a href="{{ route('skills.create') }}" class="btn btn-primary mt-3">Add Skill</a>
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