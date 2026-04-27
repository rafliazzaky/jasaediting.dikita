<?php include 'header.php'; ?>
<div class="container py-5 text-center">
    <h1 class="display-4 fw-bold text-brand">Kreativitas Tanpa Batas Solusi Visual Berkualitas</h1>
    <p class="lead text-muted my-4">Layanan desain dan editing profesional dengan pengerjaan cepat dan kualitas HD.</p>
    <a href="pilih_layanan.php" class="btn btn-brand btn-lg px-5">Mulai Proyek Sekarang</a>
</div>

<div id="services" class="container py-5">
    <h2 class="text-center text-brand mb-5">Layanan Kami</h2>
    <div class="row g-4">
        <?php $services = [['Logo','brush','Desain Logo'],['Foto','camera','Edit Foto'],['Video','film','Edit Video'],['Poster','image','Desain Poster']]; 
        foreach($services as $s): ?>
        <div class="col-md-3">
            <div class="card h-100 shadow-sm border-0 p-3 text-center">
                <i class="bi bi-<?php echo $s[1]; ?> fs-1 text-brand"></i>
                <h5><?php echo $s[2]; ?></h5>
                <a href="pilih_layanan.php" class="btn btn-outline-primary mt-3">Pesan Sekarang</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<div id="about" class="container py-5 bg-white rounded shadow-sm">
    <h2 class="text-center text-brand mb-4">Tentang Kami</h2>
    <div class="row align-items-center">
        <div class="col-md-6 text-center">
            <ul class="list-unstyled text-start d-inline-block">
                <li><i class="bi bi-check2-circle text-brand"></i> Pengerjaan Cepat</li>
                <li><i class="bi bi-check2-circle text-brand"></i> Kualitas HD</li>
                <li><i class="bi bi-check2-circle text-brand"></i> Revisi Terjamin</li>
            </ul>
        </div>
        <div class="col-md-6">
            <p>JasaEditing.dikita berkomitmen memberikan solusi visual terbaik untuk brand dan kebutuhan personal Anda.</p>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>