<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login and Register Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    .hidden {
      display: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <form id="loginForm">
      <div class="form-group">
        <label for="loginEmail">Email address</label>
        <input type="email" class="form-control" name="email" id="loginEmail" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="loginPassword">Password</label>
        <input type="password" class="form-control" name="password" id="loginPassword" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="button" class="btn btn-secondary" onclick="showRegisterForm()">Register</button>
    </form>

    <form id="registerForm" class="hidden">
      <div class="form-group">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter first name">
      </div>
      <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter last name">
      </div>
      <div class="form-group">
        <label for="registerEmail">Email address</label>
        <input type="email" class="form-control" name="email" id="registerEmail" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="registerPassword">Password</label>
        <input type="password" class="form-control" name="password" id="registerPassword" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
      <button type="button" class="btn btn-secondary" onclick="showLoginForm()">Back to Login</button>
    </form>
  </div>

  <script>
    function showRegisterForm() {
      document.getElementById('loginForm').classList.add('hidden');
      document.getElementById('registerForm').classList.remove('hidden');
    }

    function showLoginForm() {
      document.getElementById('loginForm').classList.remove('hidden');
      document.getElementById('registerForm').classList.add('hidden');
    }
  </script>
</body>
</html>
