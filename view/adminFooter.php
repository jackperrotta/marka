</div>
</div>
<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="<?php echo $base_path;?>/styles/bootstrap/js/jquery-slim.min.js"><\/script>')</script>
<script src="<?php echo $base_path;?>/styles/bootstrap/js/popper.min.js"></script>
<script src="<?php echo $base_path;?>/styles/bootstrap/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState === 4 && xmlhttp.status === 200){
      var data = JSON.parse(this.responseText);
      console.log(data);
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
         type: 'scatter',
         data: {
           labels: ["Brigaintine", "Atlantic City", "Ventnor City", "Margate City", "Ocean City", "Sea Isle", "Avalon", "Wildwood"],
           datasets: [{
             label: 'Legend',
              data: data,
              pointBackgroundColor: ["rgba(63,191,63,1)", "rgba(63,191,63,1)", "rgba(63,191,63,1)", "rgba(63,191,63,1)", "rgba(63,191,63,1)", "rgba(63,191,63,1)", "rgba(63,191,63,1)", "rgba(63,191,63,1)"],
              radius: 6,
              borderWidth: 3
           }]
         },
         options: {
           tooltips: {
             callbacks: {
                label: function(tooltipItem, data) {
                   var label = data.labels[tooltipItem.index];
                   return label + ': (' + tooltipItem.xLabel + ', ' + tooltipItem.yLabel + ')';
                }
             }
          },
           legend: {
             display: false
           },
           scales: {
             yAxes: [
               {
                 scaleLabel: {
                   display: true,
                   labelString: 'Total Customer Population',
                   fontSize: 14
                 }
               }
             ],
             xAxes: [
               {
                 scaleLabel: {
                   display: true,
                   labelString: 'Beaches',
                   fontSize: 14
                 },
                 ticks: {
                    callback: function(value, index, values) {
                        return '# ' + value;
                    }
                }
               }
             ]
           }
         }
       });
    }
  }
  xmlhttp.open("GET", "../services/chartsData.php", true);
  xmlhttp.send();
</script>
</body>
</html>
