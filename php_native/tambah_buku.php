<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tambah Buku</title>
    <style>
        body {
            background-image: url('https://www.example.com/library-background.jpg'); /* Ganti dengan URL gambar latar belakang perpustakaan */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px 0px #000;
            margin-top: 20px;
        }
        .btn-primary {
            background-color: #2c3e50;
            border-color: #2c3e50;
        }
        .btn-primary:hover {
            background-color: #1a252f;
            border-color: #1a252f;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center my-4">Tambah Buku</h3>
        <div class="form-container">
            <form id="tambahBukuForm" action="proses_tambah_buku.php" method="post">
                <div class="mb-3">
                    <label for="nama_buku" class="form-label">Nama Buku:</label>
                    <input type="text" name="nama_buku" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi:</label>
                    <input type="text" name="deskripsi" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto Buku:</label>
                    <input type="file"  name="foto" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Buku</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('tambahBukuForm').addEventListener('submit', function(event) {
            var nama_buku = document.getElementById('nama_buku').value;
            var deskripsi = document.getElementById('deskripsi').value;
            var foto = document.getElementById('foto').value;

            if (nama_buku === '' || deskripsi === '' || foto === '') {
                alert('Semua kolom harus diisi!');
                event.preventDefault();
            } else {
                alert('Buku berhasil ditambahkan!');
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>