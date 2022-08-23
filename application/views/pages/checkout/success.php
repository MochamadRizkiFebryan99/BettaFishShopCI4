<main role="main" class="container">
    <?php $this->load->view('layouts/_alert'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Checkout Berhasil
                </div>
                <div class="card-body">
                    <h5>Nomer order : <?= $content->invoice ?></h5>
                    <p>Terimaksih sudah berbelaja.</p>
                    <p>Silahkan melalukukan pembayaran untuk bisa kami proses selanjutnya dengan cara:</p>
                    <ol>
                        <li>Lakukan pembayaran pada rekening <strong>BRI 3700-01-006763-50-2</strong> a/n MOCHAMAD RIZKI FEBRYAN
                        </li>
                        <li>Sertakan keterangan dengan nomer order: <strong> <?= $content->invoice ?></strong></li>
                        <li>Total Pembayaran <strong>Rp.<?= number_format($content->total, 0, ',', '.') ?>,-</strong></li>
                    </ol>
                    <p>Jika sudah, silahkan kirimkan bukti transfer di halaman konfirmasi atau bisa <a href="<?= base_url("/myorder/detail/$content->invoice") ?>">Klik disini</a></p>
                    <a href="<?= base_url('/') ?>" class="btn btn-primary"><i class="fas fa-angle-left">Kembali</i></a>
                </div>
            </div>
        </div>
    </div>
</main>