<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f9fc;
        }
        .profile-sidebar {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
            font-size: 0.95rem;
        }
        .profile-sidebar img {
            width: 140px;
            height: 140px;
        }
        .card {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
            padding: 15px;
            font-size: 0.95rem;
        }
        .projects img {
            width: 100%;
            border-radius: 8px;
        }
        .projects a {
            text-decoration: none;
            font-weight: bold;
            color: #ff0077;
            font-size: 1rem;
        }
        .btn-save {
            background-color: #5570F1;
            color: white;
            padding: 10px 15px;
            font-size: 1rem;
            border-radius: 4px;
        }
        .projects p {
            font-size: 0.95rem;
        }
        .text-end {
            color: #ED2590;
            text-decoration-line: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container my-4">
    <div class="row g-3">
        <!-- Profile Sidebar -->
        <div class="col-md-3 profile-sidebar">
            <div class="text-center">
                {{-- <img src="https://via.placeholder.com/140" class="rounded-circle mb-3" alt="Profile Picture"> --}}
                <img src="{{ asset('images/malith.jpg') }}" class="rounded-circle mb-3" alt="Project 5" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">

                <h6 class="fw-bold">Malith</h6>
                <p>Colombo, Dehiwala<br>Sri Lanka</p>
                <hr>
                <p><strong>UI - Intern</strong></p>
                <p>Status: <span class="text-secondary">On-Teak</span></p>
                <p><i class="bi bi-phone"></i> +94 7048144030</p>
                <p><i class="bi bi-envelope"></i> yghori@asite.com</p>
                <p><i class="bi bi-file-earmark"></i> PDT - I</p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <!-- Edit Profile Section -->
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="mb-3">Edit Profile</h5>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" id="first_name" class="form-control" value="Yash">
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" id="last_name" class="form-control" value="Ghori">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" value="yghori@asite.com">
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" id="phone" class="form-control" value="+94 78965413">
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control" placeholder="Change Password">
                            </div>
                            <div class="col-md-6">
                                <label for="nationality" class="form-label">Nationality</label>
                                <select id="nationality" class="form-control">
                                    <option selected>Sri Lanka</option>
                                    <option>India</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="designation" class="form-label">Designation</label>
                                <select id="designation" class="form-control">
                                    <option selected>UI Intern</option>
                                    <option>Web Developer</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button type="button" class="btn btn-save col-md-3">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Projects Section -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h5>Projects</h5>
                        <a href="#" class="text-end d-block">View all</a>
                    </div>
                    <div class="d-flex projects flex-wrap justify-content-between">
                        <div class="me-2 mb-2">
                            <img src="{{ asset('images/Imagem.png') }}" alt="Project 5">
                            <p>Emo Stuff</p>
                        </div>
                        <div class="me-2 mb-2">
                            <img src="{{ asset('images/Imagem.png') }}" alt="Project 2">
                            <p>Tim Burton</p>
                        </div>
                        <div class="me-2 mb-2">
                            <img src="{{ asset('images/Imagem.png') }}" alt="Project 3">
                            
                            <p>Halloween!</p>
                        </div>
                        <div class="me-2 mb-2">
                            <img src="{{ asset('images/Imagem.png') }}" alt="Project 4">
                            <p>Gothic Art</p>
                        </div>
                        <div>
                            {{-- <img src="public\assets\Imagem.png" alt="Project 5"> --}}
                            <img src="{{ asset('images/Imagem.png') }}" alt="Project 5">
                            <p>Dark Art</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
