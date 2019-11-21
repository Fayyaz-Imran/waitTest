
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Patient Waiting List</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>

  <body class="bg-light">
    <div class="container">
      <div class="py-5 text-center">
        <h2>Patient Waiting List</h2>
        <p class="lead">This is a simple patient data system list to be used by nurse and doctors</p>
      </div>
  <!-- Form -->
      <form action="action_page.php" method="POST">
      <div class="row justify-content-center" >
      <div class="col-md-10 order-md-1">
        <h4 class="mb-3">Patient Details</h4>
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="patientID">Patient ID</label>
              <input type="text" class="form-control" name="patientID" placeholder="" required>
              <div class="invalid-feedback">
                Valid patient ID is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="p_registration_no">Patient Registration No</label>
              <input type="text" class="form-control" name="p_registration_no" placeholder="" required>
              <div class="invalid-feedback">
                Valid patient registration no is required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="patientName">Patient Name</label>
            <div class="input-group">
              <input type="text" class="form-control" name="patientName" placeholder="Name" required>
              <div class="invalid-feedback" style="width: 100%;">
                Patient name is required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="patientPic">Patient Picture</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="patientPic" >
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="p_id_card_no">IC Card No</label>
              <input type="text" class="form-control" name="p_id_card_no" placeholder="IC No" required>
              </select>
              <div class="invalid-feedback">
                Please enter valid IC no.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="patientGender">Gender</label>
              <select class="custom-select d-block w-100" name="patientGender" required>
                <option>Choose...</option>
                <option value ="Male">Male</option>
                <option value = "Female">Female</option>
              </select>
              <div class="invalid-feedback">
                Please choose a gender.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="patientDob">Date Of Birth</label>
              <input type="date" class="form-control" name="patientDob" placeholder="dd/mm/yyyy" required>
              <div class="invalid-feedback">
                Patient Date-of-birth required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="patient_address">Patient Address</label>
            <input type="text" class="form-control" name="patient_address" placeholder="1234 Main St" required>
            <div class="invalid-feedback">
              Please enter patient address.
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="clinic_id">Clinic ID</label>
              <input type="text" class="form-control" name="clinic_id" placeholder="" required>
              <div class="invalid-feedback">
                Valid Clinic ID is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="physician_id">Physician ID</label>
              <input type="text" class="form-control" name="physician_id" placeholder="" required>
              <div class="invalid-feedback">
                Valid physician ID is required.
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Add Patient Data</button>
        </form>
      </div>
    </div>
  </form>
  </body>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019-Now Hospital System</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>

  </footer>
</div>
</html>
