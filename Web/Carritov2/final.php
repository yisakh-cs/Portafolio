
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
<h1>Usted est&aacute; esta en la plataforma de pago...</h1>


<div class="creditCardForm">
    <div class="heading">
        <h1>Confirm Purchase</h1>
    </div>
    <div class="payment">
        <form method="post" name="pago" id="pago" action="guardarTarjeta.php">
            <div class="form-group owner">
                <label for="owner">Owner</label>
                <input type="text" class="form-control" name='owner' id="owner">
            </div>
            <div class="form-group CVV">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" name='cvv' id="cvv">
            </div>
            <div class="form-group" id="card-number-field">
                <label for="cardNumber">Card Number</label>
                <input type="text" class="form-control" name='cardNumber' id="cardNumber">
            </div>
            <div class="form-group">
                <label for="expiration-date">Expiracion</label>
                <input type="text" class="form-control" name='expiration-date' id="expiration-date">
            </div>
            <div class="form-group" id="credit_cards">
                <img src="assets/images/visa.jpg" id="visa">
                <img src="assets/images/mastercard.jpg" id="mastercard">
                <img src="assets/images/amex.jpg" id="amex">
            </div>
            <div class="form-group" id="pay-now">
                <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
            </div>
        </form>
    </div>
</div>




</body>

<link rel="stylesheet" type="text/css" href="css/styles.css">

 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</html>


