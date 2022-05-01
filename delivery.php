<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form | Delivery</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/delivery.css">
</head>
<body>
  <div class="wrapper">
    <header>Comfirm Oder</header>
    <form action="#">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="name" placeholder="Enter your name">
          <i class="fas fa-user"></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Enter your email">
          <i class="fas fa-envelope"></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="phone" placeholder="Enter your phone">
          <i class="fas fa-phone-alt"></i>
        </div>
        <div class="field">
          <input type="text" name="Website" placeholder="Enter your Website">
          <i class="fas fa-globe"></i>
        </div>
      </div>
      <div class="message">
        <textarea placeholder="Write your message" name="message"></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="button-area">
        <button type="submit">Confirm Order</button>
        <span>Sending your message...</span>
      </div>
    </form>
  </div>

  <script src="script.js"></script>

</body>
</html>
