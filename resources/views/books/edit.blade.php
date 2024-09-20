<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
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

    <!-- Edit Book Form -->
    <div class="container">
        <h4>Edit Buku</h4>
        <form method="post" action="{{ route('book.update', $buku->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" value="{{ $buku->judul }}">
            </div>

            <div class="form-group">
                <label>Penulis</label>
                <input type="text" name="penulis" value="{{ $buku->penulis }}">
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga" value="{{ $buku->harga }}">
            </div>

            <div class="form-group">
                <label>Tanggal Terbit</label>
                <input type="date" name="tgl_terbit" value="{{ $buku->tgl_terbit }}">
            </div>

            <button type="submit">Update Buku</button>
        </form>
    </div>

</body>
</html>
