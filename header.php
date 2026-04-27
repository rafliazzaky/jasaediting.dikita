<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; color: #333; }
        .bg-brand { background-color: #004a55 !important; }
        .btn-brand { background-color: #00a8c6; color: white; border: none; }
        .btn-brand:hover { background-color: #008fa8; color: white; }
        .text-brand { color: #004a55; }
        
        /* CSS Trick untuk menghilangkan background putih pada logo JPEG */
        .logo-fix { 
            mix-blend-mode: multiply; 
            background-color: white; 
            padding: 2px; 
            border-radius: 5px; 
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-brand navbar-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="logo.JPEG" alt="Logo" class="logo-fix" style="height: 40px; width: auto; margin-right: 10px;"> 
                JasaEditing.dikita
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="index.php">Beranda</a>
                    <a class="nav-link" href="index.php#services">Layanan</a>
                    <a class="nav-link" href="index.php#about">Tentang Kami</a>
                    <a class="nav-link btn btn-brand ms-lg-3 px-3 text-white" href="pilih_layanan.php">Pesan</a>
                </div>
            </div>
        </div>
    </nav>