
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <div class="col-md-3 card">
        <div class="card-body text-center">
            <h2 class="card-title">Project Progress</h2>
            <div id="progress-chart" class="mt-4"></div>
        </div>
    </div>

<script>
    // Doughnut Chart Data
   var options = {
    chart: {
        type: 'donut',
        animations: {
            enabled: true,
            easing: 'easeinout',
            speed: 800,
            animateGradually: {
                enabled: true,
                delay: 250
            },
            dynamicAnimation: {
                enabled: true,
                speed: 350
            }
        }
    },
    series: [20, 50, 30],
    labels: ['Done', 'In Progress', 'To Do'],
    colors: ['#4CAF50', '#FFC107', '#F44336'],
    dataLabels: {
        enabled: true,
    },
    legend: {
        position: 'bottom',
    }
};

var chart = new ApexCharts(document.querySelector("#progress-chart"), options);
chart.render();

</script>