<form id="enquiry">
    <h2 class="mb-3">Send an Enquiry about <?php the_title();?></h2>
  <div class="form-group row">
      <div class="col-lg-6 mb-3">
        <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required>
      </div>
      <div class="col-lg-6 mb-3">
        <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required>
      </div>
      <div class="col-lg-6 mb-3">
        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
      </div>
      <div class="col-lg-6 mb-3">
        <input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone" required>
      </div>
      <div class="col-lg-12 mb-3">
        <textarea class="form-control" name="enquiry" id="FormControlTextarea" rows="3" placeholder="Your Enquiry"></textarea>
      </div>
  </div>
  <button type="submit" class="btn btn-success w-100">Send your Enquiry</button>
</form>
