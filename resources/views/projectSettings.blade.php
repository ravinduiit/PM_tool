<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Setting</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #DCE6F6;
            font-family: 'Arial', sans-serif;
        }
        
        .page-title {
            font-size: 24px;
            font-weight: 600;
            color: #1A202C;
            position: relative; /* Allow precise placement */
            margin-bottom: -30px; /* Pull it upwards towards the container */
            margin-top: 2%;
            padding-left: 21%; /* Ensure spacing matches the container alignment */
        }

        .container {
            max-width: 900px;
            margin-top: 50px;
            padding: 30px;
            background: white;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #1A202C;
        }

        h5 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #1A202C;
        }

        p {
            font-size: 14px;
            color: #718096;
        }
        .form-check{
            padding-left: 21%
        }

        .form-check-label {
            font-size: 14px;
            color: #1A202C;
        }

        .form-check-input:checked {
            background-color: #3182CE;
            border-color: #3182CE;
        }

        .project-members {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .member-card {
            display: flex;
            align-items: center;
            background-color: #F7FAFC;
            border-radius: 8px;
            padding: 10px 15px;
            gap: 10px;
            position: relative;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .member-card img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .btn-remove {
            background: transparent;
            border: none;
            color: #E53E3E;
            font-size: 16px;
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
        }

        .btn-remove:hover {
            color: #C53030;
        }

        .btn-delete {
            background-color: #E53E3E;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 600;
        }

        .btn-delete:hover {
            background-color: #C53030;
        }

        .delete-project-description {
            color: #E53E3E;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    
    <!-- Title Outside Container -->
    <h2 class="page-title">Project Setting</h2>

    <div class="container">

        <!-- Project Details Section -->
        <div class="mt-4">
            <h5>Project Details</h5>
            <p>Click to view and update project name, description and other essential details.</p>
        </div>

        <!-- Project Visibility Section -->
        <div class="mt-4">
            <h5>Project Visibility</h5>
            <p>Manage who can view or access this project by setting its visibility to Public, Private, or Restricted.</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="visibility" id="public" checked>
                <label class="form-check-label" for="public">Public: Anyone can view this project</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="visibility" id="private">
                <label class="form-check-label" for="private">Private: Only invited members can view this project</label>
            </div>
        </div>

        <!-- Project Members Section -->
        <div class="mt-4">
            <h5>Project Members</h5>
            <div class="project-members">
                <!-- Member Cards -->
                <div class="member-card">
                    <img src="https://via.placeholder.com/40" alt="Jane Cooper">
                    <span>Jane Cooper</span>
                    <button class="btn-remove">&times;</button>
                </div>
                <div class="member-card">
                    <img src="https://via.placeholder.com/40" alt="Wade Warren">
                    <span>Wade Warren</span>
                    <button class="btn-remove">&times;</button>
                </div>
                <div class="member-card">
                    <img src="https://via.placeholder.com/40" alt="Eleanor Pena">
                    <span>Eleanor Pena</span>
                    <button class="btn-remove">&times;</button>
                </div>
                <div class="member-card">
                    <img src="https://via.placeholder.com/40" alt="Darrell Steward">
                    <span>Darrell Steward</span>
                    <button class="btn-remove">&times;</button>
                </div>
                <div class="member-card">
                    <img src="https://via.placeholder.com/40" alt="Bessie Cooper">
                    <span>Bessie Cooper</span>
                    <button class="btn-remove">&times;</button>
                </div>
            </div>
        </div>

        <!-- Delete Project Section -->
        <div class="mt-4">
            <button class="btn-delete">Delete Project</button>
            <p class="delete-project-description">Permanently delete this project, including all related data and settings. This action cannot be undone.</p>
        </div>
    </div>
</body>
</html>
