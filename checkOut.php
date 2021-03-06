<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Checkout Form</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="css/style.css" /><link rel="stylesheet" href="./style.css">
<style>
:root {
  --color-background: #fae3ea;
  --color-primary: #fc8080;
  --font-family-base: Poppin, sans-serif;
  --font-size-h1: 1.25rem;
  --font-size-h2: 1rem;
}

userid{
  font-size: 13px;
  padding: 0px;
  margin: 10px 10px 10px 42px;
}
date{
  font-size: 13px;
  padding: 0px;
  margin: 10px 10px 10px 65px;
}
bill{
  font-size: 13px;
  padding: 0px;
  margin: 10px 10px 10px 73px;
}
descr{
  font-size: 13px;
  padding: 0px;
  margin: 10px 10px 10px 0px;
}
* {
  -webkit-box-sizing: inherit;
          box-sizing: inherit;
}

html {
  background-color: #fc8080;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  background-color: #fae3ea;
  background-color: var(--color-background);
  display: grid;
  font-family: Poppin, sans-serif;
  font-family: var(--font-family-base);
  font-size:15px;
  line-height: 1.5;
  margin: 0;
  min-height: 100vh;
  padding: 4vmin;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  justify-items: center;
  place-items: center;
}

button {
  border: 0;
  color: inherit;
  cursor: pointer;
  font: inherit;
}

fieldset {
  border: 0;
  margin: 0;
  padding: 0;
}

h1 {
  font-size: 1.25rem;
  font-size: var(--font-size-h1);
  line-height: 1.2;
  margin-top: 0;
  margin-bottom: 1.5em;
}

h2 {
  font-size: 15px;
  font-size: 15px;
  line-height: 0;
  margin-top: 0;
  margin-bottom: 0.5em;
}

legend {
  font-weight: 600;
  margin-bottom: 0.5em;
  padding: 0;
}

input {
  border: 0;
  color: inherit;
  font: inherit;
}

input[type="radio"] {
  accent-color: #fc8080;
  accent-color: var(--color-primary);
}

table {
  border-collapse: collapse;
  width: 100%;
}

tbody {
  color: #b4b4b4;
}

td {
  padding-top: 0.125em;
  padding-bottom: 0.125em;
}

tfoot {
  border-top: 1px solid #b4b4b4;
  font-weight: 600;
}

.align {
  display: grid;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  justify-items: center;
  place-items: center;
}

.button {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background-color: #fc8080;
  background-color: var(--color-primary);
  border-radius: 999em;
  color: #fff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  grid-gap: 0.5em;
  gap: 0.5em;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding-top: 0.75em;
  padding-bottom: 0.75em;
  padding-left: 1em;
  padding-right: 1em;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

.button:focus,
.button:hover {
  background-color: #e96363;
}

.button--full {
  width: 100%;
}

.card {
  border-radius: 1em;
  background-color: #fc8080;
  background-color: var(--color-primary);
  color: #fff;
  padding: 1em;
}

.form {
  display: grid;
  grid-gap: 2em;
  gap: 2em;
}

.form__radios {
  display: grid;
  grid-gap: 1em;
  gap: 1em;
}

.form__radio {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background-color: #fefdfe;
  border-radius: 1em;
  -webkit-box-shadow: 0 0 1em rgba(0, 0, 0, 0.0625);
          box-shadow: 0 0 1em rgba(0, 0, 0, 0.0625);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 1em;
}

.form__radio label {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  grid-gap: 1em;
  gap: 1em;
}

.header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding-top: 0.5em;
  padding-bottom: 0.5em;
  padding-left: 1em;
  padding-right: 1em;
}

.icon {
  height: 1em;
  display: inline-block;
  fill: currentColor;
  width: 1em;
  vertical-align: middle;
}

.iphone {
  background-color: #fbf6f7;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#fbf6f7), to(#fff));
  background-image: -o-linear-gradient(top, #fbf6f7, #fff);
  background-image: linear-gradient(to bottom, #fbf6f7, #fff);
  border-radius: 2em;
  height: 812px;
  -webkit-box-shadow: 0 0 1em rgba(0, 0, 0, 0.0625);
          box-shadow: 0 0 1em rgba(0, 0, 0, 0.0625);
  width: 375px;
  overflow: auto;
  padding: 2em;
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="iphone">
  <header class="header">
    <h1>Checkout</h1>
  </header>

  <form action="https://httpbin.org/post" class="form" method="POST">
    
    <fieldset>
      <legend>Credit/Debit Card</legend>
      
        <div class="form__radios">
        <div class="form__radio">
          <label for="visa"><svg class="icon">
              
            </svg>HDFC Bank</label>
          <input checked id="visa" name="payment-method" type="radio" />
        </div>

        <div class="form__radio">
          <label for="paypal"><svg class="icon">
             
            </svg>Kotak Mahindra Bank</label>
          <input id="paypal" name="payment-method" type="radio" />
        </div>

        <div class="form__radio">
          <label for="mastercard"><svg class="icon">
              
            </svg>ICICI Bank</label>
          <input id="mastercard" name="payment-method" type="radio" />
        </div>

        <div class="form__radio">
          <label for="paypal"><svg class="icon">
              
            </svg>SBI Bank</label>
          <input id="paypal" name="payment-method" type="radio" />
        </div>
      </div>
    </fieldset>

    <fieldset>
    
      <legend>UPI Payment</legend>
      
      <div class="form__radios">
        <div class="form__radio">
          <label for="visa"><svg class="icon">
              <use xlink:href="#icon-paytm" />
            </svg>Paytm</label>
          <input checked id="visa" name="payment-method" type="radio" />
        </div>

        <div class="form__radio">
          <label for="paypal"><svg class="icon">
              
            </svg>Phone Pe</label>
          <input id="paypal" name="payment-method" type="radio" />
        </div>

        <div class="form__radio">
          <label for="mastercard"><svg class="icon">
              
            </svg>Google Pay</label>
          <input id="mastercard" name="payment-method" type="radio" />
        </div>

        <div class="form__radio">
          <label for="mastercard"><svg class="icon">
              
            </svg>Amazon Pay</label>
          <input id="mastercard" name="payment-method" type="radio" />
        </div>
      </div>
    </fieldset>

    
    <div>
      <button class="button button--full" type="submit"><svg class="icon">
          
        </svg>Make Payment</button>
    </div>
  </form>
</div>



</body>
</html>
