<?php include 'header.php'; include 'koneksi.php';

// Validasi akses agar tidak bisa diakses langsung
if ($_SERVER["REQUEST_METHOD"] !== "POST") { 
    echo "<div class='container p-5 text-center'><h3>Data tidak ditemukan</h3><a href='index.php' class='btn btn-brand'>Kembali ke Beranda</a></div>"; 
    include 'footer.php'; exit; 
}

// Data harga untuk validasi
$daftar = ['Foto'=>['Normal'=>35000,'Express'=>40000,'Rush'=>65000],'Poster'=>['Normal'=>45000,'Express'=>55000,'Rush'=>85000],'Video'=>['Normal'=>90000,'Express'=>110000,'Rush'=>180000],'Logo'=>['Normal'=>130000,'Express'=>160000,'Rush'=>260000]];
$prod=$_POST['produk']; $pkt=$_POST['paket']; $hrg=$_POST['harga'];

// Validasi Harga
if ($hrg != $daftar[$prod][$pkt]) { die("<div class='alert alert-danger text-center'>Error: Data tidak valid!</div>"); }

// --- BAGIAN YANG DIPERBAIKI ---
$file = ""; 
// Cek apakah ada file yang diunggah dan tidak ada error
if (isset($_FILES['dokumen']) && $_FILES['dokumen']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['dokumen']['name'];
    move_uploaded_file($_FILES['dokumen']['tmp_name'], 'uploads/'.$file);
}
// ------------------------------

// Simpan ke database
mysqli_query($conn, "INSERT INTO tb_pesanan (nama, produk, paket, harga, keterangan, file_dokumen) VALUES ('$_POST[nama]', '$prod', '$pkt', '$hrg', '$_POST[keterangan]', '$file')");
?>

<style>
    .receipt-card { border: 2px solid #004a55; border-radius: 20px; background: #fff; max-width: 500px; margin: auto; }
    .receipt-header { border-bottom: 2px dashed #004a55; padding-bottom: 15px; margin-bottom: 20px; }
    .total-price { color: #004a55; font-size: 3rem; font-weight: 800; margin: 10px 0; }
    .payment-item { display: flex; align-items: center; justify-content: space-between; padding: 10px; border-bottom: 1px solid #eee; }
    .btn-copy { font-size: 0.75rem; background: #f0f0f0; border: none; padding: 5px 10px; }
    .btn-done { background-color: #00a8c6 !important; color: white !important; font-weight: 700; border: none; padding: 15px; }
</style>

<div class="container py-5">
    <div class="card p-4 shadow-sm receipt-card">
        <div class="receipt-header text-center">
            <h3 class="text-brand fw-bold">Invoice Pesanan</h3>
            <p class="text-muted">Halo, <b><?php echo $_POST['nama']; ?></b>! Pesanan Anda telah kami terima.</p>
        </div>

        <div class="mb-4">
            <div class="d-flex justify-content-between mb-2"><span>Layanan:</span> <b><?php echo $prod; ?></b></div>
            <div class="d-flex justify-content-between mb-2"><span>Paket:</span> <b><?php echo $pkt; ?></b></div>
            <div class="d-flex justify-content-between mb-2"><span>Catatan:</span> <small class="text-end"><?php echo $_POST['keterangan']; ?></small></div>
        </div>

        <div class="text-center mb-4">
            <p class="mb-0 text-muted text-uppercase small">Total Tagihan</p>
            <div class="total-price">Rp <?php echo number_format($hrg,0,',','.'); ?></div>
        </div>

        <h5 class="mb-3 text-center text-brand">Metode Pembayaran</h5>
        <div class="payment-section border rounded p-2">
            <?php 
            $pay_data = [
                ['name'=>'DANA','acc'=>'081902206222','img'=>'dana.png'],
                ['name'=>'GoPay','acc'=>'082240355800','img'=>'gopay.png'],
                ['name'=>'BCA','acc'=>'8170254432','img'=>'bca.png'],
                ['name'=>'Mandiri','acc'=>'1310015567890','img'=>'mandiri.png'],
                ['name'=>'BRI','acc'=>'002101004567501','img'=>'bri.png']
            ];
            foreach($pay_data as $p): ?>
                <div class="payment-item">
                    <img src="pembayaran/<?php echo $p['img']; ?>" style="height:25px; width:40px; object-fit:contain;">
                    <span class="flex-grow-1 mx-3 small"><?php echo $p['name']; ?>: <b><?php echo $p['acc']; ?></b></span>
                    <button class="btn btn-copy" onclick="copyText('<?php echo $p['acc']; ?>')">Salin</button>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="mt-4">
            <a href="index.php" class="btn btn-done w-100">Selesai</a>
        </div>
    </div>
</div>

<script>
    function copyText(text) {
        navigator.clipboard.writeText(text);
        alert("Nomor " + text + " berhasil disalin!");
    }
</script>

<?php include 'footer.php'; ?>