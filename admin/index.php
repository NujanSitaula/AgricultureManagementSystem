<?php
$isActive = 1;
include('./header.php');
//end of header
?>
  <div class="slim-mainpanel">
      <div class="container pd-t-30">
        <div class="dash-headline-two">
          <div>
            <h4 class="tx-inverse mg-b-5"><span id="greetings"></span>, <?php echo $countUser['Name']; ?>!</h4>
            <p class="mg-b-0">Today is <?php echo date("F d, Y");  ?></p>
          </div>
          <div class="d-h-t-right">
            <div class="summary-item">
              <h1>रू<?php
              $allsum = mysqli_query($con, "SELECT SUM(amount), id FROM `ams_transaction` WHERE datepaid > now() - INTERVAL 1 day");
              $sum = mysqli_fetch_array($allsum, MYSQLI_ASSOC);
              echo "<strong>" . number_format(round($sum['SUM(amount)'], 2)) . "</strong>"; ?></h1>
              <span>Total Income<br>for today</span>
            </div>
            <div class="summary-item">
              <h1>रू<?php
              $allsum = mysqli_query($con, "SELECT SUM(totalAmount), isApproved, id FROM `ams_crops` WHERE dateAdded > now() - INTERVAL 1 day");
              $sum = mysqli_fetch_array($allsum, MYSQLI_ASSOC);
              echo "<strong>" . number_format(round($sum['SUM(totalAmount)'], 2)) . "</strong>"; ?></h1>
              <span>Expenses<br>for today</span>
            </div>
          </div>
        </div><!-- dash-headline-two -->

        <div class="nav-statistics-wrapper">
          <nav class="nav">
            <a href="" class="nav-link active">Overview</a>
          </nav>
          <nav class="nav">
            <a href="" class="nav-link">This Year</a>
          </nav>
        </div><!-- nav-statistics-wrapper -->

        <div class="row row-statistics mg-b-30">
          <div class="col-md-5">
            <h1 class="tx-inverse tx-56 tx-lato tx-bold">रू<?php
            $allsum = mysqli_query($con, "SELECT SUM(amount), id FROM `ams_transaction` WHERE datepaid > now() - INTERVAL 30 day");
            $sum = mysqli_fetch_array($allsum, MYSQLI_ASSOC);
            echo "<strong>" . number_format(round($sum['SUM(amount)'], 2)) . "</strong>"; ?></h1>
            <h6 class="tx-15 tx-inverse tx-bold mg-b-20">Total Earning (30 days)</h6>
            <p>These stats are calculated every month and based on monthly transactions made via khalti.</p>
            <p class="tx-12">
            </p>
          </div><!-- col-5 -->
          <div class="col-md-7 mg-t-20 mg-md-t-0">
            <canvas id="chartBar1" height="280"></canvas>
          </div><!-- col-7 -->
        </div><!-- row -->

        <hr>

        <div class="report-summary-header">
          <div>

          </div>
        </div><!-- d-flex -->

        <div class="row no-gutters dashboard-chart-one">
          <div class="col-md-4 col-lg">
            <div class="card card-total">
              <div>
                <h1><?php  $totalUsers = mysqli_query($con, "SELECT * FROM ams_users"); $countUsers = mysqli_num_rows($totalUsers); echo $countUsers; ?></h1>
                <p>Total Users</p>
              </div>
              <div>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-4 col-lg">
            <div class="card card-total">
              <div>
                <h1><?php  $totalUsers = mysqli_query($con, "SELECT * FROM ams_users WHERE Environment = 'vendor'"); $countUsers = mysqli_num_rows($totalUsers); echo $countUsers; ?></h1>
                <p>Total Vendors</p>
              </div>
              <div>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-4 col-lg">
            <div class="card card-total">
              <div>
                <h1><?php  $totalUsers = mysqli_query($con, "SELECT * FROM ams_crops WHERE isApproved = 1"); $countUsers = mysqli_num_rows($totalUsers); echo $countUsers; ?></h1>
                <p>Total Products</p>
              </div>
              <div>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md col-lg-4">
            <div class="card card-revenue">
              <h6>Total Sales</h6>
              <p>Total Sales We Have Made</p>
              <h1>रू<?php
              $allsum = mysqli_query($con, "SELECT SUM(amount), id FROM `ams_transaction`");
              $sum = mysqli_fetch_array($allsum, MYSQLI_ASSOC);
              echo "<strong>" . number_format(round($sum['SUM(amount)'], 2)) . "</strong>"; ?> <span class="tx-success">1.4% up</span></h1>
              <div id="rs3" class="ht-50 ht-sm-70 mg-r--1"></div>

            </div><!-- card -->
          </div><!-- col-4 -->
        </div><!-- row -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->

    <div class="slim-footer">
      <div class="container">
        <p>Copyright 2018 &copy; All Rights Reserved. Slim Dashboard Template</p>
        <p>Designed by: <a href="">ThemePixels</a></p>
      </div><!-- container -->
    </div><!-- slim-footer -->

    <script src="../lib/jquery/js/jquery.js"></script>
    <script src="../lib/popper.js/js/popper.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.js"></script>
    <script src="../lib/jquery.cookie/js/jquery.cookie.js"></script>
    <script src="../lib/d3/js/d3.js"></script>
    <script src="../lib/rickshaw/js/rickshaw.min.js"></script>
    <script src="../lib/chart.js/js/Chart.js"></script>

    <script src="../assets/js/slim.js"></script>
    <script src="../assets/js/ResizeSensor.js"></script>
    <script>
      $(function(){
        'use strict'

        var rs3 = new Rickshaw.Graph({
          element: document.querySelector('#rs3'),
          renderer: 'line',
          series: [{
            data: [
              { x: 0, y: 5 },
              { x: 1, y: 7 },
              { x: 2, y: 10 },
              { x: 3, y: 11 },
              { x: 4, y: 12 },
              { x: 5, y: 10 },
              { x: 6, y: 9 },
              { x: 7, y: 7 },
              { x: 8, y: 6 },
              { x: 9, y: 8 },
              { x: 10, y: 9 },
              { x: 11, y: 10 },
              { x: 12, y: 7 },
              { x: 13, y: 10 }
            ],
            color: '#1B84E7',
          }]
        });
        rs3.render();

        // Responsive Mode
        new ResizeSensor($('.slim-mainpanel'), function(){
          rs3.configure({
            width: $('#rs3').width(),
            height: $('#rs3').height()
          });
          rs3.render();
        });


        var ctx1 = document.getElementById('chartBar1').getContext('2d');
        var myChart1 = new Chart(ctx1, {
          type: 'bar',
          data: {
            labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            datasets: [{
              label: 'No of Sales',
              data: [12, 129, 50, 110, 125, 18, 112],
              backgroundColor: '#27AAC8'
            }]
          },
          options: {
            maintainAspectRatio: false,
            legend: {
              display: false,
                labels: {
                  display: false
                }
            },
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero:true,
                  fontSize: 10,
                  max: 200
                }
              }],
              xAxes: [{
                ticks: {
                  beginAtZero:true,
                  fontSize: 11
                }
              }]
            }
          }
        });

      });
    </script>
    <script type="text/javascript">
    var myDate = new Date();
var hrs = myDate.getHours();

var greet;

if (hrs < 12)
greet = 'Good Morning';
else if (hrs >= 12 && hrs <= 17)
greet = 'Good Afternoon';
else if (hrs >= 17 && hrs <= 24)
greet = 'Good Evening';

document.getElementById('greetings').innerHTML = greet;
    </script>
  </body>
</html>
<?php
echo "";


 ?>
