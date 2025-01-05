<!--  Heade -->
<?php include 'view/header.php'; ?>

    <!-- Start Main Section -->
    <main>
      <div class="container-fluid custom-width">
        <div class="row">
           <!-- Sidebar -->
           <?php include 'view/sidebar.php'; ?>

          <!-- Main Bar -->
          <div class="col-lg-9 main-wrapper px-0 responsive-height">
            <span class="humburger" onclick="openNav()">&#9776;</span>
            <div class="dashboard custom-space" style="height: 100vh;">
               <!-- Top Bar -->
               <?php include 'view/top-bar.php'; ?>

              
            </div>
            <!-- Bottom Footer -->
           <?php include 'view/bottom-footer.php'; ?>
          </div>
        </div>
      </div>
    </main>
    <!-- End Main Section -->

    

    <?php include 'view/footer.php'; ?> 
