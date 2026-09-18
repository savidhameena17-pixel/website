<!DOCTYPE html>
<html>
    <head>
        <title>Contact events</title>
    </head>
    <body>
        <center>
        <h1>📅EVENTEE</h1>
        <a href="/home"><button>Home</button></a>|<a href="/contact"><button>Contact</button></a>|<a href="/about"><button>About</button></a>|<a href="/register"><button>Register</button></a>
        <hr>
<h2>Contact Us</h2>
<p>If you are have any queries,
    please contact us.</p>
    <h3>Contact Information</h3>
    <p>Emailid:eventee10@gmail.com</p>
    <p>Phone no:9632587410</p>
    <p>Please fill the form  below for suggestions and queries or more information.</p>
    @if(session('success'))
    <p>
        <b>{{ session('success') }}</b>
    </p>
    @endif
    <form method="POST" action="/contact">
        @csrf
    <label>Name:</label>
    <input type="text" name="name" required>
    <br><br>
    <label>Email:</label>
    <input type="email" name="email" required>
    <br><br>
    <label>Suggestion:</label>
    <input type="text" name="suggestion" required>
    <br><br>
    <label>Description:</label>
    <textarea name="description" rows="5" cols="40" required></textarea>
    <br><br>
    <button type="submit">Submit</button>
</form>
<br>
<a href="/home"><button>Back to Home</button></a>
        </center>
</body>
</html>

