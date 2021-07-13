<?php include ('config/db_order.php'); ?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!-- Bootstrap links -->
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  	<link rel="stylesheet" type="text/css" href="style/style.css">

  	<!-- Bootstrap Scripts -->
  	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  	<script src="jscript/java.js"></script>

  	<title>Caden Arisyah</title>
  
  </head>
  <body>
  <div class="bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg'); height: 100vh;">
    <div class="container-md col-sm-7">
      <h1 class="text-center gx-3 text-color">Order Form</h1>
      <div class="row bg-transparent">
        <form class="row g-3" action="order.php?id=<?php echo $id;?>" method="post">
          <!-- Fullname -->
          <div class="col-md-6 form-floating">
            <input type="text" class="form-control form-bg" id="name" name="fullname" placeholder=".....">
            <label for="name" class="form-label">Fullname</label>
            <div><?php echo $errors['fullname']; ?></div>
          </div>
          <!-- Phone -->
          <div class="col-md-6 form-floating">
            <input type="tel" class="form-control form-bg" id="phone" name="phone" placeholder=".....">
            <label for="phone" class="form-label">Phone No</label>
            <div><?php echo $errors['phone']; ?></div>
          </div>
          <!-- Product -->
          <div class="col-md-12">
            <label for="qty" class="form-label">Blaze Lip Glow</label>
            <div class="col-md-4 my-auto">
              <div class="input-group h-100">
                <input type="number" class="form-control form-bg" placeholder="Quantity" id="qty" name="qty" aria-label="quantity" aria-describedby="plus minus">
                <div><?php echo $errors['qty']; ?></div>
              </div>
            </div>
          </div>
            
          <!-- Address -->
          <div class="col-12 form-floating">
            <input type="text" class="form-control form-bg" id="add1" name="add1" placeholder="1234 Main St">
            <label for="add1" class="form-label">Address</label>
            <div><?php echo $errors['add1']; ?></div>
          </div>
          <div class="col-12 form-floating">
            <input type="text" class="form-control form-bg" id="add2" name="add2" placeholder="Apartment, studio, or floor">
            <label for="add2" class="form-label">Address 2</label>
          </div>
          <div class="col-md-5 form-floating">
            <input type="text" class="form-control form-bg" id="city" name="city" placeholder=".....">
            <label for="city" class="form-label">City</label>
            <div><?php echo $errors['city']; ?></div>
          </div>
          <div class="col-md-4 form-floating">
            <select id="state" name="state" class="form-select form-bg text-color" aria-label="Floating label select example">
              <option selected disabled value="">Choose one...</option>
              <option value="Melaka">Melaka</option>
              <option value="Negeri Sembilan">Negeri Sembilan</option>
              <option value="Johor">Johor</option>
              <option value="Pahang">Pahang</option>
              <option value="Selangor">Selangor</option>
              <option value="Perak">Perak</option>
              <option value="Perlis">Perlis</option>
              <option value="Terengganu">Terengganu</option>
              <option value="Kelantan">Kelantan</option>
              <option value="Kedah">Kedah</option>
              <option value="Wilayah Perseketuan">Wilayah Persekutuan</option>
            </select>
            <label for="state" class="form-label">State</label>
            <div><?php echo $errors['state']; ?></div>
          </div>
          <div class="col-md-3 form-floating">
            <input type="text" class="form-control form-bg" id="inputZip" name="post" placeholder=".....">
            <label for="inputZip" class="form-label">Post Code</label>
            <div><?php echo $errors['post']; ?></div>
          </div>
          <div class="col-md-6 form-floating">

          </div>
          <div class="col-12">
            <button type="submit" class="btn form-bg text-color float-start" name="submit">Confirm Order</button>
            <a href="homepage.php?id=<?php echo $_GET['id']; ?>" class="btn form-bg float-end">Go Back</a>
          </div>
      </div>
    <?php include ("style/footer.php"); ?>
    </div>
    </html>