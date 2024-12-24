<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abadi Usaha</title>
  <!-- Link ke Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background: linear-gradient(to right, #3C3B8B, #222161);
        }
    .container {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
    .card {
      width: 100%;
      max-width: 400px;
    }
    .card-header {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            font-size: 24px;
            font-weight: bold;
        }
    .image-container {
      text-align: center;
      margin-top: 20px;
      margin-bottom: 20px;
    }
    .btn-custom {
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container">  
    <div class="card shadow-sm">
        <div class="image-container">
          <img src="{{ asset('template/img/abadi.png') }}" alt="Logo" width="350" height="250">
        </div>
      <div class="card-body">
        <a href="login" class="btn btn-primary btn-custom mb-3">Login</a>
        <a href="register" class="btn btn-secondary btn-custom">Register</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
