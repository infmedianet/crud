<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Form Surat Keterangan Sehat</title>

    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    >
</head>
<body class="bg-light">

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Form Surat Keterangan Sehat</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo site_url('surat/hasil'); ?>">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" rows="2" required></textarea>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label>Tinggi (cm)</label>
                        <input type="number" name="tinggi" class="form-control" required>
                    </div>
                    <div class="col-md-2">
                        <label>Berat (kg)</label>
                        <input type="number" name="berat" class="form-control" required>
                    </div>
                    <div class="col-md-2">
                        <label>BMI</label>
                        <input type="text" name="bmi" class="form-control" readonly>
                    </div>
                    <div class="col-md-2">
                        <label>Gol. Darah</label>
                        <select name="golongan_darah" class="form-select">
                            <option>A</option>
                            <option>B</option>
                            <option>AB</option>
                            <option>O</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 col-md-4">
                    <label>Tekanan Darah</label>
                    <input type="text" name="tekanan_darah" class="form-control" placeholder="contoh: 120/80">
                </div>

                <button type="submit" class="btn btn-success">Buat Surat</button>
            </form>
        </div>
    </div>
</div>

<!-- Script BMI otomatis -->
<script>
document.querySelector('input[name="berat"]').addEventListener('input', hitungBMI);
document.querySelector('input[name="tinggi"]').addEventListener('input', hitungBMI);

function hitungBMI() {
    const berat = parseFloat(document.querySelector('input[name="berat"]').value);
    const tinggi = parseFloat(document.querySelector('input[name="tinggi"]').value);
    if (berat && tinggi) {
        const bmi = (berat / Math.pow(tinggi / 100, 2)).toFixed(1);
        document.querySelector('input[name="bmi"]').value = bmi;
    }
}
</script>

</body>
</html>
