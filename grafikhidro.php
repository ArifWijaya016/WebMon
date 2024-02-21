<?php
require 'connection.php';
require 'datairigasi/dataxlahan1kelembapan.php'; //a> memasukan memnaggil fungsi
require 'dataywaktu.php'; //a> memasukan memnaggil fungsi
require 'datahidroponik/datappm.php';
require 'datahidroponik/datatemperature.php';

$timeZone = date(DATE_RFC850);


?>
<?php include "body/header.php" ?>


 
  <div id="layoutSidenav_content">
    <main>
      <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
          <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
              <div class="col-auto mt-4">
                <h1 class="page-header-title">
                  <div class="page-header-icon"><i class="fas fa-chart-bar"></i></div>
                  Grafik Data Sistem Irigasi
                </h1>
                <div class="page-header-subtitle">Sistem Irigasi</div>
              </div>
            </div>
          </div>
      </header>
      
          <div class="col-xl-12 mb-4">
            <div class="card card-collapsable">
              <a class="card-header" href="#collapseCardExampletds" data-bs-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExampletds">Sensor TDS
                <div class="card-collapsable-arrow">
                  <i class="fas fa-chevron-down"></i>
                </div>
              </a>
              <div class="collapse show" id="collapseCardExampletds">
                <div class="container-fuild">
                  <div class="row">
                    <div class="card-body">
                      <div class="chart-area"><canvas id="updatetds" width="100%" height="40"></canvas>
                      </div>
                    </div>
                    <div class="card-footer large text-muted">Updated today at : <?= $timeZone; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-12 mb-4">
            <div class="card card-collapsable">
              <a class="card-header" href="#collapseCardExampletemphidro" data-bs-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExampletemphidro">Sensor Temperatur Air
                <div class="card-collapsable-arrow">
                  <i class="fas fa-chevron-down"></i>
                </div>
              </a>
              <div class="collapse show" id="collapseCardExampletemphidro">
                <div class="container-fuild">
                  <div class="row">
                    <div class="card-body">
                      <div class="chart-area"><canvas id="updatetemphidro" width="10%" height="40"></canvas>
                      </div>
                    </div>
                      <div class="card-footer large text-muted">Updated today at : <?= $timeZone; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>
    <br>
  </div>
  </div>
  </body>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</html>


<script>


let labeData = "Data Sensor Hidroponik ";
$(document).ready(function() {


const ppm = document.getElementById('updatetds').getContext('2d');
const tdsChart = new Chart(ppm, {
    type: 'line',
    data: {
        labels: <?= $json_datawaktu4; ?>,
        datasets: [{
            label: labeData,
             lineTension:0.2, //0.5
            backgroundColor: "rgba(0, 97, 242, 0.6)", // 0.05
            borderColor: "rgba(0, 97, 242, 1)",
                        fill: true,  //no fill here
            pointRadius: 3,
            pointBackgroundColor: "rgba(0, 97, 242, 1)",
            pointBorderColor: "rgba(0, 97, 242, 1)",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgba(0, 97, 242, 1)",
            pointHoverBorderColor: "rgba(0, 97, 242, 1)",
            pointHitRadius: 10,
            pointBorderWidth: 2,
            data: <?php echo $json_datatds; ?>
        }]
    },
    options: {
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: 10,
                right: 25,
                top: 25,
                bottom: 0
            }
        },
        scales: {
            xAxes: [{
                time: {
                    unit: "time"
                },
                gridLines: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    maxTicksLimit: 10
                }
            }],
            y: {
                beginAtZero: true
            }
        },
        legend: {
            display: true
        },
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            titleMarginBottom: 10,
            titleFontColor: "#6e707e",
            titleFontSize: 14,
            borderColor: "#dddfeb",
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            intersect: false,
            mode: "index",
            caretPadding: 10,
            callbacks: {
                label: function(tooltipItem, chart) {
                    var datasetLabel =
                        chart.datasets[tooltipItem.datasetIndex].label || "";
                    return datasetLabel + ": $" + number_format(tooltipItem.yLabel);
                }
            }
        }
    }
});

const suhu = document.getElementById('updatetemphidro').getContext('2d');
const suhuChart = new Chart(suhu, {
    type: 'line',
    data: {
       labels: <?php echo $json_datawaktu4; ?>,
        datasets: [{
            label: labeData,
            lineTension:0.5, //0.5
            backgroundColor: "rgba(0, 97, 242, 0.6)", // 0.05
            borderColor: "rgba(0, 97, 242, 1)",
                        fill: true,  //no fill here
            pointRadius: 3,
            pointBackgroundColor: "rgba(0, 97, 242, 1)",
            pointBorderColor: "rgba(0, 97, 242, 1)",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgba(0, 97, 242, 1)",
            pointHoverBorderColor: "rgba(0, 97, 242, 1)",
            pointHitRadius: 2,
            pointBorderWidth: 2,
            data: <?php echo $json_datatemphidro; ?>
        }]
    },
    options: {
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: 10,
                right: 25,
                top: 25,
                bottom: 0
            }
        },
        scales: {
            xAxes: [{
                time: {
                    unit: "time"
                },
                gridLines: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    maxTicksLimit: 2
                }
            }],
            y: {
                beginAtZero: true
            }
        },
        legend: {
            display: true
        },
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            titleMarginBottom: 10,
            titleFontColor: "#6e707e",
            titleFontSize: 14,
            borderColor: "#dddfeb",
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: true,
            intersect: true,
            mode: "index",
            caretPadding: 2,
            callbacks: {
                label: function(tooltipItem, chart) {
                    var datasetLabel =
                        chart.datasets[tooltipItem.datasetIndex].label || "";
                    return datasetLabel + ": $" + number_format(tooltipItem.yLabel);
                }
            }
        }
    }
});
});
</script>

</body>

</html>
