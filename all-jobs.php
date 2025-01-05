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
              
              <!-- Start All Plans Tab  -->
              <div class="all-plans mb-0 pb-0">
                <div class="row no-gutters">
                  <div class="col-md-12">
                    <div class="all-tabs">
                      <ul
                        class="nav nav-pills all-jobs-tab"
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
                            id="schedule-job-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#schedule-job"
                            type="button"
                            role="tab"
                            aria-controls="schedule-job"
                            aria-selected="false"
                          >
                            <span>Schedule Jobs</span> <span class="badge">76</span>
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link"
                            id="expired-job-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#expired-job"
                            type="button"
                            role="tab"
                            aria-controls="expired-job"
                            aria-selected="false"
                          >
                            <span>Expired Jobs</span> <span class="badge">19</span>
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link"
                            id="draft-job-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#draft-job"
                            type="button"
                            role="tab"
                            aria-controls="draft-job"
                            aria-selected="false"
                          >
                            <span>Draft Jobs</span> <span class="badge">04</span>
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
                        <div class="filter-section">
                          <div class="search-filed">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M17.5 17.5L13.875 13.875M15.8333 9.16667C15.8333 12.8486 12.8486 15.8333 9.16667 15.8333C5.48477 15.8333 2.5 12.8486 2.5 9.16667C2.5 5.48477 5.48477 2.5 9.16667 2.5C12.8486 2.5 15.8333 5.48477 15.8333 9.16667Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <input type="search" name="search" id="searchFileld" placeholder="Search">
                          </div>
                          <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M5 10H15M2.5 5H17.5M7.5 15H12.5" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>Filters</span>
                          </button>
                        </div>
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
                                  <td>78</td>
                                  <td>50</td>
                                  <td>134</td>
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
                                  <td>78</td>
                                  <td>50</td>
                                  <td>134</td>
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
                                  <td>78</td>
                                  <td>50</td>
                                  <td>134</td>
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
                                  <td>78</td>
                                  <td>50</td>
                                  <td>134</td>
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
                                  <td>78</td>
                                  <td>50</td>
                                  <td>134</td>
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
                          id="schedule-job"
                          role="tabpanel"
                          aria-labelledby="schedule-job-tab"
                          tabindex="0"
                        >
                        <div class="filter-section">
                          <div class="search-filed">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M17.5 17.5L13.875 13.875M15.8333 9.16667C15.8333 12.8486 12.8486 15.8333 9.16667 15.8333C5.48477 15.8333 2.5 12.8486 2.5 9.16667C2.5 5.48477 5.48477 2.5 9.16667 2.5C12.8486 2.5 15.8333 5.48477 15.8333 9.16667Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <input type="search" name="search" id="searchFileld" placeholder="Search">
                          </div>
                          <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M5 10H15M2.5 5H17.5M7.5 15H12.5" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>Filters</span>
                          </button>
                        </div>
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
                                <td>78</td>
                                <td>50</td>
                                <td>134</td>
                                <td>
                                  <ul class="tags">
                                    <li class="bg-shortlist">Shortlisted: 00</li>
                                    <li class="bg-interview">Interviewed: 00</li>
                                    <li class="bg-hired">Hired: 00</li>
                                    <li class="bg-offered">OL: 00</li>
                                  </ul>
                                </td>
                                <td>
                                  <ul class="links">
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M2.5 5.0013H4.16667M4.16667 5.0013H17.5M4.16667 5.0013V16.668C4.16667 17.11 4.34226 17.5339 4.65482 17.8465C4.96738 18.159 5.39131 18.3346 5.83333 18.3346H14.1667C14.6087 18.3346 15.0326 18.159 15.3452 17.8465C15.6577 17.5339 15.8333 17.11 15.8333 16.668V5.0013H4.16667ZM6.66667 5.0013V3.33464C6.66667 2.89261 6.84226 2.46868 7.15482 2.15612C7.46738 1.84356 7.89131 1.66797 8.33333 1.66797H11.6667C12.1087 1.66797 12.5326 1.84356 12.8452 2.15612C13.1577 2.46868 13.3333 2.89261 13.3333 3.33464V5.0013M8.33333 9.16797V14.168M11.6667 9.16797V14.168" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <g clip-path="url(#clip0_1714_726)">
                                            <path d="M14.168 2.49895C14.3868 2.28008 14.6467 2.10646 14.9326 1.98801C15.2186 1.86956 15.5251 1.80859 15.8346 1.80859C16.1442 1.80859 16.4507 1.86956 16.7366 1.98801C17.0226 2.10646 17.2824 2.28008 17.5013 2.49895C17.7202 2.71782 17.8938 2.97766 18.0122 3.26362C18.1307 3.54959 18.1917 3.85609 18.1917 4.16562C18.1917 4.47514 18.1307 4.78164 18.0122 5.06761C17.8938 5.35358 17.7202 5.61341 17.5013 5.83228L6.2513 17.0823L1.66797 18.3323L2.91797 13.7489L14.168 2.49895Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_1714_726">
                                              <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M13 12.0001L18 7.00004L13 2" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M2 18.0001V11C2 9.93916 2.42143 8.92173 3.17158 8.17158C3.92173 7.42143 4.93916 7 6.00003 7H18.0001" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M14.86 14.8586C13.4614 15.9247 11.7584 16.5153 10 16.5441C4.27273 16.5441 1 9.9986 1 9.9986C2.01773 8.10197 3.42929 6.44492 5.14 5.1386M8.28182 3.64951C8.845 3.51768 9.4216 3.45179 10 3.45315C15.7273 3.45315 19 9.9986 19 9.9986C18.5033 10.9277 17.911 11.8025 17.2327 12.6086M11.7345 11.7331C11.5098 11.9743 11.2388 12.1677 10.9378 12.3019C10.6367 12.436 10.3116 12.5082 9.98207 12.514C9.6525 12.5198 9.32513 12.4592 9.0195 12.3357C8.71387 12.2123 8.43623 12.0285 8.20315 11.7955C7.97007 11.5624 7.78632 11.2847 7.66287 10.9791C7.53942 10.6735 7.47879 10.3461 7.48461 10.0165C7.49042 9.68695 7.56256 9.36193 7.69672 9.06084C7.83087 8.75975 8.0243 8.48877 8.26545 8.26405" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M1 1L19 19" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
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
                                <td>78</td>
                                <td>50</td>
                                <td>134</td>
                                <td>
                                  <ul class="tags">
                                    <li class="bg-shortlist">Shortlisted: 00</li>
                                    <li class="bg-interview">Interviewed: 00</li>
                                    <li class="bg-hired">Hired: 00</li>
                                    <li class="bg-offered">OL: 00</li>
                                  </ul>
                                </td>
                                <td>
                                  <ul class="links">
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M2.5 5.0013H4.16667M4.16667 5.0013H17.5M4.16667 5.0013V16.668C4.16667 17.11 4.34226 17.5339 4.65482 17.8465C4.96738 18.159 5.39131 18.3346 5.83333 18.3346H14.1667C14.6087 18.3346 15.0326 18.159 15.3452 17.8465C15.6577 17.5339 15.8333 17.11 15.8333 16.668V5.0013H4.16667ZM6.66667 5.0013V3.33464C6.66667 2.89261 6.84226 2.46868 7.15482 2.15612C7.46738 1.84356 7.89131 1.66797 8.33333 1.66797H11.6667C12.1087 1.66797 12.5326 1.84356 12.8452 2.15612C13.1577 2.46868 13.3333 2.89261 13.3333 3.33464V5.0013M8.33333 9.16797V14.168M11.6667 9.16797V14.168" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <g clip-path="url(#clip0_1714_726)">
                                            <path d="M14.168 2.49895C14.3868 2.28008 14.6467 2.10646 14.9326 1.98801C15.2186 1.86956 15.5251 1.80859 15.8346 1.80859C16.1442 1.80859 16.4507 1.86956 16.7366 1.98801C17.0226 2.10646 17.2824 2.28008 17.5013 2.49895C17.7202 2.71782 17.8938 2.97766 18.0122 3.26362C18.1307 3.54959 18.1917 3.85609 18.1917 4.16562C18.1917 4.47514 18.1307 4.78164 18.0122 5.06761C17.8938 5.35358 17.7202 5.61341 17.5013 5.83228L6.2513 17.0823L1.66797 18.3323L2.91797 13.7489L14.168 2.49895Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_1714_726">
                                              <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M13 12.0001L18 7.00004L13 2" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M2 18.0001V11C2 9.93916 2.42143 8.92173 3.17158 8.17158C3.92173 7.42143 4.93916 7 6.00003 7H18.0001" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M14.86 14.8586C13.4614 15.9247 11.7584 16.5153 10 16.5441C4.27273 16.5441 1 9.9986 1 9.9986C2.01773 8.10197 3.42929 6.44492 5.14 5.1386M8.28182 3.64951C8.845 3.51768 9.4216 3.45179 10 3.45315C15.7273 3.45315 19 9.9986 19 9.9986C18.5033 10.9277 17.911 11.8025 17.2327 12.6086M11.7345 11.7331C11.5098 11.9743 11.2388 12.1677 10.9378 12.3019C10.6367 12.436 10.3116 12.5082 9.98207 12.514C9.6525 12.5198 9.32513 12.4592 9.0195 12.3357C8.71387 12.2123 8.43623 12.0285 8.20315 11.7955C7.97007 11.5624 7.78632 11.2847 7.66287 10.9791C7.53942 10.6735 7.47879 10.3461 7.48461 10.0165C7.49042 9.68695 7.56256 9.36193 7.69672 9.06084C7.83087 8.75975 8.0243 8.48877 8.26545 8.26405" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M1 1L19 19" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
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
                                <td>78</td>
                                <td>50</td>
                                <td>134</td>
                                <td>
                                  <ul class="tags">
                                    <li class="bg-shortlist">Shortlisted: 00</li>
                                    <li class="bg-interview">Interviewed: 00</li>
                                    <li class="bg-hired">Hired: 00</li>
                                    <li class="bg-offered">OL: 00</li>
                                  </ul>
                                </td>
                                <td>
                                  <ul class="links">
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M2.5 5.0013H4.16667M4.16667 5.0013H17.5M4.16667 5.0013V16.668C4.16667 17.11 4.34226 17.5339 4.65482 17.8465C4.96738 18.159 5.39131 18.3346 5.83333 18.3346H14.1667C14.6087 18.3346 15.0326 18.159 15.3452 17.8465C15.6577 17.5339 15.8333 17.11 15.8333 16.668V5.0013H4.16667ZM6.66667 5.0013V3.33464C6.66667 2.89261 6.84226 2.46868 7.15482 2.15612C7.46738 1.84356 7.89131 1.66797 8.33333 1.66797H11.6667C12.1087 1.66797 12.5326 1.84356 12.8452 2.15612C13.1577 2.46868 13.3333 2.89261 13.3333 3.33464V5.0013M8.33333 9.16797V14.168M11.6667 9.16797V14.168" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <g clip-path="url(#clip0_1714_726)">
                                            <path d="M14.168 2.49895C14.3868 2.28008 14.6467 2.10646 14.9326 1.98801C15.2186 1.86956 15.5251 1.80859 15.8346 1.80859C16.1442 1.80859 16.4507 1.86956 16.7366 1.98801C17.0226 2.10646 17.2824 2.28008 17.5013 2.49895C17.7202 2.71782 17.8938 2.97766 18.0122 3.26362C18.1307 3.54959 18.1917 3.85609 18.1917 4.16562C18.1917 4.47514 18.1307 4.78164 18.0122 5.06761C17.8938 5.35358 17.7202 5.61341 17.5013 5.83228L6.2513 17.0823L1.66797 18.3323L2.91797 13.7489L14.168 2.49895Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_1714_726">
                                              <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M13 12.0001L18 7.00004L13 2" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M2 18.0001V11C2 9.93916 2.42143 8.92173 3.17158 8.17158C3.92173 7.42143 4.93916 7 6.00003 7H18.0001" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M14.86 14.8586C13.4614 15.9247 11.7584 16.5153 10 16.5441C4.27273 16.5441 1 9.9986 1 9.9986C2.01773 8.10197 3.42929 6.44492 5.14 5.1386M8.28182 3.64951C8.845 3.51768 9.4216 3.45179 10 3.45315C15.7273 3.45315 19 9.9986 19 9.9986C18.5033 10.9277 17.911 11.8025 17.2327 12.6086M11.7345 11.7331C11.5098 11.9743 11.2388 12.1677 10.9378 12.3019C10.6367 12.436 10.3116 12.5082 9.98207 12.514C9.6525 12.5198 9.32513 12.4592 9.0195 12.3357C8.71387 12.2123 8.43623 12.0285 8.20315 11.7955C7.97007 11.5624 7.78632 11.2847 7.66287 10.9791C7.53942 10.6735 7.47879 10.3461 7.48461 10.0165C7.49042 9.68695 7.56256 9.36193 7.69672 9.06084C7.83087 8.75975 8.0243 8.48877 8.26545 8.26405" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M1 1L19 19" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
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
                                <td>78</td>
                                <td>50</td>
                                <td>134</td>
                                <td>
                                  <ul class="tags">
                                    <li class="bg-shortlist">Shortlisted: 00</li>
                                    <li class="bg-interview">Interviewed: 00</li>
                                    <li class="bg-hired">Hired: 00</li>
                                    <li class="bg-offered">OL: 00</li>
                                  </ul>
                                </td>
                                <td>
                                  <ul class="links">
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M2.5 5.0013H4.16667M4.16667 5.0013H17.5M4.16667 5.0013V16.668C4.16667 17.11 4.34226 17.5339 4.65482 17.8465C4.96738 18.159 5.39131 18.3346 5.83333 18.3346H14.1667C14.6087 18.3346 15.0326 18.159 15.3452 17.8465C15.6577 17.5339 15.8333 17.11 15.8333 16.668V5.0013H4.16667ZM6.66667 5.0013V3.33464C6.66667 2.89261 6.84226 2.46868 7.15482 2.15612C7.46738 1.84356 7.89131 1.66797 8.33333 1.66797H11.6667C12.1087 1.66797 12.5326 1.84356 12.8452 2.15612C13.1577 2.46868 13.3333 2.89261 13.3333 3.33464V5.0013M8.33333 9.16797V14.168M11.6667 9.16797V14.168" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <g clip-path="url(#clip0_1714_726)">
                                            <path d="M14.168 2.49895C14.3868 2.28008 14.6467 2.10646 14.9326 1.98801C15.2186 1.86956 15.5251 1.80859 15.8346 1.80859C16.1442 1.80859 16.4507 1.86956 16.7366 1.98801C17.0226 2.10646 17.2824 2.28008 17.5013 2.49895C17.7202 2.71782 17.8938 2.97766 18.0122 3.26362C18.1307 3.54959 18.1917 3.85609 18.1917 4.16562C18.1917 4.47514 18.1307 4.78164 18.0122 5.06761C17.8938 5.35358 17.7202 5.61341 17.5013 5.83228L6.2513 17.0823L1.66797 18.3323L2.91797 13.7489L14.168 2.49895Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_1714_726">
                                              <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M13 12.0001L18 7.00004L13 2" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M2 18.0001V11C2 9.93916 2.42143 8.92173 3.17158 8.17158C3.92173 7.42143 4.93916 7 6.00003 7H18.0001" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M14.86 14.8586C13.4614 15.9247 11.7584 16.5153 10 16.5441C4.27273 16.5441 1 9.9986 1 9.9986C2.01773 8.10197 3.42929 6.44492 5.14 5.1386M8.28182 3.64951C8.845 3.51768 9.4216 3.45179 10 3.45315C15.7273 3.45315 19 9.9986 19 9.9986C18.5033 10.9277 17.911 11.8025 17.2327 12.6086M11.7345 11.7331C11.5098 11.9743 11.2388 12.1677 10.9378 12.3019C10.6367 12.436 10.3116 12.5082 9.98207 12.514C9.6525 12.5198 9.32513 12.4592 9.0195 12.3357C8.71387 12.2123 8.43623 12.0285 8.20315 11.7955C7.97007 11.5624 7.78632 11.2847 7.66287 10.9791C7.53942 10.6735 7.47879 10.3461 7.48461 10.0165C7.49042 9.68695 7.56256 9.36193 7.69672 9.06084C7.83087 8.75975 8.0243 8.48877 8.26545 8.26405" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M1 1L19 19" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
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
                                <td>78</td>
                                <td>50</td>
                                <td>134</td>
                                <td>
                                  <ul class="tags">
                                    <li class="bg-shortlist">Shortlisted: 00</li>
                                    <li class="bg-interview">Interviewed: 00</li>
                                    <li class="bg-hired">Hired: 00</li>
                                    <li class="bg-offered">OL: 00</li>
                                  </ul>
                                </td>
                                <td>
                                  <ul class="links">
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M2.5 5.0013H4.16667M4.16667 5.0013H17.5M4.16667 5.0013V16.668C4.16667 17.11 4.34226 17.5339 4.65482 17.8465C4.96738 18.159 5.39131 18.3346 5.83333 18.3346H14.1667C14.6087 18.3346 15.0326 18.159 15.3452 17.8465C15.6577 17.5339 15.8333 17.11 15.8333 16.668V5.0013H4.16667ZM6.66667 5.0013V3.33464C6.66667 2.89261 6.84226 2.46868 7.15482 2.15612C7.46738 1.84356 7.89131 1.66797 8.33333 1.66797H11.6667C12.1087 1.66797 12.5326 1.84356 12.8452 2.15612C13.1577 2.46868 13.3333 2.89261 13.3333 3.33464V5.0013M8.33333 9.16797V14.168M11.6667 9.16797V14.168" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <g clip-path="url(#clip0_1714_726)">
                                            <path d="M14.168 2.49895C14.3868 2.28008 14.6467 2.10646 14.9326 1.98801C15.2186 1.86956 15.5251 1.80859 15.8346 1.80859C16.1442 1.80859 16.4507 1.86956 16.7366 1.98801C17.0226 2.10646 17.2824 2.28008 17.5013 2.49895C17.7202 2.71782 17.8938 2.97766 18.0122 3.26362C18.1307 3.54959 18.1917 3.85609 18.1917 4.16562C18.1917 4.47514 18.1307 4.78164 18.0122 5.06761C17.8938 5.35358 17.7202 5.61341 17.5013 5.83228L6.2513 17.0823L1.66797 18.3323L2.91797 13.7489L14.168 2.49895Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_1714_726">
                                              <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M13 12.0001L18 7.00004L13 2" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M2 18.0001V11C2 9.93916 2.42143 8.92173 3.17158 8.17158C3.92173 7.42143 4.93916 7 6.00003 7H18.0001" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M14.86 14.8586C13.4614 15.9247 11.7584 16.5153 10 16.5441C4.27273 16.5441 1 9.9986 1 9.9986C2.01773 8.10197 3.42929 6.44492 5.14 5.1386M8.28182 3.64951C8.845 3.51768 9.4216 3.45179 10 3.45315C15.7273 3.45315 19 9.9986 19 9.9986C18.5033 10.9277 17.911 11.8025 17.2327 12.6086M11.7345 11.7331C11.5098 11.9743 11.2388 12.1677 10.9378 12.3019C10.6367 12.436 10.3116 12.5082 9.98207 12.514C9.6525 12.5198 9.32513 12.4592 9.0195 12.3357C8.71387 12.2123 8.43623 12.0285 8.20315 11.7955C7.97007 11.5624 7.78632 11.2847 7.66287 10.9791C7.53942 10.6735 7.47879 10.3461 7.48461 10.0165C7.49042 9.68695 7.56256 9.36193 7.69672 9.06084C7.83087 8.75975 8.0243 8.48877 8.26545 8.26405" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M1 1L19 19" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
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
                          id="expired-job"
                          role="tabpanel"
                          aria-labelledby="expired-job-tab"
                          tabindex="0"
                        >
                        <div class="filter-section">
                          <div class="search-filed">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M17.5 17.5L13.875 13.875M15.8333 9.16667C15.8333 12.8486 12.8486 15.8333 9.16667 15.8333C5.48477 15.8333 2.5 12.8486 2.5 9.16667C2.5 5.48477 5.48477 2.5 9.16667 2.5C12.8486 2.5 15.8333 5.48477 15.8333 9.16667Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <input type="search" name="search" id="searchFileld" placeholder="Search">
                          </div>
                          <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M5 10H15M2.5 5H17.5M7.5 15H12.5" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>Filters</span>
                          </button>
                        </div>
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
                                <td>78</td>
                                <td>50</td>
                                <td>134</td>
                                <td>
                                  <ul class="tags">
                                    <li class="bg-shortlist">Shortlisted: 12</li>
                                    <li class="bg-interview">Interviewed: 08</li>
                                    <li class="bg-hired">Hired: 02</li>
                                    <li class="bg-offered">OL: 01</li>
                                  </ul>
                                </td>
                                <td>
                                  <ul class="links">
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M2.5 5.0013H4.16667M4.16667 5.0013H17.5M4.16667 5.0013V16.668C4.16667 17.11 4.34226 17.5339 4.65482 17.8465C4.96738 18.159 5.39131 18.3346 5.83333 18.3346H14.1667C14.6087 18.3346 15.0326 18.159 15.3452 17.8465C15.6577 17.5339 15.8333 17.11 15.8333 16.668V5.0013H4.16667ZM6.66667 5.0013V3.33464C6.66667 2.89261 6.84226 2.46868 7.15482 2.15612C7.46738 1.84356 7.89131 1.66797 8.33333 1.66797H11.6667C12.1087 1.66797 12.5326 1.84356 12.8452 2.15612C13.1577 2.46868 13.3333 2.89261 13.3333 3.33464V5.0013M8.33333 9.16797V14.168M11.6667 9.16797V14.168" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <g clip-path="url(#clip0_589_13964)">
                                            <path d="M0.832031 3.33203V8.33203H5.83203" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2.9237 12.5C3.46403 14.0337 4.48814 15.3502 5.84174 16.2512C7.19535 17.1522 8.8051 17.5889 10.4285 17.4954C12.0518 17.402 13.6008 16.7835 14.8421 15.7332C16.0834 14.6828 16.9497 13.2575 17.3105 11.672C17.6714 10.0865 17.5071 8.42667 16.8426 6.94262C16.178 5.45857 15.0491 4.2307 13.6261 3.44401C12.203 2.65732 10.5628 2.35442 8.9526 2.58097C7.34241 2.80751 5.84946 3.55122 4.6987 4.70004L0.832031 8.33337" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_589_13964">
                                              <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M13 12.0001L18 7.00004L13 2" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M2 18.0001V11C2 9.93916 2.42143 8.92173 3.17158 8.17158C3.92173 7.42143 4.93916 7 6.00003 7H18.0001" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    
                                  </ul>
                                </td>
                              </tr>
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
                                <td>78</td>
                                <td>50</td>
                                <td>134</td>
                                <td>
                                  <ul class="tags">
                                    <li class="bg-shortlist">Shortlisted: 12</li>
                                    <li class="bg-interview">Interviewed: 08</li>
                                    <li class="bg-hired">Hired: 02</li>
                                    <li class="bg-offered">OL: 01</li>
                                  </ul>
                                </td>
                                <td>
                                  <ul class="links">
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M2.5 5.0013H4.16667M4.16667 5.0013H17.5M4.16667 5.0013V16.668C4.16667 17.11 4.34226 17.5339 4.65482 17.8465C4.96738 18.159 5.39131 18.3346 5.83333 18.3346H14.1667C14.6087 18.3346 15.0326 18.159 15.3452 17.8465C15.6577 17.5339 15.8333 17.11 15.8333 16.668V5.0013H4.16667ZM6.66667 5.0013V3.33464C6.66667 2.89261 6.84226 2.46868 7.15482 2.15612C7.46738 1.84356 7.89131 1.66797 8.33333 1.66797H11.6667C12.1087 1.66797 12.5326 1.84356 12.8452 2.15612C13.1577 2.46868 13.3333 2.89261 13.3333 3.33464V5.0013M8.33333 9.16797V14.168M11.6667 9.16797V14.168" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <g clip-path="url(#clip0_589_13964)">
                                            <path d="M0.832031 3.33203V8.33203H5.83203" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2.9237 12.5C3.46403 14.0337 4.48814 15.3502 5.84174 16.2512C7.19535 17.1522 8.8051 17.5889 10.4285 17.4954C12.0518 17.402 13.6008 16.7835 14.8421 15.7332C16.0834 14.6828 16.9497 13.2575 17.3105 11.672C17.6714 10.0865 17.5071 8.42667 16.8426 6.94262C16.178 5.45857 15.0491 4.2307 13.6261 3.44401C12.203 2.65732 10.5628 2.35442 8.9526 2.58097C7.34241 2.80751 5.84946 3.55122 4.6987 4.70004L0.832031 8.33337" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_589_13964">
                                              <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M13 12.0001L18 7.00004L13 2" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M2 18.0001V11C2 9.93916 2.42143 8.92173 3.17158 8.17158C3.92173 7.42143 4.93916 7 6.00003 7H18.0001" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    
                                  </ul>
                                </td>
                              </tr>
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
                                <td>78</td>
                                <td>50</td>
                                <td>134</td>
                                <td>
                                  <ul class="tags">
                                    <li class="bg-shortlist">Shortlisted: 12</li>
                                    <li class="bg-interview">Interviewed: 08</li>
                                    <li class="bg-hired">Hired: 02</li>
                                    <li class="bg-offered">OL: 01</li>
                                  </ul>
                                </td>
                                <td>
                                  <ul class="links">
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M2.5 5.0013H4.16667M4.16667 5.0013H17.5M4.16667 5.0013V16.668C4.16667 17.11 4.34226 17.5339 4.65482 17.8465C4.96738 18.159 5.39131 18.3346 5.83333 18.3346H14.1667C14.6087 18.3346 15.0326 18.159 15.3452 17.8465C15.6577 17.5339 15.8333 17.11 15.8333 16.668V5.0013H4.16667ZM6.66667 5.0013V3.33464C6.66667 2.89261 6.84226 2.46868 7.15482 2.15612C7.46738 1.84356 7.89131 1.66797 8.33333 1.66797H11.6667C12.1087 1.66797 12.5326 1.84356 12.8452 2.15612C13.1577 2.46868 13.3333 2.89261 13.3333 3.33464V5.0013M8.33333 9.16797V14.168M11.6667 9.16797V14.168" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <g clip-path="url(#clip0_589_13964)">
                                            <path d="M0.832031 3.33203V8.33203H5.83203" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2.9237 12.5C3.46403 14.0337 4.48814 15.3502 5.84174 16.2512C7.19535 17.1522 8.8051 17.5889 10.4285 17.4954C12.0518 17.402 13.6008 16.7835 14.8421 15.7332C16.0834 14.6828 16.9497 13.2575 17.3105 11.672C17.6714 10.0865 17.5071 8.42667 16.8426 6.94262C16.178 5.45857 15.0491 4.2307 13.6261 3.44401C12.203 2.65732 10.5628 2.35442 8.9526 2.58097C7.34241 2.80751 5.84946 3.55122 4.6987 4.70004L0.832031 8.33337" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_589_13964">
                                              <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M13 12.0001L18 7.00004L13 2" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M2 18.0001V11C2 9.93916 2.42143 8.92173 3.17158 8.17158C3.92173 7.42143 4.93916 7 6.00003 7H18.0001" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    
                                  </ul>
                                </td>
                              </tr>
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
                                <td>78</td>
                                <td>50</td>
                                <td>134</td>
                                <td>
                                  <ul class="tags">
                                    <li class="bg-shortlist">Shortlisted: 12</li>
                                    <li class="bg-interview">Interviewed: 08</li>
                                    <li class="bg-hired">Hired: 02</li>
                                    <li class="bg-offered">OL: 01</li>
                                  </ul>
                                </td>
                                <td>
                                  <ul class="links">
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M2.5 5.0013H4.16667M4.16667 5.0013H17.5M4.16667 5.0013V16.668C4.16667 17.11 4.34226 17.5339 4.65482 17.8465C4.96738 18.159 5.39131 18.3346 5.83333 18.3346H14.1667C14.6087 18.3346 15.0326 18.159 15.3452 17.8465C15.6577 17.5339 15.8333 17.11 15.8333 16.668V5.0013H4.16667ZM6.66667 5.0013V3.33464C6.66667 2.89261 6.84226 2.46868 7.15482 2.15612C7.46738 1.84356 7.89131 1.66797 8.33333 1.66797H11.6667C12.1087 1.66797 12.5326 1.84356 12.8452 2.15612C13.1577 2.46868 13.3333 2.89261 13.3333 3.33464V5.0013M8.33333 9.16797V14.168M11.6667 9.16797V14.168" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <g clip-path="url(#clip0_589_13964)">
                                            <path d="M0.832031 3.33203V8.33203H5.83203" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2.9237 12.5C3.46403 14.0337 4.48814 15.3502 5.84174 16.2512C7.19535 17.1522 8.8051 17.5889 10.4285 17.4954C12.0518 17.402 13.6008 16.7835 14.8421 15.7332C16.0834 14.6828 16.9497 13.2575 17.3105 11.672C17.6714 10.0865 17.5071 8.42667 16.8426 6.94262C16.178 5.45857 15.0491 4.2307 13.6261 3.44401C12.203 2.65732 10.5628 2.35442 8.9526 2.58097C7.34241 2.80751 5.84946 3.55122 4.6987 4.70004L0.832031 8.33337" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_589_13964">
                                              <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M13 12.0001L18 7.00004L13 2" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M2 18.0001V11C2 9.93916 2.42143 8.92173 3.17158 8.17158C3.92173 7.42143 4.93916 7 6.00003 7H18.0001" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    
                                  </ul>
                                </td>
                              </tr>
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
                                <td>78</td>
                                <td>50</td>
                                <td>134</td>
                                <td>
                                  <ul class="tags">
                                    <li class="bg-shortlist">Shortlisted: 12</li>
                                    <li class="bg-interview">Interviewed: 08</li>
                                    <li class="bg-hired">Hired: 02</li>
                                    <li class="bg-offered">OL: 01</li>
                                  </ul>
                                </td>
                                <td>
                                  <ul class="links">
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M2.5 5.0013H4.16667M4.16667 5.0013H17.5M4.16667 5.0013V16.668C4.16667 17.11 4.34226 17.5339 4.65482 17.8465C4.96738 18.159 5.39131 18.3346 5.83333 18.3346H14.1667C14.6087 18.3346 15.0326 18.159 15.3452 17.8465C15.6577 17.5339 15.8333 17.11 15.8333 16.668V5.0013H4.16667ZM6.66667 5.0013V3.33464C6.66667 2.89261 6.84226 2.46868 7.15482 2.15612C7.46738 1.84356 7.89131 1.66797 8.33333 1.66797H11.6667C12.1087 1.66797 12.5326 1.84356 12.8452 2.15612C13.1577 2.46868 13.3333 2.89261 13.3333 3.33464V5.0013M8.33333 9.16797V14.168M11.6667 9.16797V14.168" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <g clip-path="url(#clip0_589_13964)">
                                            <path d="M0.832031 3.33203V8.33203H5.83203" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2.9237 12.5C3.46403 14.0337 4.48814 15.3502 5.84174 16.2512C7.19535 17.1522 8.8051 17.5889 10.4285 17.4954C12.0518 17.402 13.6008 16.7835 14.8421 15.7332C16.0834 14.6828 16.9497 13.2575 17.3105 11.672C17.6714 10.0865 17.5071 8.42667 16.8426 6.94262C16.178 5.45857 15.0491 4.2307 13.6261 3.44401C12.203 2.65732 10.5628 2.35442 8.9526 2.58097C7.34241 2.80751 5.84946 3.55122 4.6987 4.70004L0.832031 8.33337" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_589_13964">
                                              <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M13 12.0001L18 7.00004L13 2" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M2 18.0001V11C2 9.93916 2.42143 8.92173 3.17158 8.17158C3.92173 7.42143 4.93916 7 6.00003 7H18.0001" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
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
                          id="draft-job"
                          role="tabpanel"
                          aria-labelledby="draft-job-tab"
                          tabindex="0"
                        >
                        <div class="filter-section">
                          <div class="search-filed">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M17.5 17.5L13.875 13.875M15.8333 9.16667C15.8333 12.8486 12.8486 15.8333 9.16667 15.8333C5.48477 15.8333 2.5 12.8486 2.5 9.16667C2.5 5.48477 5.48477 2.5 9.16667 2.5C12.8486 2.5 15.8333 5.48477 15.8333 9.16667Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <input type="search" name="search" id="searchFileld" placeholder="Search">
                          </div>
                          <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M5 10H15M2.5 5H17.5M7.5 15H12.5" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>Filters</span>
                          </button>
                        </div>
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
                                <td>78</td>
                                <td>50</td>
                                <td>134</td>
                                <td>
                                  <ul class="tags">
                                    <li class="bg-shortlist">Shortlisted: 00</li>
                                    <li class="bg-interview">Interviewed: 00</li>
                                    <li class="bg-hired">Hired: 00</li>
                                    <li class="bg-offered">OL: 00</li>
                                  </ul>
                                </td>
                                <td>
                                  <ul class="links">
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M2.5 5.0013H4.16667M4.16667 5.0013H17.5M4.16667 5.0013V16.668C4.16667 17.11 4.34226 17.5339 4.65482 17.8465C4.96738 18.159 5.39131 18.3346 5.83333 18.3346H14.1667C14.6087 18.3346 15.0326 18.159 15.3452 17.8465C15.6577 17.5339 15.8333 17.11 15.8333 16.668V5.0013H4.16667ZM6.66667 5.0013V3.33464C6.66667 2.89261 6.84226 2.46868 7.15482 2.15612C7.46738 1.84356 7.89131 1.66797 8.33333 1.66797H11.6667C12.1087 1.66797 12.5326 1.84356 12.8452 2.15612C13.1577 2.46868 13.3333 2.89261 13.3333 3.33464V5.0013M8.33333 9.16797V14.168M11.6667 9.16797V14.168" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <g clip-path="url(#clip0_1714_726)">
                                            <path d="M14.168 2.49895C14.3868 2.28008 14.6467 2.10646 14.9326 1.98801C15.2186 1.86956 15.5251 1.80859 15.8346 1.80859C16.1442 1.80859 16.4507 1.86956 16.7366 1.98801C17.0226 2.10646 17.2824 2.28008 17.5013 2.49895C17.7202 2.71782 17.8938 2.97766 18.0122 3.26362C18.1307 3.54959 18.1917 3.85609 18.1917 4.16562C18.1917 4.47514 18.1307 4.78164 18.0122 5.06761C17.8938 5.35358 17.7202 5.61341 17.5013 5.83228L6.2513 17.0823L1.66797 18.3323L2.91797 13.7489L14.168 2.49895Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_1714_726">
                                              <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M13 12.0001L18 7.00004L13 2" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M2 18.0001V11C2 9.93916 2.42143 8.92173 3.17158 8.17158C3.92173 7.42143 4.93916 7 6.00003 7H18.0001" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M14.86 14.8586C13.4614 15.9247 11.7584 16.5153 10 16.5441C4.27273 16.5441 1 9.9986 1 9.9986C2.01773 8.10197 3.42929 6.44492 5.14 5.1386M8.28182 3.64951C8.845 3.51768 9.4216 3.45179 10 3.45315C15.7273 3.45315 19 9.9986 19 9.9986C18.5033 10.9277 17.911 11.8025 17.2327 12.6086M11.7345 11.7331C11.5098 11.9743 11.2388 12.1677 10.9378 12.3019C10.6367 12.436 10.3116 12.5082 9.98207 12.514C9.6525 12.5198 9.32513 12.4592 9.0195 12.3357C8.71387 12.2123 8.43623 12.0285 8.20315 11.7955C7.97007 11.5624 7.78632 11.2847 7.66287 10.9791C7.53942 10.6735 7.47879 10.3461 7.48461 10.0165C7.49042 9.68695 7.56256 9.36193 7.69672 9.06084C7.83087 8.75975 8.0243 8.48877 8.26545 8.26405" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M1 1L19 19" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
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
                                <td>78</td>
                                <td>50</td>
                                <td>134</td>
                                <td>
                                  <ul class="tags">
                                    <li class="bg-shortlist">Shortlisted: 00</li>
                                    <li class="bg-interview">Interviewed: 00</li>
                                    <li class="bg-hired">Hired: 00</li>
                                    <li class="bg-offered">OL: 00</li>
                                  </ul>
                                </td>
                                <td>
                                  <ul class="links">
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M2.5 5.0013H4.16667M4.16667 5.0013H17.5M4.16667 5.0013V16.668C4.16667 17.11 4.34226 17.5339 4.65482 17.8465C4.96738 18.159 5.39131 18.3346 5.83333 18.3346H14.1667C14.6087 18.3346 15.0326 18.159 15.3452 17.8465C15.6577 17.5339 15.8333 17.11 15.8333 16.668V5.0013H4.16667ZM6.66667 5.0013V3.33464C6.66667 2.89261 6.84226 2.46868 7.15482 2.15612C7.46738 1.84356 7.89131 1.66797 8.33333 1.66797H11.6667C12.1087 1.66797 12.5326 1.84356 12.8452 2.15612C13.1577 2.46868 13.3333 2.89261 13.3333 3.33464V5.0013M8.33333 9.16797V14.168M11.6667 9.16797V14.168" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <g clip-path="url(#clip0_1714_726)">
                                            <path d="M14.168 2.49895C14.3868 2.28008 14.6467 2.10646 14.9326 1.98801C15.2186 1.86956 15.5251 1.80859 15.8346 1.80859C16.1442 1.80859 16.4507 1.86956 16.7366 1.98801C17.0226 2.10646 17.2824 2.28008 17.5013 2.49895C17.7202 2.71782 17.8938 2.97766 18.0122 3.26362C18.1307 3.54959 18.1917 3.85609 18.1917 4.16562C18.1917 4.47514 18.1307 4.78164 18.0122 5.06761C17.8938 5.35358 17.7202 5.61341 17.5013 5.83228L6.2513 17.0823L1.66797 18.3323L2.91797 13.7489L14.168 2.49895Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_1714_726">
                                              <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M13 12.0001L18 7.00004L13 2" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M2 18.0001V11C2 9.93916 2.42143 8.92173 3.17158 8.17158C3.92173 7.42143 4.93916 7 6.00003 7H18.0001" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M14.86 14.8586C13.4614 15.9247 11.7584 16.5153 10 16.5441C4.27273 16.5441 1 9.9986 1 9.9986C2.01773 8.10197 3.42929 6.44492 5.14 5.1386M8.28182 3.64951C8.845 3.51768 9.4216 3.45179 10 3.45315C15.7273 3.45315 19 9.9986 19 9.9986C18.5033 10.9277 17.911 11.8025 17.2327 12.6086M11.7345 11.7331C11.5098 11.9743 11.2388 12.1677 10.9378 12.3019C10.6367 12.436 10.3116 12.5082 9.98207 12.514C9.6525 12.5198 9.32513 12.4592 9.0195 12.3357C8.71387 12.2123 8.43623 12.0285 8.20315 11.7955C7.97007 11.5624 7.78632 11.2847 7.66287 10.9791C7.53942 10.6735 7.47879 10.3461 7.48461 10.0165C7.49042 9.68695 7.56256 9.36193 7.69672 9.06084C7.83087 8.75975 8.0243 8.48877 8.26545 8.26405" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M1 1L19 19" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
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
                                <td>78</td>
                                <td>50</td>
                                <td>134</td>
                                <td>
                                  <ul class="tags">
                                    <li class="bg-shortlist">Shortlisted: 00</li>
                                    <li class="bg-interview">Interviewed: 00</li>
                                    <li class="bg-hired">Hired: 00</li>
                                    <li class="bg-offered">OL: 00</li>
                                  </ul>
                                </td>
                                <td>
                                  <ul class="links">
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M2.5 5.0013H4.16667M4.16667 5.0013H17.5M4.16667 5.0013V16.668C4.16667 17.11 4.34226 17.5339 4.65482 17.8465C4.96738 18.159 5.39131 18.3346 5.83333 18.3346H14.1667C14.6087 18.3346 15.0326 18.159 15.3452 17.8465C15.6577 17.5339 15.8333 17.11 15.8333 16.668V5.0013H4.16667ZM6.66667 5.0013V3.33464C6.66667 2.89261 6.84226 2.46868 7.15482 2.15612C7.46738 1.84356 7.89131 1.66797 8.33333 1.66797H11.6667C12.1087 1.66797 12.5326 1.84356 12.8452 2.15612C13.1577 2.46868 13.3333 2.89261 13.3333 3.33464V5.0013M8.33333 9.16797V14.168M11.6667 9.16797V14.168" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <g clip-path="url(#clip0_1714_726)">
                                            <path d="M14.168 2.49895C14.3868 2.28008 14.6467 2.10646 14.9326 1.98801C15.2186 1.86956 15.5251 1.80859 15.8346 1.80859C16.1442 1.80859 16.4507 1.86956 16.7366 1.98801C17.0226 2.10646 17.2824 2.28008 17.5013 2.49895C17.7202 2.71782 17.8938 2.97766 18.0122 3.26362C18.1307 3.54959 18.1917 3.85609 18.1917 4.16562C18.1917 4.47514 18.1307 4.78164 18.0122 5.06761C17.8938 5.35358 17.7202 5.61341 17.5013 5.83228L6.2513 17.0823L1.66797 18.3323L2.91797 13.7489L14.168 2.49895Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_1714_726">
                                              <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M13 12.0001L18 7.00004L13 2" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M2 18.0001V11C2 9.93916 2.42143 8.92173 3.17158 8.17158C3.92173 7.42143 4.93916 7 6.00003 7H18.0001" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M14.86 14.8586C13.4614 15.9247 11.7584 16.5153 10 16.5441C4.27273 16.5441 1 9.9986 1 9.9986C2.01773 8.10197 3.42929 6.44492 5.14 5.1386M8.28182 3.64951C8.845 3.51768 9.4216 3.45179 10 3.45315C15.7273 3.45315 19 9.9986 19 9.9986C18.5033 10.9277 17.911 11.8025 17.2327 12.6086M11.7345 11.7331C11.5098 11.9743 11.2388 12.1677 10.9378 12.3019C10.6367 12.436 10.3116 12.5082 9.98207 12.514C9.6525 12.5198 9.32513 12.4592 9.0195 12.3357C8.71387 12.2123 8.43623 12.0285 8.20315 11.7955C7.97007 11.5624 7.78632 11.2847 7.66287 10.9791C7.53942 10.6735 7.47879 10.3461 7.48461 10.0165C7.49042 9.68695 7.56256 9.36193 7.69672 9.06084C7.83087 8.75975 8.0243 8.48877 8.26545 8.26405" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M1 1L19 19" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
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
                                <td>78</td>
                                <td>50</td>
                                <td>134</td>
                                <td>
                                  <ul class="tags">
                                    <li class="bg-shortlist">Shortlisted: 00</li>
                                    <li class="bg-interview">Interviewed: 00</li>
                                    <li class="bg-hired">Hired: 00</li>
                                    <li class="bg-offered">OL: 00</li>
                                  </ul>
                                </td>
                                <td>
                                  <ul class="links">
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M2.5 5.0013H4.16667M4.16667 5.0013H17.5M4.16667 5.0013V16.668C4.16667 17.11 4.34226 17.5339 4.65482 17.8465C4.96738 18.159 5.39131 18.3346 5.83333 18.3346H14.1667C14.6087 18.3346 15.0326 18.159 15.3452 17.8465C15.6577 17.5339 15.8333 17.11 15.8333 16.668V5.0013H4.16667ZM6.66667 5.0013V3.33464C6.66667 2.89261 6.84226 2.46868 7.15482 2.15612C7.46738 1.84356 7.89131 1.66797 8.33333 1.66797H11.6667C12.1087 1.66797 12.5326 1.84356 12.8452 2.15612C13.1577 2.46868 13.3333 2.89261 13.3333 3.33464V5.0013M8.33333 9.16797V14.168M11.6667 9.16797V14.168" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <g clip-path="url(#clip0_1714_726)">
                                            <path d="M14.168 2.49895C14.3868 2.28008 14.6467 2.10646 14.9326 1.98801C15.2186 1.86956 15.5251 1.80859 15.8346 1.80859C16.1442 1.80859 16.4507 1.86956 16.7366 1.98801C17.0226 2.10646 17.2824 2.28008 17.5013 2.49895C17.7202 2.71782 17.8938 2.97766 18.0122 3.26362C18.1307 3.54959 18.1917 3.85609 18.1917 4.16562C18.1917 4.47514 18.1307 4.78164 18.0122 5.06761C17.8938 5.35358 17.7202 5.61341 17.5013 5.83228L6.2513 17.0823L1.66797 18.3323L2.91797 13.7489L14.168 2.49895Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_1714_726">
                                              <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M13 12.0001L18 7.00004L13 2" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M2 18.0001V11C2 9.93916 2.42143 8.92173 3.17158 8.17158C3.92173 7.42143 4.93916 7 6.00003 7H18.0001" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M14.86 14.8586C13.4614 15.9247 11.7584 16.5153 10 16.5441C4.27273 16.5441 1 9.9986 1 9.9986C2.01773 8.10197 3.42929 6.44492 5.14 5.1386M8.28182 3.64951C8.845 3.51768 9.4216 3.45179 10 3.45315C15.7273 3.45315 19 9.9986 19 9.9986C18.5033 10.9277 17.911 11.8025 17.2327 12.6086M11.7345 11.7331C11.5098 11.9743 11.2388 12.1677 10.9378 12.3019C10.6367 12.436 10.3116 12.5082 9.98207 12.514C9.6525 12.5198 9.32513 12.4592 9.0195 12.3357C8.71387 12.2123 8.43623 12.0285 8.20315 11.7955C7.97007 11.5624 7.78632 11.2847 7.66287 10.9791C7.53942 10.6735 7.47879 10.3461 7.48461 10.0165C7.49042 9.68695 7.56256 9.36193 7.69672 9.06084C7.83087 8.75975 8.0243 8.48877 8.26545 8.26405" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M1 1L19 19" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
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
                                <td>78</td>
                                <td>50</td>
                                <td>134</td>
                                <td>
                                  <ul class="tags">
                                    <li class="bg-shortlist">Shortlisted: 00</li>
                                    <li class="bg-interview">Interviewed: 00</li>
                                    <li class="bg-hired">Hired: 00</li>
                                    <li class="bg-offered">OL: 00</li>
                                  </ul>
                                </td>
                                <td>
                                  <ul class="links">
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M2.5 5.0013H4.16667M4.16667 5.0013H17.5M4.16667 5.0013V16.668C4.16667 17.11 4.34226 17.5339 4.65482 17.8465C4.96738 18.159 5.39131 18.3346 5.83333 18.3346H14.1667C14.6087 18.3346 15.0326 18.159 15.3452 17.8465C15.6577 17.5339 15.8333 17.11 15.8333 16.668V5.0013H4.16667ZM6.66667 5.0013V3.33464C6.66667 2.89261 6.84226 2.46868 7.15482 2.15612C7.46738 1.84356 7.89131 1.66797 8.33333 1.66797H11.6667C12.1087 1.66797 12.5326 1.84356 12.8452 2.15612C13.1577 2.46868 13.3333 2.89261 13.3333 3.33464V5.0013M8.33333 9.16797V14.168M11.6667 9.16797V14.168" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <g clip-path="url(#clip0_1714_726)">
                                            <path d="M14.168 2.49895C14.3868 2.28008 14.6467 2.10646 14.9326 1.98801C15.2186 1.86956 15.5251 1.80859 15.8346 1.80859C16.1442 1.80859 16.4507 1.86956 16.7366 1.98801C17.0226 2.10646 17.2824 2.28008 17.5013 2.49895C17.7202 2.71782 17.8938 2.97766 18.0122 3.26362C18.1307 3.54959 18.1917 3.85609 18.1917 4.16562C18.1917 4.47514 18.1307 4.78164 18.0122 5.06761C17.8938 5.35358 17.7202 5.61341 17.5013 5.83228L6.2513 17.0823L1.66797 18.3323L2.91797 13.7489L14.168 2.49895Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_1714_726">
                                              <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                          </defs>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M13 12.0001L18 7.00004L13 2" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M2 18.0001V11C2 9.93916 2.42143 8.92173 3.17158 8.17158C3.92173 7.42143 4.93916 7 6.00003 7H18.0001" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M14.86 14.8586C13.4614 15.9247 11.7584 16.5153 10 16.5441C4.27273 16.5441 1 9.9986 1 9.9986C2.01773 8.10197 3.42929 6.44492 5.14 5.1386M8.28182 3.64951C8.845 3.51768 9.4216 3.45179 10 3.45315C15.7273 3.45315 19 9.9986 19 9.9986C18.5033 10.9277 17.911 11.8025 17.2327 12.6086M11.7345 11.7331C11.5098 11.9743 11.2388 12.1677 10.9378 12.3019C10.6367 12.436 10.3116 12.5082 9.98207 12.514C9.6525 12.5198 9.32513 12.4592 9.0195 12.3357C8.71387 12.2123 8.43623 12.0285 8.20315 11.7955C7.97007 11.5624 7.78632 11.2847 7.66287 10.9791C7.53942 10.6735 7.47879 10.3461 7.48461 10.0165C7.49042 9.68695 7.56256 9.36193 7.69672 9.06084C7.83087 8.75975 8.0243 8.48877 8.26545 8.26405" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M1 1L19 19" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
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

              
            </div>
            <!-- Bottom Footer -->
           <?php include 'view/bottom-footer.php'; ?>
          </div>
        </div>
      </div>
    </main>
    <!-- End Main Section -->

    

    
    <?php include 'view/footer.php'; ?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
