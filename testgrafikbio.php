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
                      <div class="chart-area"><canvas id="updattekanantabung" width="100%" height="40"></canvas>
                      </div>
                    </div>
                    <div class="card-footer large text-muted">Updated today at : <?= $timeZone; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
