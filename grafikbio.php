<?php
require 'connection.php';
require 'databiodigester/dataco2.php'; //a> memasukan memnaggil fungsi
require 'dataywaktu.php'; //a> memasukan memnaggil fungsi
require 'databiodigester/datametana.php';
require 'databiodigester/dataph.php';
require 'databiodigester/datatekanantabung.php';
require 'databiodigester/datatekanantangki.php';
require 'databiodigester/datatemperature.php';

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
                  Grafik Data Sistem Biodigester
                </h1>
                <div class="page-header-subtitle">Sistem Biodigester</div>
              </div>
            </div>
          </div>
      </header>
      
      <div class="container-xl px-4 mt-n10">
        
        <div class="row">
          <div class="col-xl-12 mb-4">
            <div class="card card-collapsable">
              <a class="card-header" href="#collapseCardExampletekanantabung" data-bs-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExampletekanantabung">Tekanan Tabung
                <div class="card-collapsable-arrow">
                  <i class="fas fa-chevron-down"></i>
                </div>
              </a>
              <div class="collapse show" id="collapseCardExampletekanantabung">
                <div class="container-fuild">
                  <div class="row">
                    <div class="card-body">
                      <div class="chart-area"><canvas id="updatetekanantabung" width="100%" height="40"></canvas>
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
              <a class="card-header" href="#collapseCardExampletekanantangki" data-bs-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExampletekanantangki">Tekanan Tangki
                <div class="card-collapsable-arrow">
                  <i class="fas fa-chevron-down"></i>
                </div>
              </a>
              <div class="collapse show" id="collapseCardExampletekanantangki">
                <div class="container-fuild">
                  <div class="row">
                    <div class="card-body">
                      <div class="chart-area"><canvas id="updatetekanantangki" width="100%" height="40"></canvas>
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
              <a class="card-header" href="#collapseCardExampletempbio" data-bs-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExampletempbio">Temperature
                <div class="card-collapsable-arrow">
                  <i class="fas fa-chevron-down"></i>
                </div>
              </a>
              <div class="collapse show" id="collapseCardExampletempbio">
                <div class="container-fuild">
                  <div class="row">
                    <div class="card-body">
                      <div class="chart-area"><canvas id="updatetemperature" width="100%" height="40"></canvas>
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
              <a class="card-header" href="#collapseCardExamplephbio" data-bs-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExamplephbio">Ph
                <div class="card-collapsable-arrow">
                  <i class="fas fa-chevron-down"></i>
                </div>
              </a>
              <div class="collapse show" id="collapseCardExamplephbio">
                <div class="container-fuild">
                  <div class="row">
                    <div class="card-body">
                      <div class="chart-area"><canvas id="updatephbio" width="10%" height="40"></canvas>
                      </div>
                    </div>
                      <div class="card-footer large text-muted">Updated today at : <?= $timeZone; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <div class="row">
          <div class="col-xl-12 mb-4">
            <div class="card card-collapsable">
              <a class="card-header" href="#collapseCardExampletempco2" data-bs-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExampletempco2">Karbon Dioksida
                <div class="card-collapsable-arrow">
                  <i class="fas fa-chevron-down"></i>
                </div>
              </a>
              <div class="collapse show" id="collapseCardExampletempco2">
                <div class="container-fuild">
                  <div class="row">
                    <div class="card-body">
                      <div class="chart-area"><canvas id="updateco2" width="100%" height="40"></canvas>
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
              <a class="card-header" href="#collapseCardExampletempch4" data-bs-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExampletempch4">Metana
                <div class="card-collapsable-arrow">
                  <i class="fas fa-chevron-down"></i>
                </div>
              </a>
              <div class="collapse show" id="collapseCardExampletempch4">
                <div class="container-fuild">
                  <div class="row">
                    <div class="card-body">
                      <div class="chart-area"><canvas id="updatech4" width="100%" height="40"></canvas>
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


let labeData = "Data Sensor Biodigester";

$(document).ready(function() {
const tabung= document.getElementById('updatetekanantabung').getContext('2d');
const tbChart = new Chart(tabung, {
    type: 'line',
    data: {
      labels: <?php echo $json_datawaktu3; ?>,
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
            data: <?php echo $json_datatekanantabung; ?>
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

const tk_tt = document.getElementById('updatetekanantangki').getContext('2d');
const ch_tt = new Chart(tk_tt, {
    type: 'line',
    data: {
        labels: <?php echo $json_datawaktu3; ?>,
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
            data: <?= $json_datatekanan_tangki; ?>
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


const tempbio = document.getElementById('updatetemperature').getContext('2d');
const tempbioChart = new Chart(tempbio, {
    type: 'line',
    data: {
        labels: <?php echo $json_datawaktu3; ?>,
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
            data: <?php echo $json_datatempbio; ?>
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


const co2 = document.getElementById('updateco2').getContext('2d');
const co2Chart = new Chart(co2, {
    type: 'line',
    data: {
        labels: <?= $json_datawaktu3; ?>,
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
            data: <?php echo $json_dataco2; ?>
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

const ch4 = document.getElementById('updatech4').getContext('2d');
const ch4Chart = new Chart(ch4, {
    type: 'line',
    data: {
        labels: <?= $json_datawaktu3; ?>,
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
            data: <?php echo $json_datach4; ?>
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

const phbio = document.getElementById('updatephbio').getContext('2d');
const phbioChart = new Chart(phbio, {
    type: 'line',
    data: {
       labels: <?php echo $json_datawaktu3; ?>,
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
            data: <?php echo $json_dataphbio; ?>
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
