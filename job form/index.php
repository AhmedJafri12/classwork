<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Job Application</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #f8f9fa, #e9ecef);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .application-form {
      background: #fff;
      border-radius: 15px;
      padding: 40px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    }

    .application-form h2 {
      font-weight: 700;
      color: #198754;
      margin-bottom: 25px;
    }

    .form-label {
      font-weight: 600;
    }

    .form-control,
    .form-select {
      border-radius: 8px;
      height: 45px;
    }

    .btn-success {
      padding: 12px;
      font-size: 16px;
      border-radius: 8px;
      font-weight: 600;
    }

    .form-section {
      margin-bottom: 25px;
    }

    .upload-note {
      font-size: 13px;
      color: #6c757d;
      margin-top: 5px;
    }
  </style>
</head>

<body>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-md-9">
        <div class="application-form">
          <h2 class="text-center">Job Application Form</h2>
          <!-- <form action="process.php" method="POST" enctype="multipart/form-data"> -->
          <form  action="process.php" method="POST" enctype="multipart/form-data" >

            <div class="form-section">
              <label class="form-label">Full Name</label>
              <input type="text" name="fullname" class="form-control" placeholder="John Doe" required>
            </div>

            <div class="form-section">
              <label class="form-label">Email Address</label>
              <input type="email" name="email" class="form-control" placeholder="example@mail.com" required>
            </div>

            <div class="form-section">
              <label class="form-label">Gender</label>
              <select name="gender" class="form-select" required>
                <option value="">Select your gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>

            <div class="form-section">
              <label class="form-label">Position Applying For</label>
              <select name="position" class="form-select" required>
                <option value="">Select position</option>
                <option value="Frontend Developer">Frontend Developer</option>
                <option value="Backend Developer">Backend Developer</option>
                <option value="Full Stack Developer">Full Stack Developer</option>
              </select>
            </div>

            <div class="form-section">
              <label class="form-label">Upload Your CV</label>
              <input type="file" name="cv" class="form-control" accept=".pdf" required>
              <div class="upload-note">Only PDF files are allowed.</div>
            </div>

            <div class="form-section">
              <label class="form-label">Upload Your PFP</label>
              <input type="file" name="pfp" class="form-control" accept=".jpeg " required>
              <div class="upload-note">Only image files are allowed.</div>
            </div>


            <div class="d-grid">
              <button type="submit" class="btn btn-success">Submit Application</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>


</html>
