
<body>

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Menu</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
            </ol>
        </div>
    </div>

<!-- Begin Page Content -->

        <div class="container-fluid mt-2">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Jumlah Hijab</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?= $hijab ?></h2>
                                    <p class="text-white mb-0"></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Jumlah Penjualan</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?= $penjualan ?></h2>
                                    <p class="text-white mb-0"></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Jumlah User</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?= $us ?></h2>
                                    <p class="text-white mb-0"></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
        </div>
        
    </div>
    
</div>
</div>


<script src="https://demos.creative-tim.com/test/argon-dashboard-pro/assets/js/plugins/chartjs.min.js" type="text/javascript"></script>
<script type="text/javascript">
      // Mixed chart
      var ctx5 = document.getElementById("bar-chart").getContext("2d");

    new Chart(ctx5, {
    type: "bar",
    data: {
        labels: ["16-20", "21-25", "26-30", "31-36", "36-42", "42+"],
        datasets: [
        {
            label: "Sales by age",
            weight: 5,
            borderWidth: 0,
            borderRadius: 4,
            backgroundColor: "#3A416F",
            data: [15, 20, 12, 60, 20, 15],
            fill: false,
            maxBarThickness: 35
        }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
        legend: {
            display: false
        }
        },
        scales: {
        y: {
            grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5]
            },
            ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7"
            }
        },
        x: {
            grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: true
            },
            ticks: {
            display: true,
            color: "#9ca2b7",
            padding: 10
            }
        }
        }
    }
    });
</script>