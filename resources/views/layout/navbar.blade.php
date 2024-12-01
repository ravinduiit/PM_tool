<!-- Purpose: This template is used for Navigation Bar.
Created Date: 2024-11-29
Created By: Sasindu Srinayka (sasindusrinayaka@gmail.com)
Version: Laravel 11
Dependencies: Bootstrap
Related Files: All blade files.
Notes: This template uses a Bootstrap -->

<!-- resources/views/includes/navbar.blade.php -->
<nav id="sidebar" class="col-md-1 col-lg-1 p-1 d-md-block rounded-3 sidebar collapse">
    <div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active rounded-5" aria-current="page" href="/dashboard">
                    <i class="bi bi-house-door fs-4"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/profilePage">
                    <i class="bi bi-people fs-4"></i>
                    <span class="nav-text">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/addUser">
                    <i class="bi bi-file-earmark fs-4"></i>
                    <span class="nav-text">Add User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/projectSettings">
                    <i class="bi bi-gear fs-4"></i>
                    <span class="nav-text">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
