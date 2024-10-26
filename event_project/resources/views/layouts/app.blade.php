<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Event Management System')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif; /* Set font for the entire page */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background-color: #f2f2f2;
            padding: 20px;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            height: 60px; /* Adjust logo size */
            margin-right: 10px; /* Space between logo and text */
        }
        h1 {
            font-size: 28px; /* Increase header font size */
            font-weight: bold;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav-links {
            list-style-type: none;
            display: flex;
        }
        .nav-links li {
            margin-right: 30px; /* Space between navigation links */
        }
        .nav-links a {
            text-decoration: none;
            color: #333;
            font-size: 18px; /* Increase font size for links */
            padding: 10px 15px; /* Add padding for larger clickable area */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s; /* Smooth transition for hover */
        }
        .nav-links a:hover {
            background-color: #007bff; /* Change background on hover */
            color: white; /* Change text color on hover */
        }
        .hero {
            background-image: url('{{ asset('Background.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center; /* Center text */
        }
        .hero h1 {
            font-size: 48px; /* Increase hero heading size */
            font-weight: bold;
        }
        .hero p {
            font-size: 24px; /* Increase hero paragraph size */
        }
        .hero a {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 20px;
            transition: background-color 0.3s; /* Smooth transition for button hover */
        }
        .hero a:hover {
            background-color: #0056b3; /* Darken button on hover */
        }
        footer {
            background-color: #f2f2f2;
            padding: 20px; /* Increased padding for footer */
            text-align: center;
            margin-top: 40px; /* Add margin above footer */
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <nav>
              <div class="logo">
                <img src="{{ asset('logo.jpg') }}" alt="Harmoni Logo">
                <h1>ROSHAN.JALASHAHI</h1>
              </div>
              <ul class="nav-links">
                <li><a href="{{ url('/events') }}">Events</a></li>
                <li><a href="{{ url('/categories') }}">Categories</a></li>
                <li><a href="{{ url('/attendees') }}">Attendees</a></li>
              </ul>
              <div class="user-actions" style="display: flex; align-items: center;">
                <a href="#" style="text-decoration: none; color: #333;"><i class="fa fa-user"></i></a>
                <a href="#" style="text-decoration: none; color: #333; margin-left: 10px;"><i class="fa fa-search"></i></a>
              </div>
            </nav>
          </header>

          <section class="hero">
            <div class="hero-content">
              <h1>One Stop Event Planner</h1>
              <p>EVERY EVENT SHOULD BE PERFECT</p>
              <a href="#">ABOUT US</a>
              <a href="#">GET STARTED!</a>
            </div>
          </section>

          <div>
            <!-- Display any flash messages -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </div>

          <footer>
            <p>&copy; 2024 Roshan Kumar Chaudhary</p>
          </footer>
    </div>
</body>
</html>
