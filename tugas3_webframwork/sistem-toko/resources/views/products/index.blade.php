<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .btn {
            display: inline-block;
            padding: 8px 15px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }
        .btn-info {
            background-color: #17a2b8;
            color: white;
        }
        .btn-warning {
            background-color: #ffc107;
            color: #212529;
        }
        .btn-danger {
            background-color: #dc3545;
            color: white;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
        }
        .action-form {
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Produk</h1>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data statis -->
                <tr>
                    <td>1</td>
                    <td>Produk Contoh</td>
                    <td>
                        <a href="{{ route('products.show', 1) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('products.edit', 1) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('products.destroy', 1) }}" method="POST" class="action-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah Produk</a>
    </div>
</body>
</html>