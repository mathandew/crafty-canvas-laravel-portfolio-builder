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
                    <h1>Update Project</h1>
                </div>
            </div>
            <div class="container mt-4">
                <form action="{{ route('projects.update', $project->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <div class="col">
                            <label for="project_name" class="form-label">Project Name</label>
                            <input type="text" class="form-control" id="project_name" name="project_name" value="{{ old('project_name', $project->project_name) }}" required>
                        </div>
                        <div class="col">
                            <label for="project_duration" class="form-label">Project Duration</label>
                            <input type="text" class="form-control" id="project_duration" name="project_duration" value="{{ old('project_duration', $project->project_duration) }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="project_description" class="form-label">Project Description</label>
                        <textarea class="form-control" id="project_description" name="project_description" rows="4" required>{{ old('project_description', $project->project_description) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="website_link" class="form-label"> Website Link</label>
                        <input type="text" class="form-control" id="website_link" name="website_link" value="{{ old('website_link', $project->website_link) }}">
                    </div>
                    <div class="mb-3">
                        <label for="skill_ids" class="form-label">Skills</label>
                        <select class="form-select" id="skill_ids" name="skill_ids[]" multiple required>
                            @foreach($skills as $skill)
                                <option value="{{ $skill->id }}" 
                                    {{ $project->skills->contains($skill->id) ? 'selected' : '' }}>
                                    {{ $skill->skill_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
</body>
</html>
