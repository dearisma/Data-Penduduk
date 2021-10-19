
   
                <!-- Begin Page Content -->
                <div class="container-fluid">

                  
                    <!-- DataTales Example -->
					<div class="col-md">
						<a href="<?= site_url('Kabupaten/tambah') ?>" style="float: left;" class="btn btn-primary" ><span class="glyphicon glyphicon-plus"></span>Tambah Data Provinsi</a><br><br><br>
					</div>
                    <div class="card shadow mb-4">
						
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Kabupaten</h6>
                        </div>
						
            <body class="bg-dark">

                <div class="container">
                <div class="card card-login mx-auto mt-5">
                    <div class="card-header"></div>
                    <div class="card-body">
                    <form action="<?php echo base_url('index.php/Kabupaten/simpan'); ?>" method="post">
                        <div class="form-group">
                        <div class="form-label-group">
                        <label for="nama_kabupaten">Kabupaten</label>
                            <input type="text" id="nama_kabupaten" name="nama_kabupaten" class="form-control" required><br>
                        </div>
                        <label for="id_provinsi">Provinsi</label>
								<select name="id_provinsi" id="id_provinsi" class="form-control" required>
									<?php foreach ($data_prov as $i) : ?>
										<option value="<?= $i->id_provinsi ?>"><?= $i->nama_prov ?></option>
									<?php endforeach; ?>
								</select><br>
                        <label for="jml_penduduk">Jumlah Penduduk</label>
                            <input type="text" id="jml_penduduk" name="jml_penduduk" class="form-control" required><br>
                        </div>
                    </div>
                    
                        <input class="btn btn-primary btn-block" type="submit" value="Simpan">
                    </form>
                    
                    </div>
  </div>
</div>

                        <div class="card-body">
                            <div class="table-responsive">
                              
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

			
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>