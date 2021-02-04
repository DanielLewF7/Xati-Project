<?php
$_SESSION['username'] = 'Admin';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="node_modules/bootstrap/dist/css/bootstrap-grid.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet">
    <link href="../Typographie/fonts.css" rel="stylesheet">
    <link href="../Footer/footer.css" rel="stylesheet">
    <link href="../Navigation/Navigation.css" rel="stylesheet">
    <link href="../Spacing/spacing.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/93cce96e7d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../script.js"></script>
    <title>a new page</title>
</head>
<body>
<div class="Navigation">
    <ul class="menu">
        <li><a href="../Index.php">Home</a></li>
    </ul>
</div>
<div class="topnav">
    <a href="#home" class="active">
        <i class="fas fa-align-justify off"></i>
    </a>
    <div id="topLinks">
        <a href="../index.php">Home</a>
        <button class="btn-small text-center">Close Me</button>
    </div>
</div>

<div class="container-fluid">
    <div class="content spacing-t-medium spacing-b-medium">
        <div class="gallery-container text-center">
            <?php
            include_once '../register/dbh.inc.php';

            $sql = 'SELECT * FROM gallery ORDER BY orderGallery DESC';
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo 'SQL statement fail!';
            } else {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo'<a href="#">
                    <div class="newGalleryImg" style="background-image: url(../Images/GalleryImg/'.$row["imgFullNameGallery"].');"></div>
                    <h3>'.$row["titleGallery"].'</h3>
                    <p>'.$row["descGallery"].'</p>
                    </a>';
                }
            }
        ?>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="gallery-upload-form text-center">
                    <form action="gallery-upload.inc.php" Method="post" enctype="multipart/form-data">
                        <h2>Upload a picture here</h2>
                        <div class="col-2">
                        <input type="text" name="filename" placeholder="file name" class="spacing-b-tiny XatiInput XatiInputGallery">
                        </div>
                        <div class="col-2">
                        <input type="text" name="filetitle" placeholder="Image title" class="spacing-b-tiny XatiInput XatiInputGallery">
                        </div>
                        <div class="col-2">
                        <input type="text" name="filedesc" placeholder="Image description" class="spacing-b-tiny XatiInput XatiInputGallery">
                        </div>
                        <div class="col-2">
                         <input type="file" name="file" class="spacing-b-tiny XatiInput XatiInputGallery">
                         </div>
                        <button type="submit" name="submit" class="btn spacing-t-small">UPLOAD</button>
                    </form>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="imgbox">
        <h3>Website by Daniel Lewandowski</h3>
    </div>
    <div class="flinks">
        <a href="google.com">Datenschutz</a>
        <span class="pipe">|</span>
        <a href="google.com">Impressum</a>
    </div>
    <button class="btop"><i class="fas fa-arrow-up"></i></button>
</div>
</body>
</html>