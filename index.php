<?php
session_start();

include("connection.php");
include("functions.php");
  $user_data = check_login($con)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>BudgetGuardian</title>
</head>
<body>
  <button class="logoutbtn" onclick="myFunction()">Log out</button>
  <script>
function myFunction() {
 
  localStorage.clear();
  console.log("Function executed!");

  
  window.location.href = "logout.php";
}
</script>

<div class="message" id="message"></div> 
<br>
  <h1>BudgetGuardian</h1>

  <div class="container">
    <h4><?php echo $user_data['user_name']; ?>'s Balance</h4>
    <h1 id="balance">₱0.00</h1>
 
    <div class="inc-exp container">
      <div>
        <h4>Income</h4>
        <p id="money-plus" class="money plus">₱0.00</p>
      </div>
      <div>
        <h4>Expense</h4>
        <p id="money-minus" class="money minus">-₱0.00</p>
      </div>
    </div>
   
    <div class="form-control">
      <label for="savings-percentage">Expense Cap</label>
      <input type="number" id="savings-percentage" placeholder="Enter expense cap percentage" min="0" max="100">
    </div>

    <h3>Add New Transaction</h3>
    <form id="form">
      <div class="form-control">
        <label for="text">Transaction Name</label>
        <input type="text" id="text" placeholder="Enter text&hellip;">
      </div>
      <div class="form-control">
        <label for="amount">Amount</label>
        <input type="number" id="amount" placeholder="Enter amount&hellip; (e.g., 20 or -10)">
      </div>
      <button class="btn">Add Transaction</button>
    </form>
    
   

    <h3>Transaction History</h3>
    <ul id="list" class="list">
    </ul>
    
    
    
  </div> 









<div class="slideshow-container">


<div class="mySlides fade">
 
  <img src="img1.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
 
  <img src="img2.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  
  <img src="img3.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
 
  <img src="img4.jpg" style="width:100%">

</div>

<div class="mySlides fade">
 
  <img src="img5.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
 
  <img src="img6.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
 
  <img src="img7.jpg" style="width:100%">

</div>

<div class="mySlides fade">

  <img src="img8.jpg" style="width:100%">
  
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
<span class="dot" onclick="currentSlide(5)"></span>
<span class="dot" onclick="currentSlide(6)"></span>
<span class="dot" onclick="currentSlide(7)"></span>
<span class="dot" onclick="currentSlide(8)"></span>
</div>

  <script src="script.js"></script>
</body>
</html>

<br>


<div class="art container">
      <div>
      <a href="https://www.investopedia.com/articles/personal-finance/031215/why-saving-money-important.asp" target="_blank">
        <h4>Why Saving Money is Important</h4> 
        <img src="investopedia_icon-4f30abcdb0cd455b9c740b7d09a07a47.png" style="width:100%">
        <h3>By Investopedia</h3>
</a>
<style>
  a {
    text-decoration: none; 
    color: inherit;
  }
</style>
      </div>
      <div>
      <a href="https://www.discover.com/online-banking/banking-topics/3-reasons-to-save-more-money/" target="_blank">
        <h4>3 reasons why you should start saving today</h4>
        <img src="DFS-72325cfa (1).png" style="width:100%">
        <h3>By Discover.com</h3>
</a>
        
    </div>  