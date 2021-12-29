<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Checkout Form</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="css/style.css" /><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="debitCreditCard.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="iphone">
  <header class="header">
    <h1>Checkout</h1>
  </header>

  <form action="makePayment.php" class="form" method="POST">
    <div>
      <h2>&nbsp;&nbsp;UPI DETAILS</h2>

      <div class="card">
  <fieldset>
  <label for="User ID"><i class="fa fa-user"></i></label>
<userid>Mobile Number : <input type="text" id="User ID" name="userid" placeholder="  Enter Mobile Number"></userid> <br>
<br>

<label for="Amount"><i class="fa fa-amount"></i> OTP : </label>
<bill>
<input type="text" id="Amount" name="bill" placeholder="  Enter OTP"></bill>
  </fieldset>    


   
    <div>
      <button class="button button--full" type="submit"><svg class="icon">
        </svg>Make Payment</button>
    </div>
  </form>
</div>


<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
