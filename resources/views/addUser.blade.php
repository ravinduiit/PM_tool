<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #d4e1f4; /* Light blue background */
        }
        .page-title {
            font-size: 24px;
            font-weight: 600;
            color: #1A202C;
            position: relative; /* Allow precise placement */
            margin-bottom: -30px; /* Pull it upwards towards the container */
            margin-top: 2%;
            padding-left: 23%; /* Ensure spacing matches the container alignment */
        }
        .form-container {
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            width: 100%;
            max-width: 800px; /* Adjust the width to match design */
            margin: 0 auto;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-t
        }
        .page-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            margin-left: 15px; /* Align with card */
        }
        .content-wrapper {
            margin-top: 60px; /* Space on top as per design */
        }
        .btn-add {
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 16px;
        }
        .btn-add:hover {
            background-color: #0056b3;
        }
        .form-label {
            font-size: 14px;
            font-weight: 500;
        }
        .form-control,
        .form-select {
            border-radius: 6px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <!-- Title Outside Container -->
    <h2 class="page-title">Add User</h2>

    <div class="form-container">
        <form>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">User name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone No.</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
                </div>
                <div class="col-md-6">
                    <label for="designation" class="form-label">User Role</label>
                    <select class="form-select" id="designation">
                        <option value="UI Intern">Admin</option>
                        <option value="Developer">Manager</option>
                        <option value="Manager">User</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-add text-white">ADD</button>
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
