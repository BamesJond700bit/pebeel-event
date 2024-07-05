<div class="card mt-3 mb-3">
    <div class="card-body">
        <h4 class="card-title">Data Akun</h4>
        
        <div class="table-responsive">
            <table class="table table-hover" id="tabel-data">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Email</th>
                        <th>Tgl_lahir</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody> 
                    <?php
                        if (empty($hasil)) {
                            echo "<td colspan='5'>Data Kosong</td>";    
                        } else {
                            $no = 1;
                            foreach ($hasil as $data):
                    ?> 
                    <tr data-role="<?php echo $data->role; ?>">
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data->nama ?></td>
                        <td><?php echo $data->nim ?></td>
                        <td><?php echo $data->email ?></td>
                        <td><?php echo $data->tgl_lahir ?></td>
                        <td><?php echo $data->role ?></td>
                        <td>
                        <button type="button"  class="btn btn-sm btn-primary">Edit</button>
                            <button type="button" onclick="" class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr> 
                    <?php
                            $no++;
                            endforeach;
                        }
                    ?> 
                </tbody>
            </table>
        </div>
    </div>
</div>
