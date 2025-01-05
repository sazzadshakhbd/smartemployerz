<!--  Heade -->
<?php include 'view/header.php'; ?>

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

              <!-- Start Job Info -->
              <div class="job-info">
                <div class="row no-gutters">
                  <div class="col-md-6 col-lg-3 px-1 px-sm-2 col-sm-6 col-6">
                    <a href="#" class="text-decoration-none">
                      <div class="card-body bg-active">
                        <svg
                          width="46"
                          height="46"
                          viewBox="0 0 46 46"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect width="46" height="46" rx="7" fill="#62A86E" />
                          <rect
                            x="11"
                            y="17"
                            width="24"
                            height="11.4286"
                            rx="5.71429"
                            fill="white"
                          />
                          <circle
                            cx="28.716"
                            cy="22.716"
                            r="4.57143"
                            fill="#62A86E"
                          />
                        </svg>

                        <div class="content">
                          <h3>2,400</h3>
                          <span>Active Jobs</span>
                        </div>
                      </div>
                    </a>
                  </div> 
                  <div class="col-md-6 col-lg-3 px-1 px-sm-2 col-sm-6 col-6">
                    <a href="#" class="text-decoration-none">
                      <div class="card-body bg-pending">
                        <svg
                          width="46"
                          height="46"
                          viewBox="0 0 46 46"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect width="46" height="46" rx="7" fill="#638CC7" />
                          <path
                            d="M25.5 18V20L23 22.5L25.5 25V27H20.5V26.5V25L23 22.5L20.5 20V18H25.5Z"
                            fill="white"
                          />
                          <path
                            d="M19 18H20.5M27 18H25.5M25.5 18V20L20.5 25V26.5V27H19H25.5M25.5 18H20.5M27 27H25.5M25.5 27V25L20.5 20V18"
                            stroke="white"
                            stroke-width="1.5"
                          />
                          <path
                            d="M15.8035 13.2801C13.3734 15.0746 11.7095 17.7198 11.1441 20.6873C10.5786 23.6549 11.1533 26.7266 12.7534 29.289C14.3534 31.8514 16.861 33.7161 19.7756 34.5107C22.6902 35.3053 25.7972 34.9714 28.4764 33.5756C31.1556 32.1798 33.2097 29.8249 34.2287 26.981C35.2477 24.1371 35.1566 21.0134 33.9735 18.2338C32.7904 15.4541 30.6024 13.223 27.8464 11.9858C25.0904 10.7486 21.9692 10.5964 19.1059 11.5596L19.6823 13.273C22.1142 12.4549 24.7653 12.5841 27.1061 13.6349C29.4469 14.6858 31.3053 16.5808 32.3102 18.9417C33.315 21.3027 33.3924 23.9557 32.527 26.3712C31.6615 28.7867 29.9168 30.7869 27.6412 31.9724C25.3656 33.1579 22.7266 33.4416 20.2511 32.7667C17.7756 32.0918 15.6457 30.508 14.2867 28.3316C12.9277 26.1551 12.4396 23.5462 12.9198 21.0257C13.4001 18.5051 14.8133 16.2585 16.8774 14.7343L15.8035 13.2801Z"
                            fill="white"
                          />
                          <line
                            y1="-0.5"
                            x2="4.01145"
                            y2="-0.5"
                            transform="matrix(0.998656 0.0518335 -0.0522668 0.998633 13.0195 14)"
                            stroke="white"
                          />
                          <line
                            x1="16.7967"
                            y1="13.2889"
                            x2="16.8916"
                            y2="17.2878"
                            stroke="white"
                          />
                        </svg>
                        <div class="content">
                          <h3>900</h3>
                          <span>Pending Jobs</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6 col-lg-3 px-1 px-sm-2 col-sm-6 col-6">
                    <a href="#" class="text-decoration-none">
                      <div class="card-body bg-expired">
                        <svg
                          width="46"
                          height="46"
                          viewBox="0 0 46 46"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect width="46" height="46" rx="7" fill="#E5A07D" />
                          <path
                            d="M21.5819 12.5679C22.0543 11.7125 22.2905 11.2848 22.6058 11.1495C22.8575 11.0416 23.1425 11.0416 23.3942 11.1495C23.7095 11.2848 23.9457 11.7125 24.4181 12.5679L32.0652 26.415C32.5112 27.2227 32.7342 27.6265 32.6881 27.9565C32.6512 28.2203 32.5107 28.4585 32.2976 28.6183C32.031 28.8182 31.5697 28.8182 30.647 28.8182H15.353C14.4303 28.8182 13.969 28.8182 13.7024 28.6183C13.4893 28.4585 13.3488 28.2203 13.3119 27.9565C13.2658 27.6265 13.4888 27.2227 13.9348 26.415L21.5819 12.5679Z"
                            fill="white"
                          />
                          <path
                            d="M23.5607 22.2229H22.9364L22 17.5409C22 15.0448 24.8092 15.9805 24.4971 17.5409L23.5607 22.2229Z"
                            fill="#FF5F57"
                          />
                          <circle
                            cx="23.2485"
                            cy="24.7212"
                            r="1.24853"
                            fill="#FF5F57"
                          />
                        </svg>
                        <div class="content">
                          <h3>1,100</h3>
                          <span>Expired Jobs</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6 col-lg-3 px-1 px-sm-2 col-sm-6 col-6">
                    <a href="#" class="text-decoration-none">
                      <div class="card-body bg-draft">
                        <svg
                          width="46"
                          height="46"
                          viewBox="0 0 46 46"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect width="46" height="46" rx="7" fill="#717171" />
                          <g clip-path="url(#clip0_1456_11836)">
                            <path
                              d="M11.9383 14.9367C11.957 14.8617 11.9758 14.7961 11.9852 14.7211C12.1539 14.018 12.7539 13.5305 13.4664 13.5117C13.532 13.5117 13.5883 13.5117 13.6539 13.5117C17.2352 13.5117 20.8258 13.5117 24.407 13.5117C24.4633 13.5117 24.5195 13.5117 24.5852 13.5117C24.5852 14.018 24.5852 14.5242 24.5852 15.0398C20.8727 15.0398 17.1695 15.0398 13.457 15.0398C13.457 20.8711 13.457 26.6836 13.457 32.5148C19.2789 32.5148 25.1008 32.5148 30.932 32.5148C30.932 28.8211 30.932 25.1367 30.932 21.4336C31.4664 21.4336 31.982 21.4336 32.5164 21.4336C32.5164 21.4805 32.5164 21.5273 32.5164 21.5742C32.5164 25.193 32.5164 28.8117 32.5164 32.4305C32.5164 33.2555 32.0477 33.8742 31.2883 34.0523C31.1664 34.0805 31.0352 34.0898 30.9039 34.0898C25.1102 34.0898 19.3258 34.0898 13.532 34.0898C12.707 34.0898 12.0695 33.5461 11.9383 32.7305C11.9383 32.7023 11.9195 32.6836 11.9102 32.6648C11.9383 26.7586 11.9383 20.8523 11.9383 14.9367Z"
                              fill="white"
                            />
                            <path
                              d="M23.5359 25.7352C22.4391 24.6383 21.3234 23.5227 20.2266 22.4258C22.8141 19.8383 25.4203 17.232 28.0078 14.6445C29.1047 15.7414 30.2109 16.8477 31.3172 17.9539C28.7297 20.5508 26.1328 23.1477 23.5359 25.7352Z"
                              fill="white"
                            />
                            <path
                              d="M32.5266 16.7922C31.4109 15.6766 30.2953 14.5609 29.1797 13.4453C29.1984 13.4266 29.2172 13.3984 29.2453 13.3703C29.5641 13.0516 29.8828 12.7234 30.2109 12.4047C30.8953 11.7297 31.8516 11.7297 32.5266 12.4047C32.8734 12.7516 33.2203 13.0984 33.5672 13.4453C34.2422 14.1203 34.2422 15.0859 33.5672 15.7609C33.2484 16.0891 32.9203 16.4078 32.5922 16.7359C32.5641 16.7641 32.5453 16.7828 32.5266 16.7922Z"
                              fill="white"
                            />
                            <path
                              d="M19.0078 23.5781C20.1328 24.7031 21.2672 25.8375 22.3922 26.9625C22.1391 27.1406 21.8672 27.3187 21.5297 27.3469C20.7703 27.4031 20.0859 27.75 19.3641 27.9562C18.7172 28.1437 18.0797 28.3594 17.4141 28.575C17.4234 28.5188 17.4328 28.4906 17.4516 28.4531C17.8266 27.2812 18.2016 26.1094 18.5766 24.9281C18.6234 24.7875 18.6234 24.6375 18.6328 24.4875C18.6609 24.2062 18.7641 23.9531 18.9328 23.7281C18.9516 23.6719 18.9797 23.6156 19.0078 23.5781Z"
                              fill="white"
                            />
                          </g>
                          <defs>
                            <clipPath id="clip0_1456_11836">
                              <rect
                                width="24"
                                height="24"
                                fill="white"
                                transform="translate(11 11)"
                              />
                            </clipPath>
                          </defs>
                        </svg>

                        <div class="content">
                          <h3>100</h3>
                          <span>Draft Jobs</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End Job Info -->

              <!-- Start Applicant Section -->
              <div class="applicants-info">
                <div class="row no-gutters">
                  <div class="col-md-12">
                    <div class="applicants-bar">
                      <h3>Recent Applicants <span>100</span></h3>
                      <a href="./all-applicants.php" class="text-decoration-none"
                        >See All
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="20"
                          height="20"
                          viewBox="0 0 20 20"
                          fill="none"
                        >
                          <path
                            d="M4.16797 10.0013H15.8346M15.8346 10.0013L10.0013 4.16797M15.8346 10.0013L10.0013 15.8346"
                            stroke="#344054"
                            stroke-width="1.67"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          </svg></a>
                    </div>
                    <div class="all-applicants">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="applicants-wrapper">
                            <a href="#" class="text-decoration-none">
                            <div class="card">
                              <div class="card-body">
                                <div class="applicants-image">
                                  <img
                                    src="./img/dashboard/applicants/applicants-1.png"
                                    alt="Applicants - 1"
                                    class="img-fluid"
                                  />
                                </div>
                                <div class="details">
                                  <h3>Jason Ruly</h3>
                                  <span>UI/UX Designer</span>
                                </div>
                              </div>
                            </div>
                          </a>
                          <a href="#" class="text-decoration-none">
                            <div class="card">
                              <div class="card-body">
                                <div class="applicants-image">
                                  <img
                                    src="./img/dashboard/applicants/applicants-2.png"
                                    alt="Applicants - 2"
                                    class="img-fluid"
                                  />
                                </div>
                                <div class="details">
                                  <h3>Jason Ruly</h3>
                                  <span>UI/UX Designer</span>
                                </div>
                              </div>
                            </div>
                          </a>
                            <a href="#" class="text-decoration-none">
                            <div class="card">
                              <div class="card-body">
                                <div class="applicants-image">
                                  <img
                                    src="./img/dashboard/applicants/applicants-3.png"
                                    alt="Applicants - 3"
                                    class="img-fluid"
                                  />
                                </div>
                                <div class="details">
                                  <h3>Jason Ruly</h3>
                                  <span>UI/UX Designer</span>
                                </div>
                              </div>
                            </div>
                          </a>
                          <a href="#" class="text-decoration-none">
                            <div class="card">
                              <div class="card-body">
                                <div class="applicants-image">
                                  <img
                                    src="./img/dashboard/applicants/applicants-4.png"
                                    alt="Applicants - 4"
                                    class="img-fluid"
                                  />
                                </div>
                                <div class="details">
                                  <h3>Jason Ruly</h3>
                                  <span>UI/UX Designer</span>
                                </div>
                              </div>
                            </div>
                          </a>
                          <a href="#" class="text-decoration-none">
                            <div class="card">
                              <div class="card-body">
                                <div class="applicants-image">
                                  <img
                                    src="./img/dashboard/applicants/applicants-5.png"
                                    alt="Applicants - 5"
                                    class="img-fluid"
                                  />
                                </div>
                                <div class="details">
                                  <h3>Jason Ruly</h3>
                                  <span>UI/UX Designer</span>
                                </div>
                              </div>
                            </div>
                          </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Applicant Section -->

              <!-- Start All Plans Tab  -->
              <div class="all-plans">
                <div class="row no-gutters">
                  <div class="col-md-12">
                    <div class="all-tabs">
                      <div class="see-all-links">
                        <a href="./all-jobs.php" class="text-decoration-none"
                          >See All
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                          >
                            <path
                              d="M4.16797 10.0013H15.8346M15.8346 10.0013L10.0013 4.16797M15.8346 10.0013L10.0013 15.8346"
                              stroke="#344054"
                              stroke-width="1.67"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            /></svg></a>
                      </div>
                      <ul
                        class="nav nav-pills"
                        id="pills-tab"
                        role="tablist"
                      >
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link active"
                            id="active-jobs-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#active-jobs"
                            type="button"
                            role="tab"
                            aria-controls="active-jobs"
                            aria-selected="true"
                          >
                            <span>Active Jobs</span> <span class="badge">100</span>
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link"
                            id="recruitment-plan-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#recruitment-plan"
                            type="button"
                            role="tab"
                            aria-controls="recruitment-plan"
                            aria-selected="false"
                          >
                            Recruitment Plan
                          </button>
                        </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div
                          class="tab-pane fade show active"
                          id="active-jobs"
                          role="tabpanel"
                          aria-labelledby="active-jobs-tab"
                          tabindex="0"
                        >
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Job Title</th>
                                  <th scope="col" class="d-flex gap-1">
                                    <span>Applied</span>
                                    <span
                                      data-bs-toggle="tooltip"
                                      data-bs-title="Lorem Ipsum"
                                    >
                                      <svg
                                        width="16"
                                        height="16"
                                        viewBox="0 0 16 16"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <g clip-path="url(#clip0_1463_7504)">
                                          <path
                                            d="M6.0587 5.9987C6.21543 5.55314 6.5248 5.17744 6.932 4.93812C7.3392 4.6988 7.81796 4.61132 8.28348 4.69117C8.749 4.77102 9.17124 5.01305 9.47542 5.37438C9.77959 5.73572 9.94607 6.19305 9.94536 6.66536C9.94536 7.9987 7.94536 8.66536 7.94536 8.66536M7.9987 11.332H8.00536M14.6654 7.9987C14.6654 11.6806 11.6806 14.6654 7.9987 14.6654C4.3168 14.6654 1.33203 11.6806 1.33203 7.9987C1.33203 4.3168 4.3168 1.33203 7.9987 1.33203C11.6806 1.33203 14.6654 4.3168 14.6654 7.9987Z"
                                            stroke="#98A2B3"
                                            stroke-width="1.33333"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                          />
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_1463_7504">
                                            <rect
                                              width="16"
                                              height="16"
                                              fill="white"
                                            />
                                          </clipPath>
                                        </defs>
                                      </svg>
                                    </span>
                                  </th>
                                  <th scope="col">Match</th>
                                  <th scope="col">Viewed</th>
                                  <th scope="col">Hiring</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td scope="row" class="align-middle">
                                    <div class="title">
                                      <h3 class="text-truncate">
                                        Business Development Marketing 
                                      </h3>
                                      <span
                                      data-bs-toggle="tooltip"
                                      data-bs-title="Lorem Ipsum"
                                    >
                                      <svg
                                        width="16"
                                        height="16"
                                        viewBox="0 0 16 16"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <g clip-path="url(#clip0_1463_7504)">
                                          <path
                                            d="M6.0587 5.9987C6.21543 5.55314 6.5248 5.17744 6.932 4.93812C7.3392 4.6988 7.81796 4.61132 8.28348 4.69117C8.749 4.77102 9.17124 5.01305 9.47542 5.37438C9.77959 5.73572 9.94607 6.19305 9.94536 6.66536C9.94536 7.9987 7.94536 8.66536 7.94536 8.66536M7.9987 11.332H8.00536M14.6654 7.9987C14.6654 11.6806 11.6806 14.6654 7.9987 14.6654C4.3168 14.6654 1.33203 11.6806 1.33203 7.9987C1.33203 4.3168 4.3168 1.33203 7.9987 1.33203C11.6806 1.33203 14.6654 4.3168 14.6654 7.9987Z"
                                            stroke="#98A2B3"
                                            stroke-width="1.33333"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                          />
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_1463_7504">
                                            <rect
                                              width="16"
                                              height="16"
                                              fill="white"
                                            />
                                          </clipPath>
                                        </defs>
                                      </svg>
                                    </span>
                                    </div>
                                    <p>Vacancy: 12</p>
                                  </td>
                                  <td><a href="all-applicants-info.php">78</a></td>
                                  <td><a href="all-applicants-info.php">50</a></td>
                                  <td><a href="all-applicants-info.php">134</a></td>
                                  <td>
                                    <ul class="tags">
                                      <li class="bg-shortlist">Shortlisted: 19</li>
                                      <li class="bg-interview">Interviewed: 19d</li>
                                      <li class="bg-hired">Hired: 19d</li>
                                      <li class="bg-offered">Offered: 19</li>
                                    </ul>
                                  </td>
                                  <td>
                                    <ul class="links">
                                      <li>
                                        <a href="#">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <g clip-path="url(#clip0_1463_88)">
                                            <path d="M14.168 2.49895C14.3868 2.28008 14.6467 2.10646 14.9326 1.98801C15.2186 1.86956 15.5251 1.80859 15.8346 1.80859C16.1442 1.80859 16.4507 1.86956 16.7366 1.98801C17.0226 2.10646 17.2824 2.28008 17.5013 2.49895C17.7202 2.71782 17.8938 2.97766 18.0122 3.26362C18.1307 3.54959 18.1917 3.85609 18.1917 4.16562C18.1917 4.47514 18.1307 4.78164 18.0122 5.06761C17.8938 5.35358 17.7202 5.61341 17.5013 5.83228L6.2513 17.0823L1.66797 18.3323L2.91797 13.7489L14.168 2.49895Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_1463_88">
                                            <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                            </defs>
                                            </svg>
  
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 18V8" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10 18V2" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M4 18V12" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                        </a>
                                      </li>
                                      <li>
                                        <a class="modal-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M15 6.66797C16.3807 6.66797 17.5 5.54868 17.5 4.16797C17.5 2.78726 16.3807 1.66797 15 1.66797C13.6193 1.66797 12.5 2.78726 12.5 4.16797C12.5 5.54868 13.6193 6.66797 15 6.66797Z" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M5 12.5C6.38071 12.5 7.5 11.3807 7.5 10C7.5 8.61929 6.38071 7.5 5 7.5C3.61929 7.5 2.5 8.61929 2.5 10C2.5 11.3807 3.61929 12.5 5 12.5Z" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 18.332C16.3807 18.332 17.5 17.2127 17.5 15.832C17.5 14.4513 16.3807 13.332 15 13.332C13.6193 13.332 12.5 14.4513 12.5 15.832C12.5 17.2127 13.6193 18.332 15 18.332Z" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.16016 11.2578L12.8518 14.5745" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.8435 5.42578L7.16016 8.74245" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                        </a>
                                      </li>
                                    </ul>
                                  </td>
                                </tr>
                                
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div
                          class="tab-pane fade"
                          id="recruitment-plan"
                          role="tabpanel"
                          aria-labelledby="recruitment-plan-tab"
                          tabindex="0"
                        >
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Job Title</th>
                                <th scope="col" class="d-flex gap-1">
                                  <span>Applied</span>
                                  <span
                                    data-bs-toggle="tooltip"
                                    data-bs-title="Lorem Ipsum"
                                  >
                                    <svg
                                      width="16"
                                      height="16"
                                      viewBox="0 0 16 16"
                                      fill="none"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <g clip-path="url(#clip0_1463_7504)">
                                        <path
                                          d="M6.0587 5.9987C6.21543 5.55314 6.5248 5.17744 6.932 4.93812C7.3392 4.6988 7.81796 4.61132 8.28348 4.69117C8.749 4.77102 9.17124 5.01305 9.47542 5.37438C9.77959 5.73572 9.94607 6.19305 9.94536 6.66536C9.94536 7.9987 7.94536 8.66536 7.94536 8.66536M7.9987 11.332H8.00536M14.6654 7.9987C14.6654 11.6806 11.6806 14.6654 7.9987 14.6654C4.3168 14.6654 1.33203 11.6806 1.33203 7.9987C1.33203 4.3168 4.3168 1.33203 7.9987 1.33203C11.6806 1.33203 14.6654 4.3168 14.6654 7.9987Z"
                                          stroke="#98A2B3"
                                          stroke-width="1.33333"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                      </g>
                                      <defs>
                                        <clipPath id="clip0_1463_7504">
                                          <rect
                                            width="16"
                                            height="16"
                                            fill="white"
                                          />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                  </span>
                                </th>
                                <th scope="col">Match</th>
                                <th scope="col">Viewed</th>
                                <th scope="col">Hiring</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td scope="row" class="align-middle">
                                  <div class="title">
                                    <h3 class="text-truncate">
                                      Business Development Marketing 
                                    </h3>
                                    <span
                                    data-bs-toggle="tooltip"
                                    data-bs-title="Lorem Ipsum"
                                  >
                                    <svg
                                      width="16"
                                      height="16"
                                      viewBox="0 0 16 16"
                                      fill="none"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <g clip-path="url(#clip0_1463_7504)">
                                        <path
                                          d="M6.0587 5.9987C6.21543 5.55314 6.5248 5.17744 6.932 4.93812C7.3392 4.6988 7.81796 4.61132 8.28348 4.69117C8.749 4.77102 9.17124 5.01305 9.47542 5.37438C9.77959 5.73572 9.94607 6.19305 9.94536 6.66536C9.94536 7.9987 7.94536 8.66536 7.94536 8.66536M7.9987 11.332H8.00536M14.6654 7.9987C14.6654 11.6806 11.6806 14.6654 7.9987 14.6654C4.3168 14.6654 1.33203 11.6806 1.33203 7.9987C1.33203 4.3168 4.3168 1.33203 7.9987 1.33203C11.6806 1.33203 14.6654 4.3168 14.6654 7.9987Z"
                                          stroke="#98A2B3"
                                          stroke-width="1.33333"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                      </g>
                                      <defs>
                                        <clipPath id="clip0_1463_7504">
                                          <rect
                                            width="16"
                                            height="16"
                                            fill="white"
                                          />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                  </span>
                                  </div>
                                  <p>Vacancy: 12</p>
                                </td>
                                <td><a href="all-applicants-info.php">78</a></td>
                                  <td><a href="all-applicants-info.php">50</a></td>
                                  <td><a href="all-applicants-info.php">134</a></td>
                                <td>
                                  <ul class="tags">
                                    <li class="bg-shortlist">Shortlisted: 19</li>
                                    <li class="bg-interview">Interviewed: 19d</li>
                                    <li class="bg-hired">Hired: 19d</li>
                                    <li class="bg-offered">Offered: 19</li>
                                  </ul>
                                </td>
                                <td>
                                  <ul class="links">
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <g clip-path="url(#clip0_1463_88)">
                                          <path d="M14.168 2.49895C14.3868 2.28008 14.6467 2.10646 14.9326 1.98801C15.2186 1.86956 15.5251 1.80859 15.8346 1.80859C16.1442 1.80859 16.4507 1.86956 16.7366 1.98801C17.0226 2.10646 17.2824 2.28008 17.5013 2.49895C17.7202 2.71782 17.8938 2.97766 18.0122 3.26362C18.1307 3.54959 18.1917 3.85609 18.1917 4.16562C18.1917 4.47514 18.1307 4.78164 18.0122 5.06761C17.8938 5.35358 17.7202 5.61341 17.5013 5.83228L6.2513 17.0823L1.66797 18.3323L2.91797 13.7489L14.168 2.49895Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_1463_88">
                                          <rect width="20" height="20" fill="white"/>
                                          </clipPath>
                                          </defs>
                                          </svg>

                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16 18V8" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M10 18V2" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M4 18V12" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a class="modal-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M15 6.66797C16.3807 6.66797 17.5 5.54868 17.5 4.16797C17.5 2.78726 16.3807 1.66797 15 1.66797C13.6193 1.66797 12.5 2.78726 12.5 4.16797C12.5 5.54868 13.6193 6.66797 15 6.66797Z" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M5 12.5C6.38071 12.5 7.5 11.3807 7.5 10C7.5 8.61929 6.38071 7.5 5 7.5C3.61929 7.5 2.5 8.61929 2.5 10C2.5 11.3807 3.61929 12.5 5 12.5Z" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M15 18.332C16.3807 18.332 17.5 17.2127 17.5 15.832C17.5 14.4513 16.3807 13.332 15 13.332C13.6193 13.332 12.5 14.4513 12.5 15.832C12.5 17.2127 13.6193 18.332 15 18.332Z" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M7.16016 11.2578L12.8518 14.5745" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M12.8435 5.42578L7.16016 8.74245" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              
                            </tbody>
                          </table>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End All Plans Tab  -->

              <!-- Start Feature -->
              <div class="features">
                <div class="row no-gutters">
                  <div class="col-md-12">
                    <div class="features-bar">
                      <h3>Special Features</h3>
                    </div>
                  </div>
                </div>
                <div class="row no-gutters">
                  <div class="col-lg-6 col-xl-4 px-2">
                    <div class="card">
                      <h4>Create a  Career Page  </h4>
                      <p>
                        Lorem ipsum dolor sit amet consectetur.
                      </p>
                      <a href="#">+ Create Career Page</a>
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-4 px-2">
                    <div class="card">
                      <h4>Add Candidate Using Your Link</h4>
                      <p>
                        Lorem ipsum dolor sit amet consectetur. Viverra aliquet dolor eu mauris leo tempus orci augue sed.
                      </p>
                      <a href="#">Connect LinkedIn</a>
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-4 px-2">
                    <div class="card">
                      <h4>Promote Jobs On LinkedIn</h4>
                      <p>
                        Lorem ipsum dolor sit amet consectetur. Viverra aliquet dolor eu mauris leo tempus orci augue sed. Sed tortor  Lorem ipsum dolor sit amet consectetur. Viverra aliquet dolor eu mauris leo tempus orci augue sed. Sed tortor 
                      </p>
                      <a href="#">Connect LinkedIn</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Feature -->
            </div>
           <!-- Bottom Footer -->
           <?php include 'view/bottom-footer.php'; ?>
          </div>
        </div>
      </div>
    </main>
  

<?php include 'view/footer.php'; ?>
