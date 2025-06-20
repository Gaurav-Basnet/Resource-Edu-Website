@extends('master')
@section('title', 'Login')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard | AT Solution</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f4f6f8;
      color: #333;
    }

    .navbar {
      background-color: #2c3e50;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: white;
    }

    .navbar h1 {
      margin: 0;
      font-size: 24px;
    }

    .logout-btn {
      background-color: #e74c3c;
      border: none;
      color: white;
      padding: 8px 16px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 14px;
      transition: 0.3s ease;
    }

    .logout-btn:hover {
      background-color: #c0392b;
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
      text-align: center;
      background: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }

    .container h2 {
      color: #2c3e50;
      margin-bottom: 10px;
    }

    .container p {
      font-size: 18px;
      color: #555;
    }

    .btn-explore {
      margin-top: 30px;
      background: #3498db;
      color: white;
      padding: 12px 25px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .btn-explore:hover {
      background: #2980b9;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <h1>Welcome Dashboard</h1>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="logout-btn">Logout</button>
    </form>
  </div>

  <div class="container">
    <h2>Hello, {{ Auth::user()->name }}</h2>
    <p>You are now logged in to your personal dashboard.</p>

    <button class="btn-explore">Explore Features</button>
  </div>

</body>
</html>



@endsection