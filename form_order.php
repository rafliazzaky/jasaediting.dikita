<?php include 'header.php'; ?>

<style>
    /* Progress Stepper Styling */
    .stepper-wrapper { display: flex; justify-content: space-between; margin-bottom: 30px; }
    .stepper-item { flex: 1; text-align: center; position: relative; color: #ccc; font-size: 0.8rem; }
    .stepper-item.active { color: #004a55; font-weight: 600; }
    .stepper-item::after { content: ''; position: absolute; width: 100%; height: 2px; background: #ccc; top: 15px; left: 50%; z-index: -1; }
    .stepper-item:last-child::after { content: none; }
    .stepper-item.active::after { background: #004a55; }
    .step-counter { width: 30px; height: 30px; border-radius: 50%; background: #ccc; color: white; display: flex; align-items: center; justify-content: center; margin: 0 auto 5px; }
    .stepper-item.active .step-counter { background: #004a55; }

    /* Custom Form Styling */
    .form-control:focus {
        border-color: #004a55 !important;
        box-shadow: 0 0 0 0.25rem rgba(0, 74, 85, 0.25) !important;
    }
    .section-title { font-size: 1.1rem; color: #004a55; border-bottom: 2px solid #004a55; padding-bottom: 5px; margin-bottom: 20px; font-weight: 600; }
</style>

<div class="container py-5">
    <div class="stepper-wrapper">
        <div class="stepper-item"><div class="step-counter">1</div>Layanan</div>
        <div class="stepper-item"><div class="step-counter">2</div>Paket</div>
        <div class="stepper-item active"><div class="step-counter">3</div>Detail</div>
        <div class="stepper-item"><div class="step-counter">4</div>Bayar</div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4 shadow-sm border-0">
                <h3 class="mb-4 text-brand">Detail Pesanan</h3>
                <form action="proses.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="produk" value="<?php echo $_GET['produk']; ?>">
                    <input type="hidden" name="paket" value="<?php echo $_GET['paket']; ?>">
                    <input type="hidden" name="harga" value="<?php echo $_GET['harga']; ?>">
                    
                    <div class="section-title">Informasi Pribadi</div>
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Nomor WhatsApp</label>
                        <input type="tel" name="no_hp" class="form-control" placeholder="Contoh: 081234567890" required>
                    </div>

                    <div class="section-title">Detail Kebutuhan</div>
                    <div class="mb-3">
                        <label class="form-label">Upload File Referensi / Bahan</label>
                        <input type="file" name="dokumen" class="form-control">
                        <small class="text-muted">Maksimal 5MB (JPG, PNG, PDF, atau ZIP)</small>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Keterangan / Brief</label>
                        <textarea name="keterangan" class="form-control" rows="4" 
                                  placeholder="Contoh: Mohon edit bagian background menjadi putih dan hapus objek orang di pojok kanan agar terlihat lebih fokus." required></textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-brand btn-lg">Lanjutkan ke Pembayaran</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>