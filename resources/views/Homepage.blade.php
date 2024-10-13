<!DOCTYPE html>
<html lang="en">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    /* Navbar Styles */
body {
    margin: 0;
  }
  
  .navbar {
    overflow: hidden;
    background-color: #447be2 ;
    padding: 10px 10px;
  }
  
  .navbar a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  .navbar a:hover {
    background-color: #447be2;
    color: black;
  }
  
  .navbar a.active {
    background-color: #447be2;
    color: white;
  }
/* General Styles */
body {
    font-family: Georgia, serif;
    background-color: #f9f9f9;
}

.container {
    width: 90%;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}
/* Card Styles */
.card {
    background-color: rgba(202, 233, 238, 0.329);
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-bottom: 20px;
    text-align: center;
}

.card img {
    width: 20%;
    height: 90px;
    object-fit: cover;
}

.card-body {
    padding: 32px;
}

.card-title {
    font-size: 18px;
    color: #333;
}
.card-text {
    font-size: 16px;
    color: #555;
    margin-bottom: 15px;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}
</style>

    <nav>
        <a href="#">HOME</a>
    </nav>
    <section class="homepage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oleh-Oleh Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Oleh-Oleh Store</h1>
        <p>Belanja produk oleh-oleh khas dengan mudah dan nyaman</p>
        <div class="row">
            <!-- Start of product card -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/rpl 1.jpg" class="card-img-top" alt="Product Name">
                    <div class="card-body">
                        <h5 class="card-title">Kacang Mente</h5>
                        <p class="card-text">Rp. 25,000</p>
                        <a href="your-order-url" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
            </div>
            <!-- Repeat for each product -->
            <div class="col-md-4">
                <div class="card">
                <img src="images/rpl 2.jpg" class="card-img-top" alt="Product Name 2">
                    <div class="card-body">
                        <h5 class="card-title">Abon Ikan Marni</h5>
                        <p class="card-text">Rp. 50,000</p>
                        <a href="your-order-url" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
            </div>
            <!-- More product cards can be added here -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/rpl 3.jpg" class="card-img-top" alt="Product Name 3">
                    <div class="card-body">
                        <h5 class="card-title">Kain Tenun Khas Kendari</h5>
                        <p class="card-text">Rp. 150,000</p>
                        <a href="your-order-url" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                        <div class="card">
                            <img src="images/rpl 4.jpg" class="card-img-top" alt="Product Name 4">
                            <div class="card-body">
                                <h5 class="card-title">Gula Ni’i</h5>
                                <p class="card-text">Rp. 20,000</p>
                                <a href="your-order-url" class="btn btn-primary">Order Now</a>
                            </div>        
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>