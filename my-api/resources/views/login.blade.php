<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <center>
<h1>📅Evetntee</h1>
<a href="/home"><button>Home</button></a>|<a href="/register"><button>Register</button></a>
<h2>Login</h2>
@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
@if(session('error'))
    <p>{{ session('error') }}</p>
@endif
<form method="POST" action="/login">
    @csrf
    <label>Email:</label>
    <input type="email" name="email" required><br><br>
    <label>Password:</label>
    <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
</form>
<br><a href="/register"><button>Create  New Account</button></a>
    </center>
</body>
</html>
