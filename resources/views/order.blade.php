<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Produk Lokal oleh-oleh</title>
    <style>
        body {
            font-family: Georgia, serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #62a1db;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #62a1db;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #27a146;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #27a146;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Pemesanan Produk Lokal</h2>
    <form id="orderForm">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

        <label for="address">Alamat:</label>
        <input type="text" id="address" name="address" placeholder="Masukkan alamat Anda" required>

        <label for="product">Pilih Produk:</label>
        <select id="product" name="product">
            <option value="Kacang Mente">Kacang Mente</option>
            <option value="Abon Ikan Marni">Abon</option>
            <option value="kain tenun khas kendari">kain tenun khas kendari</option>
            <option value="Gula Ni'i">Gula Ni'</option>
        </select>

        <label for="quantity">Jumlah Produk:</label>
        <input type="number" id="quantity" name="quantity" min="1" required>

        <button type="submit">Pesan Sekarang</button>
    </form>
</div>

<script>
    document.getElementById('orderForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Mengambil data dari form
        const name = document.getElementById('name').value;
        const address = document.getElementById('address').value;
        const product = document.getElementById('product').value;
        const quantity = document.getElementById('quantity').value;

        // Format pesan untuk WhatsApp
        const message = Halo, saya ingin memesan:%0aNama: ${name}%0aAlamat: ${address}%0aProduk: ${product}%0aJumlah: ${quantity};

        // Nomor WhatsApp tujuan (sesuaikan dengan nomor toko oleh-oleh)
        const phoneNumber = "6282191262262";  // Ganti dengan nomor WhatsApp penerima

        // Membuka WhatsApp dengan pesan yang telah diformat
        window.open(https://api.whatsapp.com/send?phone=${phoneNumber}&text=${message}, '_blank');
    });
</script>

</body>
</html>