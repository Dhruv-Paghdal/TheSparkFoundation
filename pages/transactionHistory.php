<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a9a20b01b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/index.css">
    <title>iBank-History</title>
    <style>
      button{
        background-color:#807dfb;
        padding: 12px;
        font-size: 20px;
        color: white;
        font-weight: 500;
        border: 0px solid #807dfb;
        border-radius: 25px;
      }

      button:hover{
        background-color:#6d6bd6;
      }
    </style>
</head>
<body>
    <div div class="container">
      <img src="../images/logo.png" class="bankLogo" alt="" >
    </div>
    <h2 style="color: #807dfb;"  class="container text-center pb-4">Transaction History</h2>
    <div class="container table-responsive">
      <table class="container table table-hover">
        <thead>
          <tr>
            <th style="font-weight: 550;" scope="col">ID</th>
            <th style="font-weight: 550;" scope="col">Sender</th>
            <th style="font-weight: 550;" scope="col">Recipient</th>
            <th style="font-weight: 550;" scope="col">Amount</th>
            <th style="font-weight: 550;" scope="col">Status
            </th>
          </tr>
        </thead>
        <?php
          $CON=mysqli_connect("localhost","root","","ibank");
          $SQL = "SELECT * FROM `history`";
          $RESULT=mysqli_query($CON,$SQL);
          if(mysqli_num_rows($RESULT)>0){
            while($DATA=mysqli_fetch_assoc($RESULT)){
        ?>
          <tr>
              <td><p style="font-weight:500"><?php echo $DATA['ID'] ?></p></td>
              <td><p><?php echo $DATA['SENDER'] ?></p></td>
              <td><p><?php echo $DATA['RECIVER'] ?></p></td>
              <td><p style="color: #807dfb; font-weight:500"><?php echo $DATA['AMOUNT'] ?></p></td>
              <td><p class="text-success"><?php echo $DATA['STATUS'] ?></p></td>
            </tr>
        <?php
            }
          }
        ?>
      </table>
    </div>
    <div class="container text-center my-2">
        <a href="../index.html" class="my-2 text-center">
            <button>Home</button>
        </a>
    </div>
</body>
</html>