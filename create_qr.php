<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title>QR Code Generator in JavaScript | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <style>

body{
        background-image:url('qrbg.webp');
        background-size: cover;
    }
  </style>
  <body>
    <div class="wrapper">
      <header>
        <h1> Unique QR Code </h1>
        <p>Enter Roll Number in form of mrec@</p>
      </header>
      <div class="form">
        <input type="text" spellcheck="false" placeholder="Enter  mrec@+roll number">
        <button>Generate QR Code</button>
      </div>
      <div class="qr-code">
        <img src="" alt="qr-code">
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>