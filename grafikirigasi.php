<?php
require 'connection.php';
require 'datairigasi/dataxlahan1kelembapan.php'; //a> memasukan memnaggil fungsi
require 'dataywaktu.php'; //a> memasukan memnaggil fungsi
require 'datairigasi/dataxl1ph.php';
require 'datairigasi/dataxl1kalium.php';
require 'datairigasi/dataxl1potasium.php';
require 'datairigasi/dataxl1nitrogen.php';

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
      
      <div class="container-xl px-4 mt-n10">
        
        <div class="row">
          <div class="col-xl-12 mb-4">
            <div class="card card-collapsable">
              <a class="card-header" href="#collapseCardExampleMoist" data-bs-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExampleMoist">Sensor Kelembaban
                <div class="card-collapsable-arrow">
                  <i class="fas fa-chevron-down"></i>
                </div>
              </a>
              <div class="collapse show" id="collapseCardExampleMoist">
                <div class="container-fuild">
                  <div class="row">
                    <div class="card-body">
                      <div class="chart-area"><canvas id="updateKelembaban" width="100%" height="40"></canvas>
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
              <a class="card-header" href="#collapseCardExampleNit" data-bs-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExampleNit">Sensor Nitrogen
                <div class="card-collapsable-arrow">
                  <i class="fas fa-chevron-down"></i>
                </div>
              </a>
              <div class="collapse show" id="collapseCardExampleNit">
                <div class="container-fuild">
                  <div class="row">
                    <div class="card-body">
                      <div class="chart-area"><canvas id="updateNitrogen" width="100%" height="40"></canvas>
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
        <div class="row">
          <div class="col-xl-12 mb-4">
            <div class="card card-collapsable">
              <a class="card-header" href="#collapseCardExampleGyroY" data-bs-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExampleGyroY">Sensor Potasium
                <div class="card-collapsable-arrow">
                  <i class="fas fa-chevron-down"></i>
                </div>
              </a>
              <div class="collapse show" id="collapseCardExampleGyroY">
                <div class="container-fuild">
                  <div class="row">
                    <div class="card-body">
                      <div class="chart-area"><canvas id="updatePotasium" width="100%" height="40"></canvas>
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
              <a class="card-header" href="#collapseCardExampleGyroZ" data-bs-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExampleGyroZ">Sensor Kalium
                <div class="card-collapsable-arrow">
                  <i class="fas fa-chevron-down"></i>
                </div>
              </a>
              <div class="collapse show" id="collapseCardExampleGyroZ">
                <div class="container-fuild">
                  <div class="row">
                    <div class="card-body">
                      <div class="chart-area"><canvas id="updateKalium" width="100%" height="40"></canvas>
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
              <a class="card-header" href="#collapseCardExamplePH" data-bs-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExamplePH">Sensor Ph
                <div class="card-collapsable-arrow">
                  <i class="fas fa-chevron-down"></i>
                </div>
              </a>
              <div class="collapse show" id="collapseCardExamplePH">
                <div class="container-fuild">
                  <div class="row">
                    <div class="card-body">
                      <div class="chart-area"><canvas id="updatePh" width="10%" height="40"></canvas>
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

</html>
<?php include "body/footer.php" ?>


<script>


let labeData = "Data Sensor Irigasi ";
$(document).ready(function() {
const ctx = document.getElementById('updateKelembaban').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: <?php echo $json_datawaktu; ?>,
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
            pointHitRadius: 20,
            pointBorderWidth: 2,
            data: <?php echo $json_datakelem; ?>
        }]
    },
    options: {
        responsive: true,
       plugins: {
                        filler: {
                            propagate: false}
                          },
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: 20,
                right: 30,
                top: 10,
                bottom: 10
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
                    maxTicksLimit: 20
                }
            }],
            y: {
                beginAtZero: true
            }
        },
        legend: {
            display: false
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
            caretPadding: 20,
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

const nitro = document.getElementById('updateNitrogen').getContext('2d');
const nitroChart = new Chart(nitro, {
    type: 'line',
    data: {
        labels: <?php echo $json_datawaktu; ?>,
        datasets: [{
            label: labeData,
            lineTension:0.2, //0.5
            backgroundColor: "rgba(0, 97, 242, 0.6)", // 0.05
            borderColor: "rgba(0, 97, 242, 1)",
                        fill: true,  //no fill herefill here
            pointRadius: 3,
            pointBackgroundColor: "rgba(0, 97, 242, 1)",
            pointBorderColor: "rgba(0, 97, 242, 1)",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgba(0, 97, 242, 1)",
            pointHoverBorderColor: "rgba(0, 97, 242, 1)",
            pointHitRadius: 10,
            pointBorderWidth: 2,
            data: <?= $json_datanitrogen; ?>
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
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
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


const phos = document.getElementById('updatePotasium').getContext('2d');
const potasiumChart = new Chart(phos, {
    type: 'line',
    data: {
        labels: <?php echo $json_datawaktu; ?>,
        datasets: [{
            label:labeData,
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
            data: <?php echo $json_datapotasium; ?>
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


const kal = document.getElementById('updateKalium').getContext('2d');
const kalChart = new Chart(kal, {
    type: 'line',
    data: {
        labels: <?= $json_datawaktu; ?>,
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
            data: <?php echo $json_datakalium; ?>
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

const ph = document.getElementById('updatePh').getContext('2d');
const phChart = new Chart(ph, {
    type: 'line',
    data: {
       labels: <?php echo $json_datawaktu; ?>,
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
            data: <?php echo $json_dataph; ?>
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
