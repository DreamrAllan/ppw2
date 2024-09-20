<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .table thead {
            background-color: #007bff;
            color: white;
        }
        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }
        .table-striped tbody tr:hover {
            background-color: #f1f1f1;
        }
        .btn {
            padding: 10px 15px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-warning {
            background-color: #ffc107;
            border: none;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
        .btn:hover {
            opacity: 0.9;
        }
        p {
            font-size: 18px;
            color: #333;
        }
        a.btn {
            display: inline-block;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h1>Daftar Buku</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_buku as $buku)
            <tr>
                <td>{{ $buku->id }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ "Rp. ".number_format($buku->harga, 2, ',', '.') }}</td>
                <td>{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('d-m-Y')}}</td>
                <td>
                    <!-- Form for deleting a book -->
                    <form action="{{ route('book.destroy', $buku->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin mau dihapus?')" type="submit" class="btn btn-danger">Hapus</button>
                    </form>

                    <!-- Button to edit the book -->
                    <a href="{{ route('book.edit', $buku->id) }}" class="btn btn-warning">Edit</a>
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>    

    <!-- Menampilkan jumlah buku -->
    <p>Jumlah Buku: {{ $jumlah_buku }}</p>

    <!-- Menampilkan total harga semua buku -->
    <p>Total Harga Semua Buku: Rp. {{ number_format($total_harga, 2, ',', '.') }}</p>

    <a href="{{ route('book.create') }}" class="btn btn-primary">Tambah Buku</a>

</body>
</html>
