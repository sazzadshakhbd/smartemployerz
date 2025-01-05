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
          <div class="dashboard custom-space">
           <!-- Top Bar -->
           <?php include 'view/top-bar.php'; ?>



            <!-- Start Applicant Section -->
            <div class="analysis">
              <div class="row mb-3">
                <div class="col-md-12">
                  <div class="card-wrapper">
                    <div class="card">
                      <div class="card-header">
                        <span>jobs</span>
                        <a href="#">see status</a>
                      </div>
                      <div class="card-body">
                        <ul>
                          <li class="mb-5">
                            <h4>172</h4>
                            <h5>Total Jobs</h5>
                          </li>
                          <li class="mb-5 ">
                            <h4>120</h4>
                            <h5>Basic Listed Job</h5>
                          </li>
                          <li>
                            <h4>20</h4>
                            <h5>Stand Out Jobs</h5>
                          </li>
                          <li>
                            <h4>32</h4>
                            <h5>Hot Jobs</h5>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <span>job view</span>
                        <a href="#">see status</a>
                      </div>
                      <div class="card-body">
                        <ul class="flex-column">
                          <li class="mb-5">
                            <h4>900</h4>
                            <h5>From Search Reasult</h5>
                          </li>
                          <li class="mb-xl-5 mb-0">
                            <h4>100</h4>
                            <h5>Detail Viewedb</h5>
                          </li>

                        </ul>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <span>gender</span>
                        <a href="#">see status</a>
                      </div>
                      <div class="card-body">
                        <div class="gender-chart-wrapper">
                          <div class="chart-container">
                            <canvas id="genderChart"></canvas>
                          </div>
                          <div class="legend">
                            <!-- Labels Section -->
                            <div class="legend-section">
                              <div class="legend-item">
                                <div class="legend-dot male-dot"></div>
                                <span>Male</span>
                              </div>
                              <div class="legend-item">
                                <div class="legend-dot female-dot"></div>
                                <span>Female</span>
                              </div>
                            </div>
                            <!-- Percentages Section -->
                            <div class="legend-section">
                              <div class="legend-item">
                                <div class="legend-dot male-dot"></div>
                                <span>55%</span>
                              </div>
                              <div class="legend-item">
                                <div class="legend-dot female-dot"></div>
                                <span>45%</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-12">
                  <div class="card-wrapper">
                    <div class="card">
                      <div class="card-header">
                        <span>Applications</span>
                        <a href="#">see status</a>
                      </div>
                      <div class="card-body">
                        <ul>
                          <li class="mb-5">
                            <h4>210</h4>
                            <h5>Applications</h5>
                          </li>
                          <li class="mb-5 ">
                            <h4>45</h4>
                            <h5>Short Listed</h5>
                          </li>
                          <li>
                            <h4>35</h4>
                            <h5>Interviewed</h5>
                          </li>
                          <li>
                            <h4>13</h4>
                            <h5>Final Listed</h5>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <span>Connections</span>
                        <a href="#">see status</a>
                      </div>
                      <div class="card-body">
                        <ul class="flex-column">
                          <li class="mb-5">
                            <h4>900</h4>
                            <h5>Shortlisted Your Job</h5>
                          </li>
                          <li class="mb-xl-5 mb-0">
                            <h4>100</h4>
                            <h5>Shortlisted Your Job</h5>
                          </li>

                        </ul>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <span>Age</span>
                        <a href="#">see status</a>
                      </div>
                      <div class="card-body">
                        <div class="gender-chart-wrapper">
                          <div class="chart-container">
                            <canvas id="ageChart"></canvas>
                          </div>
                          <div class="legend">
                            <!-- Labels Section -->
                            <div class="legend-section mb-0">
                              <div class="legend-item">
                                <div class="legend-dot dot-18-24"></div>
                                <span>18-24</span>
                              </div>
                              <div class="legend-item">
                                <div class="legend-dot dot-25-30"></div>
                                <span>25-30</span>
                              </div>
                              <div class="legend-item">
                                <div class="legend-dot dot-30-plus"></div>
                                <span>30 +</span>
                              </div>
                            </div>
                            <!-- Percentages Section -->
                            <div class="legend-section">
                              <div class="legend-item">
                                <div class="legend-dot dot-18-24"></div>
                                <span>12 %</span>
                              </div>
                              <div class="legend-item">
                                <div class="legend-dot dot-25-30"></div>
                                <span>42%</span>
                              </div>
                              <div class="legend-item">
                                <div class="legend-dot dot-30-plus"></div>
                                <span>43%</span>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-12">
                  <div class="card-wrapper">
                    <div class="card">
                      <div class="card-header">
                        <span>Locations</span>
                        <a href="#">see status</a>
                      </div>
                      <div class="card-body">
                        <div class="chart-wrapper">
                          <div class="chart-container">
                            <canvas id="locationChart" height="266"></canvas>
                          </div>
                          <div class="chart-title">Location : Division</div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <span>Digree</span>
                        <a href="#">see status</a>
                      </div>
                      <div class="card-body">
                        <div class="chart-wrapper">
                          <div class="chart-container">
                            <canvas id="digree" height="266"></canvas>
                          </div>
                          <div class="chart-title">Digree</div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <span>Top Universities</span>
                        <a href="#">see status</a>
                      </div>
                      <div class="card-body">
                        <canvas id="horizontalBarChart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Applicant Section -->


          </div>
          <!-- Bottom Footer -->
          <?php include 'view/bottom-footer.php'; ?>
        </div>
      </div>
    </div>
  </main>
  <!-- End Main Section -->



  <?php include 'view/footer.php'; ?> 
  <script src="./js/chart.js"></script>