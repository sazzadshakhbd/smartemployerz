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

              <!-- Start Filtering Bar -->
              <div class="filtering-bar">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 mb-2 mb-sm-4 mb-lg-0">
                    <div class="search-filed">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                      >
                        <path
                          d="M17.5 17.5L13.875 13.875M15.8333 9.16667C15.8333 12.8486 12.8486 15.8333 9.16667 15.8333C5.48477 15.8333 2.5 12.8486 2.5 9.16667C2.5 5.48477 5.48477 2.5 9.16667 2.5C12.8486 2.5 15.8333 5.48477 15.8333 9.16667Z"
                          stroke="#667085"
                          stroke-width="1.66667"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </svg>
                      <input
                        type="search"
                        name="search"
                        id="searchFileld"
                        placeholder="Search"
                      />
                    </div>
                  </div>
                  <div class="col-xl-9 col-lg-8">
                    <div class="select-filter justify-content-lg-end justify-content-center flex-wrap">
                      <div class="form-group">
                        <select
                          class="form-select"
                          id="numberOfEmployees"
                          aria-label="Default select example"
                          fdprocessedid="ngsxem"
                        >
                          <option value="1" selected="">Select Industry Type</option>
                          <option value="2">Type - A</option>
                          <option value="3">Type - B</option>
                          <option value="3">Type - C</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select
                          class="form-select"
                          id="numberOfEmployees"
                          aria-label="Default select example"
                          fdprocessedid="ngsxem"
                        >
                          <option value="1" selected="">Looking For / Designation</option>
                          <option value="2">Type - A</option>
                          <option value="3">Type - B</option>
                          <option value="3">Type - C</option>
                        </select>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Filtering Bar -->

              <!-- Start Applicant Section -->
              <div class="applicants-info">
                <div class="row no-gutters">
                  <div class="col-md-12">
                    <div class="applicants-bar">
                      <h3>Job Template <span>100</span></h3>
                    </div>
                    <div class="job-templates">
                      <div class="row">
                        <div class="col-xl-6">
                          <div class="card">
                            <div class="card-header">
                              <h3>PHP Developer <span>Mid Level </span></h3>
                            </div>
                            <div class="card-body">
                              <h4>Information Technology</h4>
                              <ul>
                                <li>
                                  <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Dhaka, Bangladesh
                                  </span>
                                  <span>
                                    <i class="fas fa-briefcase"></i>
                                    $1,000
                                  </span>
                                </li>
                                <li>
                                  <button>use this template</button>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="card">
                            <div class="card-header">
                              <h3>PHP Developer <span>Mid Level </span></h3>
                            </div>
                            <div class="card-body">
                              <h4>Information Technology</h4>
                              <ul>
                                <li>
                                  <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Dhaka, Bangladesh
                                  </span>
                                  <span>
                                    <i class="fas fa-briefcase"></i>
                                    $1,000
                                  </span>
                                </li>
                                <li>
                                  <button>use this template</button>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="card">
                            <div class="card-header">
                              <h3>PHP Developer <span>Mid Level </span></h3>
                            </div>
                            <div class="card-body">
                              <h4>Information Technology</h4>
                              <ul>
                                <li>
                                  <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Dhaka, Bangladesh
                                  </span>
                                  <span>
                                    <i class="fas fa-briefcase"></i>
                                    $1,000
                                  </span>
                                </li>
                                <li>
                                  <button>use this template</button>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="card">
                            <div class="card-header">
                              <h3>PHP Developer <span>Mid Level </span></h3>
                            </div>
                            <div class="card-body">
                              <h4>Information Technology</h4>
                              <ul>
                                <li>
                                  <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Dhaka, Bangladesh
                                  </span>
                                  <span>
                                    <i class="fas fa-briefcase"></i>
                                    $1,000
                                  </span>
                                </li>
                                <li>
                                  <button>use this template</button>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="card">
                            <div class="card-header">
                              <h3>PHP Developer <span>Mid Level </span></h3>
                            </div>
                            <div class="card-body">
                              <h4>Information Technology</h4>
                              <ul>
                                <li>
                                  <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Dhaka, Bangladesh
                                  </span>
                                  <span>
                                    <i class="fas fa-briefcase"></i>
                                    $1,000
                                  </span>
                                </li>
                                <li>
                                  <button>use this template</button>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="card">
                            <div class="card-header">
                              <h3>PHP Developer <span>Mid Level </span></h3>
                            </div>
                            <div class="card-body">
                              <h4>Information Technology</h4>
                              <ul>
                                <li>
                                  <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Dhaka, Bangladesh
                                  </span>
                                  <span>
                                    <i class="fas fa-briefcase"></i>
                                    $1,000
                                  </span>
                                </li>
                                <li>
                                  <button>use this template</button>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="card">
                            <div class="card-header">
                              <h3>PHP Developer <span>Mid Level </span></h3>
                            </div>
                            <div class="card-body">
                              <h4>Information Technology</h4>
                              <ul>
                                <li>
                                  <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Dhaka, Bangladesh
                                  </span>
                                  <span>
                                    <i class="fas fa-briefcase"></i>
                                    $1,000
                                  </span>
                                </li>
                                <li>
                                  <button>use this template</button>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="card">
                            <div class="card-header">
                              <h3>PHP Developer <span>Mid Level </span></h3>
                            </div>
                            <div class="card-body">
                              <h4>Information Technology</h4>
                              <ul>
                                <li>
                                  <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Dhaka, Bangladesh
                                  </span>
                                  <span>
                                    <i class="fas fa-briefcase"></i>
                                    $1,000
                                  </span>
                                </li>
                                <li>
                                  <button>use this template</button>
                                </li>
                              </ul>
                            </div>
                          </div>
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
