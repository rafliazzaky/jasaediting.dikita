<?php include 'header.php'; ?>
<style>
    .service-card { transition: 0.3s; border-radius: 15px; }
    .service-card:hover { transform: translateY(-10px); box-shadow: 0 1rem 3rem rgba(0,0,0,0.15) !important; }
</style>
<div class="container py-5 text-center">
    <h2 class="text-brand mb-5">Pilih Layanan</h2>
    <div class="row g-4 justify-content-center">
        <?php $list = [['Logo','brush'],['Foto','camera'],['Video','film'],['Poster','image']];
        foreach($list as $l): ?>
        <div class="col-md-3">
            <div class="card p-4 service-card shadow-sm">
                <i class="bi bi-<?php echo $l[1]; ?> fs-1 text-brand mb-3"></i>
                <h4 class="fw-bold text-brand"><?php echo $l[0]; ?></h4>
                <a href="pilih_paket.php?produk=<?php echo $l[0]; ?>" class="btn btn-brand w-100 mt-3">Pilih</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include 'footer.php'; ?>