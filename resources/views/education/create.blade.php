<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <title>Create Education</title>
</head>
<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        @include('admin.sidebar')
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h1>Add Education</h1>
                </div>
            </div>
            <div class="container mt-4">
                <form action="{{ route('education.store') }}" method="POST">
                    @csrf

                    <div class="row mb-3">
                        <div class="col">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                        </div>
                        <div class="col">
                            <label for="institute_name" class="form-label">Institute Name</label>
                            <input type="text" class="form-control" id="institute_name" name="institute_name" value="{{ old('institute_name') }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="institute_city" class="form-label">Institute City</label>
                            <input type="text" class="form-control" id="institute_city" name="institute_city" value="{{ old('institute_city') }}" required>
                        </div>
                        <div class="col">
                            <label for="institute_country" class="form-label">Institute Country</label>
                            <input type="text" class="form-control" id="institute_country" name="institute_country" value="{{ old('institute_country') }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="institute_address" class="form-label">Institute Address</label>
                        <input type="text" class="form-control" id="institute_address" name="institute_address" value="{{ old('institute_address') }}" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="enrolled_year" class="form-label">Enrolled Year</label>
                            <input type="number" class="form-control" id="enrolled_year" name="enrolled_year" value="{{ old('enrolled_year') }}" required>
                        </div>
                        <div class="col">
                            <label for="passing_year" class="form-label">Passing Year</label>
                            <input type="number" class="form-control" id="passing_year" name="passing_year" value="{{ old('passing_year') }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="result" class="form-label">Result</label>
                        <input type="text" class="form-control" id="result" name="result" value="{{ old('result') }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('/admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('/admincss/js/front.js') }}"></script>
</body>
</html>
