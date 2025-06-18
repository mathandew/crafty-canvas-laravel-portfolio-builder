<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
        /* Ensure Select2 takes full width */
    </style>
</head>
<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        @include('admin.sidebar')
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h1>Add Project</h1>
                </div>
            </div>

            <div class="container mt-4">
                <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="project_name" class="form-label">Project Name</label>
                        <input type="text" class="form-control" id="project_name" name="project_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="project_description" class="form-label">Project Description</label>
                        <textarea class="form-control" id="project_description" name="project_description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="project_duration" class="form-label">Project Duration</label>
                        <input type="text" class="form-control" id="project_duration" name="project_duration" required>
                    </div>
                    <div class="mb-3">
                        <label for="skill_ids" class="form-label">Skills</label>
                        <select class="form-select" id="skill_ids" name="skill_ids[]" multiple required>
                            @foreach($skills as $skill)
                                <option value="{{ $skill->id }}">{{ $skill->skill_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="website_link" class="form-label"> Website Link</label>
                        <input type="text" class="form-control" id="website_link" name="website_link">
                    </div>
                    <div class="mb-3">
                        <label for="project_image" class="form-label">Project Image</label>
                        <input type="file" class="form-control" id="project_image" name="project_image" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript files-->
    <script src="{{ asset('/admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="{{ asset('/admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('/admincss/js/front.js') }}"></script>

    <script>
        $(document).ready(function() {
            function initializeSelect2() {
                $('#skill_ids').select2({
                    placeholder: 'Select skills',
                    allowClear: true
                });
            }

            initializeSelect2();

            $(window).on('resize', function() {
                $('#skill_ids').select2('close'); // Close the dropdown if it's open
                initializeSelect2(); // Reinitialize Select2
            });
        });
    </script>
</body>
</html>
