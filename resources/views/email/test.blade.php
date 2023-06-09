<!doctype html>
<html lang="en">
<head>
<title>Home Page</title>
<meta name="keywords" content="">
<meta name="description" content="">









<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


<!--[if IE]>
  <script src="assets/js/html5.js"></script>
<![endif]-->

<style type="text/css">
  /*@font-face {
  font-family: 'Poppins', sans-serif;
  src: url(../fonts/Nexa-Bold.otf);
}
@font-face {
  font-family: Nexa Light;
  src: url(../fonts/Nexa-light.otf);
}
*/
.form-card.frm2 .row.fi1 button.car .car_img img {
    width: 100%;
}
#jqcheck {
  background: #fff9d7;
  text-align: center;
  color: #333;
  padding: 10px 0px;
  font-size: 13px;
  font-weight: bold;
  position: fixed;
  z-index: 9991;
  width: 100%;
  font-family: "Poppins", sans-serif;
}
* {
  margin: 0px;
  padding: 0px;
}

/* text selection color */
::-moz-selection {
  background: var(--primary-color);
  color: var(--theme-white);
  text-shadow: none;
}
::selection {
  background: var(--primary-color);
  color: var(--theme-white);
  text-shadow: none;
}

/* browser scroller style */
::-webkit-scrollbar {
  width: 10px;
  height: 10px;
}
::-webkit-scrollbar-button:start:decrement,
::-webkit-scrollbar-button:end:increment {
  display: none;
}
::-webkit-scrollbar-track-piece {
  background-color: #ecedf1;
  -webkit-border-radius: 0px;
  border-left: 1px solid #888;
}
::-webkit-scrollbar-thumb:vertical {
  -webkit-border-radius: 0px;
  background: var(--primary-color);
}

@media screen and (-webkit-min-device-pixel-ratio: 0) {
  select {
    -webkit-appearance: none !important;
    line-height: 28px !important;
  }
}

body {
  font-family: "Poppins", sans-serif;
  color: var(--default-color);
  font-size: var(--base-font-size);
  position: relative;
}

/* font colors */
.fc-primary {
  color: var(--primary-color);
}
.fc-secondary {
  color: var(--secondary-color);
}
.fc-dark {
  color: var(--theme-dark);
}
.fc-lite {
  color: var(--theme-lite);
}

.secpad-100 {
  padding: 100px 0;
}

.sm-btn {
  font-size: 14px;
}
.md-btn {
  font-size: 16px;
}
.lg-btn {
  font-size: 18px;
}
.xl-btn {
  font-size: 20px;
}

/* headings */
h1,
.h1,
h2,
.h2,
h3,
.h3,
h4,
.h4,
h5,
.h5,
h6,
.h6,
p {
  margin: 0;
  padding: 0;
}
h1,
.h1,
h2,
.h2 {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
}
h3,
.h3,
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  font-family: "Poppins", sans-serif;
  padding-bottom: 10px;
  color: var(--theme-dark);
}

h2,
.h2 {
  font-size: 36px;
}
h3,
.h3 {
  font-size: var(--font-size-h3);
  font-weight: 600;
}
h4,
.h4 {
  font-size: var(--font-size-h4);
}
h5,
.h5 {
  font-size: var(--font-size-h5);
}
h6,
.h6 {
  font-size: var(--font-size-h6);
}
p {
  /*font-size: var(--base-font-size);*/
}

p {
  font-weight: 400;
  line-height: 23px;
  padding: 0 0 20px;
  margin: 0px;
  color: #666666;
  font-size: 16px;
}

/*** theme sections padding ***/
.sec-padding-100 {
  padding: 100px 0;
}
.sec-padding-90 {
  padding: 90px 0;
}
.sec-padding-80 {
  padding: 80px 0;
}
.sec-padding-70 {
  padding: 70px 0;
}
.sec-padding-60 {
  padding: 60px 0;
}
.sec-padding-xlarge {
  padding: 50px 0;
}
.sec-padding-large {
  padding: 40px 0;
}
.sec-padding-medium {
  padding: 30px 0;
}
.sec-padding-small {
  padding: 25px 0;
}
.sec-padding-xsmall {
  padding: 10px 0;
}

/*** theme sections margin ***/
.sec-margin-100 {
  margin: 100px 0;
}
.sec-margin-90 {
  margin: 90px 0;
}
.sec-margin-80 {
  margin: 80px 0;
}
.sec-margin-70 {
  margin: 70px 0;
}
.sec-margin-60 {
  margin: 60px 0;
}
.sec-margin-xlarge {
  margin: 50px 0;
}
.sec-margin-large {
  margin: 40px 0;
}
.sec-margin-medium {
  margin: 30px 0;
}
.sec-margin-small {
  margin: 25px 0;
}
.sec-margin-xsmall {
  margin: 10px 0;
}

/*** no padding, no marging ***/
.p-0 {
  padding: 0;
}
.pt-0 {
  padding-top: 0px;
}
.pb-0 {
  padding-bottom: 0px;
}
.pl-0 {
  padding-left: 0px;
}
.pr-0 {
  padding-right: 0px;
}
.m-0 {
  margin: 0;
}
.mt-0 {
  margin-top: 0px;
}
.mb-0 {
  margin-bottom: 0px;
}
.ml-0 {
  margin-left: 0px;
}
.mr-0 {
  margin-right: 0px;
}

.tt-uppercase {
  text-transform: uppercase;
}
.tt-capitalize {
  text-transform: capitalize;
}

p strong {
  color: black;
}
p span {
  color: black;
}
a:hover {
  text-decoration: none;
}
a:focus {
  outline: none;
  text-decoration: none;
}
img {
  border: 0px;
  outline: none;
}
/*img { max-width: 100%;  }*/
ul,
li {
  list-style-type: none;
}
.relative {
  position: relative;
}
.absolute {
  position: absolute;
}

h2,
.h2 {
  color: #222222;
  line-height: 1.2;
  font-weight: 700;
  padding: 0 0 15px 0;
  position: relative;
  letter-spacing: -1px;
}
h2 span,
.h2 span {
  color: var(--primary-color);
}

a {
  text-decoration: none;
}
.list-simple {
  list-style: none;
  margin: 0 0 15px 0;
  width: 100%;
  display: inline-block;
}
.list-simple li {
  color: var(--default-color);
  padding: 0 0 10px 16px;
  line-height: 20px;
  font-size: 14px;
  font-weight: 400;
  position: relative;
}
.list-simple li:before {
  position: absolute;
  left: 0px;
  top: 0px;
  font-size: 13px;
  color: var(--secondary-color);
  content: "\e93a";
  font-family: "icomoon" !important;
}

/*** morefull block link ***/
.moreFull {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: block;
  text-indent: -9999px;
}

/*** transition ***/
.transition {
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

/*** scale with transition ***/
.scale-with-transition {
  -webkit-transition: all 200ms ease-in;
  -ms-transition: all 200ms ease-in;
  -moz-transition: all 200ms ease-in;
  transition: all 200ms ease-in;
  -webkit-transform: scale(1.05);
  -ms-transform: scale(1.05);
  -moz-transform: scale(1.05);
  transform: scale(1.05);
}

/* Styles for screens smaller than or equal to 600px */
@media (max-width: 800px) {
  /* CSS rules here */
  #bookingSummaryPg2 {
    display: none;
  }
}

/* Styles for screens larger than 600px */
@media (min-width: 801px) {
  /* CSS rules here */
  #bookingSummaryPg2 {
    display: block;
  }
}


/* header 
------------------------------------*/
.row.mai {
  display: block !important;
}
h1 {
  font-size: 30px;
  text-align: center;
  text-transform: uppercase;
  font-weight: 500;
  margin-bottom: 10px;
  color: black;
}
h2 {
  font-weight: 300;
  font-size: 25px;
  text-align: center;
}
h3 {
  font-weight: 700;
  font-size: 20px;
  text-align: center;
  text-transform: uppercase;
  margin-bottom: 10px;
}
h4 {
  font-size: 16px;
  text-align: center;
  text-decoration: underline;
  text-transform: uppercase;
}
h5 {
}
h6 {
}
p {
}
.btn {
  background-color: #3e7d8e;
  font-size: 14px !important;
  color: white;
  text-transform: uppercase;
  padding: 12px 40px;
  border-radius: 0;
}

.screen1 {
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
  width: 100%;
}
.screen1 .wrp1 {
  background-color: white;
  padding: 100px 0;
  box-shadow: 0px 0px 10px 0px #ccc;
}
.screen1 .wrp1 .wrp1_btn {
  text-align: center;
  margin-bottom: 30px;
}
.screen1 .wrp1 .wrp1_btn a {
  margin: 0 30px;
}
.screen1 .wrp1 .log_sig a {
  margin: 0 auto;
  display: table;
}

/*form1*/

#heading {
  text-transform: uppercase;
  color: #673ab7;
  font-weight: normal;
}

#msform {
  text-align: center;
  position: relative;
  margin-top: 20px;
}

#msform fieldset {
  background: white;
  border: 0 none;
  border-radius: 0.5rem;
  box-sizing: border-box;
  width: 100%;
  margin: 0;
  position: relative;
  box-shadow: 0px 0px 10px 0px #ccc;
  padding: 30px 40px;
}

.form-card {
  text-align: left;
}

#msform fieldset:not(:first-of-type) {
  display: none;
}

#msform input,
#msform textarea {
  padding: 15px 15px;
  border: unset;
  border-radius: 0px;
  margin-bottom: 25px;
  margin-top: 2px;
  width: 100%;
  box-sizing: border-box;
  color: #2c3e50;
  background-color: white;
  font-size: 16px;
  letter-spacing: 1px;
  box-shadow: 0px 0px 5px 0px #ccc;
}

#msform input:focus,
#msform textarea:focus {
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  border: 1px solid #673ab7;
  outline-width: 0;
}

#msform .action-button {
  background: #3e7d8e;
  color: white;
  border: 0 none;
  border-radius: 0px;
  cursor: pointer;
  padding: 11px 55px;
  float: left;
  width: auto;
  margin-bottom: 0;
}

#msform .action-button:hover,
#msform .action-button:focus {
  background-color: #311b92;
}

#msform .action-button-previous {
  width: auto;
  background: black;
  font-weight: unset;
  color: white;
  border: 0px;
  border-radius: 0px;
  cursor: pointer;
  padding: 11px 45px;
  float: left;
  margin: 2px 20px 0 0px;
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
  background-color: #000000;
}

.card {
  z-index: 0;
  border: none;
  position: relative;
}

.fs-title {
  font-size: 25px;
  color: black;
  margin-bottom: 15px;
  font-weight: normal;
  text-align: left;
}

.purple-text {
  color: #673ab7;
  font-weight: normal;
}

.steps {
  font-size: 16px;
  color: #3e7d8e;
  margin-bottom: 10px;
  font-weight: normal;
  text-align: right;
}

.fieldlabels {
  color: gray;
  text-align: left;
}

#progressbar {
  margin-bottom: 30px;
  overflow: hidden;
  color: lightgrey;
}

#progressbar .active {
  color: #3e7d8e;
}

#progressbar li {
  list-style-type: none;
  font-size: 13px;
  width: 33%;
  float: left;
  position: relative;
  font-weight: 400;
  color: black;
}

#progressbar #account:before {
  font-family: FontAwesome;
  content: "\f13e";
}

#progressbar #personal:before {
  font-family: FontAwesome;
  content: "\f007";
}

#progressbar #payment:before {
  font-family: FontAwesome;
  content: "\f030";
}

#progressbar #confirm:before {
  font-family: FontAwesome;
  content: "\f00c";
}

#progressbar li:before {
  width: 50px;
  height: 50px;
  line-height: 45px;
  display: block;
  font-size: 20px;
  color: #ffffff;
  background: lightgrey;
  border-radius: 50%;
  margin: 0 auto 10px auto;
  padding: 2px;
}

#progressbar li:after {
  content: "";
  width: 100%;
  height: 2px;
  background: lightgray;
  position: absolute;
  left: 0;
  top: 25px;
  z-index: -1;
}

#progressbar li.active:before,
#progressbar li.active:after {
  background: #3e7d8e;
}

.progress {
  height: 20px;
}

.progress-bar {
  background-color: #3e7d8e;
}

.fit-image {
  width: 100%;
  object-fit: cover;
}

.in4 .quantity.buttons_added {
  display: flex;
}

#msform .in4 .quantity.buttons_added input.minus {
  padding: 0 0;
}
#msform .in4 .quantity.buttons_added input.plus {
  padding: 0 0;
}

#msform .in4 .quantity.buttons_added input.input-text.qty.text {
  text-align: center;
}
#msform .action-button:hover {
  background-color: black;
  transition: 0.9s;
}

.form-card.frm2 .row.fi1 h3 {
  text-align: left;
}

.form-card.frm2 .row.fi1 button.car {
  display: flex;
  align-items: center;
  width: 100%;
  background-color: white;
  padding: 7px 10px;
  border: unset;
  margin-bottom: 20px;
  box-shadow: 0px 0px 10px 0px #ccc;
  justify-content: center;
}

.form-card.frm2 .row.fi1 button.car span.icon.info {
  margin: 0 20px 0 10px;
  border: 2px solid;
  font-size: 16px;
  padding: 1px 10px;
  border-radius: 50px;
}

img {
}

.form-card.frm2 .row.fi1 button.car .car_img {
  margin: 0 20px 0 0px;
}

.form-card.frm2 .row.fi1 button.car p {
  padding: 0;
  margin: 0 20px 0 0px;
  font-size: 19px;
  color: black;
  text-transform: uppercase;
  font-weight: 600;
}
.form-card.frm2 .row.fi1 button.car:before {
  content: "\f00c";
  position: absolute;
  top: 0;
  font-family: "FontAwesome";
  font-size: 16px;
  background-color: #3e7d8e;
  color: white;
  padding: 9px 14px;
  right: 15px;
  border-radius: 0px 0px 0px 20px;
  opacity: 0;
}

.form-card.frm2 .row.fi1 button.car:focus:before {
  opacity: 1;
  transition: 0.9s;
}

.form-card.frm2 .row.fi1 button.car:focus {
  outline: 5px auto #3e7d8e;
  transition: 0.9s;
}
.form-card.frm2 .row.fi1 button.car .car-price._vehiclePrice {
  margin: 0 9px 0 15px;
  font-size: 15px;
  font-weight: 600;
}
.form-card.frm2 .row.fi1 button.car.own {
  padding: 40px 10px;
}
.maph {
}

.frm1 .maph h4 {
  background-color: #3e7d8e;
  padding: 10px 0;
  color: white;
  text-decoration: unset;
  font-size: 19px;
  border-radius: 10px 10px 0px 0px;
}
.frm2 .book {
  background-color: white;
  box-shadow: 0px 0px 10px 0px #ccc;
  padding: 27px 20px;
}

.frm2 .book h4 {
  text-decoration: unset;
  text-align: left;
}

.frm2 .lne {
  border: 1px solid #000;
  padding: 0 0 0px 0;
}

.frm2 .book .amount {
  padding: 20px 0 0;
}

.frm2 .book p {
  color: black;
}

.frm2 .book .amount h4 {
  font-size: 20px;
  font-weight: 800;
}
.modal-body {
}

.modal-body .img_pop {
  margin-bottom: 30px;
}

.modal-body .img_pop img {
  width: 100%;
}

.modal-body .info_pop {
}

.modal-body .info_pop span.icon {
  margin: 0 10px 0 10px;
  color: black;
  font-size: 16px;
}

.modal-body .info_pop span.icon i.fa {
  font-size: 16px;
  margin: 0 4px 0 0px;
}

.modal-body h4 {
  font-size: 19px;
}

.modal-body p {
  padding: 20px 0 10px 0;
  text-align: left;
  font-size: 14px;
  line-height: 20px;
}

.modal-header {
  padding: 10px 20px 0;
}

/*
.slick-slide.slick-cloned {
    width: 100% !important;
}
/*
.slick-track {
    width: 100% !important;
}*/
#msform input::placeholder {
  font-size: 12px;
}
.payop {
}

.payop select {
  border: unset;
  background-color: white;
  padding: 3px 1px 3px 1px;
  box-shadow: 0px 0px 10px 0px #ccc;
}
.payop select.mnth {
  padding: 3px 0px 3px 17px;
  color: gray;
  font-size: 13px;
}
.payop select.yrs {
  padding: 3px 17px 3px 17px;
  color: gray;
  font-size: 13px;
}
.payop label.ex {
  font-size: 13px;
}
.form-card.frm3 h4 {
  text-align: left;
  font-weight: 600;
}

.frm3 .book {
  background-color: white;
  box-shadow: 0px 0px 10px 0px #ccc;
  padding: 27px 20px;
}

.frm3 .book h4 {
  text-decoration: unset;
  text-align: left;
}

.frm3 .lne {
  border: 1px solid #000;
  padding: 0 0 0px 0;
}

.frm3 .book .amount {
  padding: 20px 0 0;
}

.frm3 .book p {
  color: black;
}

.frm3 .book .amount h4 {
  font-size: 20px;
  font-weight: 800;
}
.form-card.frm3 h3 {
  text-align: left;
}

.row.in2 input#ploc {
  margin: 0 0 7px 0;
}

.row.in2 label.link {
  font-size: 12px;
  margin: 0 20px 0 0px;
  float: right;
  text-decoration: underline;
  margin-bottom: 20px;
}

.row.in2 label#addEmail {
  margin: 0;
}

/*LOGIN REGISTER*/
.wrapper {
  overflow: hidden;
  max-width: 100%;
  background: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
}
.wrapper .title-text {
  display: flex;
  width: 200%;
}
.wrapper .title {
  width: 50%;
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  color: black;
  text-transform: uppercase;
}
.wrapper .slide-controls {
  position: relative;
  display: flex;
  height: 50px;
  width: 99.5%;
  overflow: hidden;
  margin: 30px 0 10px 0;
  justify-content: space-between;
  border: unset;
  border-radius: 0;
  background-color: white;
  box-shadow: 0px 0px 1px 0px #ccc;
}
.slide-controls .slide {
  height: 100%;
  width: 100%;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-align: center;
  line-height: 48px;
  cursor: pointer;
  z-index: 1;
  transition: all 0.6s ease;
}
.slide-controls label.signup {
  color: #000;
}
.slide-controls .slider-tab {
  position: absolute;
  height: 100%;
  width: 50%;
  left: 0;
  z-index: 0;
  border-radius: 0;
  background: #3e7d8e;
  transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
input[type="radio"] {
  display: none;
}
#signup:checked ~ .slider-tab {
  left: 50%;
}
#signup:checked ~ label.signup {
  color: #fff;
  cursor: default;
  user-select: none;
}
#signup:checked ~ label.login {
  color: #000;
}
#login:checked ~ label.signup {
  color: #000;
}
#login:checked ~ label.login {
  cursor: default;
  user-select: none;
}
.wrapper .form-container {
  width: 100%;
  overflow: hidden;
}
.form-container .form-inner {
  display: flex;
  width: 200%;
}
.form-container .form-inner form {
  width: 50%;
  transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.form-inner form .field {
  height: auto;
  width: 100%;
  margin-top: 20px;
}
.form-inner form .field input {
  height: 100%;
  width: 101%;
  outline: none;
  padding-left: 15px;
  border-radius: 0;
  border: unset;
  border-bottom-width: unset;
  font-size: 15px;
  transition: all 0.3s ease;
  background-color: #f4f3f3;
  padding: 15px 20px 15px;
}
.form-inner form .field input:focus {
  border-color: #fc83bb;
  /* box-shadow: inset 0 0 3px #fb6aae; */
}
.form-inner form .field input::placeholder {
  color: #999;
  transition: all 0.3s ease;
}
.form-inner form .field input:focus::placeholder {
  color: #b3b3b3;
}
.form-inner form .pass-link {
  margin-top: 5px;
}
.form-inner form .signup-link {
  text-align: center;
  margin-top: 30px;
}
.form-inner form .pass-link a,
.form-inner form .signup-link a {
  color: #3e7d8e;
  text-decoration: none;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover {
  text-decoration: underline;
}
.form-inner form .btn {
  height: 50px;
  width: 100%;
  border-radius: 0;
  position: relative;
  overflow: hidden;
}
.form-inner form .btn .btn-layer {
}
.form-inner form .btn:hover .btn-layer {
  left: 0;
}
.form-inner form .btn input[type="submit"] {
  height: 100%;
  width: 100%;
  z-index: 1;
  position: relative;
  background: none;
  border: none;
  color: #fff;
  padding-left: 0;
  border-radius: 0px !important;
  font-size: 18px;
  font-weight: 500;
  cursor: pointer;
  padding: 0;
}
input#myCheck {
  box-shadow: unset;
  width: auto;
}
.ds {
}

.ds h3 {
  margin: 0;
  padding: 0;
  font-size: 13px;
  text-align: left;
  color: red;
}

.ds p {
  font-size: 12px;
  line-height: 12px;
  color: red;
}

.email-field {
  width: 20%;
  margin-right: 10px;
}

#maps {
  width: 100%;
  height: 400px;
}

.select-dropdown select {
  width: 100%;
  padding: 35px 0 35px 30px;
  border: unset;
  background-color: white;
  box-shadow: 0px 0px 10px 0px #ccc;
  font-size: 19px;
  color: BLACK;
  font-weight: 600 !important;
  text-transform: UPPERCASE;
}

.select-dropdown select option {
  font-size: 16px !important;
}

.step-1-button {
  background-color: white;
  border: 1px solid;
  padding: 0px 10px;
}

.active-option{
  background-color: #3e7d8e;
    color: white;
    border: 1px solid #3e7d8e;

}

.pointer{
  cursor: pointer;
}

.form-card.frm2 .row.fi1 button.car .car_img.suvv {
    width: 37%;
}
#ccode{
  height: 57px;
    padding: 0 12px;
    border: unset;
    background-color: #3e7d8e;
    color: white;
}
@media (max-width: 1600px) {}
@media (max-width: 1440px) {}
@media (max-width: 1366px) {}
@media (max-width: 1280px) {}
@media (max-width: 1024px) {
  #msform .action-button-previous {
    float: unset;
    margin: 0 0 10px;
}
  #msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    position: relative;
    box-shadow: 0px 0px 10px 0px #ccc;
    padding: 10px 10px;
}
form#msform .col-md-7 {
    max-width: 100%;
    flex: 0 0 100%;
}
form#msform .col-md-5 {
    max-width: 100%;
    flex: 0 0 100%;
    margin-bottom: 20px;
    margin-top: 20px;
}
#msform .action-button {
    margin: 0 auto !important;
    display: table !important;
    float: unset;
}
.form-card.frm2 .row.fi1 button.car .car_img.suvv {
    width: 25%;
}
.select-dropdown select {
    text-align: center;
}
#msform .action-button-previous {
    float: unset;
}

}
@media (max-width: 820px) {
  .form-card.frm2 .row.fi1 button.car .car_img.suvv {
    width: 30%;
}

}
@media (max-width: 768px) {}
@media (max-width: 480px) {
  .form-card.frm2 .row.fi1 button.car .car_img.suvv {
    width: 56%;
}
}
@media (max-width: 428px) {
  .fs-title {
    font-size: 21px;
    color: black;
    margin-bottom: 15px;
    font-weight: normal;
    text-align: left;
}
.form-card.frm2 .row.fi1 button.car {
    display: block;
    }
    .form-card.frm2 .row.fi1 button.car .car_img img {
    width: 60%;
}
.form-card.frm2 .row.fi1 button.car .car_img.suvv {
    width: 100%;
}
.form-card.frm2 .row.fi1 button.car p {
    padding: 0;
    margin: 0 0 10px;
    font-size: 19px;
    color: black;
    text-transform: uppercase;
    font-weight: 600;
}
.form-card.frm2 .row.fi1 button.car .car-price._vehiclePrice {
    margin: 10px 9px 0 15px;
    font-size: 15px;
    font-weight: 600;
}
.select-dropdown select {
    width: 100%;
    padding: 20px 0 20px;
    border: unset;
    background-color: white;
    box-shadow: 0px 0px 10px 0px #ccc;
    font-size: 19px;
    color: BLACK;
    font-weight: 600 !important;
    text-transform: UPPERCASE;
}
}
@media (max-width: 414px) {}
@media (max-width: 390px) {}
@media (max-width: 375px) {}
@media (max-width: 360px) {}
  h3 {}

.headd {
    background-color: #111c30;
    padding: 20px 00px;
}

.headd img {
    width: 50% !important;
    filter: brightness(0) invert(1);
}

.headd h2 {
    text-align: left;
    font-weight: 600;
    color: white;
    padding: 0 0 10px 0;
}

h4 {
    text-decoration: unset;
    text-align: left;
    padding-bottom: 10px;
    text-transform: unset;
}

.headd h4 {
    color: white;
}

h3 {
    padding: 0 0 10px 0;
    margin: 0;
    text-align: left;
    color: #111c30;
}

.usr_details {
    padding: 40px 0 20px;
}

.usr_details h3 {
    color: #111c30;
}

.usr_details h4 {color: black;}

table#myTable {
    margin: 0 auto !IMPORTANT;
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 15px;
}

.tb {
    padding: 0px 0px 0px;
}

.tb .row {
}

table#myTable tr.tt {
}

table#myTable tr.tt th {
    font-size: 18px;
    text-transform: uppercase;
    color: #111c30;
    text-decoration-line: underline;
    font-weight: bold;
}

table#myTable tr td {
    color: black;
    font-size: 14px;
    font-weight: 600;
}

section.bookingpdf {
    background-color: #f4f4f4;
}

.total {
    padding: 0 0 0 160px;
}

.total h3 {
}

.sep hr {border-width: 2px;border-color: #111c30;}

.tot {
    padding: 10px 0 0px;
}

.term {
    padding: 0 0 40px;
}

.term p {
    padding: 0;
    color: black;
}
.usr_details li {
    display: inline-block;
    width: 33%;
}

.usr_details ul {
    margin: 5px 0 0;
}
section.footer {
    background-color: #111c30;
    padding: 20px 0;
}

section.footer p {
    padding: 0;
    color: white;
}

section.footer h4 {
    color: white;
    text-transform: uppercase;
    font-size: 18px;
    font-weight: 900;
}

section.footer span {
    color: white;
    padding: 0 0 0 10px;
    font-family: 'Poppins';
    font-size: 14px;
}

section.footer i.fa {
    color: white;
    padding-bottom: 10px;
}
.footer img {
    width: 15%;
}
</style>

</head>
<body class="bk">





<section class="bookingpdf">
  <section class="headd">
  <div class="container">
    
    <div class="row">
      <div class="col-md-6 my-auto">
        <div class="img_book">
          <img src="{{$message->embed(public_path('logo.png'))}}">
        </div>
      </div>
      <div class="col-md-6 ">
        <div class="txt_hd">
          @php
          use Carbon\Carbon;
          $currentDateTime = Carbon::now();
          $formattedDate = $currentDateTime->format('D, F j, Y');
          @endphp
          <h2>INVOICE</h2>
          <h4>Date: {{$formattedDate}}</h4>
          <h4>Invoice Number: {{$booking->id}}</h4>
        </div>
      </div>
    </div>
    </div>
  </section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="usr_details">
          <h3>Invoice For:</h3>
          <ul>
            <li>          <h4>Name: {{$booking->first_name . ' ' . $booking->last_name}}</h4></li>
            <li>          <h4>Contact Details: {{$booking->mobile_number}}</h4></li>
            <li>          <h4>Email Address: {{$booking->email}}</h4></li>
          </ul>
          
          
        </div>
      </div>
    </div>
    <div class="tb">
            <div class="row">
                <div class="col-md-12">
                    <table id="myTable" class="row-border display page-datatable-ajax ">
                        <thead>
                            <tr class="tt">
                                <th>Sr. No</th>
                                <th>Information</th>
                                <th>Detail</th>
                                <th></th>
                            </tr>
                            <br>
                            <tr>
                              <td>1.</td>
                              <td>Car Detail</td>
                              <td>{{$booking_details->vehicle_type_id  == 1 ? 'SUV' : 'Sedan'}}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>2.</td>
                              <td>No of Miles</td>
                              <td>{{$booking_details->total_km}} Miles</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>3.</td>
                              <td>Child Seat</td>
                              <td>{{$booking_details->kids}}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>4.</td>
                              <td>No of Bags</td>
                              <td>{{$booking_details->bags}}</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>5.</td>
                              <td>No. Of Additional Pickup Points</td>
                              <td>{{$booking_details->total_stops}}</td>
                              <td></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="sep">
          <hr>
        </div>
        <div class="tot">
          <div class="row">
            <div class="col-md-6">
              <div class="pay-info">
                <h3>Payment Info</h3>
                <h4>Card Number:*** {{$card_number}}</h4>
              </div>
            </div>
            <div class="col-md-6">
              <div class="total">
                <div class="row">
                  <div class="col-md-6">
                    <h3>Total</h3>
                  </div>
                  <div class="col-md-6">
                  <h3>{{$booking->total_charges}}</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="sep">
          <hr>
        </div>
        <div class="term">
          <div class="row">
            <div class="col-md-12">
              <h3>TERMS & CONDITIONS</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </div>
        <section class="footer">
          <div class="container">
          <div class="row">
            <div class="col-md-6 ">
              <h4>Generated By Light Water Limo</h4>
            </div>
            <div class="col-md-6">
              <h4>Light Water Limo</h4>
              <i class="fa fa-phone" aria-hidden="true"><span>+1 (224) 374-9132</span></i> <br>
              <i class="fa fa-envelope" aria-hidden="true"><span>info@lightwaterlimo.com</span></i><br>
              <i class="fa fa-globe" aria-hidden="true"><span>https://lightwaterlimo.com/</span></i>
            </div>
          </div>
        </div>  
        </section>
    </div>
</section>
</body>
</html>