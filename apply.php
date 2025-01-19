<!--  Header -->
<?php include 'view/header.php'; ?>

<!-- Start Main Section -->
<main>
  <div class="container">
    <div class="row justify-content-center">
      <!-- Main Bar -->
      <div class="col-lg-6">
        <!-- Start New Job Form -->
        <form class="apply-job-form" id="formId">
          <div class="logo py-5">
            <a href="./index.html">
              <img src="./img/logo/logo.png" width="250" alt="Logo" class="img-fluid" />
            </a>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="form-group mb-3">
                <div class="form-title">
                  <h2 class="text-capitalize">Apply Job</h2>
                  <p class="mb-0">
                    You Are Applying As
                    <a href="#">HR & Admin Officer</a> At
                    <a href="#">Yellow</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="form-group mb-3">
                <div class="form-title custom-border-bottom">
                  <h2 class="text-capitalize">
                    Upload your CV to fill your form automatically
                  </h2>
                  <p class="mb-0">
                    Update your photo and personal details here.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="drop-zone mb-3">
                <svg
                  width="47"
                  height="46"
                  viewBox="0 0 47 46"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect
                    x="3.5"
                    y="3"
                    width="40"
                    height="40"
                    rx="20"
                    fill="#F2F4F7" />
                  <rect
                    x="3.5"
                    y="3"
                    width="40"
                    height="40"
                    rx="20"
                    stroke="#F9FAFB"
                    stroke-width="6" />
                  <g clip-path="url(#clip0_2133_4048)">
                    <path
                      d="M26.8326 26.3352L23.4992 23.0019M23.4992 23.0019L20.1659 26.3352M23.4992 23.0019V30.5019M30.4909 28.3269C31.3037 27.8838 31.9458 27.1826 32.3158 26.334C32.6858 25.4855 32.7627 24.5379 32.5344 23.6408C32.3061 22.7436 31.7855 21.9481 31.0548 21.3797C30.3241 20.8113 29.425 20.5025 28.4992 20.5019H27.4492C27.197 19.5262 26.7269 18.6205 26.0742 17.8527C25.4215 17.0849 24.6033 16.4751 23.681 16.069C22.7587 15.663 21.7564 15.4713 20.7493 15.5084C19.7423 15.5455 18.7568 15.8104 17.8669 16.2832C16.977 16.7561 16.2058 17.4244 15.6114 18.2382C15.017 19.0519 14.6148 19.9898 14.4351 20.9814C14.2553 21.9729 14.3027 22.9923 14.5736 23.9629C14.8445 24.9335 15.3319 25.8301 15.9992 26.5852"
                      stroke="#475467"
                      stroke-width="1.66667"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_2133_4048">
                      <rect
                        width="20"
                        height="20"
                        fill="white"
                        transform="translate(13.5 13)" />
                    </clipPath>
                  </defs>
                </svg>

                <h3 class="drop-zone__prompt">
                  <span>Click to upload</span>or drag and drop your CV
                </h3>
                <p>PDF or doc File (max. 5MB)</p>
                <input type="file" name="myFile" class="drop-zone__input" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="title-bar-with-btn mb-2">
                <div class="form-group mb-3 w-100">
                  <div
                    class="form-title d-sm-flex align-items-center
                        text-center text-sm-start
                        justify-content-between custom-border-bottom">
                    <div class="mb-3 mb-sm-0">
                      <h2 class="text-capitalize ">Personal Information</h2>
                      <p class="mb-0">
                        You Can Still Fill the Form Manually
                      </p>
                    </div>
                    <button class="mt-0 mx-auto mx-sm-0 ">
                      <span>Apply With Linkedin</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="edit-image mb-3">
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <circle cx="12" cy="12" r="12" fill="#F2F8F8" />
                  <path
                    d="M15.0779 6.50136C15.2368 6.34241 15.4255 6.21632 15.6332 6.1303C15.8409 6.04428 16.0635 6 16.2883 6C16.513 6 16.7356 6.04428 16.9433 6.1303C17.151 6.21632 17.3397 6.34241 17.4986 6.50136C17.6576 6.66031 17.7837 6.84901 17.8697 7.05669C17.9557 7.26436 18 7.48695 18 7.71174C18 7.93653 17.9557 8.15912 17.8697 8.3668C17.7837 8.57447 17.6576 8.76317 17.4986 8.92212L9.32855 17.0922L6 18L6.90779 14.6714L15.0779 6.50136Z"
                    fill="#FFFDFD"
                    stroke="#00756A"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>

                <img
                  src="./img/avatar.png"
                  class="img-fluid"
                  alt="avatar" />
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  aria-describedby="firstName" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  aria-describedby="lastName" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="BirthDate">Birth Date</label>
                <input
                  class="form-control"
                  type="date"
                  id="BirthDate" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" id="email" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="industryType">Nationality</label>
                <select
                  id="industryType"
                  class="form-select"
                  aria-label="Default select example">
                  <option selected>Select</option>
                  <option value="1">Bangladeshi</option>
                  <option value="2">Indian</option>
                  <option value="3">Arabian</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="mobile_code">Phone Number</label>
                <input
                  oninput="this.className = ''"
                  class="form-control"
                  type="number"
                  id="mobile_code" />
              </div>
            </div>



            <div class="col-md-12">
              <div class="form-group">
                <label for="floatingTextarea" class="form-label">Address</label>
                <div class="form-floating">
                  <textarea
                    class="form-control h-auto"
                    rows="1"
                    cols="1"
                    id="floatingTextarea">Dhaka, Bangladesh
                    </textarea>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group search-chips">
                <label class="form-label" for="PreferredJob">Preferred Job</label>
                <input class="form-control" type="search" id="PreferredJob" placeholder="Search" />
                <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z" stroke="#101828" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M17.5 17.5L13.875 13.875" stroke="#101828" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div id="chips-container" class="chip-lists"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="YearOfExperience">Total Year of Experience</label>
                <input
                  type="text"
                  class="form-control"
                  id="YearOfExperience"
                  aria-describedby="YearOfExperience" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="ExpectedSalary">Expected Salary</label>
                <input
                  type="text"
                  class="form-control"
                  id="ExpectedSalary"
                  aria-describedby="ExpectedSalary" />
              </div>
            </div>
            <!-- Employment History -->
            <div class="col-md-12">
              <div class="input-title-wrapper mb-3">
                <p class="mb-0">Employment History</p>
                <button onclick="addExperience()">+ Add</button>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="form-label" for="DesignationView">Designation</label>
                <input
                  type="text"
                  class="form-control"
                  id="DesignationView"
                  aria-describedby="DesignationView"
                  value="Marketing Manager" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="companyName">Company Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="companyName"
                  aria-describedby="companyName"
                  value="Netcoden .inc" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="AreaOfExperience">Area of Experience</label>
                <input
                  type="text"
                  class="form-control"
                  id="AreaOfExperience"
                  aria-describedby="AreaOfExperience"
                  value="Marketing" />
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="LocationView" class="form-label">Location</label>
                <div class="form-floating">
                  <textarea
                    class="form-control h-auto"
                    rows="1"
                    cols="1"
                    id="LocationView">Netcoden, Inc
                    </textarea>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label" for="StartDate">Start Date </label>
                <input
                  class="form-control"
                  type="date"
                  id="StartDate" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="d-flex align-items-center justify-content-between">
                  <label class="form-label" for="EndDate">End Date </label>
                  <div class="form-check mb-2">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="exampleCheck1" />
                    <label class="form-check-label" for="exampleCheck1">Continue</label>
                  </div>
                </div>
                <input
                  class="form-control"
                  type="date"
                  id="EndDate" />
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-0">
                <label for="floatingTextarea" class="form-label">Responsibilities</label>
                <div class="form-floating">
                  <textarea class="form-control" id="floatingTextarea">
                      Netcoden .inc 
                    </textarea>
                </div>
                <div class="form-text">275 characters left</div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-5">
                <button class="btn-delete ms-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                    <g clip-path="url(#clip0_4020_16964)">
                      <path d="M2.83789 4.96875H4.17122H14.8379" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M13.5052 4.97135V14.3047C13.5052 14.6583 13.3647 14.9974 13.1147 15.2475C12.8646 15.4975 12.5255 15.638 12.1719 15.638H5.50521C5.15159 15.638 4.81245 15.4975 4.5624 15.2475C4.31235 14.9974 4.17188 14.6583 4.17188 14.3047V4.97135M6.17187 4.97135V3.63802C6.17187 3.2844 6.31235 2.94526 6.5624 2.69521C6.81245 2.44516 7.15159 2.30469 7.50521 2.30469H10.1719C10.5255 2.30469 10.8646 2.44516 11.1147 2.69521C11.3647 2.94526 11.5052 3.2844 11.5052 3.63802V4.97135" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M7.50391 8.30469V12.3047" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M10.1719 8.30469V12.3047" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                      <clipPath id="clip0_4020_16964">
                        <rect width="16" height="16" fill="white" transform="translate(0.837891 0.96875)" />
                      </clipPath>
                    </defs>
                  </svg>
                  Delete
                </button>
              </div>
            </div>

            <!-- Add Employment History -->
            <div id="showExperience" style="display: none">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-label" for="DesignationView">Designation</label>
                    <input
                      type="text"
                      class="form-control"
                      id="DesignationView"
                      aria-describedby="DesignationView"
                      value="Marketing Manager" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="companyName">Company Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="companyName"
                      aria-describedby="companyName"
                      value="Netcoden .inc" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="AreaOfExperience">Area of Experience</label>
                    <input
                      type="text"
                      class="form-control"
                      id="AreaOfExperience"
                      aria-describedby="AreaOfExperience"
                      value="Marketing" />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="LocationView" class="form-label">Location</label>
                    <div class="form-floating">
                      <textarea
                        class="form-control h-auto"
                        rows="1"
                        cols="1"
                        id="LocationView">Netcoden, Inc
                    </textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="StartDate">Start Date </label>
                    <input
                      class="form-control"
                      type="date"
                      id="StartDate" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="d-flex align-items-center justify-content-between">
                      <label class="form-label" for="EndDate">End Date </label>
                      <div class="form-check mb-2">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="exampleCheck1" />
                        <label class="form-check-label" for="exampleCheck1">Continue</label>
                      </div>
                    </div>
                    <input
                      class="form-control"
                      type="date"
                      id="EndDate" />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group mb-0">
                    <label for="floatingTextarea" class="form-label">Responsibilities</label>
                    <div class="form-floating">
                      <textarea class="form-control" id="floatingTextarea">
                      Netcoden .inc 
                    </textarea>
                    </div>
                    <div class="form-text">275 characters left</div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group mb-5">
                    <button class="btn-delete ms-auto">
                      <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                        <g clip-path="url(#clip0_4020_16964)">
                          <path d="M2.83789 4.96875H4.17122H14.8379" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M13.5052 4.97135V14.3047C13.5052 14.6583 13.3647 14.9974 13.1147 15.2475C12.8646 15.4975 12.5255 15.638 12.1719 15.638H5.50521C5.15159 15.638 4.81245 15.4975 4.5624 15.2475C4.31235 14.9974 4.17188 14.6583 4.17188 14.3047V4.97135M6.17187 4.97135V3.63802C6.17187 3.2844 6.31235 2.94526 6.5624 2.69521C6.81245 2.44516 7.15159 2.30469 7.50521 2.30469H10.1719C10.5255 2.30469 10.8646 2.44516 11.1147 2.69521C11.3647 2.94526 11.5052 3.2844 11.5052 3.63802V4.97135" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M7.50391 8.30469V12.3047" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M10.1719 8.30469V12.3047" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                          <clipPath id="clip0_4020_16964">
                            <rect width="16" height="16" fill="white" transform="translate(0.837891 0.96875)" />
                          </clipPath>
                        </defs>
                      </svg>
                      Delete
                    </button>
                  </div>
                </div>
              </div>
            </div>





            <!-- Educcation -->
            <div class="col-md-12">
              <div class="input-title-wrapper mb-3">
                <p class="mb-0">Education</p>
                <button onclick="addEducation()">+ Add</button>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label class="form-label" for="degree">Degree Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="degree"
                  aria-describedby="degree"
                  value="SSC." />
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label class="form-label" for="MajorSubject">Major / Concentration</label>
                <input
                  type="text"
                  class="form-control"
                  id="MajorSubject"
                  aria-describedby="MajorSubject"
                  value="Science" />
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label class="form-label" for="InsName">Institution Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="InsName"
                  aria-describedby="InsName" />
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label class="form-label" for="year">Passing Year</label>
                <input
                  type="text"
                  class="form-control"
                  id="year"
                  aria-describedby="year"
                  value="2008" />
              </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10">
              <div class="form-group">
                <label for="CoveredTopic" class="form-label">Covered Topic</label>
                <div class="form-floating">
                  <textarea
                    class="form-control h-auto"
                    rows="1"
                    cols="1"
                    id="CoveredTopic">
                    </textarea>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2">
              <div class="form-group">
                <label class="form-label" for="cgpa">CGPA</label>
                <input
                  type="text"
                  class="form-control"
                  id="cgpa"
                  aria-describedby="cgpa"
                  value="4.50" />
              </div>
            </div>
            <div class="col-xl-12">
              <div class="form-group mb-5">
                <button class="btn-delete ms-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                    <g clip-path="url(#clip0_4020_16964)">
                      <path d="M2.83789 4.96875H4.17122H14.8379" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M13.5052 4.97135V14.3047C13.5052 14.6583 13.3647 14.9974 13.1147 15.2475C12.8646 15.4975 12.5255 15.638 12.1719 15.638H5.50521C5.15159 15.638 4.81245 15.4975 4.5624 15.2475C4.31235 14.9974 4.17188 14.6583 4.17188 14.3047V4.97135M6.17187 4.97135V3.63802C6.17187 3.2844 6.31235 2.94526 6.5624 2.69521C6.81245 2.44516 7.15159 2.30469 7.50521 2.30469H10.1719C10.5255 2.30469 10.8646 2.44516 11.1147 2.69521C11.3647 2.94526 11.5052 3.2844 11.5052 3.63802V4.97135" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M7.50391 8.30469V12.3047" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M10.1719 8.30469V12.3047" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                      <clipPath id="clip0_4020_16964">
                        <rect width="16" height="16" fill="white" transform="translate(0.837891 0.96875)" />
                      </clipPath>
                    </defs>
                  </svg>
                  Delete
                </button>
              </div>
            </div>

            <!-- Add Education -->
            <div id="showEducation" style="display: none">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="degree">Degree Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="degree"
                      aria-describedby="degree"
                      value="SSC." />
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="MajorSubject">Major / Concentration</label>
                    <input
                      type="text"
                      class="form-control"
                      id="MajorSubject"
                      aria-describedby="MajorSubject"
                      value="Science" />
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="InsName">Institution Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="InsName"
                      aria-describedby="InsName" />
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="year">Passing Year</label>
                    <input
                      type="text"
                      class="form-control"
                      id="year"
                      aria-describedby="year"
                      value="2008" />
                  </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10">
                  <div class="form-group">
                    <label for="CoveredTopic" class="form-label">Covered Topic</label>
                    <div class="form-floating">
                      <textarea
                        class="form-control h-auto"
                        rows="1"
                        cols="1"
                        id="CoveredTopic">
                    </textarea>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2">
                  <div class="form-group">
                    <label class="form-label" for="cgpa">CGPA</label>
                    <input
                      type="text"
                      class="form-control"
                      id="cgpa"
                      aria-describedby="cgpa"
                      value="4.50" />
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="form-group mb-5">
                    <button class="btn-delete ms-auto">
                      <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                        <g clip-path="url(#clip0_4020_16964)">
                          <path d="M2.83789 4.96875H4.17122H14.8379" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M13.5052 4.97135V14.3047C13.5052 14.6583 13.3647 14.9974 13.1147 15.2475C12.8646 15.4975 12.5255 15.638 12.1719 15.638H5.50521C5.15159 15.638 4.81245 15.4975 4.5624 15.2475C4.31235 14.9974 4.17188 14.6583 4.17188 14.3047V4.97135M6.17187 4.97135V3.63802C6.17187 3.2844 6.31235 2.94526 6.5624 2.69521C6.81245 2.44516 7.15159 2.30469 7.50521 2.30469H10.1719C10.5255 2.30469 10.8646 2.44516 11.1147 2.69521C11.3647 2.94526 11.5052 3.2844 11.5052 3.63802V4.97135" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M7.50391 8.30469V12.3047" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M10.1719 8.30469V12.3047" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                          <clipPath id="clip0_4020_16964">
                            <rect width="16" height="16" fill="white" transform="translate(0.837891 0.96875)" />
                          </clipPath>
                        </defs>
                      </svg>
                      Delete
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Training & Certificates -->
            <div class="col-xl-12">
              <div class="input-title-wrapper mb-3">
                <p class="mb-0">Training & Certification </p>
                <button onclick="addSkills()">+ Add</button>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label class="form-label" for="TopicView">Topic</label>
                <input
                  type="text"
                  class="form-control"
                  id="TopicView"
                  aria-describedby="TopicView"
                  value="English Speaking" />
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label class="form-label" for="InstituteView">Institute</label>
                <input
                  type="text"
                  class="form-control"
                  id="InstituteView"
                  aria-describedby="InstituteView"
                  value="BD jobs" />
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label class="form-label" for="DateAttend">Date Attended</label>
                <input
                  type="text"
                  class="form-control"
                  id="DateAttend"
                  aria-describedby="DateAttend" />
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label class="form-label" for="ExpiryDate">Expiry Date</label>
                <input
                  type="text"
                  class="form-control"
                  id="ExpiryDate"
                  aria-describedby="ExpiryDate" />
              </div>
            </div>
            <div class="col-xl-12">
              <div class="form-group mb-5">
                <button class="btn-delete ms-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                    <g clip-path="url(#clip0_4020_16964)">
                      <path d="M2.83789 4.96875H4.17122H14.8379" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M13.5052 4.97135V14.3047C13.5052 14.6583 13.3647 14.9974 13.1147 15.2475C12.8646 15.4975 12.5255 15.638 12.1719 15.638H5.50521C5.15159 15.638 4.81245 15.4975 4.5624 15.2475C4.31235 14.9974 4.17188 14.6583 4.17188 14.3047V4.97135M6.17187 4.97135V3.63802C6.17187 3.2844 6.31235 2.94526 6.5624 2.69521C6.81245 2.44516 7.15159 2.30469 7.50521 2.30469H10.1719C10.5255 2.30469 10.8646 2.44516 11.1147 2.69521C11.3647 2.94526 11.5052 3.2844 11.5052 3.63802V4.97135" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M7.50391 8.30469V12.3047" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M10.1719 8.30469V12.3047" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                      <clipPath id="clip0_4020_16964">
                        <rect width="16" height="16" fill="white" transform="translate(0.837891 0.96875)" />
                      </clipPath>
                    </defs>
                  </svg>
                  Delete
                </button>
              </div>
            </div>

            <!-- Add Training & Certificates -->
            <div id="showSkills" style="display: none">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="TopicView">Topic</label>
                    <input
                      type="text"
                      class="form-control"
                      id="TopicView"
                      aria-describedby="TopicView"
                      value="English Speaking" />
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="InstituteView">Institute</label>
                    <input
                      type="text"
                      class="form-control"
                      id="InstituteView"
                      aria-describedby="InstituteView"
                      value="BD jobs" />
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="DateAttend">Date Attended</label>
                    <input
                      type="text"
                      class="form-control"
                      id="DateAttend"
                      aria-describedby="DateAttend" />
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="ExpiryDate">Expiry Date</label>
                    <input
                      type="text"
                      class="form-control"
                      id="ExpiryDate"
                      aria-describedby="ExpiryDate" />
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="form-group mb-5">
                    <button class="btn-delete ms-auto">
                      <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                        <g clip-path="url(#clip0_4020_16964)">
                          <path d="M2.83789 4.96875H4.17122H14.8379" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M13.5052 4.97135V14.3047C13.5052 14.6583 13.3647 14.9974 13.1147 15.2475C12.8646 15.4975 12.5255 15.638 12.1719 15.638H5.50521C5.15159 15.638 4.81245 15.4975 4.5624 15.2475C4.31235 14.9974 4.17188 14.6583 4.17188 14.3047V4.97135M6.17187 4.97135V3.63802C6.17187 3.2844 6.31235 2.94526 6.5624 2.69521C6.81245 2.44516 7.15159 2.30469 7.50521 2.30469H10.1719C10.5255 2.30469 10.8646 2.44516 11.1147 2.69521C11.3647 2.94526 11.5052 3.2844 11.5052 3.63802V4.97135" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M7.50391 8.30469V12.3047" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M10.1719 8.30469V12.3047" stroke="#858585" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                          <clipPath id="clip0_4020_16964">
                            <rect width="16" height="16" fill="white" transform="translate(0.837891 0.96875)" />
                          </clipPath>
                        </defs>
                      </svg>
                      Delete
                    </button>
                  </div>
                </div>
              </div>
            </div>





            <div class="col-md-6">
              <div class="form-group">
                <label for="Certifications" class="form-label">Your LinkedIn
                </label>
                <input
                  type="url"
                  class="form-control"
                  id="Certifications"
                  aria-describedby="Certifications" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="Specialities" class="form-label">Your Website</label>
                <input
                  type="url"
                  class="form-control"
                  id="Specialities"
                  aria-describedby="Specialities" />
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="floatingTextarea" class="form-label">Message For Hiring Manager</label>
                <div class="form-floating">
                  <textarea class="form-control" id="floatingTextarea">
                      Lorem ipsum dolor sit amet consectetur. Lectus commodo sagittis accumsan felis elementum egestas pellentesque fames. Lacinia ut dictum vitae non neque ut. 
                    </textarea>
                </div>
                <div class="form-text">275 characters left</div>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-xl-12">
              <div class="wrapper">
                <div
                  class="action-buttons float-end"
                  role="group"
                  aria-label="Basic example">
                  <button
                    type="button"
                    class="btn-form btn-form-continue me-0"
                    data-bs-toggle="modal"
                    data-bs-target="#nextForm">
                    Next
                  </button>
                  <button type="button" class="btn-form btn-default">
                    Save
                  </button>

                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- End New Job Form -->
      </div>
    </div>
  </div>


  <!-- Next Step Modal -->
  <div class="modal fade next-step-modal" id="nextForm" tabindex="-1" aria-labelledby="NextFormLabel2">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">

          <form class="apply-job-form">
            <div class="logo pb-5">
              <a href="./index.html">
                <img src="./img/logo/logo.png" width="250" alt="Logo" class="img-fluid" />
              </a>
            </div>
            <div class="row">
              <div class="col-xl-12">
                <div class="form-group mb-3">
                  <div class="form-title">
                    <h2 class="text-capitalize">Apply Job</h2>
                    <p class="mb-0">
                      You Are Applying As
                      <a href="#">HR & Admin Officer</a> At
                      <a href="#">Yellow</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12">
                <div class="form-group mb-3">
                  <div class="form-title custom-border-bottom">
                    <h3 class="text-capitalize">
                      Recruiter Recommended to Answer This Questions
                    </h3>
                    <p class="mb-0">
                      Update your photo and personal details here.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-12">
                <div class="form-group mb-0">
                  <div class="form-title">

                    <p class="mb-0 text-black">
                      1. How Much Do you get in your current job?
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label" for="firstName">Write Answer</label>
                  <input
                    type="text"
                    class="form-control"
                    id="firstName"
                    aria-describedby="firstName" />
                </div>
              </div>
              <div class="col-xl-12">
                <div class="form-group mb-0">
                  <div class="form-title">
                    <p class="mb-0 text-black">
                      2. How Much Do you get in your current job?
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label" for="firstName">Write Answer</label>
                  <input
                    type="text"
                    class="form-control"
                    id="firstName"
                    aria-describedby="firstName" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="buttons-link">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#participant" class="btn-preview">Preview CV</button>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#SubmitModal" class="btn-submit">Submit</button>
                </div>
              </div>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>


  <!-- Submit Modal -->
  <div class="modal fade submit-modal" id="SubmitModal" tabindex="-1" aria-labelledby="SubmitModalLabel2">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-xl-12">
              <div class="form-group mb-3">
                <div class="form-title text-center">
                  <img src="./img/icon-check.png" class="mb-3" alt="Icon Check">
                  <h2 class="text-capitalize">Application submit successful</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="applicants-info">
            <div class="row no-gutters">
              <div class="col-md-12">
                <div class="applicants-bar">
                  <h3>Match With Your Profile</h3>
                  <a href="#">See All</a>
                </div>
                <div class="job-templates">
                  <div class="row">
                    <div class="col-xl-6">
                      <div class="card">
                        <div class="card-header">
                          <h3>PHP Developer <span>Mid Level </span></h3>
                        </div>
                        <div class="card-body">
                          <div class="social-address">
                            <img src="./img/icons/facebook.png" width="16" alt="Facebook Icon">
                            <h4>Information Technology</h4>
                          </div>
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
                          <div class="social-address">
                            <img src="./img/icons/facebook.png" width="16" alt="Facebook Icon">
                            <h4>Information Technology</h4>
                          </div>
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
                          <div class="social-address">
                            <img src="./img/icons/facebook.png" width="16" alt="Facebook Icon">
                            <h4>Information Technology</h4>
                          </div>
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
                          <div class="social-address">
                            <img src="./img/icons/facebook.png" width="16" alt="Facebook Icon">
                            <h4>Information Technology</h4>
                          </div>
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

                          </ul>
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
    </div>
  </div>


  <!-- Edit Modal -->
  <div
    class="modal fade participant-modal apply-modal"
    id="participant"
    tabindex="-1"
    aria-labelledby="participantLabel"
    aria-hidden="true">
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
                  <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M3.33464 3.33594H16.668C17.5846 3.33594 18.3346 4.08594 18.3346 5.0026V15.0026C18.3346 15.9193 17.5846 16.6693 16.668 16.6693H3.33464C2.41797 16.6693 1.66797 15.9193 1.66797 15.0026V5.0026C1.66797 4.08594 2.41797 3.33594 3.33464 3.33594Z" stroke="#323B4C" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M18.3346 5L10.0013 10.8333L1.66797 5" stroke="#323B4C" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    bappy.mithun@gmail.com
                  </p>
                  <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M18.3332 14.0975V16.5975C18.3341 16.8296 18.2866 17.0593 18.1936 17.2719C18.1006 17.4846 17.9643 17.6755 17.7933 17.8324C17.6222 17.9893 17.4203 18.1087 17.2005 18.1831C16.9806 18.2574 16.7477 18.285 16.5165 18.2641C13.9522 17.9855 11.489 17.1093 9.32486 15.7058C7.31139 14.4264 5.60431 12.7193 4.32486 10.7058C2.91651 8.53181 2.04007 6.05664 1.76653 3.48081C1.7457 3.25037 1.77309 3.01811 1.84695 2.79883C1.9208 2.57955 2.03951 2.37805 2.1955 2.20716C2.3515 2.03627 2.54137 1.89973 2.75302 1.80624C2.96468 1.71276 3.19348 1.66436 3.42486 1.66414H5.92486C6.32928 1.66016 6.72136 1.80338 7.028 2.06709C7.33464 2.3308 7.53493 2.69702 7.59153 3.09748C7.69705 3.89753 7.89274 4.68308 8.17486 5.43914C8.28698 5.73741 8.31125 6.06157 8.24478 6.37321C8.17832 6.68485 8.02392 6.9709 7.79986 7.19748L6.74153 8.25581C7.92783 10.3421 9.65524 12.0695 11.7415 13.2558L12.7999 12.1975C13.0264 11.9734 13.3125 11.819 13.6241 11.7526C13.9358 11.6861 14.2599 11.7104 14.5582 11.8225C15.3143 12.1046 16.0998 12.3003 16.8999 12.4058C17.3047 12.4629 17.6744 12.6668 17.9386 12.9787C18.2029 13.2906 18.3433 13.6888 18.3332 14.0975Z" stroke="#323B4C" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    01825932574
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-6 col-12">
              <div class="social-links mb-3 mb-sm-0">
                <a class="text-break" href="#">https://www.linkedin.com/in/bappymithun1/</a>
                <a class="text-break" href="#">https://dribbble.com/bappymithun</a>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-12">
              <a class="text-decoration-none btn-edit" type="button" href="./apply.php">Edit</a>
            </div>
          </div>
          <div class="row">

            <div class="col-xl-8">
              <div class="applicant-progress-wrapper">
                <div class="applicant-progress">
                  <h3>Preferred Job :</h3>
                  <div class="chips">
                    <span>Sales</span>
                    <span>Marketing</span>
                    <span>Digital Marketer</span>
                  </div>
                </div>
                <div class="applicant-progress">
                  <h3>Age :</h3>
                  <div class="chips">
                    <span>32 Years</span>

                  </div>
                </div>
                <div class="applicant-progress">
                  <h3>Expected Salery :</h3>
                  <div class="chips">
                    <span>$1200</span>
                  </div>
                </div>
                <div class="applicant-progress">
                  <h3>Total Experience :</h3>
                  <div class="chips">
                    <span>7 Years</span>
                  </div>
                </div>
                <div class="applicant-progress">
                  <h3>Nationality :</h3>
                  <div class="chips">
                    <span>Bangaldeshi</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="modal-body">
          <div class="details">
            <h1>Employment History</h1>
            <section>
              <h3>1. Senior Executive - Content Development <span>( Dec 2022 - Jan 2023 )</span></h3>
              <div class="mb-5">
                <div class="mb-4">
                  <h4 class="mb-3">BD JOBS Limited</h4>
                  <p>Location : Dhaka</p>
                  <p>Industry : Head Hunting</p>
                  <p>Aria of Experience : Marketing</p>
                </div>

                <div class="mb-4">
                  <h4 class="mb-3">Responsibilities :</h4>
                  <p>As a UI/UX designer i have collaborated with the stakeholders & development teams on core <br></br>
                    projects to make product interfaces and experiences.</p>
                </div>
              </div>
              <h3>2. Assistant Manager - Content Development <span>( Dec 2022 - Jan 2023 )</span></h3>
              <div class="mb-5">
                <div class="mb-4">
                  <h4 class="mb-3">BD JOBS Limited</h4>
                  <p>Location : Dhaka</p>
                  <p>Industry : Head Hunting</p>
                  <p>Aria of Experience : Marketing</p>
                </div>

                <div class="mb-4">
                  <h4 class="mb-3">Responsibilities :</h4>
                  <p>As a UI/UX designer i have collaborated with the stakeholders & development teams on core <br></br>
                    projects to make product interfaces and experiences.</p>
                </div>
              </div>
            </section>
          </div>
          <div class="details">
            <h1>Academic Qualification</h1>
            <section>
              <div class="mb-5 ps-3">
                <h3 class="mb-3">Masters of Arts (MA) in International Relations</h3>
                <h3 class="mb-3">Jahangirnagar University - 2011 (1 Year)</h3>
                <p>CGPA : 3.09 (Out of 4)</p>
              </div>

              <div class="mb-5 ps-3">
                <h3 class="mb-3">Masters of Arts (MA) in International Relations</h3>
                <h3 class="mb-3">Jahangirnagar University - 2011 (1 Year)</h3>
                <p>CGPA : 3.09 (Out of 4)</p>
              </div>
            </section>
          </div>
          <div class="details">
            <h1>Certification</h1>
            <section>
              <div class="mb-5 ps-3">
                <h3 class="mb-3">Computer Fundamental & Windows Operation System <span class="ms-3">Duration : 3 Months</span></h3>
                <h3 class="mb-4">Institute Of Information Technology JU <span class="ms-3">Year : 2015</span></h3>
                <h3 class="mb-3">Training Detail :</h3>
                <p>Lorem ipsum dolor sit amet consectetur. Varius rhoncus nisl condimentum erat at eu id. At aliquam ultricies a ut augue. Duis mi fringilla nisl aliquam venenatis. Rhoncus enim nunc pretium gravida non augue a phasellus gravida.</p>
              </div>
            </section>
          </div>
          <div class="details">
            <h1>Skills</h1>
            <section class="border-bottom-0">
              <ul>
                <li>Sales</li>
                <li>Marketing</li>
                <li>Digital Marketer</li>
              </ul>
            </section>
          </div>

          <div class="mb-5 mt-5">
            <button type="button" class="btn-submit"> Submit </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- End Main Section -->

<?php include 'view/footer.php'; ?>
<script>
  document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
    const dropZoneElement = inputElement.closest(".drop-zone");

    dropZoneElement.addEventListener("click", (e) => {
      inputElement.click();
    });

    inputElement.addEventListener("change", (e) => {
      if (inputElement.files.length) {
        updateThumbnail(dropZoneElement, inputElement.files[0]);
      }
    });

    dropZoneElement.addEventListener("dragover", (e) => {
      e.preventDefault();
      dropZoneElement.classList.add("drop-zone--over");
    });

    ["dragleave", "dragend"].forEach((type) => {
      dropZoneElement.addEventListener(type, (e) => {
        dropZoneElement.classList.remove("drop-zone--over");
      });
    });

    dropZoneElement.addEventListener("drop", (e) => {
      e.preventDefault();

      if (e.dataTransfer.files.length) {
        inputElement.files = e.dataTransfer.files;
        updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
      }

      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  /**
   * Updates the thumbnail on a drop zone element.
   *
   * @param {HTMLElement} dropZoneElement
   * @param {File} file
   */
  function updateThumbnail(dropZoneElement, file) {
    let thumbnailElement =
      dropZoneElement.querySelector(".drop-zone__thumb");

    // First time - remove the prompt
    if (dropZoneElement.querySelector(".drop-zone__prompt")) {
      dropZoneElement.querySelector(".drop-zone__prompt").remove();
    }

    // First time - there is no thumbnail element, so lets create it
    if (!thumbnailElement) {
      thumbnailElement = document.createElement("div");
      thumbnailElement.classList.add("drop-zone__thumb");
      dropZoneElement.appendChild(thumbnailElement);
    }

    thumbnailElement.dataset.label = file.name;

    // Show thumbnail for image files
    if (file.type.startsWith("image/")) {
      const reader = new FileReader();

      reader.readAsDataURL(file);
      reader.onload = () => {
        thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
      };
    } else {
      thumbnailElement.style.backgroundImage = null;
    }
  }
</script>
<script>
  // Show Experience
  function addExperience() {
    var x = document.getElementById("showExperience");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  // Show Education
  function addEducation() {
    var x = document.getElementById("showEducation");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  // Show Skills
  function addSkills() {
    var x = document.getElementById("showSkills");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
</script>
<script>
  // Form Reloading stop
  //Get form element
  var form = document.getElementById("formId");

  function submitForm(event) {
    //Preventing page refresh
    event.preventDefault();
  }

  //Calling a function during form submission.
  form.addEventListener("submit", submitForm);
</script>

<script>
  // Show Chips search box
  document.addEventListener("DOMContentLoaded", function() {
    const input = document.getElementById("PreferredJob");
    const chipsContainer = document.getElementById("chips-container");

    // Add a chip on Enter key press
    input.addEventListener("keypress", function(e) {
      if (e.key === "Enter" && input.value.trim() !== "") {
        addChip(input.value.trim());
        input.value = ""; // Clear input
      }
    });

    // Function to create and add a chip
    function addChip(text) {
      const chip = document.createElement("div");
      chip.className = "chip";
      chip.innerHTML = `
      <span>${text}</span>
      <button type="button" class="btn-close" aria-label="Close"><i class="fas fa-times"></i></button>
    `;
      chipsContainer.appendChild(chip);

      // Add event listener to remove chip
      chip.querySelector(".btn-close").addEventListener("click", function() {
        chip.remove();
      });
    }
  });
</script>
</body>

</html>