<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asystent zapisów</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand d-flex" href="index.php">Asystent zapisów</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Strona główna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="signup.php">Rejestracja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Plan zajęć</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="regulations.php">Regulamin</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#loginModal">Zaloguj
              się</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Logowanie</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="inputEmail">Login:</label>
              <input type="email" class="form-control" id="inputEmail" placeholder="Wpisz login">
            </div>
            <div class="form-group">
              <label for="inputPassword">Hasło:</label>
              <input type="password" class="form-control" id="inputPassword" placeholder="Wpisz hasło">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Zapamiętaj mnie</label>
            </div>
            <div class="form-group">
              Nie posiadasz konta? <a href="signup.php">Zarejestruj się.</a>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Anuluj</button>
          <button type="button" class="btn btn-success">Zaloguj się</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <h1 class="h3 mb-0">Rejestracja</h1>
        <form class="mt-4">
          <div class="mb-3">
            <label for="firstName" class="form-label">Imię</label>
            <input type="text" class="form-control" id="firstName" required>
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Nazwisko</label>
            <input type="text" class="form-control" id="lastName" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Hasło</label>
            <input type="password" class="form-control" id="password" required>
          </div>
          <div class="mb-3">
            <label for="confirmPassword" class="form-label">Potwierdź hasło</label>
            <input type="password" class="form-control" id="confirmPassword" required>
          </div>
          <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="terms" required>
            <label class="form-check-label" for="terms">Zgadzam się z <a href="regulations.php">warunkami użytkowania</a></label>
          </div>
          <button type="submit" class="btn btn-success">Zarejestruj się</button>
        </form>
      </div>
    </div>
  </div>

  <footer class="footer fixed-bottom p-3 bg-dark">
    <div class="container">
      <span class="text-muted pull-right">Asystent zapisów &copy; 2023</span>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>