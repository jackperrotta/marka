<?php include '../view/visitorHeader.php' ?>

<div class="container">
  <div class="row mt-4">
    <div class="col-md-8 text-center">
        <h1>Todays Weather Forecast</h1>
      <a href="https://www.accuweather.com/en/us/new-york-ny/10007/current-weather/349727" class="aw-widget-legal"></a>
      <div id="awtd1520629624195" class="aw-widget-36hour"  data-locationkey="" data-unit="f" data-language="en-us" data-useip="true" data-uid="awtd1520629624195" data-editlocation="true"></div>
      <script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
    </div>
    <div class="col-md-4 mx-auto text-center">
      <div class="card">
        <div class="card-body" style="background-color: silver;">
          <img class="mb-3" src="../img/marka-logo.png" style="height: 150px; width: 150px;">
          <h2><?php echo $fName . " " . $lName ?></h2>
          <p>Todays Date<br>
            <span id="date">
            </span>
          </p>
          <p><a class="btn btn-info" href="<?php echo $base_path;?>/visitors/index.php?status=tag" role="button">View Pass &raquo;</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
var d = new Date();
document.getElementById("date").innerHTML = d.toDateString();
</script>
