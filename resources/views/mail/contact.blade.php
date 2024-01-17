<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Birthday Email</title>
  <style>
    /* CSS styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      color: #ff6600;
      text-align: center;
      font-size: 1.5rem;
    }
    .message {
      text-align: center;
      margin-top: 20px;
      font-size: 18px;
    }
    .footer {
      margin-top: 40px;
      text-align: center;
      color: #888;
      font-size: 12px;
    }
    .logo-img{
      background: rgb(22, 21, 21);
      padding: 1.5rem;
      width: 150px;
      height: 100px;
      margin: auto;
      border-radius: 10px;
      text-align: center;
    }
    .logo-img img{
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo-img">
      <img src="{{asset('image/logo.svg')}}" alt="">
    </div>
    <h1>Name : {{$data['name']}}</h1>
    <h1>Mobile : {{$data['mobile']}}</h1>
    <h1>Message : {{$data['message']}}</h1>
    <p class="message">Wishing you a fantastic day filled with joy and happiness!</p>
    <p class="message">Best wishes,</p>
    
  </div>
</body>
</html>
