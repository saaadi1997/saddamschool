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
        $pupilid = $_POST['pupilid'];
        $pupilname = $_POST['pupilname'];
        $pupilage = $_POST['pupilage'];
        $pupiladdress = $_POST['pupiladdress'];
        $pupilemail = $_POST['pupilemail'];
        $courseID = $_POST['courseID'];
        $sql = "INSERT INTO `students`(`pupilid`, `pupilname`, `pupilage`, `pupiladdress`, `pupilemail`, `courseID`)
        VALUES ('$pupilid','$pupilname',$pupilage,'$pupiladdress','$pupilemail','$courseID')";
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