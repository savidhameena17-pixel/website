<!DOCTYPE html>
<html>
    <head>
    <title>Register</title>
    </head>
    <body>
        <center>
        <h1>📅EVENTEE</h1>
        <a href="/home"><button>Home</button></a>|<a href="/contact"><button>Contact</button></a>|<a href="/about"><button>About</button></a>|<a href="/register"><button>Register</button></a>
        <hr>
        <h2> Create Account</h2>
        @if($errors->any())
        <p>Registration failed. Please check your details.</p>
        @endif
        <form method="POST" action="/register">
            @csrf
            <label>Name:</label>
            <input type="text" name="name" required><br><br>
            <label>Email:</label>
            <input type="email" name="email" required><br><br>
            <label>Phone:</label>
            <input type="integer" name="phone" required><br><br>
            <label>Password:</label>
            <input type="password" name="password" required><br><br>
            <label>Confrim Password</label>
            <input type="password" name="password_conformation" required><br><br>
            <button type="submit">Register</button>
        </form>
        </center>
    </body>
</html>
