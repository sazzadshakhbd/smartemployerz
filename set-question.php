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
                <div class="row mb-4">
                  <div class="col-md-12">
                    <div class="question-wrapper">
                      <div class="count-qus">
                        <button>
                          Question :  <span>0</span>
                        </button>
                      </div>
                      <div class="create-question">
                        <button class="add-new" data-bs-toggle="modal" data-bs-target="#AddNewQuestion">Add New Question</button>
                        <a class="ai-btn text-decoration-none text-center pointer" href="set-question-ai.php">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
                            <path d="M7.33073 1.33203L8.73073 6.3987L13.9974 7.9987L8.73073 10.0277L7.33073 14.6654L5.30174 10.0277L0.664062 7.9987L5.3974 6.3987L7.33073 1.33203Z" fill="white"/>
                            <path d="M15.9974 0L16.6974 2.53333L19.3307 3.33333L16.6974 4.34783L15.9974 6.66667L14.9829 4.34783L12.6641 3.33333L15.0307 2.53333L15.9974 0Z" fill="#FDFDFD"/>
                            <path d="M16.6667 10.668L17.2267 12.6946L19.3333 13.3346L17.2267 14.1462L16.6667 16.0013L15.8551 14.1462L14 13.3346L15.8933 12.6946L16.6667 10.668Z" fill="white"/>
                          </svg>
                          Generate With Ai
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="question-box">
                      <div class="blank-content">
                        <img src="./img/blank.png" alt="Blank Question" class="img-fluid">
                        <p>You Can Generate Questions With Ai, Or Add Questions Manually</p>
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

    
<!--AddNewQuestion Modal -->
<div class="modal fade user-modal" id="AddNewQuestion" tabindex="-1" aria-labelledby="AddNewQuestionLabel" aria-hidden="true">
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
    
    <?php include 'view/footer.php'; ?>
    


    

   
