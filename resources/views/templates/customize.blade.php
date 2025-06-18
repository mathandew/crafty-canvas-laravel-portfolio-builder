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
           <h1>Templates</h1>
</div>
      </div>
      <div class="container mt-4">
      <h1>Customize Template: {{ $template->name }}</h1>
    <form action="{{ route('templates.updateCustomization', $template->id) }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="color" class="form-label">Color</label>
            <input type="text" class="form-control" id="color" name="color" value="{{ $userTemplate->pivot->color }}">
        </div>

        <div class="mb-3">
            <label for="background" class="form-label">Background</label>
            <input type="text" class="form-control" id="background" name="background" value="{{ $userTemplate->pivot->background }}">
        </div>

        @foreach(['education', 'experience', 'skills', 'services', 'projects'] as $option)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="{{ $option }}" id="{{ $option }}" {{ $userTemplate->pivot->$option ? 'checked' : '' }}>
                <label class="form-check-label" for="{{ $option }}">
                    Enable {{ ucfirst($option) }}
                </label>
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary mt-3">Save Customization</button>
    </form>
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