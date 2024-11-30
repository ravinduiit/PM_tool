<!-- resources/views/dashboard.blade.php -->

@extends('layout.main')

@section('title', 'Projects Dashboard')

@section('navbar')
    <!-- Custom navbar code here -->
@endsection

@section('content')

<div class="container mt-5 col-8">
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="mb-4">Projects / Create Project</h4>
            <form action="{{}}" method="POST">
                @csrf
                <div class="row mb-3">
                    <!-- Project Title -->
                    <div class="col-md-6">
                        <label for="project_title" class="form-label">Project Title</label>
                        <input type="text" class="form-control" id="project_title" name="project_title" required>
                    </div>
                    <!-- Project Type -->
                    <div class="col-md-6">
                        <label for="project_type" class="form-label">Project Type</label>
                        <input type="text" class="form-control" id="project_type" name="project_type" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <!-- Start Date --> 
                    <div class="col-md-4">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <!-- End Date -->
                    <div class="col-md-4">
                        <label for="end_date" class="form-label">End Date</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                    </div>
                </div>
                <!-- Project Description -->
                <div class="mb-3">
                    <label for="project_description" class="form-label">Project Description</label>
                    <textarea class="form-control" id="project_description" name="project_description" rows="4" required></textarea>
                </div>
                <!-- Assign Collaborators -->
                <div class="mb-3 col-md-6">
                    <label for="collaborators" class="form-label">Assign Collaborators</label>
                    <div class="d-flex">
                        <input type="text" class="form-control" id="collaborators" name="collaborators" placeholder="Enter User name">
                        <button type="button" class="btn btn-primary ms-2" id="add-collaborator-btn">Add</button>
                    </div>
                    <!-- Placeholder for displaying added values -->
                    <ul id="collaborators-list" class="mt-3 list-unstyled"></ul>
                </div>         
                <!-- Buttons -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Create</button>
                    <button type="reset" class="btn btn-outline-secondary">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer')
   
@endsection

@section('script')
    <script>
        // JavaScript to handle the "Add" button functionality
        document.getElementById('add-collaborator-btn').addEventListener('click', function () {
            const inputField = document.getElementById('collaborators');
            const inputValue = inputField.value.trim();

            if (inputValue !== '') {
                // Create a new list item
                const newListItem = document.createElement('li');
                newListItem.textContent = inputValue;
                newListItem.className = 'mb-1'; // Add some margin between items

                // Append the new item to the list
                document.getElementById('collaborators-list').appendChild(newListItem);

                // Clear the input field
                inputField.value = '';
            } else {
                alert('Please enter a username!');
            }
        });
    </script>


@endsection
