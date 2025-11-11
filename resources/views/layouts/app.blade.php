<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') | Portofolio Moch Dhio Donovan</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
      color: #fff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    header, footer {
      width: 100%;
      text-align: center;
      padding: 15px 0;
      background: rgba(255, 255, 255, 0.05);
    }
    nav a {
      color: #fff;
      margin: 0 15px;
      text-decoration: none;
      transition: 0.3s;
    }
    nav a:hover {
      color: #ffd369;
    }
    main {
      width: 90%;
      max-width: 900px;
      margin: 40px auto;
      text-align: center;
    }
    footer {
      margin-top: auto;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      font-size: 0.9rem;
      opacity: 0.8;
    }
    .card {
      background: rgba(255, 255, 255, 0.1);
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
      transition: 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.4);
    }
    img.profile {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
      border: 3px solid #ffd369;
    }
  </style>
</head>
<body>

  @include('layouts.header')

  <main>
    @yield('content')
  </main>

  @include('layouts.footer')

</body>
</html>
