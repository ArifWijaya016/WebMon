<?php
require "connection.php";
try {
  $sql = 'SELECT * FROM irigasi';
  $row = $connection->query($sql);
  $row->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Connection to Database Failed!. Please Check Database Connection!!" . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
 <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
</head>
<style>

  .export-data{
  font-family:sans-serif;
  color:white;
  text-align:center;
  
  }
  </style>
<?php include "body/header.php" ?>

            <div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="filter"></i></div>
                                            Log Data Sistem Irigasi
                                        </h1>
                                        <div class="page-header-subtitle"></div>
                                    </div>
                                     <div class="col-3 mt-2">
                                          <!-- <a href="export.php"> <button class ="btn btn-info">Export Data </button> </a>
                                          <a href="deleted.php"><button class ="btn btn-danger">DELETE Data </button> </a> -->
                                        <!-- <div class="page-header-subtitle"></div> -->
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">Extended DataTables</div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                   
                                     <thead>
    <tr>
      <th>id</th>
      <th>nama</th>
      <th>kelembaban</th>
      <th>sensor N</th>
      <th>sensor P</th>
      <th>sensor K</th>
      <th>PH</th>
      <th>Time</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($rows = $row->fetch()): ?>
                                                                            <?php $id = $rows['id'];
                                                                            $nama = $rows['nama'];
                                                                            $kelembaban = $rows['sensor_kelembaban'];
                                                                            $sensor_n = $rows['sensor_n'];
                                                                            $sensor_p = $rows['sensor_p'];
                                                                            $sensor_k = $rows['sensor_k'];
                                                                            $ph = $rows['sensor_ph'];
                                                                            $times = $rows['timestamp'];
                                                                            ?>
                                                                          <tr>
                                                                            <td><?php echo $id ?></td>
                                                                           <td><?php echo $nama ?></td>
                                                                           <td><?php echo $kelembaban ?></td>
                                                                           <td><?php echo $sensor_n ?></td>
                                                                            <td><?php echo $sensor_p ?></td>
                                                                           <td><?php echo $sensor_k ?></td>
                                                                           <td><?php echo $ph ?></td>
                                                                            <td><?php echo $times ?></td>
                                
                                                                          </tr>
<?php endwhile; ?>

  </tbody>
                                </table>
                            </div>
                        </div>
             
                    </div>
                </main>
                <?php include "body/footer.php" ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables/datatables-simple-demo.js"></script>
</body>
</html>