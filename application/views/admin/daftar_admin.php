<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    body,
    html {
        background-color: #004789;
        height: 100%;
        margin: 0;
        padding: 0;
    }

    .col-sm-2 {
        background-color: #ffffff;
        padding: 15px;
        min-height: 100%;
    }

    .list-group {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .list-group-item {
        border: none;
        width: 100%;
    }

    .custom-btn {
        background-color: #004789;
        color: #fff;
    }

    .form-group select.is-invalid,
    .form-group input.is-invalid {
        border-color: #dc3545 !important;
    }

    .form-group .invalid-feedback {
        position: absolute;
        bottom: -1rem;
        color: #dc3545;
    }
</style>

<!-- Main Content -->
<div class="card mt-3">
    <div class="card-body">
        <h2 class="card-title d-flex justify-content-center mb-4">Tambah Akun</h2>
        <?php echo form_open('cdaftar/simpandaftar'); ?>
        <form class="forms-sample" method="POST" action="<?php echo base_url('cdaftar/simpandaftar'); ?>">
            <div class="mb-3 form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control <?php echo form_error('email') ? 'is-invalid' : ''; ?>" name="email" id="email" placeholder="Email" required>
                <div class="invalid-feedback">
                    <?php echo form_error('email'); ?>
                </div>
            </div>
            <div class="mb-3 form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid' : ''; ?>" name="nama" id="nama" placeholder="Nama" required>
                <div class="invalid-feedback">
                    <?php echo form_error('nama'); ?>
                </div>
            </div>
            <div class="mb-3 form-group" style="margin-top: 15px;">
                <label for="username">Username:</label>
                <input type="text" class="form-control <?php echo form_error('username') ? 'is-invalid' : ''; ?>" name="username" id="username" placeholder="Username" required>
                <div class="invalid-feedback">
                    <?php echo form_error('username'); ?>
                </div>
            </div>
            <div class="mb-3 form-group">
                <label for="password">Password:</label>
                <div class="input-group">
                    <input type="password" class="form-control <?php echo form_error('password') ? 'is-invalid' : ''; ?>" name="password" id="password" placeholder="Password" required>
                    <div class="invalid-feedback">
                        <?php echo form_error('password'); ?>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="eyeIcon" onclick="togglePasswordVisibility()">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="mb-3 form-group">
                <label for="exampleInputName1" class="form-label">Role:</label>
                <select name="role" class="form-control <?php echo form_error('role') ? 'is-invalid' : ''; ?>" id="role" required>
                    <option value="">Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="panitia">Panitia</option>
                    <option value="user">User</option>
                </select>
                <div class="invalid-feedback">
                    <?php echo form_error('role'); ?>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
            <?php echo form_close(); ?>
        </form>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script>
    function hapusakun(id) {
        if (confirm("Apakah yakin menghapus data ini?")) {
            window.location.href = "<?php echo base_url()?>cdaftar/hapusakun/" + id;
        }
    }
</script>
