<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oleh-Oleh Store</title>
    <style>
        /* Reset CSS */
        body {
            background-color: #cccccc6b;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #8cb9d9;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
        }

        .navbar h1 {    
            color: white;
            font-size: 24px;
        }

        .navbar nav a {
            margin-left: 15px;
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .navbar nav a:hover {
            text-decoration: underline;
        }

        /* Main Content Styling */
        .content {
            text-align: center;
            padding: 30px;
        }

        .content h2 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .content p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        /* Product Grid Styling */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Product Card Styling */
        .product-card {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .product-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .card-info h3 {
            font-size: 18px;
            margin-bottom: 5px;
            text-transform: capitalize;
        }

        .card-info p {
            font-size: 16px;
            margin-bottom: 10px;
            color: #555;
        }

        /* Button Styling */
        .product-card a {
            display: inline-block;
            background-color: #8cb3d9;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .product-card a:hover {
            background-color: #6d9ac4;
        }
    </style>
</head>
<body>
    <header class="navbar">
        <h1>Oleh-Oleh Store</h1>
        <nav>
            <a href="#">HOME</a>
            <a href="#">PRODUCT</a>
        </nav>
    </header>

    <main class="content">
        <h2>WELCOME TO OLEH-OLEH STORE</h2>
        <p>Belanja produk oleh-oleh khas dengan mudah dan nyaman</p>

        <div class="product-grid">
            <!-- Card 1 -->
            <div class="product-card">
                <img src="images/rpl 1.jpg" alt="Kacang Mete">
                <div class="card-info">
                    <h3>Kacang Mete</h3>
                    <p>Rp. 40,000</p>
                    <p>stok 25</p>
                </div>
                <a href="/order" class="btn btn-primary">Order Now</a>
            </div>

            <!-- Card 2 -->
            <div class="product-card">
                <img src="images/rpl 2.jpg" alt="Abon Ikan Marlin">
                <div class="card-info">
                    <h3>Abon Ikan Marlin</h3>
                    <p>Rp. 30,000</p>
                    <p>stok 20</p>
                </div>
                <a href="/order" class="btn btn-primary">Order Now</a>
            </div>

            <!-- Card 3 -->
            <div class="product-card">
                <img src="images/rpl 4.jpg" alt="Kain Tenun Khas Kendari">
                <div class="card-info">
                    <h3>Kain Tenun Khas Kendari</h3>
                    <p>Rp. 70,000</p>
                    <p>stok 15</p>
                </div>
                <a href="/order" class="btn btn-primary">Order Now</a>
            </div>

            <!-- Card 4 -->
            <div class="product-card">
                <img src="images/rpl 5.jpg" alt="Bagea">
                <div class="card-info">
                    <h3>Bagea</h3>
                    <p>Rp. 35,000</p>
                    <p>stok 50</p>
                </div>
                <a href="/order" class="btn btn-primary">Order Now</a>
            </div>

            <!-- Card 5 -->
            <div class="product-card">
                <img src="images/rpl 6.jpg" alt="Brownies Mete">
                <div class="card-info">
                    <h3>Brownies Mete</h3>
                    <p>Rp. 60,000</p>
                    <p>stok 35</p>
                </div>
                <a href="/order" class="btn btn-primary">Order Now</a>
            </div>

            <!-- Card 6 -->
            <div class="product-card">
                <img src="images/rpl 7.jpg" alt="Souvenir Khas Kendari">
                <div class="card-info">
                    <h3>Souvenir Khas Kendari</h3>
                    <p>Rp. 20,000</p>
                    <p>stok 70</p>
                </div>
                <a href="/order" class="btn btn-primary">Order Now</a>
            </div>

            <!-- Card 7 -->
            <div class="product-card">
                <img src="images/rpl 8.jpg" alt="Kue">
                <div class="card-info">
                    <h3>Kue</h3>
                    <p>Rp. Gratis</p>
                    <p>stok 56</p>
                </div>
                <a href="/order" class="btn btn-primary">Order Now</a>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
