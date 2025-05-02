<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Buy & Sell</title>
    <style>
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: flex-start;
            /* Start items from the left */
            padding: 20px;
        }

        .product-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 12px;
            overflow: hidden;
            width: 360px;
            /* Increased from 300px */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: 0.3s ease;
        }


        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .product-card img {
            width: 100%;
            height: 220px;
            /* Previously 180px */
            object-fit: cover;
            border-bottom: 1px solid #eee;
        }


        .product-info {
            padding: 16px;
        }

        .product-info h3 {
            font-size: 20px;
            /* Bigger title */
            margin-bottom: 10px;
            color: #333;
        }

        .product-info p {
            font-size: 15px;
            /* Slightly larger description */
            color: #555;
        }

        .product-info .price {
            font-weight: bold;
            font-size: 18px;
            margin: 10px 0;
            color: #b12704;
        }


        .btn {
            background-color: #ffa41c;
            color: #111;
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.2s;
        }

        .btn:hover {
            background-color: #f08804;
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

        body {
            margin: 0;
            font-family: 'Amazon Ember', Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .sell-form-container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .sell-form {
            display: flex;
            flex-direction: column;
        }

        .sell-form label {
            font-weight: bold;
            margin-top: 15px;
        }

        .sell-form input,
        .sell-form textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-top: 5px;
            font-size: 16px;
        }

        .sell-form .btn {
            margin-top: 20px;
            background-color: #ffa41c;
            /* Amazon orange */
            border: none;
            padding: 12px;
            color: #fff;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .sell-form .btn:hover {
            background-color: #f08804;
        }

        .search-form {
            max-width: 500px;
            margin: 0 auto 30px auto;
            display: flex;
            gap: 10px;
            padding: 0 15px;
        }

        .search-form input[type="text"] {
            flex: 1;
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .search-form button {
            padding: 10px 20px;
            background-color: #ffa41c;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .search-form button:hover {
            background-color: #f08804;
        }

        .clear-btn {
            padding: 10px 16px;
            background-color: #e0e0e0;
            color: #333;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            line-height: 38px;
            transition: background 0.3s ease;
        }

        .clear-btn:hover {
            background-color: #ccc;
        }

        .popup-success {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.5s ease;
            z-index: 999;
        }

        .popup-content {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            max-width: 400px;
            text-align: center;
            animation: slideUp 0.5s ease;
            position: relative;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .popup-content h2 {
            color: #2e7d32;
            margin-bottom: 10px;
        }

        .popup-content p {
            font-size: 16px;
        }

        .close-btn {
            position: absolute;
            top: 8px;
            right: 12px;
            font-size: 24px;
            cursor: pointer;
            color: #999;
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .popup-success {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.5s ease;
            z-index: 999;
        }

        .popup-content {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            max-width: 400px;
            text-align: center;
            animation: slideUp 0.5s ease;
            position: relative;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .popup-content h2 {
            color: #2e7d32;
            margin-bottom: 10px;
        }

        .popup-content p {
            font-size: 16px;
        }

        .close-btn {
            position: absolute;
            top: 8px;
            right: 12px;
            font-size: 24px;
            cursor: pointer;
            color: #999;
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>

</head>

<body>
    <header>
        <div class="logo">CarBuySell</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="buy.php">Buy</a>
            <a href="sell.php">Sell</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>
    <div class="container">