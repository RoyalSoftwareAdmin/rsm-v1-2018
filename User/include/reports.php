
 <link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/modules/report.css">
 <div class="row-one widgettable">
    <div class="col-md-12 content-top-2 card">
        <div class="agileinfo-cdr">
            <div class="card-header">
           
              <div class="row">
                  
                <div class="col-md-6">
                  <div class="box1">
                    <h3>Bar chart</h3>
                <!--<div id="container" style="width: 100%; height:270px;">-->
              <canvas id="canvas"></canvas>
           <!-- </div>-->
                </div>
                </div>
                <div class="col-md-6">
                  <div class="box2">
                  
                </div>
              </div>
              </div>
          </div>
      
         
            
            <div class="row">
              <div class="col-md-12 repo">
                 <div class="table" id="report"> </div>
             </div>
          </div>
        </div>
   
        </div>
        </div>
    </div>  
    <div class="clearfix"> </div>
</div>
<script src="js/modules/reports.js"></script>
<script src="../js/plugin/Plugin_Table.js"></script>
<script src="../js/amcharts.js"></script>
<script src="../js/serial.js"></script>
<script src="../js/export.min.js"></script>
<script src="../js/light.js"></script>
<script  src="../js/index2.js"></script>
<script  src="../js/index.js"></script>
<script src="../js/Chart.bundle.js"></script>
<script src="../js/utils.js"></script>
    
              <script type="text/javascript">
                var dataHeader = [];

                for ( var i =0 ; i< result.tableHeader.length; i++)
                { 
                 dataHeader.push(tableHeader[i]);
                 }
              </script>
              <script>
                  $(document).ready(function () {
                  $('#bars').on('click', function (e) {
                      $('#lines').removeClass('active');
                      $('#graph-lines').fadeOut();
                      $(this).addClass('active');
                      $('#graph-bars').fadeIn().removeClass('hidden');
                      e.preventDefault();
                    });
                  
                   
                  </script>
                   <script>
       var test = ["Category", "Division", "TestDate", "CorrectAnswer"];

        var color = Chart.helpers.color;
        var barChartData = {
            labels: ["Category", "Division", "TestDate", "CorrectAnswer"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }, {
                label: 'Dataset 2',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }]

        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Bar Chart'
                    }
                }
            });

        };

        
    </script>
 
</body>
</html>