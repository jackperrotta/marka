<?php include '../view/visitorHeader.php' ?>
<div class="container">
  <div class="row text-center mt-3">
    <div class="col-md-12">
      <h1 id="date"></h1>
      <img src="<?php echo $base_path ?>/img/tagGifs/girls_beach.gif" alt="">
    </div>
  </div>
  <!-- <div class="row">
    <div class="col-md-3">
      <a href="<?php echo $base_path ?>/visitors/index.php" class="btn btn-info">Back to Dashboard</a>
    </div>
  </div> -->
</div>
<script>
var d = new Date();
document.getElementById("date").innerHTML = d.toDateString();
</script>
