<?=$this->extend("template/dashboard")?>

<?=$this->section("content")?>
<p class="mb-4">Selamat datang <?= $userdata["nama"] ?> di aplikasi Saya Peduli! Silahkan isi kenangan Anda di bawah ini.</p>
<a href="<?= base_url() ?>/isidata" class="btn btn-dark btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-address-book"></i>
    </span>
    <span class="text">Isi Catatan Perjalanan</span>
</a>
<?=$this->endSection()?>