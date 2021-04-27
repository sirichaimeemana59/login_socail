<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Login With Social</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            Email : <input type="text" name="email">
        </div>

        <div class="mt-4">
            Password: <input type="text" name="password">
        </div>

        <div class="flex items-center justify-end mt-4">

           <button>LOGIN</button>
        </div>

        {{-- Login with Facebook --}}
        <div class="flex items-center justify-end mt-4">
            <a class="btn" href="{{ url('auth/facebook') }}"
               style="background: #3B5499; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                Login with Facebook
            </a>
        </div>

        {{-- Login with Google --}}
        <div class="flex items-center justify-end mt-4">
            <a class="btn" href="{{ url('auth/google') }}"
               style="background: darkgreen; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                Login with Google
            </a>
        </div>
    </form>
</div>

</body>
</html>


