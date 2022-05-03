<?php
include('session.php');
?>
<html">

    <head>
        <title>DTU Notes</title>
        <!-- Awesome DTU stylesheet-->
        <link rel="stylesheet" href="DTU Notes Style.css">
    </head>

    <body style="text-align:center;">
        <!-- Red header -->
        <div id="header"> </div>
        <div>
            <div id="logo">
                <img src="Pictures/dtu-logo.png">
            </div>
            <div id="Logout">
                <a href='logout.php'>
                    <img src="Pictures/Logout.png">
                </a>
            </div>
        </div>


        <h1>Welcome to your personal DTU note page!</h1>
        <h2>Here you can upload your notes!</h2>

        <!-- Form for the user to upload files -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="file">
            <input type="submit" value="Upload file">
        </form>

        <h2>Or you can click here to view your already uploaded files</h2>

        <!-- Php, Button and script to take the user to files -->
        <?php
        $userDir = $_SESSION['myusername'];

        ?>
        <button id="uploads" onclick="seeUserFiles()">See my files</button>
        <script>
            function seeUserFiles() {
                window.location.href = "myFiles.php";
            }
        </script>

        <!-- Red footer -->
        <div id="footer"></div>
    </body>

    </html>