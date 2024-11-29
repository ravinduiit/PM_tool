<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #e5efff;
        }
        .btn-create {
            background-color: #007bff;
            color: white;
            border-radius: 20px;
            padding: 10px 20px;
        }
        .pagination {
            justify-content: center;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .rounded-circle {
            border: 2px solid #fff;
        }
        .badge {
            margin-left: -5px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-black">Projects List</h2>
            <button class="btn btn-create">Create</button>
        </div>
        <div class="row g-4">
            <!-- Repeating Project Card -->
            <div class="col-md-4">
                <div class="card p-3 border-0 shadow-sm" style="border-radius: 10px; background-color: white;">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0 fw-bold">Project 01</h5>
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </div>
                    <hr class="mt-2 mb-3">
                    <p class="text-muted" style="font-size: 14px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                    <div class="d-flex align-items-center text-danger mb-3" style="font-size: 14px;">
                        <i class="bi bi-hourglass-split me-2"></i>
                        <span>04 May 2024</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Avatar Group -->
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/30/FFC107/000000?text=G" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <img src="https://via.placeholder.com/30/2196F3/FFFFFF?text=M" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <img src="https://via.placeholder.com/30/8BC34A/FFFFFF?text=V" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <span class="badge bg-primary rounded-pill" style="font-size: 12px;">+2</span>
                        </div>
                        <!-- Task Count -->
                        <div class="d-flex align-items-center text-muted" style="font-size: 14px;">
                            <i class="bi bi-folder me-2"></i>
                            <span>05 Tasks</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat as needed -->
            <!-- Repeating Project Card -->
            <div class="col-md-4">
                <div class="card p-3 border-0 shadow-sm" style="border-radius: 10px; background-color: white;">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0 fw-bold">Project 01</h5>
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </div>
                    <hr class="mt-2 mb-3">
                    <p class="text-muted" style="font-size: 14px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                    <div class="d-flex align-items-center text-danger mb-3" style="font-size: 14px;">
                        <i class="bi bi-hourglass-split me-2"></i>
                        <span>04 May 2024</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Avatar Group -->
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/30/FFC107/000000?text=G" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <img src="https://via.placeholder.com/30/2196F3/FFFFFF?text=M" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <img src="https://via.placeholder.com/30/8BC34A/FFFFFF?text=V" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <span class="badge bg-primary rounded-pill" style="font-size: 12px;">+2</span>
                        </div>
                        <!-- Task Count -->
                        <div class="d-flex align-items-center text-muted" style="font-size: 14px;">
                            <i class="bi bi-folder me-2"></i>
                            <span>05 Tasks</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat as needed -->
            <!-- Repeating Project Card -->
            <div class="col-md-4">
                <div class="card p-3 border-0 shadow-sm" style="border-radius: 10px; background-color: white;">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0 fw-bold">Project 01</h5>
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </div>
                    <hr class="mt-2 mb-3">
                    <p class="text-muted" style="font-size: 14px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                    <div class="d-flex align-items-center text-danger mb-3" style="font-size: 14px;">
                        <i class="bi bi-hourglass-split me-2"></i>
                        <span>04 May 2024</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Avatar Group -->
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/30/FFC107/000000?text=G" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <img src="https://via.placeholder.com/30/2196F3/FFFFFF?text=M" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <img src="https://via.placeholder.com/30/8BC34A/FFFFFF?text=V" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <span class="badge bg-primary rounded-pill" style="font-size: 12px;">+2</span>
                        </div>
                        <!-- Task Count -->
                        <div class="d-flex align-items-center text-muted" style="font-size: 14px;">
                            <i class="bi bi-folder me-2"></i>
                            <span>05 Tasks</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat as needed -->
            <!-- Repeating Project Card -->
            <div class="col-md-4">
                <div class="card p-3 border-0 shadow-sm" style="border-radius: 10px; background-color: white;">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0 fw-bold">Project 01</h5>
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </div>
                    <hr class="mt-2 mb-3">
                    <p class="text-muted" style="font-size: 14px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                    <div class="d-flex align-items-center text-danger mb-3" style="font-size: 14px;">
                        <i class="bi bi-hourglass-split me-2"></i>
                        <span>04 May 2024</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Avatar Group -->
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/30/FFC107/000000?text=G" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <img src="https://via.placeholder.com/30/2196F3/FFFFFF?text=M" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <img src="https://via.placeholder.com/30/8BC34A/FFFFFF?text=V" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <span class="badge bg-primary rounded-pill" style="font-size: 12px;">+2</span>
                        </div>
                        <!-- Task Count -->
                        <div class="d-flex align-items-center text-muted" style="font-size: 14px;">
                            <i class="bi bi-folder me-2"></i>
                            <span>05 Tasks</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat as needed -->
            <!-- Repeating Project Card -->
            <div class="col-md-4">
                <div class="card p-3 border-0 shadow-sm" style="border-radius: 10px; background-color: white;">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0 fw-bold">Project 01</h5>
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </div>
                    <hr class="mt-2 mb-3">
                    <p class="text-muted" style="font-size: 14px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                    <div class="d-flex align-items-center text-danger mb-3" style="font-size: 14px;">
                        <i class="bi bi-hourglass-split me-2"></i>
                        <span>04 May 2024</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Avatar Group -->
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/30/FFC107/000000?text=G" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <img src="https://via.placeholder.com/30/2196F3/FFFFFF?text=M" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <img src="https://via.placeholder.com/30/8BC34A/FFFFFF?text=V" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <span class="badge bg-primary rounded-pill" style="font-size: 12px;">+2</span>
                        </div>
                        <!-- Task Count -->
                        <div class="d-flex align-items-center text-muted" style="font-size: 14px;">
                            <i class="bi bi-folder me-2"></i>
                            <span>05 Tasks</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat as needed -->
            <!-- Repeating Project Card -->
            <div class="col-md-4">
                <div class="card p-3 border-0 shadow-sm" style="border-radius: 10px; background-color: white;">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0 fw-bold">Project 01</h5>
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </div>
                    <hr class="mt-2 mb-3">
                    <p class="text-muted" style="font-size: 14px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                    <div class="d-flex align-items-center text-danger mb-3" style="font-size: 14px;">
                        <i class="bi bi-hourglass-split me-2"></i>
                        <span>04 May 2024</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Avatar Group -->
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/30/FFC107/000000?text=G" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <img src="https://via.placeholder.com/30/2196F3/FFFFFF?text=M" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <img src="https://via.placeholder.com/30/8BC34A/FFFFFF?text=V" class="rounded-circle border border-white me-1" style="width: 30px; height: 30px;">
                            <span class="badge bg-primary rounded-pill" style="font-size: 12px;">+2</span>
                        </div>
                        <!-- Task Count -->
                        <div class="d-flex align-items-center text-muted" style="font-size: 14px;">
                            <i class="bi bi-folder me-2"></i>
                            <span>05 Tasks</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat as needed -->     
        </div>
        <!-- Pagination -->
        <nav aria-label="Page navigation" class="mt-4 d-flex justify-content-center">
            <ul class="pagination">
                <!-- Previous Button -->
                <li class="page-item">
                    <a class="page-link text-muted border-0 bg-transparent" href="#" style="border-radius: 10px;">Previous</a>
                </li>

                <!-- Page Numbers -->
                <li class="page-item">
                    <a class="page-link text-white bg-primary border-0" href="#" style="border-radius: 10px;">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link text-muted border-0 bg-light" href="#" style="border-radius: 10px;">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link text-muted border-0 bg-light" href="#" style="border-radius: 10px;">3</a>
                </li>

                <!-- Next Button -->
                <li class="page-item">
                    <a class="page-link text-muted border-0 bg-transparent" href="#" style="border-radius: 10px;">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</body>
</html>
