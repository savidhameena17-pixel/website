<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <center>
    <h1>📅Eventee</h1>
    <a href="/home"><button>Home</button></a>|<a href="/contact"><button>Contact</button></a>|<a href="/about"><button>About</button></a>|<a href="/register"><button>Register</button></a>
    <hr>
    <h2>Welcome {{Auth::user()->name}}</h2>
    <h3>Your Account details
    </h3>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <tr>
            <td>{{Auth::user()->id}}</td>
            <td>{{Auth::user()->name}}</td>
            <td>{{Auth::user()->email}}</td>
            <td>{{Auth::user()->phone}}</td>
        </tr>
    </table>
    <br>
    <form method="get" action="/logout">
        @csrf
        <a href="/logout"><button>Logout</button></a>
    </form>
    </center>
</body>
</html>
