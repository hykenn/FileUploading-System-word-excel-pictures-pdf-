<?php
//msword
$mswordFiles = [];
$mswordDir = "FHS_FILES" . DIRECTORY_SEPARATOR . "Msword"; // Adjust this to match your folder structure

if (is_dir($mswordDir)) {
    $mswordFiles = array_diff(scandir($mswordDir), ['.', '..']);
}



//msexcel
$msexcelFiles = [];
$msexcelDir = "FHS_FILES" . DIRECTORY_SEPARATOR . "Msexcel"; // Update this path according to your folder structure

if (is_dir($msexcelDir)) {
    $msexcelFiles = array_diff(scandir($msexcelDir), ['.', '..']);
}


//pdf
$pdfFiles = [];
$pdfDir = "FHS_FILES" . DIRECTORY_SEPARATOR . "Pdf"; // Update this path according to your folder structure

if (is_dir($pdfDir)) {
    $pdfFiles = array_diff(scandir($pdfDir), ['.', '..']);
}


//pictures
$pictureFiles = [];
$pictureDir = "FHS_FILES" . DIRECTORY_SEPARATOR . "Pictures"; // Update this path according to your folder structure

if (is_dir($pictureDir)) {
    $pictureFiles = array_diff(scandir($pictureDir), ['.', '..']);
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>FHS File Downloading</title>
  <link rel="icon" href="img/favicon2.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <style>
        .hhead{
            font-size: large;
            font-family: Tahoma;
            font-weight: 500;
            text-align: center;
        }
    </style>
<div style="display: flex; justify-content: center; align-items: center;">
<div style="max-width: 70%; width: 100%; margin: 0 auto;"><br>
<p class="hhead">FIELD HEALTH SERVICES FILES STORED AND RECOVERY PURPOSES</p>

<div style="display: flex;">
        <div style="display: block;" class="forcontainer">
                <div class="container mt-3">
                    <h3>MS WORD LIST</h3>
                    <p>Click on the button to open the modal.</p>
                    
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModalword">
                    Open Ms Word Folder
                    </button>
                </div>
                
                <!-- The Modal -->
                <div class="modal fade" id="myModalword">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100">MS WORD LIST</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="d-flex justify-content-end mb-2">
                            <input style="width: 40%;" type="text" class="form-control" id="searchInput" placeholder="Search file here">
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">MS WORD LIST</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody id="fileList">
                                <?php foreach ($mswordFiles as $file) : ?>
                                    <tr class="fileItem">
                                        <td><?php echo $file; ?></td>
                                        <td>
                                            <a href="<?php echo $mswordDir . DIRECTORY_SEPARATOR . $file; ?>" class="btn btn-primary" download>Save Files</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <script>
                        // JavaScript for filtering files based on search input
                        const searchInput = document.getElementById('searchInput');
                        const fileList = document.getElementById('fileList').getElementsByClassName('fileItem');

                        searchInput.addEventListener('input', function () {
                            const searchTerm = this.value.toLowerCase();

                            for (const file of fileList) {
                                const fileName = file.getElementsByTagName('td')[0].innerText.toLowerCase();
                                if (fileName.includes(searchTerm)) {
                                    file.style.display = 'table-row';
                                } else {
                                    file.style.display = 'none';
                                }
                            }
                        });
                    </script>



                        <!-- Modal footer -->
                        <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
        </div>


            <div style="display: block;" class="forcontainer">
                <div class="container mt-3">
                    <h3>MS EXCEL LIST</h3>
                    <p>Click on the button to open the modal.</p>
                    
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModalexcel">
                    Open Ms Excel Folder
                    </button>
                </div>
                
                <!-- The Modal -->
                <div class="modal fade" id="myModalexcel">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100">MS EXCEL LIST</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                 
                        
                        <!-- Modal body for MS Excel -->
                        <div class="modal-body">
                            <div class="d-flex justify-content-end mb-2">
                                <input style="width: 40%;" type="text" class="form-control" id="searchInputExcel" placeholder="Search file here">
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">MS EXCEL LIST</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody id="fileListExcel">
                                    <?php foreach ($msexcelFiles as $file) : ?>
                                        <tr class="fileItemExcel">
                                            <td><?php echo $file; ?></td>
                                            <td>
                                                <a href="<?php echo $msexcelDir . DIRECTORY_SEPARATOR . $file; ?>" class="btn btn-primary" download>Save Files</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <script>
                            // JavaScript for filtering MS Excel files based on search input
                            const searchInputExcel = document.getElementById('searchInputExcel');
                            const fileListExcel = document.getElementById('fileListExcel').getElementsByClassName('fileItemExcel');

                            searchInputExcel.addEventListener('input', function () {
                                const searchTerm = this.value.toLowerCase();

                                for (const file of fileListExcel) {
                                    const fileName = file.getElementsByTagName('td')[0].innerText.toLowerCase();
                                    if (fileName.includes(searchTerm)) {
                                        file.style.display = 'table-row';
                                    } else {
                                        file.style.display = 'none';
                                    }
                                }
                            });
                        </script>




                        <!-- Modal footer -->
                        <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>



                <div style="display: block;" class="forcontainer">
                <div class="container mt-3">
                    <h3>PDF LIST</h3>
                    <p>Click on the button to open the modal.</p>
                    
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModalpdf">
                    Open Pdf Folder
                    </button>
                </div>
                
                <!-- The Modal -->
                <div class="modal fade" id="myModalpdf">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100">PDF LIST</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>


                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="d-flex justify-content-end mb-2">
                                    <input style="width: 40%;" type="text" class="form-control" id="searchInputpdf" placeholder="Search file here">
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">PDF LIST</th>
                                            <th scope="col">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody id="fileListpdf">
                                        <?php foreach ($pdfFiles as $file) : ?>
                                            <tr class="fileItempdf">
                                                <td><?php echo $file; ?></td>
                                                <td>
                                                    <a href="<?php echo $pdfDir . DIRECTORY_SEPARATOR . $file; ?>" class="btn btn-primary" download>Save As</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <script>
                            // JavaScript for filtering MS Excel files based on search input
                            const searchInputpdf = document.getElementById('searchInputpdf');
                            const fileListpdf = document.getElementById('fileListpdf').getElementsByClassName('fileItempdf');

                            searchInputpdf.addEventListener('input', function () {
                                const searchTerm = this.value.toLowerCase();

                                for (const file of fileListpdf) {
                                    const fileName = file.getElementsByTagName('td')[0].innerText.toLowerCase();
                                    if (fileName.includes(searchTerm)) {
                                        file.style.display = 'table-row';
                                    } else {
                                        file.style.display = 'none';
                                    }
                                }
                            });
                        </script>


                        <!-- Modal footer -->
                        <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>



                <div style="display: block;" class="forcontainer">
                <div class="container mt-3">
                    <h3>PICTURE LIST</h3>
                    <p>Click on the button to open the modal.</p>
                    
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModalpictures">
                    Open Picture Folder
                    </button>
                </div>
                
                <!-- The Modal -->
                <div class="modal fade" id="myModalpictures">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100">PICTURES LIST</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="d-flex justify-content-end mb-2">
                                    <input style="width: 40%;" type="text" class="form-control" id="searchInputpicture" placeholder="Search file here">
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">PICTURE LIST</th>
                                            <th scope="col">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody id="fileListpicture">
                                        <?php foreach ($pictureFiles as $file) : ?>
                                            <tr class="fileItempicture">
                                                <td><?php echo $file; ?></td>
                                                <td>
                                                    <a href="<?php echo $pictureDir . DIRECTORY_SEPARATOR . $file; ?>" target="_blank">
                                                        <img src="<?php echo $pictureDir . DIRECTORY_SEPARATOR . $file; ?>" style="max-width: 100px; max-height: 100px;">
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <script>
                            // JavaScript for filtering MS Excel files based on search input
                            const searchInputpicture = document.getElementById('searchInputpicture');
                            const fileListpicture = document.getElementById('fileListpicture').getElementsByClassName('fileItempicture');

                            searchInputpicture.addEventListener('input', function () {
                                const searchTerm = this.value.toLowerCase();

                                for (const file of fileListpicture) {
                                    const fileName = file.getElementsByTagName('td')[0].innerText.toLowerCase();
                                    if (fileName.includes(searchTerm)) {
                                        file.style.display = 'table-row';
                                    } else {
                                        file.style.display = 'none';
                                    }
                                }
                            });
                        </script>



                        <!-- Modal footer -->
                        <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>


                <div style="display: block;" class="forcontainer">
                <div class="container mt-3">
                    <h3>VIDEOS LIST</h3>
                    <p>Click on the button to open the modal.</p>
                    
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModalvideos">
                    Open Videos Folder
                    </button>
                </div>

                <!-- The Second Modal -->
                <div class="modal fade" id="myModalvideos">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title">Modal Heading 2</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                        Modal body 2..
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

</div>



</div>
</div>



</body>
</html>
