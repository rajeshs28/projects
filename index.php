<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Buy & Sell</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        body {
            margin: 0;
            font-family: 'Amazon Ember', Arial, sans-serif;
            background-color: #f2f2f2;
        }

        header {
            background-color: #232f3e;
            padding: 1rem;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        nav a {
            color: white;
            margin-left: 1rem;
            text-decoration: none;
        }

        .container {
            padding: 2rem;
        }

        .card {
            background: white;
            border-radius: 8px;
            padding: 1rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
        }

        .card img {
            max-width: 100%;
            border-radius: 8px;
        }

        .btn {
            background-color: #ffa41c;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 0.5rem;
        }

        footer {
            text-align: center;
            background-color: #232f3e;
            color: white;
            padding: 1rem;
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">CarBuySell</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="buy.php">Buy Car</a>
            <a href="sell.php">Sell Car</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <div class="container">
        <div class="card">
            <h2>Welcome to CarBuySell</h2>
            <p>Browse and buy your dream car or sell your own car easily.</p>
            <a href="buy.php" class="btn">Start Buying</a>
            <a href="sell.php" class="btn">Add Car to Sell</a>
        </div>
    </div>

    <footer>
        &copy; 2025 CarBuySell. All rights reserved.
    </footer>
</body>

</html>