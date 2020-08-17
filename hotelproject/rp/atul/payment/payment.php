<?php
if(isset($_POST['submit_payment'])){
  $card_number = $_POST['card_number'];
  $card_exp_date= $_POST['card_exp_date'];
  $card_cvv = $_POST['card_cvv'];
  $holder_name = $_POST['holder_name'];
    $conn = mysqli_connect('localhost','root','','redstonepro');
    $query ="INSERT into payment(card_number,card_exp_date,card_cvv,holder_name) values ('$card_number','$card_exp_date','$card_cvv','$holder_name')";
    mysqli_query($conn,$query);
}
?>









<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Payment</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    />
  </head>
  <body style='background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(../payment.jpg); background-size:cover;'>
  <div class="container">
    <div class="padding">
      <div class="row">
        <div class="container-fluid d-flex justify-content-center">
          <div class="col-sm-8 col-md-6">
            <form method='POST'  action='' style='margin-top:150px;'>
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-6">

                    <span>CREDIT/DEBIT CARD PAYMENT</span>
                  </div>
                  <div class="col-md-6 text-right" style="margin-top: -5px;">
                    <img
                      src="https://img.icons8.com/color/36/000000/visa.png"
                    />
                    <img
                      src="https://img.icons8.com/color/36/000000/mastercard.png"
                    />
                    <img
                      src="https://img.icons8.com/color/36/000000/amex.png"
                    />
                  </div>
                </div>
              </div>
              <div class="card-body" style="height: 350px;">
                <div class="form-group">
                  <label for="cc-number" class="control-label"
                    >CARD NUMBER</label
                  >
                  <input
                    id="cc-number"
                    type="text"
                    name='card_number'
                    class="input-lg form-control cc-number"
                    autocomplete="cc-number"
                    placeholder="•••• •••• •••• ••••"
                    required
                  />
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="cc-exp" class="control-label"
                        >CARD EXPIRY</label
                      >
                      <input
                        id="cc-exp"
                        type="text"
                        name='card_exp_date'
                        class="input-lg form-control cc-exp"
                        autocomplete="cc-exp"
                        placeholder="•• / ••"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="cc-cvc" class="control-label">CARD CVC</label>
                      <input
                        id="cc-cvc"
                        type="text"
                        name='card_cvv'
                        class="input-lg form-control cc-cvc"
                        autocomplete="off"
                        placeholder="••••"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="numeric" class="control-label"
                    >CARD HOLDER NAME</label
                  >
                  <input type="text" name='holder_name' class="input-lg form-control" />
                </div>
                <div class="form-group">
                  <input
                    value="MAKE PAYMENT"
                    type="submit"
                    name='submit_payment'
                    class="btn btn-success btn-lg form-control"
                    style="font-size: 0.8rem;"
                  />
                </div>
              </div>
            </div>

          </form>
          </div>
        </div>
      </div>
    </div>
  
</div>
  </body>
</html>
