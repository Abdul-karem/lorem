<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
  <title>service | Find service Jobs</title>
</head>
<body class="mb-5">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <ul class="navbar-nav ms-auto me-5">
        @auth
        <li class="nav-item">
          <form class="d-inline" method="POST" action="/logout">
            @csrf
            {{-- <button type="submit" class="btn btn-link">
              <i class="fas fa-door-closed"></i> Logout
            </button> --}}
          </form>
        </li>
        @else
        <li class="nav-item">
          <a href="/register" class="nav-link"><i class="fas fa-user-plus"></i> Sign up</a>
        </li>
        <li class="nav-item">
          <a href="/login" class="nav-link"><i class="fas fa-arrow-right"></i> Login</a>
        </li>
        @endauth
      </ul>
    </div>
  </nav>

  <main class="container mt-5">
    {{$slot}}
  </main>
  
  {{-- @if(auth()->check() && auth()->user()->role_id == 2)
  
  @else
   
  @endif --}}
  
  <x-flash-message />

</body>
</html>

