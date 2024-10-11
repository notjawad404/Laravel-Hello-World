<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <div class="container">
        <!-- Display the message from the controller -->
        <h1>{{ $string }}</h1>
        <p>Welcome to the Laravel.</p>
        
        <a href="{{ url('/welcome') }}">
            <button>Go to Laravel Intro</button>
        </a>
    </div>
</body>
</html>
