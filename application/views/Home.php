<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <table class="columns">
        <tr>
            <td><?php
                $dbhandle = new mysqli('localhost','root','','c1fcikatricis17');

                $query = "SELECT x1.Name as title,COUNT(x2.Name) as number FROM lectors x2 JOIN agency x1 ON x2.Agency_ID=x1.ID GROUP BY x2.Agency_ID ";
                $res = $dbhandle->query($query);
                ?>
                <section class="content-header">

                    <html>
                    <head>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                            google.charts.load("current", {packages:["corechart"]});
                            google.charts.setOnLoadCallback(drawChart);
                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['title', 'number'],
                                    <?php
                                    while ($row= $res->fetch_assoc())                        {
                                        echo "['".$row['title']."',".$row['number']."],";
                                    }
                                    ?>
                                ]);
                                var options = {
                                    title: 'Count of lectors per agency',
                                    pieHole: 0.4,
                                };
                                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                                chart.draw(data, options);
                            }
                        </script>
                    </head>
                    <body>
                    <div class="border-right" id="donutchart" style="width: 800px; height: 400px;"></div>

                    </body>
                    </html></td>
            <td>
                <?php
                $dbhandle = new mysqli('localhost','root','','c1fcikatricis17');

                $query = "SELECT x1.Name as title,COUNT(x4.Name) as number FROM lectors x2 JOIN agency x1 ON x2.Agency_ID=x1.ID join courses x3 ON x2.ID=x3.Lectors_ID JOIN customer x4 ON x3.ID=x4.Courses_ID GROUP BY x1.Name ";
                $res = $dbhandle->query($query);
                ?>

                <html>
                <head>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {

                            var data = google.visualization.arrayToDataTable([
                                ['title','number'],
                                <?php
                                while ($row= $res->fetch_assoc())
                                {
                                    echo "['".$row['title']."',".$row['number']."],";
                                }
                                ?>
                            ]);
                            var options = {
                                title: 'Count of customers per agency'
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                            chart.draw(data, options);
                        }
                    </script>
                </head>
                <body>
                <div class="border-right" id="piechart" style="width: 800px; height: 400px; margin-top: 15px;"></div>
                </body>



                </html>
            </td>
        </tr>
        <tr>
            <td><?php
                $dbhandle = new mysqli('localhost','root','','c1fcikatricis17');

                $query = "SELECT x1.Name as title,AVG(x3.Prize) as count FROM agency x1 JOIN lectors x2 ON x1.ID = x2.Agency_ID JOIN courses x3 ON x2.ID=x3.Lectors_ID GROUP BY x1.Name";
                $res = $dbhandle->query($query);
                ?>

                <html>
                <head>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['title','count'],
                                <?php
                                while ($row= $res->fetch_assoc())
                                {
                                    echo "['".$row['title']."',".$row['count']."],";
                                }
                                ?>
                            ]);

                            var options = {
                                title: 'Average Prize of Course per Agency',
                                curveType: 'function',
                                legend: { position: 'bottom' }
                            };

                            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                            chart.draw(data, options);
                        }
                    </script>
                </head>
                <body>
                <div id="curve_chart" style="width: 800px; height: 400px; margin-left: 15px"></div>
                </body>
                </html></td>
            <td>
                <?php
                $dbhandle = new mysqli('localhost','root','','c1fcikatricis17');

                $query = "SELECT x1.Name as title,COUNT(x2.Name) as count FROM courses x1 JOIN customer x2 ON x1.ID=x2.Courses_ID GROUP BY x1.Name";
                $res = $dbhandle->query($query);
                ?>
                <html>
                <head>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['title','count'],
                                <?php
                                while ($row= $res->fetch_assoc())
                                {
                                    echo "['".$row['title']."',".$row['count']."],";
                                }
                                ?>
                            ]);

                            var options = {
                                title: 'Total Count of customers per individual course',
                                vAxis: {title: 'Count of customers'},
                                isStacked: true
                            };

                            var chart = new google.visualization.SteppedAreaChart(document.getElementById('chart_div'));

                            chart.draw(data, options);
                        }
                    </script>
                </head>
                <body>
                <div id="chart_div" style="width: 800px; height: 400px;"></div>
                </body>
                </html>
            </td>
        </tr>
    </table>







