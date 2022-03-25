<?php
   include('session.php');
?>
<html">

<head>
    <link rel="stylesheet" href="DTU Notes Style.css">
</head>

<body style="text-align:center;">
    <div id="header"> </div>
    <div>
        <div id="logo">
            <img src="dtu-logo.png">
        </div>
        <div id="logout">
            <button onclick="window.location.href='logout.php';">
                Logout
            </button>
        </div>
    </div>


    <h1>Welcome to your personal DTU note page!</h1>
    <h2>Here you can upload your notes!</h2>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="file">
        <input type="submit" value="Upload file">
    </form>

    <h2>Or you can click here to view your already uploaded files</h2>
    <button id="login" onclick="window.location.href='uploads';">
        See my files
    </button>
    <div id="footer"></div>
</body>

</html>