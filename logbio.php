<?php
require "connection.php";
try {
  $sql = 'SELECT * FROM biodigester';
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
                                            Log Data Sistem Biodigester
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
      <th>ID</th>
      <th>Nama</th>
      <th>Tekanan Tangki</th>
      <th>Tekanan Tabung</th>
      <th>Temperature</th>
      <th>Ph</th>
      <th>Karbon Dioksida</th>
      <th>Metana</th>
      <th>Waktu</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($rows = $row->fetch()): ?>
                                                                            <?php $id = $rows['id'];
                                                                            $nama = $rows['nama'];
                                                                            $tekanan_tangki = $rows['tekanan_tangki'];
                                                                            $tekanan_tabung= $rows['tekanan_tabung'];
                                                                            $temperature = $rows['temperature'];
                                                                            $ph_bio = $rows['ph_bio'];
                                                                            $karbon_dioksida = $rows['karbon_dioksida'];
                                                                            $karbon_monoksida = $rows['karbon_monoksida'];
                                                                            $times = $rows['timestamp'];
                                                                            ?>
                                                                          <tr>
                                                                            <td><?php echo $id ?></td>
                                                                           <td><?php echo $nama ?></td>
                                                                           <td><?php echo $tekanan_tangki ?></td>
                                                                           <td><?php echo $tekanan_tabung ?></td>
                                                                            <td><?php echo $temperature ?></td>
                                                                            <td><?php echo $ph_bio ?></td>
                                                                           <td><?php echo $karbon_dioksida ?></td>
                                                                           <td><?php echo $karbon_monoksida ?></td>                                                                
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