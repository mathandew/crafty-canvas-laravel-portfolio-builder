<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Page CV</title>
    <style>
        /* Basic PDF styling */
        body {
            font-family: Arial, sans-serif;
            margin: 10px;
            font-size: 12px;
        }

        h2 {
            color: #4e73df;
            font-size: 16px;
            margin-bottom: 8px;
        }

        .section {
            margin-bottom: 12px;
        }

        /* Profile section with minimal spacing */
        .profile-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-container img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 2px solid #4e73df;
        }

        .profile-container h2 {
            font-size: 20px;
            margin: 5px 0;
        }

        .profile-container p {
            margin-top: 5px;
            font-size: 11px;
            color: #555;
        }

        /* Use columns to save space */
        .columns {
            display: flex;
            justify-content: space-between;
        }

        .column {
            width: 48%; /* Fit two columns */
        }

        /* Skill and service cards with minimal padding */
        .card {
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 5px;
            margin-bottom: 8px;
            background-color: #f8f9fc;
            page-break-inside: avoid;
        }

        .card h3 {
            font-size: 14px;
            margin-bottom: 4px;
        }

        /* Table for projects and experience */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 6px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 11px;
        }

        table th {
            background-color: #f1f1f1;
            color: #343a40;
        }

        /* Avoid page breaks within sections */
        .section {
            page-break-inside: avoid;
        }
    </style>
</head>
<body>

    <!-- Profile Section -->
    <div class="profile-container">
        <img src="{{ public_path('simple/assets/img/profile.jpg') }}" alt="Profile Image">
        <h2>{{ $user->first_name }} {{ $user->last_name }}</h2>
        <p>{{ $user->email }} | {{ $user->phone }}</p>
    </div>

    <!-- Skills & Services Section (Two columns) -->
    <div class="section">
        <h2>Skills & Services</h2>
        <div class="columns">
            <!-- Skills column -->
            <div class="column">
                <h3>Skills</h3>
                <ul>
                    @foreach($skills as $skill)
                        <li>{{ $skill->skill_name }} - {{ ucfirst($skill->skill_level) }}</li>
                    @endforeach
                </ul>
            </div>

            <!-- Services column -->
            <div class="column">
                <h3>Services</h3>
                <ul>
                    @foreach($services as $service)
                        <li>{{ $service->service_name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Education Section -->
    <div class="section">
        <h2>Education</h2>
        @foreach($educations as $education)
        <div class="card">
            <h3>{{ $education->title }}</h3>
            <p>{{ $education->institute_name }} ({{ $education->enrolled_year }} - {{ $education->passing_year }})</p>
        </div>
        @endforeach
    </div>

    <!-- Projects Section -->
    <div class="section">
        <h2>Projects</h2>
        <table>
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->project_name }}</td>
                        <td>{{ $project->project_duration }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Experiences Section -->
    <div class="section">
        <h2>Experience</h2>
        <table>
            <thead>
                <tr>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tbody>
                @foreach($experiences as $experience)
                    <tr>
                        <td>{{ $experience->designation }}</td>
                        <td>{{ $experience->organization_name }}</td>
                        <td>{{ $experience->duration }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
