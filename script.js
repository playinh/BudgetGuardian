"use strict";

const balance = document.getElementById('balance');
const money_plus = document.getElementById('money-plus');
const money_minus = document.getElementById('money-minus');
const list = document.getElementById('list');
const form = document.getElementById('form');
const text = document.getElementById('text');
const amount = document.getElementById('amount');
const savingsPercentageInput = document.getElementById('savings-percentage');

let transactions = JSON.parse(localStorage.getItem('transactions')) || [];
let savingsPercentage = parseFloat(localStorage.getItem('savingsPercentage')) || 0;

form.addEventListener('submit', addTransaction);

function generateID() {
  return new Date().getTime();
}

function addTransaction(e) {
  e.preventDefault();

  if (text.value.trim() === '' || amount.value.trim() === '') {
    alert('Please add a Transaction Name and Amount');
  } else {
    const transaction = {
      id: generateID(),
      text: text.value,
      amount: +amount.value
    };

    transactions.push(transaction);

    addTransactionDOM(transaction);

    updateValues();

    updateLocalStorage();

    text.value = '';
    amount.value = '';
  }
}

function addTransactionDOM(transaction) {
  const sign = transaction.amount < 0 ? '-' : '+';
  const item = document.createElement('li');

  item.classList.add(transaction.amount < 0 ? 'minus' : 'plus');

  item.innerHTML = `
    ${transaction.text} <span>${sign}${Math.abs(transaction.amount)}</span> 
    <button class="delete-btn" onclick="removeTransaction(${transaction.id})">X</button></li>
  `;

  list.appendChild(item);
}

function updateValues() {
  const amounts = transactions.map(transaction => transaction.amount);

  const total = amounts.reduce((acc, val) => (acc += val), 0).toFixed(2);

  const income = amounts
    .filter(transaction => transaction > 0)
    .reduce((acc, val) => (acc += val), 0)
    .toFixed(2);

  const expense = amounts
    .filter(transaction => transaction < 0)
    .reduce((acc, val) => (acc += val), 0)
    .toFixed(2);

  const savingsPercentageInput = document.getElementById('savings-percentage');
  const savingsPercentage = savingsPercentageInput.value;
  const currentExpensePercentage = (Math.abs(expense) / income * 100).toFixed(2);

  const messageElement = document.getElementById('message');
  messageElement.innerHTML = ''; 

  if (savingsPercentage && currentExpensePercentage >= savingsPercentage) {
    showMessage(`STOP SPENDING!!! You have reached your expense cap of ${savingsPercentage}%. You are now at ${currentExpensePercentage}%`);
  } else if (savingsPercentage) {
    const difference = (savingsPercentage - currentExpensePercentage);
    showMessage(`You can still spend ${difference.toFixed(2)}% until you reach the expense cap. Spend wisely!`);

    const warningThreshold = savingsPercentage - 20; 
    if (currentExpensePercentage >= warningThreshold) {
      showMessage(`Warning: Your expenses are getting closer to your expense cap. You only have ${difference.toFixed(2)}% left until you reach it.`);
    }
  }

  const balanceElement = document.getElementById('balance');
  balanceElement.textContent = `₱${total}`;
  
  const incomeElement = document.getElementById('money-plus');
  incomeElement.textContent = `₱${income}`;
  
  const expenseElement = document.getElementById('money-minus');
  expenseElement.textContent = `₱${Math.abs(expense).toFixed(2)}`; 
}



function showMessage(message) {
  const messageElement = document.getElementById('message');
  messageElement.textContent = message;
}

function removeTransaction(id) {
  transactions = transactions.filter(transaction => transaction.id !== id);
  updateLocalStorage();
  init();
}

function updateLocalStorage() {
  localStorage.setItem('transactions', JSON.stringify(transactions));
}

function init() {
  list.innerHTML = '';
  transactions.forEach(addTransactionDOM);
  updateValues();
}

init();

savingsPercentageInput.addEventListener('input', e => {
  const percentage = parseFloat(e.target.value);
  if (!isNaN(percentage)) {
    savingsPercentage = percentage;
    localStorage.setItem('savingsPercentage', savingsPercentage.toString());
    updateValues();
  }
});











let slideIndex = 1;
showSlides(slideIndex);


function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}