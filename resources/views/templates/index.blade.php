<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')
  </head>
  <style>
    .btn[disabled] {
        cursor: not-allowed;
    }

    .card-img-top{
      height: 350px;
    }
</style>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
           <h1>Templates</h1>
</div>
      </div>
      <div class="container mt-4">
      <div class="row">
      @foreach($templates as $template)
    <div class="col-md-4">
        <div class="card">
        <img src="{{ asset('images/' . $template->image) }}" class="card-img-top" alt="{{ $template->name }}">
        <div class="card-body">
                <h5 class="card-title">{{ $template->name }}</h5>

                <!-- If the current template is the selected one, show 'Selected' and 'Update' buttons -->
                @if($userTemplate && $userTemplate->id === $template->id)
                    <button class="btn btn-secondary" disabled>Selected</button>
                    <a href="{{ route('templates.customize', $template->id) }}" class="btn btn-primary">Update</a>
                    <a href="{{ route('templates.view', $template->id) }}" class="btn btn-info">View</a>
                
                @else
                    <!-- Show the 'Select Template' button for other templates -->
                    <form action="{{ route('templates.select', $template) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Select Template</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endforeach

    </div>
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