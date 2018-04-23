<?php include '../view/visitorHeader.php' ?>
<div class="container">
  <div class="row text-center mt-3">
    <div class="col-lg-6 col-md-8 mx-auto">
      <div class="card text-white bg-info mb-3">
        <div class="card-body">
          <h1 class="card-title"><?php echo $fName . " " . $lName ?></h1>
          <h3 id="date"></h3>
        </div>
        <img class="card-img-bottom" src="<?php echo $base_path . $imgUrl; ?>" alt="beach tag">
      </div>


    </div>
  </div>
</div>
<script>
var d = new Date();
document.getElementById("date").innerHTML = d.toDateString();
</script>
