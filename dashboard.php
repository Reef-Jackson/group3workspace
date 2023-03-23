<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group3Workspace</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <h1>Performance Dashboard: Waterman Group</h1>
    <?php
        include_once("includes/nav.php");
        include_once("includes/charts.php");
        include("includes\DBConnection.php");
        $conn = OpenCon();
        session_start();
        $UserID = $_SESSION['UserID'];
        $Username = $_SESSION['username'];
        $PermissionLevel = $_SESSION['permission'];
        $query = "SELECT ClientID FROM users WHERE UserID = " . $UserID;
        $request = $conn->query($query);
        $row = $request->fetch_assoc();
        $ClientID = $row["ClientID"];
    ?>



    <?php
    CloseCon($conn);
    ?>
</body>

</html>
