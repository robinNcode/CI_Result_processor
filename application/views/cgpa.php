<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
            Form
</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("hdhttp://robin.adovasoft.com/Beginningworks/myportfolio/IMG_20190706_154820-01.jpeg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(1px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
.head{
  background-image: url("https://image.shutterstock.com/image-photo/closeup-certificate-paper-black-cap-600w-1122179864.jpg");
  
}
</style>
</head>
<body>

<div class=""></div>

<div class="">
    <div class="row head ">
      <div class="col-1">
    
      </div>
      <div class="col-4">
        <center><img src="http://adovasoft.com/images/logo.jpg"></center>
      </div>
      <div class="col-6">
        <center><h1 style="color: aqua" class="bg-dark"> >>> STUDENT'S FORM <<< </h1></center>
        <marquee><h6 style="color: black">Please input all fields with true data to get desiered CGPA</h6></marquee>
      </div>
         <div class="col-1">
    
      </div>
    </div>
           <div class="container">
             <form method="POST" action="search.php">
             <div class="row pt-4">
                <div class="col-7">
                </div>
                <div class="col-4">
                  <input class="form-control" type="text" name="id" placeholder="Enter student's id here">
                  <marquee><h6 style="float:right">To get student's information with CGPA</h6></marquee>
                </div>
                <div class="col-1">
                  <button type="button" class="btn btn-outline-success">Search</button>
                </div>
             </div>
             </form>
           </div>
           <br>
<form method="get" action="cgpa.php">
    <div class="container">
      <legend class="bg-primary"><center><i class="fas fa-fw fa-briefcase"></i>Student Details</center></legend>
  <div class="card-body border border-primary">
          <fieldset>
          <!--name -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="name_id">Name:
              <span class="text-danger font-weight-bold">*</span> </label>
            <div class="col-md-7">
              <input class="form-control" type="text" name="naam" id="name_id" placeholder="Your Name" required/>
            </div>
            
          </div>
      <div class="form-group row">
            <label class="col-md-3 col-form-label" for="program_id">
              Program:
              <span class="text-danger font-weight-bold">*</span>
            </label>
            <div class="col-md-7">
              <select id="program_id" class="form-control" name="program_id" required>
                <option value="">Select a Option</option>
                <option value="1">B.Sc in CSE</option>
                <option value="2">B.Sc in Civil</option>
                <option value="3">B.Sc in EEE</option>
                <option value="4">B.Sc in Mechanical</option>
                <option value="5">B.Sc in ECE</option>
                  <?php
                  if ($importers != NULL) {
                     /* foreach ($importers as $importer) {
                          ?>
                        <option value="<?= $importer->id ?>"
                                <?= set_select('party_id', $importer->id); ?>
                                <?= ($importer->id == 0) ? 'disabled' : NULL ?>><?= $importer->name ?></option>
                      <?php }*/
                  } ?>
              </select>
              
                <?= form_error('program_id') ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="phone_id">Phone Number:
              <span class="text-danger font-weight-bold">*</span> </label>
            <div class="col-md-7">
              <input class="form-control" type="text" name="phone_id" id="phone_id" placeholder="Please Enter your Phone number" required/>
            </div>
            
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="email_id">Email ID:
              <span class="text-danger font-weight-bold">*</span> </label>
            <div class="col-md-7">
              <input class="form-control" type="email" name="email_id" id="email_id" placeholder="Enter your Email here.." required/>
            </div>
            
          </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="versity_id">
              University Name:
              <span class="text-danger font-weight-bold">*</span>
            </label>
            <div class="col-md-7">
              <select id="versity_id" class="form-control" name="versity_id" required>
                <option value="">Select a Option</option>
                <option value="1">Sonargaon University</option>
                <option value="2">Institute of Science & Technology</option>
                <option value="3">University of Dhaka</option>
                <option value="4">University of Chittagong</option>
                <option value="5">City University</option>
                <option value="6">World University</option>

                  <?php
                  if ($importers != NULL) {
                     /* foreach ($importers as $importer) {
                          ?>
                        <option value="<?= $importer->id ?>"
                                <?= set_select('party_id', $importer->id); ?>
                                <?= ($importer->id == 0) ? 'disabled' : NULL ?>><?= $importer->name ?></option>
                      <?php }*/
                  } ?>
              </select>
              
                <?= form_error('versity_id') ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="semester_id">
              Semester:
              <span class="text-danger font-weight-bold">*</span>
            </label>
            <div class="col-md-7">
              <select id="semester_id" class="form-control" name="semester_id" required>
                <option value="">Select a Option</option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
                <option value="5">5th</option>
                <option value="6">6th</option>
                <option value="7">7th</option>
                <option value="8">8th</option>
                <option value="9">9th</option>
                <option value="10">10th</option>
                <option value="11">11th</option>
                <option value="12">12th</option>

                  <?php
                  if ($importers != NULL) {
                     /* foreach ($importers as $importer) {
                          ?>
                        <option value="<?= $importer->id ?>"
                                <?= set_select('party_id', $importer->id); ?>
                                <?= ($importer->id == 0) ? 'disabled' : NULL ?>><?= $importer->name ?></option>
                      <?php }*/
                  } ?>
              </select>
              
                <?= form_error('semester_id') ?>
            </div>

        </div>
      <div class="container">
        <div class="row">
          <div class="col-3">
            <label class="col-md-3 col-form-label" for="gender">
              Gender:
              <span class="text-danger font-weight-bold">*</span>
            </label>
          </div>
          <div class="col-3">
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="customRadio1" name="example1">
              <label class="custom-control-label" for="customRadio1">Male</label>
            </div>
          </div>
          <div class="col-3">
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="customRadio2" name="example2">
              <label class="custom-control-label" for="customRadio2">Female</label>
            </div>
          </div>
          <div class="col-3">
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="customRadio3" name="example3">
              <label class="custom-control-label" for="customRadio3">Others</label>
            </div>
          </div>

        </div>
        </div>
      </fieldset>
        </div>        
      </div>
  <div class="container pt-4">
    <legend class="bg-primary"><center><i class="fas fa-fw fa-briefcase"></i>Course Details</center></legend>
      <div class="card-body border border-primary">
          <fieldset>
          <div class="form-group row">
            <!-- Exp title -->
            <div class="col-md-6">
              <label for="category" for="course_name">Course Name:
                <span class="text-danger font-weight-bold">*</span>
              </label>
              <input type="text" class="form-control" id="course_name"><br>
              <input type="text" class="form-control" id="course_name"><br>
              <input type="text" class="form-control" id="course_name"><br>
              <input type="text" class="form-control" id="course_name"><br>
              <input type="text" class="form-control" id="course_name"><br>
              <input type="text" class="form-control" id="course_name">
            </div>
            <!-- mark -->
            <div class="col-md-3">
              <label for="mark">Mark:
                <span class="text-danger font-weight-bold">*</span> </label>
            <input type="number" step="0.01" min="0" id="mark" class="form-control" name="mark" value="<?= set_value('mark') ?>" required><br>
            <input type="number" step="0.01" min="0" id="mark" class="form-control" name="mark" value="<?= set_value('mark') ?>" required><br>
            <input type="number" step="0.01" min="0" id="mark" class="form-control" name="mark" value="<?= set_value('mark') ?>" required><br>
            <input type="number" step="0.01" min="0" id="mark" class="form-control" name="mark" value="<?= set_value('mark') ?>" required><br>
            <input type="number" step="0.01" min="0" id="mark" class="form-control" name="mark" value="<?= set_value('mark') ?>" required><br>
            <input type="number" step="0.01" min="0" id="mark" class="form-control" name="mark" value="<?= set_value('mark') ?>" required>
                <?= form_error('mark') ?>
            </div>
            <!-- credit -->
            <div class="col-md-3">
              <label for="credit">Credit:
                <span class="text-danger font-weight-bold">*</span> </label>
              <input type="text" id="credit" class="form-control"name="credit" value="<?= set_value('credit') ?>"><br>
              <input type="text" id="credit" class="form-control"name="credit" value="<?= set_value('credit') ?>"><br>
              <input type="text" id="credit" class="form-control"name="credit" value="<?= set_value('credit') ?>"><br>
              <input type="text" id="credit" class="form-control"name="credit" value="<?= set_value('credit') ?>"><br>
              <input type="text" id="credit" class="form-control"name="credit" value="<?= set_value('credit') ?>"><br>
              <input type="text" id="credit" class="form-control"name="credit" value="<?= set_value('credit') ?>">
                <?= form_error('credit') ?>
            </div>
            
          </div>
        </fieldset>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-12">
            <button type="submit" name="create" value="yes" class="btn btn-outline-warning float-right">Submit
            </button>
          </div>
        </div>
      </div>
        <?= form_close(); ?>
    </div>  
    
      </div>      
         
  </div>
</div>



</div>

</form>
</body>
</html>
