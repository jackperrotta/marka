<?php include '../view/homeHeader.php' ?>
<div class="container">
  <div class="row">
    <div class="col-lg-10">
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" id="fName" placeholder="First Name">
          </div>
          <div class="form-group col-md-6">
            <label for="lName">Last Name</label>
            <input type="text" class="form-control" id="lName" placeholder="Last Name">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="email2">Confirm Email</label>
            <input type="email" class="form-control" id="email2" placeholder="Confirm Email">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <div class="form-group col-md-6">
            <label for="password2">Password</label>
            <input type="password" class="form-control" id="password2" placeholder="Confirm Password">
          </div>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="address2">Address 2</label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city">
          </div>
          <div class="form-group col-md-4">
            <label for="state">State</label>
            <select id="state" class="form-control">
              <option selected>Choose...</option>
              <option value="AL">Alabama</option>
            	<option value="AK">Alaska</option>
            	<option value="AZ">Arizona</option>
            	<option value="AR">Arkansas</option>
            	<option value="CA">California</option>
            	<option value="CO">Colorado</option>
            	<option value="CT">Connecticut</option>
            	<option value="DE">Delaware</option>
            	<option value="DC">District Of Columbia</option>
            	<option value="FL">Florida</option>
            	<option value="GA">Georgia</option>
            	<option value="HI">Hawaii</option>
            	<option value="ID">Idaho</option>
            	<option value="IL">Illinois</option>
            	<option value="IN">Indiana</option>
            	<option value="IA">Iowa</option>
            	<option value="KS">Kansas</option>
            	<option value="KY">Kentucky</option>
            	<option value="LA">Louisiana</option>
            	<option value="ME">Maine</option>
            	<option value="MD">Maryland</option>
            	<option value="MA">Massachusetts</option>
            	<option value="MI">Michigan</option>
            	<option value="MN">Minnesota</option>
            	<option value="MS">Mississippi</option>
            	<option value="MO">Missouri</option>
            	<option value="MT">Montana</option>
            	<option value="NE">Nebraska</option>
            	<option value="NV">Nevada</option>
            	<option value="NH">New Hampshire</option>
            	<option value="NJ">New Jersey</option>
            	<option value="NM">New Mexico</option>
            	<option value="NY">New York</option>
            	<option value="NC">North Carolina</option>
            	<option value="ND">North Dakota</option>
            	<option value="OH">Ohio</option>
            	<option value="OK">Oklahoma</option>
            	<option value="OR">Oregon</option>
            	<option value="PA">Pennsylvania</option>
            	<option value="RI">Rhode Island</option>
            	<option value="SC">South Carolina</option>
            	<option value="SD">South Dakota</option>
            	<option value="TN">Tennessee</option>
            	<option value="TX">Texas</option>
            	<option value="UT">Utah</option>
            	<option value="VT">Vermont</option>
            	<option value="VA">Virginia</option>
            	<option value="WA">Washington</option>
            	<option value="WV">West Virginia</option>
            	<option value="WI">Wisconsin</option>
            	<option value="WY">Wyoming</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">REGISTER</button>
      </form>
    </div>
  </div>
</div>
<?php include '../view/homeFooter.php' ?>
