<!DOCTYPE html>
<html lang="en">
<head>
  <title>FHS File Uploading</title>
  <link rel="icon" href="img/favicon1.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <style>
        .container{
           width: 40%;
        }
        .head{
          color: green;
        }

        .note{
            font-size: x-small;
            color: red;
        }
    </style>

<div class="container mt-3">
  <h3>FIELD HEALTH SERVICES UPLOADING FILES SYSTEM</h3>
  <p class="head">FOR FATEST RECOVERY OF FILES AND KEEP THE BACK UP FILES AUTOMATICALLY</p>
    
  <form action="upload.php" method="post" enctype="multipart/form-data" class="was-validated">
    <div class="mb-3 mt-3">
      <label for="file" class="form-label">Attach File here:</label>
      <input type="file" class="forfile form-control" id="file" placeholder="Enter username" name="file" required>
    </div>
  
    <div class="mb-3 mt-3">
      <label for="store_option" class="form-label">Store it:</label>
      <select class="form-control" name="store_option">
        <option>Select Option Here</option>
        <option value="Ms Word">Ms Word</option>
        <option value="Ms Excel">Ms Excel</option>
        <option value="PDF">PDF</option> 
        <option value="Pictures">Pictures</option>
        <option value="Videos">Videos</option>
      </select>
      <p class="note">Note! Select path were you want to save the file</p>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
</div>

</body>
</html>
