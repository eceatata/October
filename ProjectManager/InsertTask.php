<html>
    <head>
        <title>
          Create Task
        </title>
    </head>
    <body>
        <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "CmpE321";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }else{
    $startDate = $_POST["startDate"];
    $totalTaskDays = $_POST["totalTaskDays"];

    $sql = "INSERT INTO Tasks (StartDate, TotalTaskDays)
                  VALUES ('$startDate', '$totalTaskDays')" ;
    $result = $conn->query($sql);

    $conn->close();
    $msg = "Project is created. Click here to go back <a href = 'http://localhost:8080/CmpE321/ProjectManager/HomePage.php'> Admin Home Page </a>";
    echo $msg;
  }

?>
    </body>
</html>
