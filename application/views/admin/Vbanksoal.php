<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Soal</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Bank Soal</h2>
        <a href="<?php echo base_url('Csoal/Vaddsoal'); ?>" class="btn btn-primary mb-3">Tambah Soal</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pertanyaan</th>
                    <th>Opsi A</th>
                    <th>Opsi B</th>
                    <th>Opsi C</th>
                    <th>Opsi D</th>
                    <th>Tipe Soal</th>
                    <th>Gambar</th>
                    <th>Audio</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($soal as $item) { ?>
                    <tr>
                        <td><?php echo $item->id; ?></td>
                        <td><?php echo $item->pertanyaan; ?></td>
                        <td><?php echo $item->opsi_a; ?></td>
                        <td><?php echo $item->opsi_b; ?></td>
                        <td><?php echo $item->opsi_c; ?></td>
                        <td><?php echo $item->opsi_d; ?></td>
                        <td><?php echo $item->tipe_soal; ?></td>
                        <td>
                            <?php if ($item->nama_gambar) { ?>
                                <img src="<?php echo base_url('uploads/images/'.$item->nama_gambar); ?>" alt="Gambar" style="width: 100px;">
                            <?php } ?>
                        </td>
                        <td>
                            <?php if ($item->nama_audio) { ?>
                                <audio controls>
                                    <source src="<?php echo base_url('uploads/audio/'.$item->nama_audio); ?>" type="audio/mpeg">
                                </audio>
                            <?php } ?>
                        </td>
                        <td>
                            <a href="<?php echo base_url('Csoal/edit_soal/'.$item->id); ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo base_url('Csoal/delete_soal/'.$item->id); ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
