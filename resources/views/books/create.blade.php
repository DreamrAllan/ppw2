<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            padding: 20px;
        }

        h4 {
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .container form {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Add Book Form -->
    <div class="container">
        <h4>Tambah Buku</h4>
        <form method="post" action="{{ route('book.store') }}">
            @csrf

            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" required>
            </div>

            <div class="form-group">
                <label>Penulis</label>
                <input type="text" name="penulis" required>
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga" required>
            </div>

            <div class="form-group">
                <label>Tanggal Terbit</label>
                <input type="date" name="tgl_terbit" required>
            </div>

            <button type="submit">Simpan</button>
            <a href="{{ route('buku.index') }}">Kembali</a>
        </form>
    </div>

</body>
</html>
