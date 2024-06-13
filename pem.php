<?php
            $no = 1;
            $tampil = mysqli_query($koneksi, "select * from siswa");
            while($data = mysqli_fetch_assoc($tampil)):
?>


<div class="card">
	<div class="card-header">
		<a href="user.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
            <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
	</div>
	<div class="card-body">
	<div class="table-responsive">
    <?php
            if($count < 1 ){
                echo "Data Tidak Ada";
            } else {
    ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>NAMA</th>
                                            <th>KELAS</th>
                                            <th>JURUSAN</th>
                                            <th>JENIS KELAMIN</th>
                                            <!-- <th>Edit</th>
                                            <th>Hapus</th> -->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>NAMA</th>
                                            <th>KELAS</th>
                                            <th>JURUSAN</th>
                                            <th>JENIS KELAMIN</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	
	                                        <tr>
                                                <td><?php echo $no++; ?></td>
	                                            <td><?php echo $row['nis']; ?></td>
                                                <td><?php echo $row['nama'] ?></td>
                                                <td><?php echo $row['kelas'] ?></td>
                                                <td><?php echo $row['jurusan'] ?></td>
                                                <td><?php echo $row['jk'] ?></td>
                                                <td>
                                                    <a href="edit_catatan.php?id=<?php echo $row['nis']; ?> " class="btn btn-warning">
                                                    <i class="fa fa-pen"></i> Edit
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="hapus_catatan.php?Tanggal=<?php echo $row['nis']; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus?')" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Hapus
                                                    </a>
                                                </td>
	                                        </tr>
                                    	
                                    </tbody>
                                </table>
                                <?php } ?>
     </div>
    </div>
</div>