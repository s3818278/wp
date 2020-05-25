var mybutton = document.getElementById("myBtn");


window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}




$(document).ready(function () {
  var scrollLink = $('.scroll');
  $(window).scroll(function () {
    var scrollbarLocation = $(this).scrollTop();
    scrollLink.each(function () {
      var sectionOffset = $(this.hash).offset().top - 20;
      if (sectionOffset <= scrollbarLocation) {
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
      }
    })

  })

})


const date_picker_element = document.querySelector('.date-picker');
const selected_date_element = document.querySelector('.date-picker .selected-date');
const dates_element = document.querySelector('.date-picker .dates');
const mth_element = document.querySelector('.date-picker .dates .month .mth');
const next_mth_element = document.querySelector('.date-picker .dates .month .next-mth');
const prev_mth_element = document.querySelector('.date-picker .dates .month .prev-mth');
const days_element = document.querySelector('.date-picker .dates .days');

const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];



var day1 = new Date();
var number1 = day1.getDay() - 1;
var sel = document.getElementById('mySelect').value;
dateList = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sonday']
var discount = 0;

let date = new Date();
let day = date.getDate();
let month = date.getMonth();
let year = date.getFullYear();

let selectedDate = date;
let selectedDay = day;
let selectedMonth = month;
let selectedYear = year;

mth_element.textContent = months[month] + ' ' + year;

selected_date_element.textContent = formatDate(date);
selected_date_element.dataset.value = selectedDate;

populateDates();


date_picker_element.addEventListener('click', toggleDatePicker);
next_mth_element.addEventListener('click', goToNextMonth);
prev_mth_element.addEventListener('click', goToPrevMonth);


function toggleDatePicker(e) {
  if (!checkEventPathForClass(e.path, 'dates')) {
    dates_element.classList.toggle('active');
  }
}

function goToNextMonth(e) {
  month++;
  if (month > 11) {
    month = 0;
    year++;
  }
  mth_element.textContent = months[month] + ' ' + year;
  populateDates();
}

function goToPrevMonth(e) {
  month--;
  if (month < 0) {
    month = 11;
    year--;
  }
  mth_element.textContent = months[month] + ' ' + year;
  populateDates();
}

function populateDates(e) {
  days_element.innerHTML = '';
  let amount_days = 31;

  if (month == 1) {
    amount_days = 28;
  }

  for (let i = 0; i < amount_days; i++) {
    const day_element = document.createElement('div');
    day_element.classList.add('day');
    day_element.textContent = i + 1;

    if (selectedDay == (i + 1) && selectedYear == year && selectedMonth == month) {
      day_element.classList.add('selected');
    }

    day_element.addEventListener('click', function () {
      selectedDate = new Date(year + '-' + (month + 1) + '-' + (i + 1));
      selectedDay = (i + 1);
      selectedMonth = month;
      selectedYear = year;

      selected_date_element.textContent = formatDate(selectedDate);
      selected_date_element.dataset.value = selectedDate;

      populateDates();
    });

    days_element.appendChild(day_element);
  }
}


function checkEventPathForClass(path, selector) {
  for (let i = 0; i < path.length; i++) {
    if (path[i].classList && path[i].classList.contains(selector)) {
      return true;
    }
  }

  return false;
}
function formatDate(d) {
  let day = d.getDate();
  if (day < 10) {
    day = '0' + day;
  }

  let month = d.getMonth() + 1;
  if (month < 10) {
    month = '0' + month;
  }

  let year = d.getFullYear();

  return day + ' / ' + month + ' / ' + year;
}



const form = document.getElementById('form1');
const username = document.getElementById('username');
const email = document.getElementById('email');
const mobile = document.getElementById('mobile');

form.addEventListener('submit', e => {
  e.preventDefault();
  checkInputs();
});
function checkInputs() {

  const usernameValue = username.value.trim();
  const emailValue = email.value.trim();
  const mobileValue = mobile.value.trim();
  const creditcardValue = creditcard.value.replace(/ /g, '');

  if (usernameValue === '') {
    setErrorFor(username, 'Username cannot be blank');
  } else if (!isWesternName(usernameValue)) {
    setErrorFor(username, 'Not a Western name');
  } else {
    setSuccessFor(username);
  }

  if (emailValue === '') {
    setErrorFor(email, 'Email cannot be blank');
  } else {
    setSuccessFor(email);
  }

  if (mobileValue === '') {
    setErrorFor(mobile, 'Username cannot be blank');
  } else if (!isAustralianMobile(mobileValue)) {
    setErrorFor(mobile, 'Australian mobile number only');
  } else {
    setSuccessFor(mobile);
  }

  if (creditcardValue === '') {
    setErrorFor(creditcard, 'credit card cannot be blank');
  } else if (!isCreditcard(creditcardValue)) {
    setErrorFor(creditcard, 'Credit card not valid');
  } else {
    setSuccessFor(creditcard);
  }
}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector('small');
  formControl.className = 'form-control error';
  small.innerText = message;
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.className = 'form-control success';
}


function isWesternName(username) {
  return /^[a-zA-Z \-.']{1,100}$/.test(username);
}

function isAustralianMobile(mobile) {
  return /^(\(04\)|04|\+614)( ?\d){8}$/.test(mobile);
}

function isCreditcard(creditcard) {
  return /^[0-9]{14,19}$/.test(creditcard)
}



function totalPrice() {
  var STA = document.getElementById('seats-STA').value;
  var STP = document.getElementById('seats-STP').value;
  var STC = document.getElementById('seats-STC').value;
  var FCA = document.getElementById('seats-FCA').value;
  var FCP = document.getElementById('seats-FCP').value;
  var FCC = document.getElementById('seats-FCC').value;

  var totalPrice = ((STA * 19.8 + STC * 17.5 + STP * 15.3 + FCA * 30 + FCP * 27 + FCC * 24)).toFixed(2);


  discountPrice = totalPrice - (totalPrice * discount).toFixed(2);
  if (totalPrice == discountPrice) {
    document.getElementById('totalPrice').innerHTML = "" + totalPrice;
    document.getElementById("slider_input").setAttribute('value', totalPrice);

  }
  else {
    document.getElementById('totalPrice').innerHTML = 'DISCOUNT: ' + "$" + discountPrice.toFixed(2);
    document.getElementById("slider_input").setAttribute('value', discountPrice.toFixed(2));
  }


}







function myFunction1() {

  var movie = document.getElementById('movie-TheKingsMan').innerText;
  var list = movie.split('-')
  console.log(list)
  document.getElementById('movie0').innerHTML = list[0];


  document.getElementById('rating').innerHTML = list[1];


  document.getElementById('description').innerHTML = "As a collection of history's worst tyrants and criminal masterminds gather to plot a war to wipe out millions, one man and his protégé must race against time to stop them.";


  document.getElementById('trailer').src = "https://www.youtube.com/embed/0pbLPOrTSsI";


  document.getElementById('comment').innerHTML = "Action, Adventure, Comedy";
  document.getElementById('movieName').innerHTML = "The Kings Man";
  document.getElementById("MOVIE").setAttribute('value', "The Kings Man");


}

function myFunction2() {

  var movie = document.getElementById('movie-Bloodshot').innerText;
  var list = movie.split('-')
  console.log(list)
  document.getElementById('movie0').innerHTML = list[0];


  document.getElementById('rating').innerHTML = list[1];


  document.getElementById('description').innerHTML = "Ray Garrison, a slain soldier, is re-animated with superpowers.";



  document.getElementById('trailer').src = "https://www.youtube.com/embed/vOUVVDWdXbo";


  document.getElementById('comment').innerHTML = "Action, Drama, Sci-Fi";
  document.getElementById('movieName').innerHTML = "Bloodshot";
  var myMovie = document.getElementById('movieName');
  document.getElementById("MOVIE").setAttribute('value', "Bloodshot");
}


function myFunction3() {

  var movie = document.getElementById('movie-BlackWidow').innerText;
  var list = movie.split('-')
  console.log(list)
  document.getElementById('movie0').innerHTML = list[0];


  document.getElementById('rating').innerHTML = list[1];


  document.getElementById('description').innerHTML = "Natasha Romanoff aka Black Widow confronts the darker parts of her ledger when a dangerous conspiracy with ties to her past arises. Pursued by a force that will stop at nothing to bring her down, Natasha must deal with her history as a spy and the broken relationships left in her wake long before she became an Avenger.";


  document.getElementById('trailer').src = "https://www.youtube.com/embed/ybji16u608U";


  document.getElementById('comment').innerHTML = "Action, Adventure, Sci-Fi";
  document.getElementById('movieName').innerHTML = "Black Widow";
  var myMovie = document.getElementById('movieName');
  document.getElementById("MOVIE").setAttribute('value', "Black Widow");
}

function myFunction4() {

  var movie = document.getElementById('movie-MonsterHunter').innerText;
  var list = movie.split('-')
  console.log(list)
  document.getElementById('movie0').innerHTML = list[0];


  document.getElementById('rating').innerHTML = list[1];


  document.getElementById('description').innerHTML = "When Lt. Artemis and her loyal soldiers are transported to a new world, they engage in a desperate battle for survival against enormous enemies with incredible powers.";


  document.getElementById('trailer').src = "https://www.youtube.com/embed/m6guHcGEqX8";


  document.getElementById('comment').innerHTML = "Action, Adventure, Fantasy";
  document.getElementById('movieName').innerHTML = "Monster Hunter";
  var myMovie = document.getElementById('movieName');
  document.getElementById("MOVIE").setAttribute('value', "Monster Hunter");
}


function todayDate() {

  console.log(number1)
  document.getElementById("mySelect").selectedIndex = number1;
}



function discountedPrice1() {
  sel = document.getElementById("mySelect").value;
  console.log(sel);
  sel1 = document.getElementById('demo1').innerHTML;
  console.log(sel1)
  document.getElementById('today').innerHTML = '-' + sel + '-' + sel1;
  if (sel == "Saturday") {
    discount = 0;
    console.log(discount);
  } else if (sel == "Sunday") {
    discount = 0;
  } else if (sel1 == "12pm") {
    discount = 0.2;
    console.log(discount);
  }

  var STA = document.getElementById('seats-STA').value;
  var STP = document.getElementById('seats-STP').value;
  var STC = document.getElementById('seats-STC').value;
  var FCA = document.getElementById('seats-FCA').value;
  var FCP = document.getElementById('seats-FCP').value;
  var FCC = document.getElementById('seats-FCC').value;

  var totalPrice = ((STA * 19.8 + STC * 17.5 + STP * 15.3 + FCA * 30 + FCP * 27 + FCC * 24)).toFixed(2);


  discountPrice = totalPrice - (totalPrice * discount).toFixed(2);
  if (totalPrice == discountPrice) {
    document.getElementById('totalPrice').innerHTML = "$" + totalPrice;
  }
  else {
    document.getElementById('totalPrice').innerHTML = ' DISCOUNT: ' + "$" + discountPrice.toFixed(2);
  }
}

function discountedPrice2() {
  sel = document.getElementById("mySelect").value;
  console.log(sel);
  sel1 = document.getElementById('demo2').innerHTML;
  console.log(sel1)
  document.getElementById('today').innerHTML = '-' + sel + '-' + sel1;
  discount = 0;
  totalPrice()

}
function discountedPrice3() {
  sel = document.getElementById("mySelect").value;
  console.log(sel);
  sel1 = document.getElementById('demo3').innerHTML;
  console.log(sel1)
  document.getElementById('today').innerHTML = '-' + sel + '-' + sel1;

  discount = 0;
  totalPrice()
}
function discountedPrice4() {
  sel = document.getElementById("mySelect").value;
  console.log(sel);
  sel1 = document.getElementById('demo4').innerHTML;
  console.log(sel1)
  document.getElementById('today').innerHTML = '-' + sel + '-' + sel1;

  discount = 0;
  totalPrice()
}


function submitForms() {
  document.getElementById("form1").submit();
  document.getElementById("form2").submit();
  document.getElementById("form3").submit();
}