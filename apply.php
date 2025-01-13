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
              <img src="./img/logo/logo.png" alt="Logo" class="img-fluid" />
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
                    data-bs-target="#participant">
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


  <!-- Modal -->
  <div
    class="modal fade participant-modal"
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
                  <p>bappy.mithun@gmail.com</p>
                  <p>01825932574</p>
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
              <a class="text-decoration-none pdf-download" type="button" href="./apply.php">Edit</a>
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
                  <span class="active-shortlist"><i class="fas fa-check"></i>Shortlist</span>
                  <span><i class="fas fa-file-invoice"></i>Assessment</span>
                  <span><i class="fas fa-check"></i>Interview</span>
                  <span><i class="fas fa-check"></i>Final Selection</span>
                  <span><i class="fas fa-check"></i>Offer</span>
                  <span><i class="fas fa-check"></i>Hire</span>
                  <span><i class="far fa-trash-alt text-danger"></i> Reject</span>
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