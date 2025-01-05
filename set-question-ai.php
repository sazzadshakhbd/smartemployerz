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
          <div class="set-questions">
            <div class="all-plans mb-0 pb-0 border-0 pt-0 ps-0 pa-0">
              <div class="row no-gutters">
                <div class="col-md-12">
                  <div class="all-tabs all-applicants-tab">
                    <ul class="nav nav-pills all-jobs-tab justify-content-start" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="subjective-tab" data-bs-toggle="pill"
                          data-bs-target="#subjective" type="button" role="tab" aria-controls="subjective"
                          aria-selected="true">
                          <span>Subjective</span>
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="behavioral-tab" data-bs-toggle="pill"
                          data-bs-target="#behavioral" type="button" role="tab" aria-controls="behavioral"
                          aria-selected="false">
                          <span>Behavioral</span>
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="situational-tab" data-bs-toggle="pill"
                          data-bs-target="#situational" type="button" role="tab" aria-controls="situational"
                          aria-selected="false">
                          <span>Situational</span>
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="addedQuestion-tab" data-bs-toggle="pill"
                          data-bs-target="#addedQuestion" type="button" role="tab" aria-controls="addedQuestion"
                          aria-selected="false">
                          <span>Added Questions</span>
                        </button>
                      </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="subjective" role="tabpanel"
                        aria-labelledby="subjective-tab" tabindex="0">
                        <div class="row">
                          <div class="col-md-12">
                            <button class="subjective-number" type="button">
                              Subjective : <span>10</span>
                            </button>
                            <div class="question-box subjective-question bg-linear">
                              <div class="row">
                                <div class="col-md-12 text-end">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                      data-bs-toggle="dropdown" aria-expanded="false">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        viewBox="0 0 25 25" fill="none">
                                        <path
                                          d="M12.8203 13.9141C13.3726 13.9141 13.8203 13.4663 13.8203 12.9141C13.8203 12.3618 13.3726 11.9141 12.8203 11.9141C12.268 11.9141 11.8203 12.3618 11.8203 12.9141C11.8203 13.4663 12.268 13.9141 12.8203 13.9141Z"
                                          stroke="#667085" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                        <path
                                          d="M12.8203 6.91406C13.3726 6.91406 13.8203 6.46635 13.8203 5.91406C13.8203 5.36178 13.3726 4.91406 12.8203 4.91406C12.268 4.91406 11.8203 5.36178 11.8203 5.91406C11.8203 6.46635 12.268 6.91406 12.8203 6.91406Z"
                                          stroke="#667085" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                        <path
                                          d="M12.8203 20.9141C13.3726 20.9141 13.8203 20.4663 13.8203 19.9141C13.8203 19.3618 13.3726 18.9141 12.8203 18.9141C12.268 18.9141 11.8203 19.3618 11.8203 19.9141C11.8203 20.4663 12.268 20.9141 12.8203 20.9141Z"
                                          stroke="#667085" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                      <li>
                                        <a class="dropdown-item pe-auto" onclick="window.print()" href="#">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <g clip-path="url(#clip0_3085_13902)">
                                              <path d="M4 5.9987V1.33203H12V5.9987" stroke="#81848A"
                                                stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                              <path
                                                d="M4.00065 12H2.66732C2.3137 12 1.97456 11.8595 1.72451 11.6095C1.47446 11.3594 1.33398 11.0203 1.33398 10.6667V7.33333C1.33398 6.97971 1.47446 6.64057 1.72451 6.39052C1.97456 6.14048 2.3137 6 2.66732 6H13.334C13.6876 6 14.0267 6.14048 14.2768 6.39052C14.5268 6.64057 14.6673 6.97971 14.6673 7.33333V10.6667C14.6673 11.0203 14.5268 11.3594 14.2768 11.6095C14.0267 11.8595 13.6876 12 13.334 12H12.0007"
                                                stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                              <path d="M12 9.33203H4V14.6654H12V9.33203Z" stroke="#81848A"
                                                stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_3085_13902">
                                                <rect width="16" height="16" fill="white" />
                                              </clipPath>
                                            </defs>
                                          </svg>
                                          Print profile
                                        </a>
                                      </li>

                                      <li>
                                        <a class="dropdown-item" data-bs-toggle="modal"
                                          data-bs-target="#EmailCandidate">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 17 17" fill="none">
                                            <path
                                              d="M3.01497 3H13.6816C14.415 3 15.015 3.6 15.015 4.33333V12.3333C15.015 13.0667 14.415 13.6667 13.6816 13.6667H3.01497C2.28164 13.6667 1.68164 13.0667 1.68164 12.3333V4.33333C1.68164 3.6 2.28164 3 3.01497 3Z"
                                              stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                            <path d="M15.015 4.33203L8.34831 8.9987L1.68164 4.33203" stroke="#81848A"
                                              stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          Email candidate
                                        </a>
                                      </li>

                                      <li>
                                        <a class="dropdown-item" data-bs-toggle="modal"
                                          data-bs-target="#ShareCandidate">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 17 17" fill="none">
                                            <path
                                              d="M12.9219 5.70703C14.0264 5.70703 14.9219 4.8116 14.9219 3.70703C14.9219 2.60246 14.0264 1.70703 12.9219 1.70703C11.8173 1.70703 10.9219 2.60246 10.9219 3.70703C10.9219 4.8116 11.8173 5.70703 12.9219 5.70703Z"
                                              stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                            <path
                                              d="M4.92188 10.375C6.02644 10.375 6.92188 9.47957 6.92188 8.375C6.92188 7.27043 6.02644 6.375 4.92188 6.375C3.81731 6.375 2.92188 7.27043 2.92188 8.375C2.92188 9.47957 3.81731 10.375 4.92188 10.375Z"
                                              stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                            <path
                                              d="M12.9219 15.043C14.0264 15.043 14.9219 14.1475 14.9219 13.043C14.9219 11.9384 14.0264 11.043 12.9219 11.043C11.8173 11.043 10.9219 11.9384 10.9219 13.043C10.9219 14.1475 11.8173 15.043 12.9219 15.043Z"
                                              stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                            <path d="M6.64844 9.38281L11.2018 12.0361" stroke="#81848A"
                                              stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.1951 4.71484L6.64844 7.36818" stroke="#81848A"
                                              stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          Share candidate
                                        </a>
                                      </li>
                                      <li>
                                        <a class="dropdown-item" data-bs-toggle="modal"
                                          data-bs-target="#MoveToOtherJob">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 17 17" fill="none">
                                            <g clip-path="url(#clip0_3085_13889)">
                                              <path d="M3.5332 6.74219L1.5332 8.74219L3.5332 10.7422" stroke="#81848A"
                                                stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                              <path d="M6.19922 4.07422L8.19922 2.07422L10.1992 4.07422"
                                                stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                              <path d="M10.1992 13.4102L8.19922 15.4102L6.19922 13.4102"
                                                stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                              <path d="M12.8652 6.74219L14.8652 8.74219L12.8652 10.7422"
                                                stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                              <path d="M1.5332 8.74219H14.8665" stroke="#81848A" stroke-width="1.2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                              <path d="M8.19922 2.07422V15.4076" stroke="#81848A" stroke-width="1.2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_3085_13889">
                                                <rect width="16" height="16" fill="white"
                                                  transform="translate(0.199219 0.742188)" />
                                              </clipPath>
                                            </defs>
                                          </svg>
                                          Move to other job</a>
                                      </li>

                                      <li>
                                        <a class="dropdown-item" href="#" download>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 17 17" fill="none">
                                            <g clip-path="url(#clip0_3085_13921)">
                                              <path d="M5.92578 11.3438L8.59245 14.0104L11.2591 11.3438"
                                                stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                              <path d="M8.5918 8.01172V14.0117" stroke="#81848A" stroke-width="1.2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                              <path
                                                d="M14.5113 12.0717C15.0909 11.6641 15.5255 11.0824 15.7521 10.4111C15.9787 9.73977 15.9855 9.01369 15.7715 8.33822C15.5575 7.66276 15.1338 7.07307 14.562 6.65472C13.9901 6.23636 13.2998 6.01112 12.5913 6.01167H11.7513C11.5508 5.23026 11.1756 4.50451 10.654 3.88906C10.1324 3.27362 9.47803 2.78451 8.74007 2.45858C8.00211 2.13264 7.19983 1.97836 6.39361 2.00735C5.5874 2.03634 4.79827 2.24785 4.08563 2.62596C3.37299 3.00406 2.75541 3.53891 2.27939 4.19023C1.80336 4.84155 1.4813 5.59237 1.33744 6.38617C1.19358 7.17998 1.23167 7.99607 1.44885 8.77302C1.66603 9.54997 2.05664 10.2675 2.59126 10.8717"
                                                stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_3085_13921">
                                                <rect width="16" height="16" fill="white"
                                                  transform="translate(0.591797 0.0117188)" />
                                              </clipPath>
                                            </defs>
                                          </svg>
                                          Download</a>
                                      </li>
                                      <li></li>
                                      <hr class="dropdown-divider" />
                                      </li>
                                      <li>
                                        <a class="dropdown-item" href="#">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 17 17" fill="none">
                                            <path
                                              d="M9.78581 1.94531H4.45247C4.09885 1.94531 3.75971 2.08579 3.50966 2.33584C3.25962 2.58589 3.11914 2.92502 3.11914 3.27865V13.9453C3.11914 14.2989 3.25962 14.6381 3.50966 14.8881C3.75971 15.1382 4.09885 15.2786 4.45247 15.2786H12.4525C12.8061 15.2786 13.1452 15.1382 13.3953 14.8881C13.6453 14.6381 13.7858 14.2989 13.7858 13.9453V5.94531L9.78581 1.94531Z"
                                              stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                            <path d="M9.78711 1.94531V5.94531H13.7871" stroke="#81848A"
                                              stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.1204 9.28125H5.78711" stroke="#81848A" stroke-width="1.2"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.1204 11.9453H5.78711" stroke="#81848A" stroke-width="1.2"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.12044 6.61328H6.45378H5.78711" stroke="#81848A"
                                              stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          Move to assesment</a>
                                      </li>
                                      <li>
                                        <a class="dropdown-item" href="#">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 17 17" fill="none">
                                            <g clip-path="url(#clip0_3085_13931)">
                                              <path
                                                d="M12.278 14.4375V13.1042C12.278 12.3969 11.997 11.7186 11.4969 11.2185C10.9968 10.7185 10.3186 10.4375 9.61133 10.4375H4.27799C3.57075 10.4375 2.89247 10.7185 2.39238 11.2185C1.89228 11.7186 1.61133 12.3969 1.61133 13.1042V14.4375"
                                                stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                              <path
                                                d="M6.94596 7.77083C8.41872 7.77083 9.61263 6.57693 9.61263 5.10417C9.61263 3.63141 8.41872 2.4375 6.94596 2.4375C5.4732 2.4375 4.2793 3.63141 4.2793 5.10417C4.2793 6.57693 5.4732 7.77083 6.94596 7.77083Z"
                                                stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                              <path
                                                d="M16.2793 14.4368V13.1034C16.2789 12.5126 16.0822 11.9386 15.7202 11.4716C15.3582 11.0047 14.8514 10.6711 14.2793 10.5234"
                                                stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                              <path
                                                d="M11.6113 2.52344C12.1849 2.6703 12.6934 3.0039 13.0564 3.47164C13.4195 3.93938 13.6166 4.51466 13.6166 5.10677C13.6166 5.69888 13.4195 6.27416 13.0564 6.7419C12.6934 7.20964 12.1849 7.54324 11.6113 7.6901"
                                                stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_3085_13931">
                                                <rect width="16" height="16" fill="white"
                                                  transform="translate(0.945312 0.4375)" />
                                              </clipPath>
                                            </defs>
                                          </svg>
                                          Move to interview</a>
                                      </li>
                                      <li>
                                        <a class="dropdown-item" href="#">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 17 17" fill="none">
                                            <g clip-path="url(#clip0_3085_13936)">
                                              <path
                                                d="M10.8496 14.8125V13.4792C10.8496 12.7719 10.5687 12.0936 10.0686 11.5935C9.56846 11.0935 8.89019 10.8125 8.18294 10.8125H3.51628C2.80903 10.8125 2.13076 11.0935 1.63066 11.5935C1.13056 12.0936 0.849609 12.7719 0.849609 13.4792V14.8125"
                                                stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                              <path
                                                d="M5.85026 8.14583C7.32302 8.14583 8.51693 6.95193 8.51693 5.47917C8.51693 4.00641 7.32302 2.8125 5.85026 2.8125C4.3775 2.8125 3.18359 4.00641 3.18359 5.47917C3.18359 6.95193 4.3775 8.14583 5.85026 8.14583Z"
                                                stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                              <path d="M11.5176 8.14583L12.8509 9.47917L15.5176 6.8125"
                                                stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_3085_13936">
                                                <rect width="16" height="16" fill="white"
                                                  transform="translate(0.183594 0.8125)" />
                                              </clipPath>
                                            </defs>
                                          </svg>
                                          Move to final
                                          selection</a>
                                      </li>
                                      <li>
                                        <a class="dropdown-item" href="#">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 17 17" fill="none">
                                            <g clip-path="url(#clip0_3085_13940)">
                                              <path d="M8.15039 1.60938V16.276" stroke="#81848A" stroke-width="1.2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                              <path
                                                d="M11.4837 4.27344H6.48372C5.86489 4.27344 5.27139 4.51927 4.83381 4.95686C4.39622 5.39444 4.15039 5.98793 4.15039 6.60677C4.15039 7.22561 4.39622 7.8191 4.83381 8.25669C5.27139 8.69427 5.86489 8.9401 6.48372 8.9401H9.81706C10.4359 8.9401 11.0294 9.18594 11.467 9.62352C11.9046 10.0611 12.1504 10.6546 12.1504 11.2734C12.1504 11.8923 11.9046 12.4858 11.467 12.9234C11.0294 13.3609 10.4359 13.6068 9.81706 13.6068H4.15039"
                                                stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_3085_13940">
                                                <rect width="16" height="16" fill="white"
                                                  transform="translate(0.150391 0.941406)" />
                                              </clipPath>
                                            </defs>
                                          </svg>
                                          Move to offer</a>
                                      </li>
                                      <li>
                                        <a class="dropdown-item" href="#">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 17 17" fill="none">
                                            <path
                                              d="M8.5944 1.91016L10.6544 6.08349L15.2611 6.75682L11.9277 10.0035L12.7144 14.5902L8.5944 12.4235L4.4744 14.5902L5.26107 10.0035L1.92773 6.75682L6.5344 6.08349L8.5944 1.91016Z"
                                              stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                          </svg>
                                          Move to Hire</a>
                                      </li>
                                      <li>
                                        <a class="dropdown-item" href="#">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path d="M2 4H3.33333H14" stroke="#81848A" stroke-width="1.2"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                              d="M12.6673 3.9987V13.332C12.6673 13.6857 12.5268 14.0248 12.2768 14.2748C12.0267 14.5249 11.6876 14.6654 11.334 14.6654H4.66732C4.3137 14.6654 3.97456 14.5249 3.72451 14.2748C3.47446 14.0248 3.33398 13.6857 3.33398 13.332V3.9987M5.33398 3.9987V2.66536C5.33398 2.31174 5.47446 1.9726 5.72451 1.72256C5.97456 1.47251 6.3137 1.33203 6.66732 1.33203H9.33398C9.68761 1.33203 10.0267 1.47251 10.2768 1.72256C10.5268 1.9726 10.6673 2.31174 10.6673 2.66536V3.9987"
                                              stroke="#81848A" stroke-width="1.2" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                            <path d="M6.66602 7.33203V11.332" stroke="#81848A" stroke-width="1.2"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.33398 7.33203V11.332" stroke="#81848A" stroke-width="1.2"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          Reject</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <form class="px-4 py-4">
                                <div class="row mb-5 justify-content-center">
                                  <div class="col-xxl-4">
                                    <div class="form-group position-relative input-ai">
                                      <img src="./img/icons/ai.png" class="ai-icon img-fluid" alt="ai-icon">
                                      <input type="text" class="form-control" id="jobTitle"
                                        aria-describedby="jobTitle">
                                    </div>
                                  </div>
                                  <div class="col-xxl-3 col-xl-3 col-lg-4">
                                    <div class="form-group">
                                      <select class="form-select" id="" aria-label="">
                                        <option value="1" selected="">Multiple Choice</option>
                                        <option value="2">Lorem Ipsum -1</option>
                                        <option value="3">Lorem Ipsum -2</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-xxl-3 col-xl-4 col-lg-4">
                                    <div class="form-group">
                                      <select class="form-select" id="" aria-label="">
                                        <option value="1" selected="">Numb. Of Question</option>
                                        <option value="2">Lorem Ipsum -1</option>
                                        <option value="3">Lorem Ipsum -2</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-xxl-2 col-xl-3 col-lg-3">
                                    <a class="ai-btn text-decoration-none text-center pointer"
                                      href="./set-question-ai.php">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                        viewBox="0 0 20 16" fill="none">
                                        <path
                                          d="M7.33073 1.33203L8.73073 6.3987L13.9974 7.9987L8.73073 10.0277L7.33073 14.6654L5.30174 10.0277L0.664062 7.9987L5.3974 6.3987L7.33073 1.33203Z"
                                          fill="white"></path>
                                        <path
                                          d="M15.9974 0L16.6974 2.53333L19.3307 3.33333L16.6974 4.34783L15.9974 6.66667L14.9829 4.34783L12.6641 3.33333L15.0307 2.53333L15.9974 0Z"
                                          fill="#FDFDFD"></path>
                                        <path
                                          d="M16.6667 10.668L17.2267 12.6946L19.3333 13.3346L17.2267 14.1462L16.6667 16.0013L15.8551 14.1462L14 13.3346L15.8933 12.6946L16.6667 10.668Z"
                                          fill="white"></path>
                                      </svg>
                                      Generate
                                    </a>
                                  </div>

                                </div>
                                <div class="row">
                                  <div class="col-md-12 mb-3">
                                    <div class="single-qus-wrapper">
                                      <div class="number">
                                        <span>1. </span>
                                      </div>
                                      <div class="single-qus">
                                        <h3 class="mb-lg-3 mb-4">I'm a Product Designer based in Melbourne, Australia.
                                          I specialise in UX/UI
                                        </h3>
                                        <div class="questions">
                                          <div class="row align-items-center">
                                            <div class="col-lg-9">
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault1">
                                                      <label class="form-check-label" for="flexRadioDefault1">
                                                        I'm a Product Designer
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                      <label class="form-check-label" for="flexRadioDefault2">
                                                        I'm a Product Designer
                                                      </label>
                                                    </div>
                                                  </div>

                                                </div>
                                                <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault3">
                                                      <label class="form-check-label" for="flexRadioDefault3">
                                                        I'm a Product Designer
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
                                                      <label class="form-check-label" for="flexRadioDefault4">
                                                        I'm a Product Designer
                                                      </label>
                                                    </div>
                                                  </div>

                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-lg-3">
                                              <button
                                                class="ai-btn mb-2 mb-lg-0 text-decoration-none text-center pointer"
                                                data-bs-toggle="modal" data-bs-target="#AddNewQuestion">Add To
                                                Question</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <hr>
                                  </div>
                                  <div class="col-md-12 mb-3">
                                    <div class="single-qus-wrapper">
                                      <div class="number">
                                        <span>2. </span>
                                      </div>
                                      <div class="single-qus">
                                        <h3 class="mb-lg-3 mb-4">I'm a Product Designer based in Melbourne, Australia.
                                          I specialise in UX/UI
                                        </h3>
                                        <div class="questions">
                                          <div class="row align-items-center">
                                            <div class="col-lg-9">
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio"
                                                        name="flexRadioDefaults" id="flexRadioDefault5" checked>
                                                      <label class="form-check-label" for="flexRadioDefault5">
                                                        I'm a Product Designer
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio"
                                                        name="flexRadioDefaults" id="flexRadioDefault6">
                                                      <label class="form-check-label" for="flexRadioDefault6">
                                                        I'm a Product Designer
                                                      </label>
                                                    </div>
                                                  </div>

                                                </div>
                                                <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio"
                                                        name="flexRadioDefaults" id="flexRadioDefault7">
                                                      <label class="form-check-label" for="flexRadioDefault7">
                                                        I'm a Product Designer
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio"
                                                        name="flexRadioDefaults" id="flexRadioDefault8">
                                                      <label class="form-check-label" for="flexRadioDefault8">
                                                        I'm a Product Designer
                                                      </label>
                                                    </div>
                                                  </div>

                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-lg-3">
                                              <button
                                                class="ai-btn mb-2 mb-lg-0 text-decoration-none text-center pointer"
                                                data-bs-toggle="modal" data-bs-target="#AddNewQuestion">Add To
                                                Question</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <hr>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="behavioral" role="tabpanel" aria-labelledby="behavioral-tab"
                        tabindex="0">
                      </div>
                      <div class="tab-pane fade" id="situational" role="tabpanel" aria-labelledby="situational-tab"
                        tabindex="0">3</div>
                      <div class="tab-pane fade" id="addedQuestion" role="tabpanel"
                        aria-labelledby="addedQuestion-tab" tabindex="0">
                        <div class="row mb-4">
                          <div class="col-md-12">
                            <div class="question-wrapper">
                              <div class="count-qus">
                                <button>
                                  Question : <span>0</span>
                                </button>
                              </div>
                              <div class="create-question">
                                <button class="add-new" data-bs-toggle="modal" data-bs-target="#AddNewQuestion">Add
                                  New Question</button>
                                <a class="ai-btn text-decoration-none text-center pointer"
                                  href="./set-question-ai.php">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16"
                                    fill="none">
                                    <path
                                      d="M7.33073 1.33203L8.73073 6.3987L13.9974 7.9987L8.73073 10.0277L7.33073 14.6654L5.30174 10.0277L0.664062 7.9987L5.3974 6.3987L7.33073 1.33203Z"
                                      fill="white" />
                                    <path
                                      d="M15.9974 0L16.6974 2.53333L19.3307 3.33333L16.6974 4.34783L15.9974 6.66667L14.9829 4.34783L12.6641 3.33333L15.0307 2.53333L15.9974 0Z"
                                      fill="#FDFDFD" />
                                    <path
                                      d="M16.6667 10.668L17.2267 12.6946L19.3333 13.3346L17.2267 14.1462L16.6667 16.0013L15.8551 14.1462L14 13.3346L15.8933 12.6946L16.6667 10.668Z"
                                      fill="white" />
                                  </svg>
                                  Generate With Ai
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="question-box subjective-question">
                              <form class="px-4 py-4">
                                <div class="row">
                                  <div class="col-md-12 mb-3">
                                    <div class="single-qus-wrapper">
                                      <div class="number">
                                        <span>1. </span>
                                      </div>
                                      <div class="single-qus">
                                        <h3 class="mb-lg-3 mb-4">I'm a Product Designer based in Melbourne, Australia.
                                          I specialise in UX/UI
                                        </h3>
                                        <div class="questions">
                                          <div class="row align-items-center">
                                            <div class="col-lg-9">
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault1">
                                                      <label class="form-check-label" for="flexRadioDefault1">
                                                        I'm a Product Designer
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                      <label class="form-check-label" for="flexRadioDefault2">
                                                        I'm a Product Designer
                                                      </label>
                                                    </div>
                                                  </div>

                                                </div>
                                                <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault3">
                                                      <label class="form-check-label" for="flexRadioDefault3">
                                                        I'm a Product Designer
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
                                                      <label class="form-check-label" for="flexRadioDefault4">
                                                        I'm a Product Designer
                                                      </label>
                                                    </div>
                                                  </div>

                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-lg-3">
                                              <button
                                                class="ai-btn mb-2 mb-lg-0 text-decoration-none text-center pointer"
                                                data-bs-toggle="modal" data-bs-target="#AddNewQuestion">Delete</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <hr>
                                  </div>
                                  <div class="col-md-12 mb-3">
                                    <div class="single-qus-wrapper">
                                      <div class="number">
                                        <span>2. </span>
                                      </div>
                                      <div class="single-qus">
                                        <h3 class="mb-lg-3 mb-4">I'm a Product Designer based in Melbourne, Australia.
                                          I specialise in UX/UI
                                        </h3>
                                        <div class="questions">
                                          <div class="row align-items-center">
                                            <div class="col-lg-9">
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio"
                                                        name="flexRadioDefaults" id="flexRadioDefault5" checked>
                                                      <label class="form-check-label" for="flexRadioDefault5">
                                                        I'm a Product Designer
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio"
                                                        name="flexRadioDefaults" id="flexRadioDefault6">
                                                      <label class="form-check-label" for="flexRadioDefault6">
                                                        I'm a Product Designer
                                                      </label>
                                                    </div>
                                                  </div>

                                                </div>
                                                <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio"
                                                        name="flexRadioDefaults" id="flexRadioDefault7">
                                                      <label class="form-check-label" for="flexRadioDefault7">
                                                        I'm a Product Designer
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio"
                                                        name="flexRadioDefaults" id="flexRadioDefault8">
                                                      <label class="form-check-label" for="flexRadioDefault8">
                                                        I'm a Product Designer
                                                      </label>
                                                    </div>
                                                  </div>

                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-lg-3">
                                              <button
                                                class="ai-btn mb-2 mb-lg-0 text-decoration-none text-center pointer"
                                                data-bs-toggle="modal" data-bs-target="#AddNewQuestion">Delete</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <hr>
                                  </div>
                                </div>
                                <div class="row flex-column mt-3">
                                  <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-7 col-sm-7">
                                    <div class="form-group">
                                      <label class="form-label" for="timeFramTo">Deadline of Answering Questions </label>
                                      <input class="form-control" type="date" id="timeFramTo">
                                    </div>
                                  </div>
                                  <div class="col-xxl-9 col-xl-8 col-lg-7 col-md-5 col-sm-5">
                                    <button type="button" class="ai-btn mb-2 mb-lg-0 text-decoration-none text-center pointer">
                                      Publish Now
                                    </button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
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

<!--AddNewQuestion Modal -->
<div class="modal fade user-modal" id="AddNewQuestion" tabindex="-1" aria-labelledby="AddNewQuestionLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 id="AddNewQuestionLabel">Add New Questions</h1>
          <p>Add Question Manually</p>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" method="post">

          <div class="mb-4">
            <label for="TypeOfQues" class="form-label">Type Of Question</label>
            <select required class="form-select" id="TypeOfQues" aria-label="Default select example">
              <option selected>Multiple Choice</option>
              <option value="1">One</option>
              <option value="2">Two</option>
            </select>
          </div>
          <div class="mb-4">
            <label for="QuestionText" class="form-label">Write Your Question </label>
            <input type="text" required class="form-control" id="QuestionText" placeholder="Type Here">
          </div>
          <div class="mb-4">
            <label for="NumberOfOptions" class="form-label">Number of Options</label>
            <select id="NumberOfOptions" required class="form-select" aria-label="Default select example">
              <option selected>2</option>
              <option value="1">3</option>
              <option value="2">4</option>
            </select>
          </div>
          <div class="mb-4">
            <label for="OptionOne" class="form-label">Option 1 </label>
            <input type="text" required class="form-control" id="OptionOne" placeholder="Type Here">
          </div>
          <div class="mb-5">
            <label for="OptionTwo" class="form-label">Option 2 </label>
            <input type="text" required class="form-control" id="OptionTwo" placeholder="Type Here">
          </div>
          <div class="mb-4">
            <button type="submit" class="btn w-100">Done</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>