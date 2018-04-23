<?php include '../view/visitorHeader.php' ?>
<div class="container text-center">
  <div class="row mt-2">
    <div class="col">
      <h3>Purchase Tag</h3>
      <h5>Ocean City</h5>
    </div>
  </div>
  <div class="row my-3">
    <div class="col">
      <img class="img-responsive img-rounded" src="<?php echo $base_path ?>/img/beachBg.jpg" style="height: 350px; width: 350px">
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <button type="button" class="btn btn-primary btn-lg btn-block">Daily Tag: $5</button>

      <form class="my-3">
        <div class="form-row">
          <div class="form-group col-md-12">
            <h5>Todays Date: <?php echo date("l") ?></h5>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12 mx-auto">
            <label for="inputState">How Many Would You Like?</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6 +</option>
            </select>
          </div>
        </div>
        <a href="<?php echo $base_path ?>/visitors/index.php?status=confirm">
        <button type="button" class="btn btn-success btn-lg btn-block">Submit Payment</button>
        </a>
      </form>
    </div>
  </div>
</div>
