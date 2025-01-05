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
                  <div class="col-lg-6 col-md-5 col-sm-6">
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
                  <div class="col-lg-6 col-md-7 col-sm-6">
                    <div class="select-filter">
                      <div class="form-group">
                        <select
                          class="form-select"
                          id="numberOfEmployees"
                          aria-label="Default select example"
                          fdprocessedid="ngsxem"
                        >
                          <option value="1" selected="">Select Job</option>
                          <option value="2">A</option>
                          <option value="3">B</option>
                        </select>
                      </div>
                      <button>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="20"
                          height="20"
                          viewBox="0 0 20 20"
                          fill="none"
                        >
                          <path
                            d="M5 10H15M2.5 5H17.5M7.5 15H12.5"
                            stroke="#344054"
                            stroke-width="1.67"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          ></path>
                        </svg>
                        <span>Filters</span>
                      </button>
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
                      <h3>Recent Applicants <span>100</span></h3>
                    </div>
                    <div class="all-applicants">
                      <div class="row">
                        <div class="col-md-12">
                          <div
                            class="applicants-wrapper all-applicants-wrapper"
                          >
                            <a
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#participant"
                              class="text-decoration-none"
                            >
                              <div class="card">
                                <div class="card-body">
                                  <div class="description">
                                    <div class="image">
                                      <img
                                        src="./img/dashboard/applicants/applicants-1.png"
                                        alt="Applicants - 1"
                                        class="img-fluid"
                                      />
                                    </div>
                                    <div class="content">
                                      <h2>Jason Ruly <span>(30)</span></h2>
                                      <h3>
                                        UI/UX Designer
                                        <span
                                          >(6mo) At, Grameen Phone ltd.</span
                                        >
                                      </h3>
                                    </div>
                                  </div>
                                  <div class="location">
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M2.66276 4.83203H11.9961C12.2262 4.83203 12.4128 5.01858 12.4128 5.2487V11.082C12.4128 11.3122 12.2262 11.4987 11.9961 11.4987H2.66276C2.43264 11.4987 2.24609 11.3122 2.24609 11.082V5.2487C2.24609 5.01858 2.43264 4.83203 2.66276 4.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <mask
                                          id="path-2-inside-1_1088_12133"
                                          fill="white"
                                        >
                                          <path
                                            d="M9.66276 12.25V2.91667C9.66276 2.60725 9.53984 2.3105 9.32105 2.09171C9.10226 1.87292 8.80551 1.75 8.49609 1.75H6.16276C5.85334 1.75 5.5566 1.87292 5.3378 2.09171C5.11901 2.3105 4.99609 2.60725 4.99609 2.91667V12.25"
                                          />
                                        </mask>
                                        <path
                                          d="M8.16276 12.25C8.16276 13.0784 8.83433 13.75 9.66276 13.75C10.4912 13.75 11.1628 13.0784 11.1628 12.25H8.16276ZM8.49609 1.75V0.25V1.75ZM6.16276 1.75V0.25V1.75ZM4.99609 2.91667H3.49609H4.99609ZM3.49609 12.25C3.49609 13.0784 4.16767 13.75 4.99609 13.75C5.82452 13.75 6.49609 13.0784 6.49609 12.25H3.49609ZM11.1628 12.25V2.91667H8.16276V12.25H11.1628ZM11.1628 2.91667C11.1628 2.20942 10.8818 1.53115 10.3817 1.03105L8.26039 3.15237C8.19788 3.08986 8.16276 3.00507 8.16276 2.91667H11.1628ZM10.3817 1.03105C9.88161 0.530952 9.20334 0.25 8.49609 0.25L8.49609 3.25C8.40769 3.25 8.3229 3.21488 8.26039 3.15237L10.3817 1.03105ZM8.49609 0.25H6.16276V3.25H8.49609V0.25ZM6.16276 0.25C5.45552 0.25 4.77724 0.530952 4.27714 1.03105L6.39846 3.15237C6.33595 3.21488 6.25117 3.25 6.16276 3.25V0.25ZM4.27714 1.03105C3.77705 1.53115 3.49609 2.20942 3.49609 2.91667H6.49609C6.49609 3.00507 6.46097 3.08986 6.39846 3.15237L4.27714 1.03105ZM3.49609 2.91667V12.25H6.49609V2.91667H3.49609Z"
                                          fill="black"
                                          mask="url(#path-2-inside-1_1088_12133)"
                                        />
                                      </svg>
                                      <span>$ 1,000</span>
                                    </div>
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M12.0898 5.83203C12.0898 7.57224 10.953 9.28522 9.67038 10.6391C9.04438 11.2999 8.41584 11.8414 7.94296 12.218C7.81161 12.3226 7.69275 12.4141 7.58985 12.4915C7.48694 12.4141 7.36807 12.3226 7.23673 12.218C6.76384 11.8414 6.1353 11.2999 5.50931 10.6391C4.22665 9.28522 3.08984 7.57224 3.08984 5.83203C3.08984 4.63856 3.56395 3.49396 4.40786 2.65005C5.25178 1.80614 6.39637 1.33203 7.58984 1.33203C8.78332 1.33203 9.92791 1.80614 10.7718 2.65005C11.6157 3.49396 12.0898 4.63856 12.0898 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <path
                                          d="M8.58984 5.83203C8.58984 6.38432 8.14213 6.83203 7.58984 6.83203C7.03756 6.83203 6.58984 6.38432 6.58984 5.83203C6.58984 5.27975 7.03756 4.83203 7.58984 4.83203C8.14213 4.83203 8.58984 5.27975 8.58984 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                      </svg>
                                      <span>Dhaka, Bangladesh</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#participant"
                              class="text-decoration-none"
                            >
                              <div class="card">
                                <div class="card-body">
                                  <div class="description">
                                    <div class="image">
                                      <img
                                        src="./img/dashboard/applicants/applicants-2.png"
                                        alt="Applicants - 1"
                                        class="img-fluid"
                                      />
                                    </div>
                                    <div class="content">
                                      <h2>Jason Ruly <span>(30)</span></h2>
                                      <h3>
                                        UI/UX Designer
                                        <span
                                          >(6mo) At, Grameen Phone ltd.</span
                                        >
                                      </h3>
                                    </div>
                                  </div>
                                  <div class="location">
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M2.66276 4.83203H11.9961C12.2262 4.83203 12.4128 5.01858 12.4128 5.2487V11.082C12.4128 11.3122 12.2262 11.4987 11.9961 11.4987H2.66276C2.43264 11.4987 2.24609 11.3122 2.24609 11.082V5.2487C2.24609 5.01858 2.43264 4.83203 2.66276 4.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <mask
                                          id="path-2-inside-1_1088_12133"
                                          fill="white"
                                        >
                                          <path
                                            d="M9.66276 12.25V2.91667C9.66276 2.60725 9.53984 2.3105 9.32105 2.09171C9.10226 1.87292 8.80551 1.75 8.49609 1.75H6.16276C5.85334 1.75 5.5566 1.87292 5.3378 2.09171C5.11901 2.3105 4.99609 2.60725 4.99609 2.91667V12.25"
                                          />
                                        </mask>
                                        <path
                                          d="M8.16276 12.25C8.16276 13.0784 8.83433 13.75 9.66276 13.75C10.4912 13.75 11.1628 13.0784 11.1628 12.25H8.16276ZM8.49609 1.75V0.25V1.75ZM6.16276 1.75V0.25V1.75ZM4.99609 2.91667H3.49609H4.99609ZM3.49609 12.25C3.49609 13.0784 4.16767 13.75 4.99609 13.75C5.82452 13.75 6.49609 13.0784 6.49609 12.25H3.49609ZM11.1628 12.25V2.91667H8.16276V12.25H11.1628ZM11.1628 2.91667C11.1628 2.20942 10.8818 1.53115 10.3817 1.03105L8.26039 3.15237C8.19788 3.08986 8.16276 3.00507 8.16276 2.91667H11.1628ZM10.3817 1.03105C9.88161 0.530952 9.20334 0.25 8.49609 0.25L8.49609 3.25C8.40769 3.25 8.3229 3.21488 8.26039 3.15237L10.3817 1.03105ZM8.49609 0.25H6.16276V3.25H8.49609V0.25ZM6.16276 0.25C5.45552 0.25 4.77724 0.530952 4.27714 1.03105L6.39846 3.15237C6.33595 3.21488 6.25117 3.25 6.16276 3.25V0.25ZM4.27714 1.03105C3.77705 1.53115 3.49609 2.20942 3.49609 2.91667H6.49609C6.49609 3.00507 6.46097 3.08986 6.39846 3.15237L4.27714 1.03105ZM3.49609 2.91667V12.25H6.49609V2.91667H3.49609Z"
                                          fill="black"
                                          mask="url(#path-2-inside-1_1088_12133)"
                                        />
                                      </svg>
                                      <span>$ 1,000</span>
                                    </div>
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M12.0898 5.83203C12.0898 7.57224 10.953 9.28522 9.67038 10.6391C9.04438 11.2999 8.41584 11.8414 7.94296 12.218C7.81161 12.3226 7.69275 12.4141 7.58985 12.4915C7.48694 12.4141 7.36807 12.3226 7.23673 12.218C6.76384 11.8414 6.1353 11.2999 5.50931 10.6391C4.22665 9.28522 3.08984 7.57224 3.08984 5.83203C3.08984 4.63856 3.56395 3.49396 4.40786 2.65005C5.25178 1.80614 6.39637 1.33203 7.58984 1.33203C8.78332 1.33203 9.92791 1.80614 10.7718 2.65005C11.6157 3.49396 12.0898 4.63856 12.0898 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <path
                                          d="M8.58984 5.83203C8.58984 6.38432 8.14213 6.83203 7.58984 6.83203C7.03756 6.83203 6.58984 6.38432 6.58984 5.83203C6.58984 5.27975 7.03756 4.83203 7.58984 4.83203C8.14213 4.83203 8.58984 5.27975 8.58984 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                      </svg>
                                      <span>Dhaka, Bangladesh</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#participant"
                              class="text-decoration-none"
                            >
                              <div class="card">
                                <div class="card-body">
                                  <div class="description">
                                    <div class="image">
                                      <img
                                        src="./img/dashboard/applicants/applicants-3.png"
                                        alt="Applicants - 1"
                                        class="img-fluid"
                                      />
                                    </div>
                                    <div class="content">
                                      <h2>Jason Ruly <span>(30)</span></h2>
                                      <h3>
                                        UI/UX Designer
                                        <span
                                          >(6mo) At, Grameen Phone ltd.</span
                                        >
                                      </h3>
                                    </div>
                                  </div>
                                  <div class="location">
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M2.66276 4.83203H11.9961C12.2262 4.83203 12.4128 5.01858 12.4128 5.2487V11.082C12.4128 11.3122 12.2262 11.4987 11.9961 11.4987H2.66276C2.43264 11.4987 2.24609 11.3122 2.24609 11.082V5.2487C2.24609 5.01858 2.43264 4.83203 2.66276 4.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <mask
                                          id="path-2-inside-1_1088_12133"
                                          fill="white"
                                        >
                                          <path
                                            d="M9.66276 12.25V2.91667C9.66276 2.60725 9.53984 2.3105 9.32105 2.09171C9.10226 1.87292 8.80551 1.75 8.49609 1.75H6.16276C5.85334 1.75 5.5566 1.87292 5.3378 2.09171C5.11901 2.3105 4.99609 2.60725 4.99609 2.91667V12.25"
                                          />
                                        </mask>
                                        <path
                                          d="M8.16276 12.25C8.16276 13.0784 8.83433 13.75 9.66276 13.75C10.4912 13.75 11.1628 13.0784 11.1628 12.25H8.16276ZM8.49609 1.75V0.25V1.75ZM6.16276 1.75V0.25V1.75ZM4.99609 2.91667H3.49609H4.99609ZM3.49609 12.25C3.49609 13.0784 4.16767 13.75 4.99609 13.75C5.82452 13.75 6.49609 13.0784 6.49609 12.25H3.49609ZM11.1628 12.25V2.91667H8.16276V12.25H11.1628ZM11.1628 2.91667C11.1628 2.20942 10.8818 1.53115 10.3817 1.03105L8.26039 3.15237C8.19788 3.08986 8.16276 3.00507 8.16276 2.91667H11.1628ZM10.3817 1.03105C9.88161 0.530952 9.20334 0.25 8.49609 0.25L8.49609 3.25C8.40769 3.25 8.3229 3.21488 8.26039 3.15237L10.3817 1.03105ZM8.49609 0.25H6.16276V3.25H8.49609V0.25ZM6.16276 0.25C5.45552 0.25 4.77724 0.530952 4.27714 1.03105L6.39846 3.15237C6.33595 3.21488 6.25117 3.25 6.16276 3.25V0.25ZM4.27714 1.03105C3.77705 1.53115 3.49609 2.20942 3.49609 2.91667H6.49609C6.49609 3.00507 6.46097 3.08986 6.39846 3.15237L4.27714 1.03105ZM3.49609 2.91667V12.25H6.49609V2.91667H3.49609Z"
                                          fill="black"
                                          mask="url(#path-2-inside-1_1088_12133)"
                                        />
                                      </svg>
                                      <span>$ 1,000</span>
                                    </div>
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M12.0898 5.83203C12.0898 7.57224 10.953 9.28522 9.67038 10.6391C9.04438 11.2999 8.41584 11.8414 7.94296 12.218C7.81161 12.3226 7.69275 12.4141 7.58985 12.4915C7.48694 12.4141 7.36807 12.3226 7.23673 12.218C6.76384 11.8414 6.1353 11.2999 5.50931 10.6391C4.22665 9.28522 3.08984 7.57224 3.08984 5.83203C3.08984 4.63856 3.56395 3.49396 4.40786 2.65005C5.25178 1.80614 6.39637 1.33203 7.58984 1.33203C8.78332 1.33203 9.92791 1.80614 10.7718 2.65005C11.6157 3.49396 12.0898 4.63856 12.0898 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <path
                                          d="M8.58984 5.83203C8.58984 6.38432 8.14213 6.83203 7.58984 6.83203C7.03756 6.83203 6.58984 6.38432 6.58984 5.83203C6.58984 5.27975 7.03756 4.83203 7.58984 4.83203C8.14213 4.83203 8.58984 5.27975 8.58984 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                      </svg>
                                      <span>Dhaka, Bangladesh</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#participant"
                              class="text-decoration-none"
                            >
                              <div class="card">
                                <div class="card-body">
                                  <div class="description">
                                    <div class="image">
                                      <img
                                        src="./img/dashboard/applicants/applicants-4.png"
                                        alt="Applicants - 1"
                                        class="img-fluid"
                                      />
                                    </div>
                                    <div class="content">
                                      <h2>Jason Ruly <span>(30)</span></h2>
                                      <h3>
                                        UI/UX Designer
                                        <span
                                          >(6mo) At, Grameen Phone ltd.</span
                                        >
                                      </h3>
                                    </div>
                                  </div>
                                  <div class="location">
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M2.66276 4.83203H11.9961C12.2262 4.83203 12.4128 5.01858 12.4128 5.2487V11.082C12.4128 11.3122 12.2262 11.4987 11.9961 11.4987H2.66276C2.43264 11.4987 2.24609 11.3122 2.24609 11.082V5.2487C2.24609 5.01858 2.43264 4.83203 2.66276 4.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <mask
                                          id="path-2-inside-1_1088_12133"
                                          fill="white"
                                        >
                                          <path
                                            d="M9.66276 12.25V2.91667C9.66276 2.60725 9.53984 2.3105 9.32105 2.09171C9.10226 1.87292 8.80551 1.75 8.49609 1.75H6.16276C5.85334 1.75 5.5566 1.87292 5.3378 2.09171C5.11901 2.3105 4.99609 2.60725 4.99609 2.91667V12.25"
                                          />
                                        </mask>
                                        <path
                                          d="M8.16276 12.25C8.16276 13.0784 8.83433 13.75 9.66276 13.75C10.4912 13.75 11.1628 13.0784 11.1628 12.25H8.16276ZM8.49609 1.75V0.25V1.75ZM6.16276 1.75V0.25V1.75ZM4.99609 2.91667H3.49609H4.99609ZM3.49609 12.25C3.49609 13.0784 4.16767 13.75 4.99609 13.75C5.82452 13.75 6.49609 13.0784 6.49609 12.25H3.49609ZM11.1628 12.25V2.91667H8.16276V12.25H11.1628ZM11.1628 2.91667C11.1628 2.20942 10.8818 1.53115 10.3817 1.03105L8.26039 3.15237C8.19788 3.08986 8.16276 3.00507 8.16276 2.91667H11.1628ZM10.3817 1.03105C9.88161 0.530952 9.20334 0.25 8.49609 0.25L8.49609 3.25C8.40769 3.25 8.3229 3.21488 8.26039 3.15237L10.3817 1.03105ZM8.49609 0.25H6.16276V3.25H8.49609V0.25ZM6.16276 0.25C5.45552 0.25 4.77724 0.530952 4.27714 1.03105L6.39846 3.15237C6.33595 3.21488 6.25117 3.25 6.16276 3.25V0.25ZM4.27714 1.03105C3.77705 1.53115 3.49609 2.20942 3.49609 2.91667H6.49609C6.49609 3.00507 6.46097 3.08986 6.39846 3.15237L4.27714 1.03105ZM3.49609 2.91667V12.25H6.49609V2.91667H3.49609Z"
                                          fill="black"
                                          mask="url(#path-2-inside-1_1088_12133)"
                                        />
                                      </svg>
                                      <span>$ 1,000</span>
                                    </div>
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M12.0898 5.83203C12.0898 7.57224 10.953 9.28522 9.67038 10.6391C9.04438 11.2999 8.41584 11.8414 7.94296 12.218C7.81161 12.3226 7.69275 12.4141 7.58985 12.4915C7.48694 12.4141 7.36807 12.3226 7.23673 12.218C6.76384 11.8414 6.1353 11.2999 5.50931 10.6391C4.22665 9.28522 3.08984 7.57224 3.08984 5.83203C3.08984 4.63856 3.56395 3.49396 4.40786 2.65005C5.25178 1.80614 6.39637 1.33203 7.58984 1.33203C8.78332 1.33203 9.92791 1.80614 10.7718 2.65005C11.6157 3.49396 12.0898 4.63856 12.0898 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <path
                                          d="M8.58984 5.83203C8.58984 6.38432 8.14213 6.83203 7.58984 6.83203C7.03756 6.83203 6.58984 6.38432 6.58984 5.83203C6.58984 5.27975 7.03756 4.83203 7.58984 4.83203C8.14213 4.83203 8.58984 5.27975 8.58984 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                      </svg>
                                      <span>Dhaka, Bangladesh</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#participant"
                              class="text-decoration-none"
                            >
                              <div class="card">
                                <div class="card-body">
                                  <div class="description">
                                    <div class="image">
                                      <img
                                        src="./img/dashboard/applicants/applicants-5.png"
                                        alt="Applicants - 1"
                                        class="img-fluid"
                                      />
                                    </div>
                                    <div class="content">
                                      <h2>Jason Ruly <span>(30)</span></h2>
                                      <h3>
                                        UI/UX Designer
                                        <span
                                          >(6mo) At, Grameen Phone ltd.</span
                                        >
                                      </h3>
                                    </div>
                                  </div>
                                  <div class="location">
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M2.66276 4.83203H11.9961C12.2262 4.83203 12.4128 5.01858 12.4128 5.2487V11.082C12.4128 11.3122 12.2262 11.4987 11.9961 11.4987H2.66276C2.43264 11.4987 2.24609 11.3122 2.24609 11.082V5.2487C2.24609 5.01858 2.43264 4.83203 2.66276 4.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <mask
                                          id="path-2-inside-1_1088_12133"
                                          fill="white"
                                        >
                                          <path
                                            d="M9.66276 12.25V2.91667C9.66276 2.60725 9.53984 2.3105 9.32105 2.09171C9.10226 1.87292 8.80551 1.75 8.49609 1.75H6.16276C5.85334 1.75 5.5566 1.87292 5.3378 2.09171C5.11901 2.3105 4.99609 2.60725 4.99609 2.91667V12.25"
                                          />
                                        </mask>
                                        <path
                                          d="M8.16276 12.25C8.16276 13.0784 8.83433 13.75 9.66276 13.75C10.4912 13.75 11.1628 13.0784 11.1628 12.25H8.16276ZM8.49609 1.75V0.25V1.75ZM6.16276 1.75V0.25V1.75ZM4.99609 2.91667H3.49609H4.99609ZM3.49609 12.25C3.49609 13.0784 4.16767 13.75 4.99609 13.75C5.82452 13.75 6.49609 13.0784 6.49609 12.25H3.49609ZM11.1628 12.25V2.91667H8.16276V12.25H11.1628ZM11.1628 2.91667C11.1628 2.20942 10.8818 1.53115 10.3817 1.03105L8.26039 3.15237C8.19788 3.08986 8.16276 3.00507 8.16276 2.91667H11.1628ZM10.3817 1.03105C9.88161 0.530952 9.20334 0.25 8.49609 0.25L8.49609 3.25C8.40769 3.25 8.3229 3.21488 8.26039 3.15237L10.3817 1.03105ZM8.49609 0.25H6.16276V3.25H8.49609V0.25ZM6.16276 0.25C5.45552 0.25 4.77724 0.530952 4.27714 1.03105L6.39846 3.15237C6.33595 3.21488 6.25117 3.25 6.16276 3.25V0.25ZM4.27714 1.03105C3.77705 1.53115 3.49609 2.20942 3.49609 2.91667H6.49609C6.49609 3.00507 6.46097 3.08986 6.39846 3.15237L4.27714 1.03105ZM3.49609 2.91667V12.25H6.49609V2.91667H3.49609Z"
                                          fill="black"
                                          mask="url(#path-2-inside-1_1088_12133)"
                                        />
                                      </svg>
                                      <span>$ 1,000</span>
                                    </div>
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M12.0898 5.83203C12.0898 7.57224 10.953 9.28522 9.67038 10.6391C9.04438 11.2999 8.41584 11.8414 7.94296 12.218C7.81161 12.3226 7.69275 12.4141 7.58985 12.4915C7.48694 12.4141 7.36807 12.3226 7.23673 12.218C6.76384 11.8414 6.1353 11.2999 5.50931 10.6391C4.22665 9.28522 3.08984 7.57224 3.08984 5.83203C3.08984 4.63856 3.56395 3.49396 4.40786 2.65005C5.25178 1.80614 6.39637 1.33203 7.58984 1.33203C8.78332 1.33203 9.92791 1.80614 10.7718 2.65005C11.6157 3.49396 12.0898 4.63856 12.0898 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <path
                                          d="M8.58984 5.83203C8.58984 6.38432 8.14213 6.83203 7.58984 6.83203C7.03756 6.83203 6.58984 6.38432 6.58984 5.83203C6.58984 5.27975 7.03756 4.83203 7.58984 4.83203C8.14213 4.83203 8.58984 5.27975 8.58984 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                      </svg>
                                      <span>Dhaka, Bangladesh</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#participant"
                              class="text-decoration-none"
                            >
                              <div class="card">
                                <div class="card-body">
                                  <div class="description">
                                    <div class="image">
                                      <img
                                        src="./img/dashboard/applicants/applicants-6.png"
                                        alt="Applicants - 1"
                                        class="img-fluid"
                                      />
                                    </div>
                                    <div class="content">
                                      <h2>Jason Ruly <span>(30)</span></h2>
                                      <h3>
                                        UI/UX Designer
                                        <span
                                          >(6mo) At, Grameen Phone ltd.</span
                                        >
                                      </h3>
                                    </div>
                                  </div>
                                  <div class="location">
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M2.66276 4.83203H11.9961C12.2262 4.83203 12.4128 5.01858 12.4128 5.2487V11.082C12.4128 11.3122 12.2262 11.4987 11.9961 11.4987H2.66276C2.43264 11.4987 2.24609 11.3122 2.24609 11.082V5.2487C2.24609 5.01858 2.43264 4.83203 2.66276 4.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <mask
                                          id="path-2-inside-1_1088_12133"
                                          fill="white"
                                        >
                                          <path
                                            d="M9.66276 12.25V2.91667C9.66276 2.60725 9.53984 2.3105 9.32105 2.09171C9.10226 1.87292 8.80551 1.75 8.49609 1.75H6.16276C5.85334 1.75 5.5566 1.87292 5.3378 2.09171C5.11901 2.3105 4.99609 2.60725 4.99609 2.91667V12.25"
                                          />
                                        </mask>
                                        <path
                                          d="M8.16276 12.25C8.16276 13.0784 8.83433 13.75 9.66276 13.75C10.4912 13.75 11.1628 13.0784 11.1628 12.25H8.16276ZM8.49609 1.75V0.25V1.75ZM6.16276 1.75V0.25V1.75ZM4.99609 2.91667H3.49609H4.99609ZM3.49609 12.25C3.49609 13.0784 4.16767 13.75 4.99609 13.75C5.82452 13.75 6.49609 13.0784 6.49609 12.25H3.49609ZM11.1628 12.25V2.91667H8.16276V12.25H11.1628ZM11.1628 2.91667C11.1628 2.20942 10.8818 1.53115 10.3817 1.03105L8.26039 3.15237C8.19788 3.08986 8.16276 3.00507 8.16276 2.91667H11.1628ZM10.3817 1.03105C9.88161 0.530952 9.20334 0.25 8.49609 0.25L8.49609 3.25C8.40769 3.25 8.3229 3.21488 8.26039 3.15237L10.3817 1.03105ZM8.49609 0.25H6.16276V3.25H8.49609V0.25ZM6.16276 0.25C5.45552 0.25 4.77724 0.530952 4.27714 1.03105L6.39846 3.15237C6.33595 3.21488 6.25117 3.25 6.16276 3.25V0.25ZM4.27714 1.03105C3.77705 1.53115 3.49609 2.20942 3.49609 2.91667H6.49609C6.49609 3.00507 6.46097 3.08986 6.39846 3.15237L4.27714 1.03105ZM3.49609 2.91667V12.25H6.49609V2.91667H3.49609Z"
                                          fill="black"
                                          mask="url(#path-2-inside-1_1088_12133)"
                                        />
                                      </svg>
                                      <span>$ 1,000</span>
                                    </div>
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M12.0898 5.83203C12.0898 7.57224 10.953 9.28522 9.67038 10.6391C9.04438 11.2999 8.41584 11.8414 7.94296 12.218C7.81161 12.3226 7.69275 12.4141 7.58985 12.4915C7.48694 12.4141 7.36807 12.3226 7.23673 12.218C6.76384 11.8414 6.1353 11.2999 5.50931 10.6391C4.22665 9.28522 3.08984 7.57224 3.08984 5.83203C3.08984 4.63856 3.56395 3.49396 4.40786 2.65005C5.25178 1.80614 6.39637 1.33203 7.58984 1.33203C8.78332 1.33203 9.92791 1.80614 10.7718 2.65005C11.6157 3.49396 12.0898 4.63856 12.0898 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <path
                                          d="M8.58984 5.83203C8.58984 6.38432 8.14213 6.83203 7.58984 6.83203C7.03756 6.83203 6.58984 6.38432 6.58984 5.83203C6.58984 5.27975 7.03756 4.83203 7.58984 4.83203C8.14213 4.83203 8.58984 5.27975 8.58984 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                      </svg>
                                      <span>Dhaka, Bangladesh</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#participant"
                              class="text-decoration-none"
                            >
                              <div class="card">
                                <div class="card-body">
                                  <div class="description">
                                    <div class="image">
                                      <img
                                        src="./img/dashboard/applicants/applicants-7.png"
                                        alt="Applicants - 1"
                                        class="img-fluid"
                                      />
                                    </div>
                                    <div class="content">
                                      <h2>Jason Ruly <span>(30)</span></h2>
                                      <h3>
                                        UI/UX Designer
                                        <span
                                          >(6mo) At, Grameen Phone ltd.</span
                                        >
                                      </h3>
                                    </div>
                                  </div>
                                  <div class="location">
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M2.66276 4.83203H11.9961C12.2262 4.83203 12.4128 5.01858 12.4128 5.2487V11.082C12.4128 11.3122 12.2262 11.4987 11.9961 11.4987H2.66276C2.43264 11.4987 2.24609 11.3122 2.24609 11.082V5.2487C2.24609 5.01858 2.43264 4.83203 2.66276 4.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <mask
                                          id="path-2-inside-1_1088_12133"
                                          fill="white"
                                        >
                                          <path
                                            d="M9.66276 12.25V2.91667C9.66276 2.60725 9.53984 2.3105 9.32105 2.09171C9.10226 1.87292 8.80551 1.75 8.49609 1.75H6.16276C5.85334 1.75 5.5566 1.87292 5.3378 2.09171C5.11901 2.3105 4.99609 2.60725 4.99609 2.91667V12.25"
                                          />
                                        </mask>
                                        <path
                                          d="M8.16276 12.25C8.16276 13.0784 8.83433 13.75 9.66276 13.75C10.4912 13.75 11.1628 13.0784 11.1628 12.25H8.16276ZM8.49609 1.75V0.25V1.75ZM6.16276 1.75V0.25V1.75ZM4.99609 2.91667H3.49609H4.99609ZM3.49609 12.25C3.49609 13.0784 4.16767 13.75 4.99609 13.75C5.82452 13.75 6.49609 13.0784 6.49609 12.25H3.49609ZM11.1628 12.25V2.91667H8.16276V12.25H11.1628ZM11.1628 2.91667C11.1628 2.20942 10.8818 1.53115 10.3817 1.03105L8.26039 3.15237C8.19788 3.08986 8.16276 3.00507 8.16276 2.91667H11.1628ZM10.3817 1.03105C9.88161 0.530952 9.20334 0.25 8.49609 0.25L8.49609 3.25C8.40769 3.25 8.3229 3.21488 8.26039 3.15237L10.3817 1.03105ZM8.49609 0.25H6.16276V3.25H8.49609V0.25ZM6.16276 0.25C5.45552 0.25 4.77724 0.530952 4.27714 1.03105L6.39846 3.15237C6.33595 3.21488 6.25117 3.25 6.16276 3.25V0.25ZM4.27714 1.03105C3.77705 1.53115 3.49609 2.20942 3.49609 2.91667H6.49609C6.49609 3.00507 6.46097 3.08986 6.39846 3.15237L4.27714 1.03105ZM3.49609 2.91667V12.25H6.49609V2.91667H3.49609Z"
                                          fill="black"
                                          mask="url(#path-2-inside-1_1088_12133)"
                                        />
                                      </svg>
                                      <span>$ 1,000</span>
                                    </div>
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M12.0898 5.83203C12.0898 7.57224 10.953 9.28522 9.67038 10.6391C9.04438 11.2999 8.41584 11.8414 7.94296 12.218C7.81161 12.3226 7.69275 12.4141 7.58985 12.4915C7.48694 12.4141 7.36807 12.3226 7.23673 12.218C6.76384 11.8414 6.1353 11.2999 5.50931 10.6391C4.22665 9.28522 3.08984 7.57224 3.08984 5.83203C3.08984 4.63856 3.56395 3.49396 4.40786 2.65005C5.25178 1.80614 6.39637 1.33203 7.58984 1.33203C8.78332 1.33203 9.92791 1.80614 10.7718 2.65005C11.6157 3.49396 12.0898 4.63856 12.0898 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <path
                                          d="M8.58984 5.83203C8.58984 6.38432 8.14213 6.83203 7.58984 6.83203C7.03756 6.83203 6.58984 6.38432 6.58984 5.83203C6.58984 5.27975 7.03756 4.83203 7.58984 4.83203C8.14213 4.83203 8.58984 5.27975 8.58984 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                      </svg>
                                      <span>Dhaka, Bangladesh</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#participant"
                              class="text-decoration-none"
                            >
                              <div class="card">
                                <div class="card-body">
                                  <div class="description">
                                    <div class="image">
                                      <img
                                        src="./img/dashboard/applicants/applicants-8.png"
                                        alt="Applicants - 1"
                                        class="img-fluid"
                                      />
                                    </div>
                                    <div class="content">
                                      <h2>Jason Ruly <span>(30)</span></h2>
                                      <h3>
                                        UI/UX Designer
                                        <span
                                          >(6mo) At, Grameen Phone ltd.</span
                                        >
                                      </h3>
                                    </div>
                                  </div>
                                  <div class="location">
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M2.66276 4.83203H11.9961C12.2262 4.83203 12.4128 5.01858 12.4128 5.2487V11.082C12.4128 11.3122 12.2262 11.4987 11.9961 11.4987H2.66276C2.43264 11.4987 2.24609 11.3122 2.24609 11.082V5.2487C2.24609 5.01858 2.43264 4.83203 2.66276 4.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <mask
                                          id="path-2-inside-1_1088_12133"
                                          fill="white"
                                        >
                                          <path
                                            d="M9.66276 12.25V2.91667C9.66276 2.60725 9.53984 2.3105 9.32105 2.09171C9.10226 1.87292 8.80551 1.75 8.49609 1.75H6.16276C5.85334 1.75 5.5566 1.87292 5.3378 2.09171C5.11901 2.3105 4.99609 2.60725 4.99609 2.91667V12.25"
                                          />
                                        </mask>
                                        <path
                                          d="M8.16276 12.25C8.16276 13.0784 8.83433 13.75 9.66276 13.75C10.4912 13.75 11.1628 13.0784 11.1628 12.25H8.16276ZM8.49609 1.75V0.25V1.75ZM6.16276 1.75V0.25V1.75ZM4.99609 2.91667H3.49609H4.99609ZM3.49609 12.25C3.49609 13.0784 4.16767 13.75 4.99609 13.75C5.82452 13.75 6.49609 13.0784 6.49609 12.25H3.49609ZM11.1628 12.25V2.91667H8.16276V12.25H11.1628ZM11.1628 2.91667C11.1628 2.20942 10.8818 1.53115 10.3817 1.03105L8.26039 3.15237C8.19788 3.08986 8.16276 3.00507 8.16276 2.91667H11.1628ZM10.3817 1.03105C9.88161 0.530952 9.20334 0.25 8.49609 0.25L8.49609 3.25C8.40769 3.25 8.3229 3.21488 8.26039 3.15237L10.3817 1.03105ZM8.49609 0.25H6.16276V3.25H8.49609V0.25ZM6.16276 0.25C5.45552 0.25 4.77724 0.530952 4.27714 1.03105L6.39846 3.15237C6.33595 3.21488 6.25117 3.25 6.16276 3.25V0.25ZM4.27714 1.03105C3.77705 1.53115 3.49609 2.20942 3.49609 2.91667H6.49609C6.49609 3.00507 6.46097 3.08986 6.39846 3.15237L4.27714 1.03105ZM3.49609 2.91667V12.25H6.49609V2.91667H3.49609Z"
                                          fill="black"
                                          mask="url(#path-2-inside-1_1088_12133)"
                                        />
                                      </svg>
                                      <span>$ 1,000</span>
                                    </div>
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M12.0898 5.83203C12.0898 7.57224 10.953 9.28522 9.67038 10.6391C9.04438 11.2999 8.41584 11.8414 7.94296 12.218C7.81161 12.3226 7.69275 12.4141 7.58985 12.4915C7.48694 12.4141 7.36807 12.3226 7.23673 12.218C6.76384 11.8414 6.1353 11.2999 5.50931 10.6391C4.22665 9.28522 3.08984 7.57224 3.08984 5.83203C3.08984 4.63856 3.56395 3.49396 4.40786 2.65005C5.25178 1.80614 6.39637 1.33203 7.58984 1.33203C8.78332 1.33203 9.92791 1.80614 10.7718 2.65005C11.6157 3.49396 12.0898 4.63856 12.0898 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <path
                                          d="M8.58984 5.83203C8.58984 6.38432 8.14213 6.83203 7.58984 6.83203C7.03756 6.83203 6.58984 6.38432 6.58984 5.83203C6.58984 5.27975 7.03756 4.83203 7.58984 4.83203C8.14213 4.83203 8.58984 5.27975 8.58984 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                      </svg>
                                      <span>Dhaka, Bangladesh</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#participant"
                              class="text-decoration-none"
                            >
                              <div class="card">
                                <div class="card-body">
                                  <div class="description">
                                    <div class="image">
                                      <img
                                        src="./img/dashboard/applicants/applicants-9.png"
                                        alt="Applicants - 1"
                                        class="img-fluid"
                                      />
                                    </div>
                                    <div class="content">
                                      <h2>Jason Ruly <span>(30)</span></h2>
                                      <h3>
                                        UI/UX Designer
                                        <span
                                          >(6mo) At, Grameen Phone ltd.</span
                                        >
                                      </h3>
                                    </div>
                                  </div>
                                  <div class="location">
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M2.66276 4.83203H11.9961C12.2262 4.83203 12.4128 5.01858 12.4128 5.2487V11.082C12.4128 11.3122 12.2262 11.4987 11.9961 11.4987H2.66276C2.43264 11.4987 2.24609 11.3122 2.24609 11.082V5.2487C2.24609 5.01858 2.43264 4.83203 2.66276 4.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <mask
                                          id="path-2-inside-1_1088_12133"
                                          fill="white"
                                        >
                                          <path
                                            d="M9.66276 12.25V2.91667C9.66276 2.60725 9.53984 2.3105 9.32105 2.09171C9.10226 1.87292 8.80551 1.75 8.49609 1.75H6.16276C5.85334 1.75 5.5566 1.87292 5.3378 2.09171C5.11901 2.3105 4.99609 2.60725 4.99609 2.91667V12.25"
                                          />
                                        </mask>
                                        <path
                                          d="M8.16276 12.25C8.16276 13.0784 8.83433 13.75 9.66276 13.75C10.4912 13.75 11.1628 13.0784 11.1628 12.25H8.16276ZM8.49609 1.75V0.25V1.75ZM6.16276 1.75V0.25V1.75ZM4.99609 2.91667H3.49609H4.99609ZM3.49609 12.25C3.49609 13.0784 4.16767 13.75 4.99609 13.75C5.82452 13.75 6.49609 13.0784 6.49609 12.25H3.49609ZM11.1628 12.25V2.91667H8.16276V12.25H11.1628ZM11.1628 2.91667C11.1628 2.20942 10.8818 1.53115 10.3817 1.03105L8.26039 3.15237C8.19788 3.08986 8.16276 3.00507 8.16276 2.91667H11.1628ZM10.3817 1.03105C9.88161 0.530952 9.20334 0.25 8.49609 0.25L8.49609 3.25C8.40769 3.25 8.3229 3.21488 8.26039 3.15237L10.3817 1.03105ZM8.49609 0.25H6.16276V3.25H8.49609V0.25ZM6.16276 0.25C5.45552 0.25 4.77724 0.530952 4.27714 1.03105L6.39846 3.15237C6.33595 3.21488 6.25117 3.25 6.16276 3.25V0.25ZM4.27714 1.03105C3.77705 1.53115 3.49609 2.20942 3.49609 2.91667H6.49609C6.49609 3.00507 6.46097 3.08986 6.39846 3.15237L4.27714 1.03105ZM3.49609 2.91667V12.25H6.49609V2.91667H3.49609Z"
                                          fill="black"
                                          mask="url(#path-2-inside-1_1088_12133)"
                                        />
                                      </svg>
                                      <span>$ 1,000</span>
                                    </div>
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M12.0898 5.83203C12.0898 7.57224 10.953 9.28522 9.67038 10.6391C9.04438 11.2999 8.41584 11.8414 7.94296 12.218C7.81161 12.3226 7.69275 12.4141 7.58985 12.4915C7.48694 12.4141 7.36807 12.3226 7.23673 12.218C6.76384 11.8414 6.1353 11.2999 5.50931 10.6391C4.22665 9.28522 3.08984 7.57224 3.08984 5.83203C3.08984 4.63856 3.56395 3.49396 4.40786 2.65005C5.25178 1.80614 6.39637 1.33203 7.58984 1.33203C8.78332 1.33203 9.92791 1.80614 10.7718 2.65005C11.6157 3.49396 12.0898 4.63856 12.0898 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <path
                                          d="M8.58984 5.83203C8.58984 6.38432 8.14213 6.83203 7.58984 6.83203C7.03756 6.83203 6.58984 6.38432 6.58984 5.83203C6.58984 5.27975 7.03756 4.83203 7.58984 4.83203C8.14213 4.83203 8.58984 5.27975 8.58984 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                      </svg>
                                      <span>Dhaka, Bangladesh</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#participant"
                              class="text-decoration-none"
                            >
                              <div class="card">
                                <div class="card-body">
                                  <div class="description">
                                    <div class="image">
                                      <img
                                        src="./img/dashboard/applicants/applicants-10.png"
                                        alt="Applicants - 1"
                                        class="img-fluid"
                                      />
                                    </div>
                                    <div class="content">
                                      <h2>Jason Ruly <span>(30)</span></h2>
                                      <h3>
                                        UI/UX Designer
                                        <span
                                          >(6mo) At, Grameen Phone ltd.</span
                                        >
                                      </h3>
                                    </div>
                                  </div>
                                  <div class="location">
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M2.66276 4.83203H11.9961C12.2262 4.83203 12.4128 5.01858 12.4128 5.2487V11.082C12.4128 11.3122 12.2262 11.4987 11.9961 11.4987H2.66276C2.43264 11.4987 2.24609 11.3122 2.24609 11.082V5.2487C2.24609 5.01858 2.43264 4.83203 2.66276 4.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <mask
                                          id="path-2-inside-1_1088_12133"
                                          fill="white"
                                        >
                                          <path
                                            d="M9.66276 12.25V2.91667C9.66276 2.60725 9.53984 2.3105 9.32105 2.09171C9.10226 1.87292 8.80551 1.75 8.49609 1.75H6.16276C5.85334 1.75 5.5566 1.87292 5.3378 2.09171C5.11901 2.3105 4.99609 2.60725 4.99609 2.91667V12.25"
                                          />
                                        </mask>
                                        <path
                                          d="M8.16276 12.25C8.16276 13.0784 8.83433 13.75 9.66276 13.75C10.4912 13.75 11.1628 13.0784 11.1628 12.25H8.16276ZM8.49609 1.75V0.25V1.75ZM6.16276 1.75V0.25V1.75ZM4.99609 2.91667H3.49609H4.99609ZM3.49609 12.25C3.49609 13.0784 4.16767 13.75 4.99609 13.75C5.82452 13.75 6.49609 13.0784 6.49609 12.25H3.49609ZM11.1628 12.25V2.91667H8.16276V12.25H11.1628ZM11.1628 2.91667C11.1628 2.20942 10.8818 1.53115 10.3817 1.03105L8.26039 3.15237C8.19788 3.08986 8.16276 3.00507 8.16276 2.91667H11.1628ZM10.3817 1.03105C9.88161 0.530952 9.20334 0.25 8.49609 0.25L8.49609 3.25C8.40769 3.25 8.3229 3.21488 8.26039 3.15237L10.3817 1.03105ZM8.49609 0.25H6.16276V3.25H8.49609V0.25ZM6.16276 0.25C5.45552 0.25 4.77724 0.530952 4.27714 1.03105L6.39846 3.15237C6.33595 3.21488 6.25117 3.25 6.16276 3.25V0.25ZM4.27714 1.03105C3.77705 1.53115 3.49609 2.20942 3.49609 2.91667H6.49609C6.49609 3.00507 6.46097 3.08986 6.39846 3.15237L4.27714 1.03105ZM3.49609 2.91667V12.25H6.49609V2.91667H3.49609Z"
                                          fill="black"
                                          mask="url(#path-2-inside-1_1088_12133)"
                                        />
                                      </svg>
                                      <span>$ 1,000</span>
                                    </div>
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M12.0898 5.83203C12.0898 7.57224 10.953 9.28522 9.67038 10.6391C9.04438 11.2999 8.41584 11.8414 7.94296 12.218C7.81161 12.3226 7.69275 12.4141 7.58985 12.4915C7.48694 12.4141 7.36807 12.3226 7.23673 12.218C6.76384 11.8414 6.1353 11.2999 5.50931 10.6391C4.22665 9.28522 3.08984 7.57224 3.08984 5.83203C3.08984 4.63856 3.56395 3.49396 4.40786 2.65005C5.25178 1.80614 6.39637 1.33203 7.58984 1.33203C8.78332 1.33203 9.92791 1.80614 10.7718 2.65005C11.6157 3.49396 12.0898 4.63856 12.0898 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <path
                                          d="M8.58984 5.83203C8.58984 6.38432 8.14213 6.83203 7.58984 6.83203C7.03756 6.83203 6.58984 6.38432 6.58984 5.83203C6.58984 5.27975 7.03756 4.83203 7.58984 4.83203C8.14213 4.83203 8.58984 5.27975 8.58984 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                      </svg>
                                      <span>Dhaka, Bangladesh</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#participant"
                              class="text-decoration-none"
                            >
                              <div class="card">
                                <div class="card-body">
                                  <div class="description">
                                    <div class="image">
                                      <img
                                        src="./img/dashboard/applicants/applicants-11.png"
                                        alt="Applicants - 1"
                                        class="img-fluid"
                                      />
                                    </div>
                                    <div class="content">
                                      <h2>Jason Ruly <span>(30)</span></h2>
                                      <h3>
                                        UI/UX Designer
                                        <span
                                          >(6mo) At, Grameen Phone ltd.</span
                                        >
                                      </h3>
                                    </div>
                                  </div>
                                  <div class="location">
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M2.66276 4.83203H11.9961C12.2262 4.83203 12.4128 5.01858 12.4128 5.2487V11.082C12.4128 11.3122 12.2262 11.4987 11.9961 11.4987H2.66276C2.43264 11.4987 2.24609 11.3122 2.24609 11.082V5.2487C2.24609 5.01858 2.43264 4.83203 2.66276 4.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <mask
                                          id="path-2-inside-1_1088_12133"
                                          fill="white"
                                        >
                                          <path
                                            d="M9.66276 12.25V2.91667C9.66276 2.60725 9.53984 2.3105 9.32105 2.09171C9.10226 1.87292 8.80551 1.75 8.49609 1.75H6.16276C5.85334 1.75 5.5566 1.87292 5.3378 2.09171C5.11901 2.3105 4.99609 2.60725 4.99609 2.91667V12.25"
                                          />
                                        </mask>
                                        <path
                                          d="M8.16276 12.25C8.16276 13.0784 8.83433 13.75 9.66276 13.75C10.4912 13.75 11.1628 13.0784 11.1628 12.25H8.16276ZM8.49609 1.75V0.25V1.75ZM6.16276 1.75V0.25V1.75ZM4.99609 2.91667H3.49609H4.99609ZM3.49609 12.25C3.49609 13.0784 4.16767 13.75 4.99609 13.75C5.82452 13.75 6.49609 13.0784 6.49609 12.25H3.49609ZM11.1628 12.25V2.91667H8.16276V12.25H11.1628ZM11.1628 2.91667C11.1628 2.20942 10.8818 1.53115 10.3817 1.03105L8.26039 3.15237C8.19788 3.08986 8.16276 3.00507 8.16276 2.91667H11.1628ZM10.3817 1.03105C9.88161 0.530952 9.20334 0.25 8.49609 0.25L8.49609 3.25C8.40769 3.25 8.3229 3.21488 8.26039 3.15237L10.3817 1.03105ZM8.49609 0.25H6.16276V3.25H8.49609V0.25ZM6.16276 0.25C5.45552 0.25 4.77724 0.530952 4.27714 1.03105L6.39846 3.15237C6.33595 3.21488 6.25117 3.25 6.16276 3.25V0.25ZM4.27714 1.03105C3.77705 1.53115 3.49609 2.20942 3.49609 2.91667H6.49609C6.49609 3.00507 6.46097 3.08986 6.39846 3.15237L4.27714 1.03105ZM3.49609 2.91667V12.25H6.49609V2.91667H3.49609Z"
                                          fill="black"
                                          mask="url(#path-2-inside-1_1088_12133)"
                                        />
                                      </svg>
                                      <span>$ 1,000</span>
                                    </div>
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M12.0898 5.83203C12.0898 7.57224 10.953 9.28522 9.67038 10.6391C9.04438 11.2999 8.41584 11.8414 7.94296 12.218C7.81161 12.3226 7.69275 12.4141 7.58985 12.4915C7.48694 12.4141 7.36807 12.3226 7.23673 12.218C6.76384 11.8414 6.1353 11.2999 5.50931 10.6391C4.22665 9.28522 3.08984 7.57224 3.08984 5.83203C3.08984 4.63856 3.56395 3.49396 4.40786 2.65005C5.25178 1.80614 6.39637 1.33203 7.58984 1.33203C8.78332 1.33203 9.92791 1.80614 10.7718 2.65005C11.6157 3.49396 12.0898 4.63856 12.0898 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <path
                                          d="M8.58984 5.83203C8.58984 6.38432 8.14213 6.83203 7.58984 6.83203C7.03756 6.83203 6.58984 6.38432 6.58984 5.83203C6.58984 5.27975 7.03756 4.83203 7.58984 4.83203C8.14213 4.83203 8.58984 5.27975 8.58984 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                      </svg>
                                      <span>Dhaka, Bangladesh</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#participant"
                              class="text-decoration-none"
                            >
                              <div class="card">
                                <div class="card-body">
                                  <div class="description">
                                    <div class="image">
                                      <img
                                        src="./img/dashboard/applicants/applicants-12.png"
                                        alt="Applicants - 1"
                                        class="img-fluid"
                                      />
                                    </div>
                                    <div class="content">
                                      <h2>Jason Ruly <span>(30)</span></h2>
                                      <h3>
                                        UI/UX Designer
                                        <span
                                          >(6mo) At, Grameen Phone ltd.</span
                                        >
                                      </h3>
                                    </div>
                                  </div>
                                  <div class="location">
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M2.66276 4.83203H11.9961C12.2262 4.83203 12.4128 5.01858 12.4128 5.2487V11.082C12.4128 11.3122 12.2262 11.4987 11.9961 11.4987H2.66276C2.43264 11.4987 2.24609 11.3122 2.24609 11.082V5.2487C2.24609 5.01858 2.43264 4.83203 2.66276 4.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <mask
                                          id="path-2-inside-1_1088_12133"
                                          fill="white"
                                        >
                                          <path
                                            d="M9.66276 12.25V2.91667C9.66276 2.60725 9.53984 2.3105 9.32105 2.09171C9.10226 1.87292 8.80551 1.75 8.49609 1.75H6.16276C5.85334 1.75 5.5566 1.87292 5.3378 2.09171C5.11901 2.3105 4.99609 2.60725 4.99609 2.91667V12.25"
                                          />
                                        </mask>
                                        <path
                                          d="M8.16276 12.25C8.16276 13.0784 8.83433 13.75 9.66276 13.75C10.4912 13.75 11.1628 13.0784 11.1628 12.25H8.16276ZM8.49609 1.75V0.25V1.75ZM6.16276 1.75V0.25V1.75ZM4.99609 2.91667H3.49609H4.99609ZM3.49609 12.25C3.49609 13.0784 4.16767 13.75 4.99609 13.75C5.82452 13.75 6.49609 13.0784 6.49609 12.25H3.49609ZM11.1628 12.25V2.91667H8.16276V12.25H11.1628ZM11.1628 2.91667C11.1628 2.20942 10.8818 1.53115 10.3817 1.03105L8.26039 3.15237C8.19788 3.08986 8.16276 3.00507 8.16276 2.91667H11.1628ZM10.3817 1.03105C9.88161 0.530952 9.20334 0.25 8.49609 0.25L8.49609 3.25C8.40769 3.25 8.3229 3.21488 8.26039 3.15237L10.3817 1.03105ZM8.49609 0.25H6.16276V3.25H8.49609V0.25ZM6.16276 0.25C5.45552 0.25 4.77724 0.530952 4.27714 1.03105L6.39846 3.15237C6.33595 3.21488 6.25117 3.25 6.16276 3.25V0.25ZM4.27714 1.03105C3.77705 1.53115 3.49609 2.20942 3.49609 2.91667H6.49609C6.49609 3.00507 6.46097 3.08986 6.39846 3.15237L4.27714 1.03105ZM3.49609 2.91667V12.25H6.49609V2.91667H3.49609Z"
                                          fill="black"
                                          mask="url(#path-2-inside-1_1088_12133)"
                                        />
                                      </svg>
                                      <span>$ 1,000</span>
                                    </div>
                                    <div class="content">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="14"
                                        viewBox="0 0 15 14"
                                        fill="none"
                                      >
                                        <path
                                          d="M12.0898 5.83203C12.0898 7.57224 10.953 9.28522 9.67038 10.6391C9.04438 11.2999 8.41584 11.8414 7.94296 12.218C7.81161 12.3226 7.69275 12.4141 7.58985 12.4915C7.48694 12.4141 7.36807 12.3226 7.23673 12.218C6.76384 11.8414 6.1353 11.2999 5.50931 10.6391C4.22665 9.28522 3.08984 7.57224 3.08984 5.83203C3.08984 4.63856 3.56395 3.49396 4.40786 2.65005C5.25178 1.80614 6.39637 1.33203 7.58984 1.33203C8.78332 1.33203 9.92791 1.80614 10.7718 2.65005C11.6157 3.49396 12.0898 4.63856 12.0898 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                        <path
                                          d="M8.58984 5.83203C8.58984 6.38432 8.14213 6.83203 7.58984 6.83203C7.03756 6.83203 6.58984 6.38432 6.58984 5.83203C6.58984 5.27975 7.03756 4.83203 7.58984 4.83203C8.14213 4.83203 8.58984 5.27975 8.58984 5.83203Z"
                                          stroke="black"
                                          stroke-width="1.5"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        />
                                      </svg>
                                      <span>Dhaka, Bangladesh</span>
                                    </div>
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
            </div>
            <!-- Bottom Footer -->
            <?php include 'view/bottom-footer.php'; ?>
          </div>
        </div>
      </div>
    </main>
    <!-- End Main Section -->

    <!-- Modal -->
    <div
      class="modal fade participant-modal"
      id="participant"
      tabindex="-1"
      aria-labelledby="participantLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <div class="row align-items-center mb-3 mb-sm-5">
              <div class="col-lg-5 col-md-12 mb-3 mb-sm-5 mb-lg-0">
                <div class="image-box">
                  <div class="user-image">
                    <img src="./img/applicants/user.png" alt="UserImage" />
                  </div>
                  <div class="user-details">
                    <h3>Mithun Das</h3>
                    <h4>UI/UX Designer</h4>
                    <p>bappy.mithun@gmail.com</p>
                    <p>01825932574</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                <div class="social-links mb-3 mb-sm-0">
                  <a class="text-break" href="#"
                    >https://www.linkedin.com/in/bappymithun1/</a
                  >
                  <a class="text-break" href="#"
                    >https://dribbble.com/bappymithun</a
                  >
                </div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                <button class="pdf-download">Download PDF</button>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <p class="para">
                  Lorem ipsum dolor sit amet consectetur. Praesent morbi arcu
                  nisi nec. Turpis turpis neque scelerisque platea sed rhoncus
                  fames turpis pharetra. Amet amet sit duis amet eu iaculis
                  donec. Curabitur bibendum mollis dignissim mus habitant
                  facilisis ac felis.
                </p>
              </div>
              <div class="col-lg-4">
                <div class="applicant-progress">
                  <div class="chips">
                    <span class="active-shortlist"
                      ><i class="fas fa-check"></i>Shortlist</span
                    >
                    <span><i class="fas fa-file-invoice"></i>Assessment</span>
                    <span><i class="fas fa-check"></i>Interview</span>
                    <span><i class="fas fa-check"></i>Final Selection</span>
                    <span><i class="fas fa-check"></i>Offer</span>
                    <span><i class="fas fa-check"></i>Hire</span>
                    <span
                      ><i class="far fa-trash-alt text-danger"></i> Reject</span
                    >
                  </div>
                </div>
              </div>
            </div>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <i class="fas fa-times"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="details">
              <h3>Experience 1 :</h3>
              <section>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">
                    Company <span>:</span>
                  </dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">Netcoden .inc</dd>
                </dl>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">
                    Designation <span>:</span>
                  </dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">Ui/Ux Designer</dd>
                </dl>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">
                    Timeframe <span>:</span>
                  </dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">Jan 2022 - Now</dd>
                </dl>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">
                    Detail <span>:</span>
                  </dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">
                    As a UI/UX designer i have collaborated with the
                    stakeholders & development teams on core projects to make
                    product interfaces and experiences.
                  </dd>
                </dl>
              </section>
            </div>
            <div class="details">
              <h3>Experience 2 :</h3>
              <section>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">
                    Company <span>:</span>
                  </dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">Netcoden .inc</dd>
                </dl>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">
                    Designation <span>:</span>
                  </dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">Ui/Ux Designer</dd>
                </dl>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">
                    Timeframe <span>:</span>
                  </dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">Jan 2022 - Now</dd>
                </dl>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">
                    Detail <span>:</span>
                  </dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">
                    As a UI/UX designer i have collaborated with the
                    stakeholders & development teams on core projects to make
                    product interfaces and experiences.
                  </dd>
                </dl>
              </section>
            </div>
            <div class="details">
              <h3>Experience 3 :</h3>
              <section>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">
                    Company <span>:</span>
                  </dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">Netcoden .inc</dd>
                </dl>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">
                    Designation <span>:</span>
                  </dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">Ui/Ux Designer</dd>
                </dl>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">
                    Timeframe <span>:</span>
                  </dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">Jan 2022 - Now</dd>
                </dl>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">
                    Detail <span>:</span>
                  </dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">
                    As a UI/UX designer i have collaborated with the
                    stakeholders & development teams on core projects to make
                    product interfaces and experiences.
                  </dd>
                </dl>
              </section>
            </div>
            <div class="details">
              <h3>Skills :</h3>
              <section>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">
                    Skill 1 <span>:</span>
                  </dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">Ui Design</dd>
                </dl>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">
                    Skill 2 <span>:</span>
                  </dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">Ux Design</dd>
                </dl>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">
                    Skill 3 <span>:</span>
                  </dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">Web Design</dd>
                </dl>
              </section>
            </div>
            <div class="details">
              <h3>Education :</h3>
              <section class="mb-0 border-0 pb-0">
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">SSC <span>:</span></dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">
                    <span>Science</span>
                    <span>(4.50)</span>
                    <span>2008</span>
                  </dd>
                </dl>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">HSC <span>:</span></dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">
                    <span>Science</span>
                    <span>(4.24)</span>
                    <span>2010</span>
                  </dd>
                </dl>
                <dl class="row no-gutters">
                  <dt class="col-lg-2 col-md-3 col-sm-4">BSC <span>:</span></dt>
                  <dd class="col-lg-10 col-md-9 col-sm-8">
                    <span>Mechatronics Engineering</span>
                    <span> (3.50)</span>
                    <span>2015</span>
                  </dd>
                </dl>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>

   
    <?php include 'view/footer.php'; ?>