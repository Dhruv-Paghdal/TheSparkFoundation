<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a9a20b01b1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/transferMoney.css">
  <title>iBank-Transfer</title>
</head>
<body>
  <div div class="container">
    <img src="../images/logo.png" class="bankLogo" alt="" >
  </div>
  <h2 class="text-center"><span style="color: #807dfb;">T</span>ransfer <span style="color: #807dfb;">M</span>oney</h2>
  <div class="d-flex flex-column flex-md-row justify-content-around w-100 my-3">
    <div class="sender">
      <div class="card" style="width: 20rem;">
        <div class="card-body" >
          <h3 class="card-title mb-4">Sender</h3>
          <div class="mb-4" style="width: 100%; height: 1.5px; background-color: #807dfb; border-radius: 3px;"></div>
          <h5 class="mb-2">Name</h5>
          <form action="../transactionHandler.php" method="post">
          <select class="mb-4" id="senderName" name="sname" required>
          <?php
            $CON=mysqli_connect("localhost","root","","ibank");
            $SQL = "SELECT `NAME` FROM `customer`";
            $RESULT=mysqli_query($CON,$SQL);
            if(mysqli_num_rows($RESULT)>0){
              while($DATA=mysqli_fetch_assoc($RESULT)){
          ?>
            <option value="<?php echo $DATA['NAME']?>"><?php echo $DATA['NAME']?></option>
          <?php
            }
          }
          ?>
          </select>
          <h5 class="mb-2">Email</h5>
          <input class="mb-4" type="email" placeholder="email@ibank.com" id="senderEmail" disabled >
        </div>
      </div>
    </div>
    <i class="d-flex flex-col flex-lg-row justify-content-center fas fa-exchange-alt"></i>
    <div class="reciver mb-2">
      <div class="card" style="width: 20rem;">
        <div class="card-body">
          <h3 class="card-title mb-4">Reciver</h3>
          <div class="mb-4" style="width: 100%; height: 1.5px; background-color: #807dfb; border-radius: 3px;"></div>
          <h5 class="mb-2">Name</h5>
          <select class="mb-4" id="reciverName" name="rname" required>
            <option id="reciverOption1">Bill Gates</option>
            <option id="reciverOption2">Steve Jobs</option>
            <option id="reciverOption3">Elon Musk</option>
            <option id="reciverOption4">Ratan Tata</option>
            <option id="reciverOption5">Narayan Murti</option>
            <option id="reciverOption6">Sundar Picahi</option>
            <option id="reciverOption7">Jeff Bezos</option>
            <option id="reciverOption8">Radhakishan Damain</option>
            <option id="reciverOption9">Uday Kotak</option>
          </select>
          <h5 class="mb-2">Email</h5>
          <input class="mb-4" type="email" id="reciverEmail" placeholder="email@ibank.com" disabled>
        </div>
      </div>
    </div>
  </div>
  <h3 class="text-center">Amount<span style="color: #807dfb;">(₹)</span></h3>
  <div class="d-flex justify-content-center my-3" >
    <div class="amount">
      <input class="amountInput" type="number" style="text-align: center;" name="amount">
      <button type="submit">
        Pay
      </button>
    </div>
  </div> 
  </form>
  <script src="../scripts/index.js"></script> 
</body>
</html>







