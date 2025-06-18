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
           <h1>Experiences</h1>
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
                <th>Designation</th>
                <th>Organization Name</th>
                <th>Service</th>
                <th>Skill</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($experiences as $experience)
                <tr>
                    <td>{{ $experience->id }}</td>
                    <td>{{ $experience->designation }}</td>
                    <td>{{ $experience->organization_name }}</td>
                    <td>{{ $experience->service->service_name }}</td>
                    <td>
    {{ $experience->skills->pluck('skill_name')->implode(', ') }}
</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('experience.edit', $experience->id) }}" class="btn btn-link me-2" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('experience.destroy', $experience->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link" title="Delete" onclick="return confirm('Are you sure you want to delete this experience?');">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No experiences found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <a href="{{ route('experience.create') }}" class="btn btn-primary">Add Experience</a>
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