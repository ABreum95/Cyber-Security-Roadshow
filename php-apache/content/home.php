<?php
include('session.php');
?>
<html">

    <head>
        <title>DSB Notes: Home</title>
        <!-- Awesome DSB stylesheet-->
        <link rel="stylesheet" href="dsb-notes-style.css">
    </head>

    <body style="text-align:center;">
        <!-- Red header -->
        <div id="header"> </div>
        <div>
            <div id="logo">
                <img src="pictures/dsb-logo.png">
            </div>
            <div id="logout">
                <a href='logout.php'>
                    <img src="pictures/logout.png">
                </a>
            </div>
        </div>


        <h1>Welcome to your personal DSB Notes page!</h1>
        <h2>Upload your files here</h2>

        <!-- Form for the user to upload files -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select file to upload:
            <input type="file" name="file">
            <input type="submit" value="Upload file">
        </form>

        <h2>Click below to see already uploaded files</h2>

        <!-- Php, Button and script to take the user to files -->
        <?php
        $userDir = $_SESSION['myusername'];

        ?>
        <button id="uploads" onclick="seeUserFiles()">See my files</button>
        <script>
            function seeUserFiles() {
                window.location.href = "my-files.php";
            }
        </script>

        <!-- Red footer -->
        <div id="footer"></div>
    </body>

    </html>
  <div id="footer"></div>
    </body>

    </html>