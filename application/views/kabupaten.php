
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                  
                    <!-- DataTales Example -->
					<div class="col-md">
						<a href="<?= base_url('index.php/Kabupaten/tambah/') ?>" style="float: left;" class="btn btn-primary" ><span class="glyphicon glyphicon-plus"></span>Tambah Data Kabupaten</a><br><br><br>
					</div>
                    <div class="col-md">
                    <a href="<?= base_url('index.php/Kabupaten/print/') ?>" style="float: left;" class="btn btn-primary" ><span class="glyphicon glyphicon-plus"></span>Print</a><br><br><br>
					
                    </div>
                    <div class="card shadow mb-4">
						
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kabupaten</h6>
                        </div>
                        <br>
						
                        <div class="card-body">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <form action="<?= base_url('index.php/Kabupaten/print/') ?>"  method="get">
                                        <input type="text" name="keyword" placeholder="search">
                                        <input type="submit" name="search_submit">
                                    </form>
                                    <br>
                                    <br>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kabupaten</th>
                                            <th>Provinsi</th>
                                            <th>Jumlah Penduduk</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
										<?php
										$no =0;
										foreach ($data_kab as $dt) {
											$no++;
										
                                        echo '<tr>
										<td>' . $no . '</td>
										<td>' . $dt->nama_kabupaten . '</td>
										<td>' . $dt->nama_prov . '</td>
										<td>' . $dt->jml_penduduk=number_format($dt->jml_penduduk, 2) .  '</td>

								

										
									  </tr>';
							}
							?>
                                    </tbody>
                                </table>
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