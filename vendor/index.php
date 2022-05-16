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
              $userID = $countUser['id'];
              $allsum = mysqli_query($con, "SELECT SUM(totalAmount), isApproved, id FROM `ams_crops` WHERE isApproved = 1 AND id = '$userID' AND dateAdded > now() - INTERVAL 30 day");
              $sum = mysqli_fetch_array($allsum, MYSQLI_ASSOC);
              echo "<strong>" . number_format(round($sum['SUM(totalAmount)'], 2)) . "</strong>";

               ?></h1>
              <span>Earnings<br>for today</span>
            </div>
            <div class="summary-item">
              <h1>रू296</h1>
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
            $userID = $countUser['id'];
            $allsum = mysqli_query($con, "SELECT SUM(totalAmount), isApproved, id FROM `ams_crops` WHERE isApproved = 1 AND id = '$userID' AND dateAdded > now() - INTERVAL 30 day");
            $sum = mysqli_fetch_array($allsum, MYSQLI_ASSOC);
            echo "<strong>" . number_format(round($sum['SUM(totalAmount)'], 2)) . "</strong>";

             ?></h1>
            <h6 class="tx-15 tx-inverse tx-bold mg-b-20">Total Earning (30 days)</h6>
            <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem</p>
            <p class="tx-12">
              <a href="">View Details</a>
              <a href="">Edit Settings</a>
            </p>
          </div><!-- col-5 -->
          <div class="col-md-7 mg-t-20 mg-md-t-0">
            <canvas id="chartBar1" height="280"></canvas>
          </div><!-- col-7 -->
        </div><!-- row -->

        <hr>

        <div class="report-summary-header">
          <div>
            <p class="mg-b-0"><i class="icon ion-calendar mg-r-3"></i> January 01, 2018 - January 31, 2018</p>
          </div>
        </div><!-- d-flex -->

        <div class="row no-gutters dashboard-chart-one">
          <div class="col-md-4 col-lg">
            <div class="card card-total">
              <div>
                <h1>420</h1>
                <p>Total Employee</p>
              </div>
              <div>
                <div class="tx-24 mg-b-10 tx-center op-5">
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-400"></i>
                  <i class="icon ion-man tx-gray-400"></i>
                  <i class="icon ion-man tx-gray-400"></i>
                  <i class="icon ion-man tx-gray-400"></i>
                </div>
                <label>Female (66%)</label>
                <div class="progress mg-b-10">
                  <div class="progress-bar bg-primary progress-bar-xs wd-65p" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->

                <label>Male (34%)</label>
                <div class="progress">
                  <div class="progress-bar bg-danger progress-bar-xs wd-35p" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-4 col-lg">
            <div class="card card-total">
              <div>
                <h1>55</h1>
                <p>Total Products</p>
              </div>
              <div>
                <div class="tx-16 mg-b-15 tx-center op-5">
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-400"></i>
                  <i class="icon ion-cube tx-gray-400"></i>
                </div>
                <label>Digital products (85%)</label>
                <div class="progress mg-b-10">
                  <div class="progress-bar bg-success progress-bar-xs wd-85p" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->

                <label>Non-digital products (15%)</label>
                <div class="progress">
                  <div class="progress-bar bg-warning progress-bar-xs wd-15p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-4 col-lg">
            <div class="card card-total">
              <div>
                <h1>30</h1>
                <p>Total Franchise</p>
              </div>
              <div>
                <div class="tx-22 mg-b-10 tx-center op-5">
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-400"></i>
                  <i class="icon ion-location tx-gray-400"></i>
                  <i class="icon ion-location tx-gray-400"></i>
                </div>
                <label>Local (75%)</label>
                <div class="progress mg-b-10">
                  <div class="progress-bar bg-purple progress-bar-xs wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->

                <label>International (25%)</label>
                <div class="progress">
                  <div class="progress-bar bg-pink progress-bar-xs wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md col-lg-4">
            <div class="card card-revenue">
              <h6>Monthly Revenue</h6>
              <p>Calculated every 15th of the month</p>
              <h1>$32,500 <span class="tx-success">1.4% up</span></h1>
              <div id="rs3" class="ht-50 ht-sm-70 mg-r--1"></div>
              <label>Last month: <span>$79,554</span></label>
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
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
              label: 'Total Income',
              data: [250, 129, 520, 1120, 1225, 1822, 1122, 1222, 1244, 4222, 1222, 2221],
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
                  max: 5000
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
