@extends('layout.main')

@section('title', 'Gantt Chart')

@section('content')

    <div class="container mt-5">
        <h3 class="mb-4">Gantt Chart</h3>
        <div id="ganttChart"></div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var options = {
                series: [
                    {
                        name: "Task 1",
                        data: [
                            { x: "Design website", y: [new Date("2024-01-01").getTime(), new Date("2024-03-01").getTime()] },
                            { x: "Inspiration for Interaction", y: [new Date("2024-05-01").getTime(), new Date("2024-06-01").getTime()] }
                        ],
                    },
                    {
                        name: "Task 2",
                        data: [
                            { x: "Iconly After Effects", y: [new Date("2024-02-01").getTime(), new Date("2024-04-01").getTime()] }
                        ],
                    },
                    {
                        name: "Task 3",
                        data: [
                            { x: "Iconly After Effects", y: [new Date("2024-03-01").getTime(), new Date("2024-05-01").getTime()] }
                        ],
                    },
                    {
                        name: "Task 4",
                        data: [
                            { x: "Animate the home cate", y: [new Date("2024-03-01").getTime(), new Date("2024-04-01").getTime()] }
                        ],
                    },
                    {
                        name: "Task 5",
                        data: [
                            { x: "Iconly After Effects", y: [new Date("2024-04-01").getTime(), new Date("2024-05-01").getTime()] }
                        ],
                    },
                    {
                        name: "Task 6",
                        data: [
                            { x: "Design website", y: [new Date("2024-05-01").getTime(), new Date("2024-06-01").getTime()] }
                        ],
                    },
                ],
                chart: {
                    height: 450,
                    type: "rangeBar",
                },
                plotOptions: {
                    bar: {
                        horizontal: true,
                        barHeight: "80%",
                    },
                },
                xaxis: {
                    type: "datetime",
                },
                stroke: {
                    width: 1,
                },
                fill: {
                    type: "solid",
                },
                legend: {
                    position: "top",
                },
            };

            var chart = new ApexCharts(document.querySelector("#ganttChart"), options);
            chart.render();
        });
    </script>


@endsection