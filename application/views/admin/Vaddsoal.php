<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Soal</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Soal</h2>
        <?php echo validation_errors(); ?>
        <form action="<?php echo base_url('Csoal/add_soal'); ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="pertanyaan">Pertanyaan</label>
                <textarea id="pertanyaan" name="pertanyaan" class="form-control summernote"><?php echo set_value('pertanyaan'); ?></textarea>
                <?php echo form_error('pertanyaan', '<small class="text-danger pl-3">','</small>'); ?>
            </div>
            <div class="form-group">
                <label for="opsi_a">Opsi A</label>
                <input type="text" class="form-control" id="opsi_a" name="opsi_a" value="<?php echo set_value('opsi_a'); ?>">
                <?php echo form_error('opsi_a', '<small class="text-danger pl-3">','</small>'); ?>
            </div>
            <div class="form-group">
                <label for="opsi_b">Opsi B</label>
                <input type="text" class="form-control" id="opsi_b" name="opsi_b" value="<?php echo set_value('opsi_b'); ?>">
                <?php echo form_error('opsi_b', '<small class="text-danger pl-3">','</small>'); ?>
            </div>
            <div class="form-group">
                <label for="opsi_c">Opsi C</label>
                <input type="text" class="form-control" id="opsi_c" name="opsi_c" value="<?php echo set_value('opsi_c'); ?>">
                <?php echo form_error('opsi_c', '<small class="text-danger pl-3">','</small>'); ?>
            </div>
            <div class="form-group">
                <label for="opsi_d">Opsi D</label>
                <input type="text" class="form-control" id="opsi_d" name="opsi_d" value="<?php echo set_value('opsi_d'); ?>">
                <?php echo form_error('opsi_d', '<small class="text-danger pl-3">','</small>'); ?>
            </div>
            <div class="form-group">
                <label for="tipe_soal">Tipe Soal</label>
                <select class="form-control" id="tipe_soal" name="tipe_soal">
                    <option value="reading" <?php echo set_select('tipe_soal', 'reading'); ?>>Reading</option>
                    <option value="listening" <?php echo set_select('tipe_soal', 'listening'); ?>>Listening</option>
                </select>
                <?php echo form_error('tipe_soal', '<small class="text-danger pl-3">','</small>'); ?>
            </div>
            <div class="form-group">
                <label for="gambar">Upload Gambar</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
                <?php echo form_error('gambar', '<small class="text-danger pl-3">','</small>'); ?>
            </div>
            <div class="form-group" id="audio_group">
                <label for="audio">Upload Audio</label>
                <input type="file" class="form-control-file" id="audio" name="audio">
                <?php echo form_error('audio', '<small class="text-danger pl-3">','</small>'); ?>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
            $('#tipe_soal').change(function() {
                if ($(this).val() == 'listening') {
                    $('#audio_group').show();
                } else {
                    $('#audio_group').hide();
                }
            }).trigger('change');
        });
    </script>
</body>
</html>
