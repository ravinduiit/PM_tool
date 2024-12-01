<!-- resources/views/dashboard.blade.php -->

@extends('layout.main')

@section('title', 'Projects Dashboard')

@section('navbar')
    <!-- Custom navbar code here -->
@endsection

@section('content')
    {{-- <div>
        <h1>Projects</h1>
        <div id="project-cards" class="d-flex overflow-auto gap-3 p-3"></div>
    </div> --}}
    @include('layout.project_navbar')

    <div class="container-fluid d-flex gap-3 mt-4">
        <div class="col-md-3 card">
            <div class="card-body text-center">
                <h2 class="card-title">Project Progress</h2>
                <canvas id="progressChart" width="350" height="350"></canvas>
            </div>
        </div>
        <div class="col-md-4 card flex-grow-1">
            <table class="table mb-0 no-vertical-lines">
                <thead>
                    <tr>
                        <th style="width: 20%;">User</th>
                        <th style="width: 60%;">Progress</th>
                        <th style="width: 20%;">Task Count</th>
                    </tr>
                </thead>
            </table>
            <div style="max-height: 300px; overflow-y: auto;"> <!-- Scrollable container -->
                <table class="table no-vertical-lines">
                    <tbody>
                        <tr>
                            <td style="width: 20%;">John Doe</td>
                            <td style="width: 60%;">
                                <div class="mb-2">
                                    <label>Done:</label>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label>In Progress:</label>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                                    </div>
                                </div>
                                <div>
                                    <label>To Do:</label>
                                    <div class="progress">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                                    </div>
                                </div>
                            </td>
                            <td style="width: 20%;">15</td>
                        </tr>
                        <tr>
                            <td style="width: 20%;">Mike Doe</td>
                            <td style="width: 60%;">
                                <div class="mb-2">
                                    <label>Done:</label>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label>In Progress:</label>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                                    </div>
                                </div>
                                <div>
                                    <label>To Do:</label>
                                    <div class="progress">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                                    </div>
                                </div>
                            </td>
                            <td style="width: 20%;">15</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Task Table</h2>
                <table id="taskTable" class="table table-bordered table-hover" style="width:100%">
                    <thead class="table-light">
                        <tr>
                            <th>Task</th>
                            <th>User</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Complete report</td>
                            <td>John Doe</td>
                           <td>
                                <button class="btn btn-success">
                                    <i class="bi bi-check-circle"></i> Done
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Review project plan</td>
                            <td>Jane Smith</td>
                            <td>
                                <button class="btn btn-primary">
                                    <i class="bi bi-hourglass-split"></i> In Progress
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Prepare presentation</td>
                            <td>Mike Brown</td>
                            <td>
                                <button class="btn btn-warning">
                                    <i class="bi bi-list-task"></i> To Do
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('footer')
   
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
        
    var ctx = document.getElementById('progressChart').getContext('2d');
    var progressChart = new Chart(ctx, {
        type: 'doughnut', // type of chart: donut chart
        data: {
            labels: ['Done', 'In Progress', 'To Do'], // Labels for each section
            datasets: [{
                label: 'Project Progress',
                data: [10, 60, 30], // Data values corresponding to the sections
                backgroundColor: ['#4CAF50', '#FFC107', '#F44336'], // Colors for each section
                hoverOffset: 9 // Small hover effect on the segments
            }]
        },
        options: {
            responsive: true, // Makes the chart responsive to window resizing
            plugins: {
                legend: {
                    position: 'bottom', // Position of the legend
                },
                tooltip: {
                    enabled: true // Enable tooltips to show values on hover
                }
            }
        }
    });
</script>
@endsection
