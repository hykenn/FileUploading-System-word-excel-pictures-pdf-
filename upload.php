<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle file upload
    if (isset($_FILES["file"])) {
        $file = $_FILES["file"];
        
        $uploadDir = "FHS_FILES" . DIRECTORY_SEPARATOR;
        
        // Validate file type for MS Word
        if ($_POST["store_option"] === "Ms Word") {
            $allowedExtensions = ["docx", "doc"];
            $fileExt = pathinfo($file["name"], PATHINFO_EXTENSION);
            
            if (in_array(strtolower($fileExt), $allowedExtensions)) {
                $destination = $uploadDir . "Msword" . DIRECTORY_SEPARATOR . basename($file["name"]);
                
                // Check if the destination directory exists, if not, create it
                if (!is_dir($uploadDir . "Msword")) {
                    mkdir($uploadDir . "Msword", 0777, true);
                }
                
                if (move_uploaded_file($file["tmp_name"], $destination)) {
                    echo '<script>alert("File successfully uploaded to folder MS Word.");';
                    echo 'window.location.href = "load.php";</script>';
                } else {
                    echo '<script>alert("Error uploading file.");';
                    echo 'window.location.href = "load.php";</script>';
                }
            } else {
                echo '<script>alert("Invalid file type for MS Word.");';
                echo 'window.location.href = "load.php";</script>';
            }
        }
        
        // Handle storing in Excel format
        elseif ($_POST["store_option"] === "Ms Excel") {
            $allowedExtensions = ["xlsx", "xls"];
            $fileExt = pathinfo($file["name"], PATHINFO_EXTENSION);
            
            if (in_array(strtolower($fileExt), $allowedExtensions)) {
                $destination = $uploadDir . "Msexcel" . DIRECTORY_SEPARATOR . basename($file["name"]);
                
                // Check if the destination directory exists, if not, create it
                if (!is_dir($uploadDir . "Msexcel")) {
                    mkdir($uploadDir . "Msexcel", 0777, true);
                }
                
                if (move_uploaded_file($file["tmp_name"], $destination)) {
                    echo '<script>alert("File successfully uploaded to folder MS Excel.");';
                    echo 'window.location.href = "load.php";</script>';
                } else {
                    echo '<script>alert("Error uploading file.");';
                    echo 'window.location.href = "load.php";</script>';
                }
            } else {
                echo '<script>alert("Invalid file type for MS Excel.");';
                echo 'window.location.href = "load.php";</script>';
            }
        }
        
        // Handle storing in PDF format
        elseif ($_POST["store_option"] === "PDF") {
            $allowedExtensions = ["pdf"];
            $fileExt = pathinfo($file["name"], PATHINFO_EXTENSION);
            
            if (in_array(strtolower($fileExt), $allowedExtensions)) {
                $destination = $uploadDir . "Pdf" . DIRECTORY_SEPARATOR . basename($file["name"]);
                
                // Check if the destination directory exists, if not, create it
                if (!is_dir($uploadDir . "Pdf")) {
                    mkdir($uploadDir . "Pdf", 0777, true);
                }
                
                if (move_uploaded_file($file["tmp_name"], $destination)) {
                    echo '<script>alert("File successfully uploaded to folder PDF.");';
                    echo 'window.location.href = "load.php";</script>';
                } else {
                    echo '<script>alert("Error uploading file.");';
                    echo 'window.location.href = "load.php";</script>';
                }
            } else {
                echo '<script>alert("Invalid file type for PDF.");';
                echo 'window.location.href = "load.php";</script>';
            }
        }
        
            // Handle storing pictures
            elseif ($_POST["store_option"] === "Pictures") {
                $allowedExtensions = ["jpg", "jpeg", "png", "gif"];
                $fileExt = pathinfo($file["name"], PATHINFO_EXTENSION);
                
                if (in_array(strtolower($fileExt), $allowedExtensions)) {
                    $destination = $uploadDir . "Pictures" . DIRECTORY_SEPARATOR . basename($file["name"]);
                    
                    // Check if the destination directory exists, if not, create it
                    if (!is_dir($uploadDir . "Pictures")) {
                        mkdir($uploadDir . "Pictures", 0777, true);
                    }
                    
                    if (move_uploaded_file($file["tmp_name"], $destination)) {
                        echo '<script>alert("Picture successfully uploaded.");';
                        echo 'window.location.href = "load.php";</script>';
                    } else {
                        echo '<script>alert("Error uploading picture.");';
                        echo 'window.location.href = "load.php";</script>';
                    }
                } else {
                    echo '<script>alert("Invalid file type for picture.");';
                    echo 'window.location.href = "load.php";</script>';
                }
        }
        
        // Handle storing videos
        elseif ($_POST["store_option"] === "Videos") {
            $allowedExtensions = ["mp4", "avi", "mov", "mkv"];
            $fileExt = pathinfo($file["name"], PATHINFO_EXTENSION);
            
            if (in_array(strtolower($fileExt), $allowedExtensions)) {
                $destination = $uploadDir . "Videos" . DIRECTORY_SEPARATOR . basename($file["name"]);
                
                // Check if the destination directory exists, if not, create it
                if (!is_dir($uploadDir . "Videos")) {
                    mkdir($uploadDir . "Videos", 0777, true);
                }
                
                if (move_uploaded_file($file["tmp_name"], $destination)) {
                    echo '<script>alert("Video successfully uploaded to folder Videos.");';
                    echo 'window.location.href = "load.php";</script>';
                } else {
                    echo '<script>alert("Error uploading video.");';
                    echo 'window.location.href = "load.php";</script>';
                }
            } else {
                echo '<script>alert("Invalid file type for video.");';
                echo 'window.location.href = "load.php";</script>';
            }
        } else {
            // Handle other cases or validation
            echo '<script>alert("Invalid option selected.");';
            echo 'window.location.href = "load.php";</script>';
        }
    } else {
        // Handle if file is not uploaded
        echo '<script>alert("No file uploaded.");';
        echo 'window.location.href = "load.php";</script>';
    }
}
?>
