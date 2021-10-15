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
    <title>iBank-Customer</title>
</head>
<body>
    <div div class="container">
      <img src="../images/logo.png" class="bankLogo" alt="" >
    </div>
    <h2 style="color: #807dfb;"  class="container text-center pb-4">Our Valueable Customer</h2>
    <div class="container table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th style="font-weight: 550;" scope="col">Id</th>
            <th style="font-weight: 550;" scope="col">Name</th>
            <th style="font-weight: 550;" scope="col">Email</th>
            <th style="font-weight: 550;" scope="col">Current Balance</th>
          </tr>
        </thead>
        <?php
          $CON=mysqli_connect("localhost","root","","ibank");
          $SQL = "SELECT * FROM `customer`";
          $RESULT=mysqli_query($CON,$SQL);
          if(mysqli_num_rows($RESULT)>0){
            while($DATA=mysqli_fetch_assoc($RESULT)){
        ?>
            <tr>
              <td><p style="font-weight:500"><?php echo $DATA['ID'] ?></p></td>
              <td><p><?php echo $DATA['NAME'] ?></p></td>
              <td><p><?php echo $DATA['EMAIL'] ?></p></td>
              <td><p style="color: #807dfb; font-weight:500"><?php echo $DATA['BALANCE'] ?></p></td>
            </tr>
        <?php
            }
          }
        ?>
      </table> 
    </div> 
</body>
</html>










<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h6>ID: </h6><?php echo $DATA['ID'] ?>
                 <h6>Name: </h6><?php echo $DATA['NAME'] ?>
                 <h6>Email: </h6><?php echo $DATA['EMAIL'] ?>
                 <h6>Balance: </h6><?php echo $DATA['BALANCE'] ?>
      </div>
    </div>
  </div>
</div> -->

<!-- <div class="accordion accordion-flush" id="accordionFlushExample">
<div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        INFO
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><h6>ID: </h6><?php echo $DATA['ID'] ?>
                 <h6>Name: </h6><?php echo $DATA['NAME'] ?>
                 <h6>Email: </h6><?php echo $DATA['EMAIL'] ?>
                 <h6>Balance: </h6><?php echo $DATA['BALANCE'] ?></div>
    </div>
  </div>
</div> -->