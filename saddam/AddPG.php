<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body> 
<h1><?php
    $link = mysqli_connect("localhost", "root", "", "saddamschool");
// Check connection
    if ($link === false) {
        die("Connection failed: ");
    }
	//if (isset($_POST['submit'])) {
        $pgID = $_POST['pgID'];
        $pgname = $_POST['pgname'];
        $pgphone = $_POST['pgphone'];
        $pgaddress = $_POST['pgaddress'];
        $pgemail = $_POST['pgemail'];
        $pupilid = $_POST['pupilid'];
        $sql = "INSERT INTO `pg`(`pgID`, `pgname`, `pgphone`, `pgaddress`, `pgemail`, `pupilid`)
        VALUES ('$pgID','$pgname',$pgphone,'$pgaddress','$pgemail','$pupilid')";
       if (mysqli_query($link, $sql)) {
         echo "New record has been created successfully";
       } else {
         echo "An Error occured while adding record ";
       }
    //}
?></h1>
<a href="index.html">Click here to go back to the home page!</a>
</body>
</html>