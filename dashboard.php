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
    <script src="http://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.export.js"></script>

    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <div>
        <h1>Performance Dashboard: Waterman Group</h1>
        <nav>
            <ul>
                <li><a href="./my_dashboard.php" id="my_dashboard-link">My Dashboard</a></li>
                <li><a href="./dashboard.php" id="dashboard-link">Waterman Group</a></li>
                <button id="addChart">Add Chart</button>
                <button id="addReport">New Report</button>
            </ul>
        </nav>
    </div>
    <div id="charts">
        
        <div class="chart-container" id="0">
            <div id="chart">Chart Should Load Here...</div>
            <button id="chartDelete">Delete</button>
        </div>

        <div class="chart-container" id="1">
            <div id="chart2">Chart Should Load Here...</div>
            <button id="chartDelete">Delete</button>
        </div>

        <div class="chart-container" id="2">
            <div id="chart2">Chart Should Load Here...</div>
            <button id="chartDelete">Delete</button>
        </div>

        <div class="chart-container" id="3">
            <div id="chart2">Chart Should Load Here...</div>
            <button id="chartDelete">Delete</button>
        </div>
        <script src="./js/chart.js"></script>
</body>

</html>