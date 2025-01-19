<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visa Application</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .table-container {
            margin-top: 50px;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .EDBTN {
            font-weight: bold;
            transition: all 0.3s;
        }
        .EDBTN:hover {
            background-color: #0056b3;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="table-container">
            <h3>All Visas</h3>
            <table id="myTable" class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>S/O</th>
                        <th>Country</th>
                        <th>Title</th>
                        <th>Required Person</th>
                        <th>Last Date of Submission</th>
                        <th>Advertisement</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->country }}</td>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->requerd }}</td>
                            <td>{{ $value->lastdate }}</td>
                            <td><a href="getadvimage/{{ $value->id }}" class="text-decoration-none text-primary">Click to see Advertisement</a></td>
                            <td>
                                <a href="applay-visa" class="btn btn-info btn-sm EDBTN">Apply Now</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
