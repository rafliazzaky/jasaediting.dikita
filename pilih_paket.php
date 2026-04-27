<?php include 'header.php'; $p = $_GET['produk']; 
$data = ['Logo'=>['Normal'=>130000,'Express'=>160000,'Rush'=>260000], 'Foto'=>['Normal'=>35000,'Express'=>40000,'Rush'=>65000]]; ?>
<div class="container py-5">
    <h2 class="text-center text-brand mb-5">Pilih Paket untuk <?php echo $p; ?></h2>
    <div class="row align-items-center">
        <?php foreach($data[$p] as $key => $price): 
            $isExpress = ($key == 'Express'); ?>
        <div class="col-md-4">
            <div class="card p-4 <?php echo $isExpress ? 'border border-4 border-info shadow-lg' : 'shadow-sm'; ?>">
                <?php if($isExpress) echo '<span class="badge bg-info mb-2">Terlaris</span>'; ?>
                <h4><?php echo $key; ?></h4>
                <div class="display-5 fw-bold text-brand my-3">Rp <?php echo number_format($price,0,',','.'); ?></div>
                <a href="form_order.php?produk=<?php echo $p; ?>&paket=<?php echo $key; ?>&harga=<?php echo $price; ?>" class="btn <?php echo $isExpress ? 'btn-brand' : 'btn-outline-primary'; ?>">Pilih Paket</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include 'footer.php'; ?>