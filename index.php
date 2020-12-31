<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>e-learning</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="school.png">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center klik_menu" id="#Guru" href="#">
                <div class="sidebar-brand-icon">
                <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E-Learning</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
           
            <li class="nav-item">
                <a class="nav-link klik_menu" id="Guru" href="#">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Guru</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link klik_menu" id="Mapel" href="#">
                <i class="fas fa-paste"></i>
                    <span>Mapel</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link klik_menu" id="Siswa" href="#">
                <i class="fas fa-users"></i>
                    <span>Siswa</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid val">

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Tugas Akhir Web Service 2020</span>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.val').load('guru.php');
            getGuru();
            $('.klik_menu').on('click', function() {
                let menu = $(this).attr('id');
                console.log(menu);
                if (menu == "Guru") 
                {
                    $('.val').load('guru.php');
                    getGuru();
                } 
                else if (menu == "Siswa") 
                {
                    $('.val').load('siswa.php');
                    getSiswa();
                }
                else if (menu == "Mapel") 
                {
                    $('.val').load('mapel.php');
                    getMapel();
                }
            });

            ///////////////////////////////////////// GURU
            //create
            $('.val').on('click', '.addGuru', function() {
                var id_nip = $('[name="createNIP"]').val();
                var nama = $('[name="createNama"]').val();
                var jeniskel = $('[name="createJenisKelamin"]').val();
                var alamat = $('[name="createAlamat"]').val();
                $.ajax({
                    type: "POST",
                    url: "http://localhost/tugas_1718141-restfull_server/index.php/Guru",
                    data: {
                        id_nip: id_nip,
                        nama: nama,
                        jeniskel: jeniskel,
                        alamat: alamat
                    },
                    dataType: "JSON",
                    success: function(response) {
                        getGuru();
                        $('[name="createNIP"]').val("");
                        $('[name="createNama"]').val("");
                        $('[name="createJenisKelamin"]').val("");
                        $('[name="createAlamat"]').val("");
                    }
                });
            });

            //read edit
            $('.val').on('click', '.editGuru', function() {
                var id = $(this).attr('key');
                $.ajax({
                    type: "GET",
                    url: `http://localhost/tugas_1718141-restfull_server/index.php/Guru?id_nip=${id}`,
                    dataType: "JSON",
                    success: function(response) {
                        response.data.forEach(element => {
                            $('[name="updateNIP"]').val(element.id_nip);
                            $('[name="updateNama"]').val(element.nama);
                            $('[name="updateJenisKelamin"]').val(element.jeniskel);
                            $('[name="updateAlamat"]').val(element.alamat);
                        });
                    }
                });
            });

            //update
            $('.val').on('click', '.updateGuru', function() {
                var id_nip = $('[name="updateNIP"]').val();
                var nama = $('[name="updateNama"]').val();
                var jeniskel = $('[name="updateJenisKelamin"]').val();
                var alamat = $('[name="updateAlamat"]').val();
                $.ajax({
                    type: "PUT",
                    url: `http://localhost/tugas_1718141-restfull_server/index.php/Guru`,
                    data: {
                        id_nip: id_nip,
                        nama: nama,
                        jeniskel: jeniskel,
                        alamat: alamat
                    },
                    dataType: "JSON",
                    success: function(response) {
                        getGuru();
                        $('[name="updateNIP"]').val("");
                        $('[name="updateNama"]').val("");
                        $('[name="updateNoHp"]').val("");
                        $('[name="updateAlamat"]').val("");
                        console.log(response);
                    }
                });
            });
            //delete
            $('.val').on('click', '.deleteGuru', function() {
                var id_nip = $(this).attr('key');
                var kondisi = confirm(`apa anda yakin ingin menghapus data ${id_nip}`);
                if (kondisi == false) {
                    return;
                } else {
                    $.ajax({
                        type: "DELETE",
                        url: "http://localhost/tugas_1718141-restfull_server/index.php/Guru",
                        data: {
                            id_nip: id_nip
                        },
                        dataType: "JSON",
                        success: function(response) {
                            getGuru();
                        }
                    });
                }

            });


            //read tabel
            function getGuru() {
                let html = "";
                $.ajax({
                    type: "GET",
                    url: `http://localhost/tugas_1718141-restfull_server/index.php/Guru`,
                    dataType: "JSON",
                    success: function(response) {
                        let i = 1; console.log(response);
                        response.data.forEach(element => {
                            console.log(element);
                            html += `<tr>
                                        <th scope="row">${i}</th>
                                        <td>${element.id_nip}</td>
                                        <td>${element.nama}</td>
                                        <td>${element.jeniskel}</td>
                                        <td>${element.alamat}</td>
                                        <td>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button key="${element.id_nip}" class="btn btn-success btn-sm rounded-0 editGuru" type="button" data-toggle="modal" data-target="#updateModalCenterGuru"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button key="${element.id_nip}" class="btn btn-danger btn-sm rounded-0 deleteGuru" type="button"><i class="fa fa-trash"></i></button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>`;
                            i++;
                        });
                        $('#table_guru').html(html);
                    }
                });
            };

            ////////////////////////////////////////////////////////////////////MAPEL
            //create
            $('.val').on('click', '.addMapel', function() {
                var kode_mapel = $('[name="createKode"]').val();
                var nama = $('[name="createNama"]').val();
                var kelas = $('[name="createKelas"]').val();
                $.ajax({
                    type: "POST",
                    url: "http://localhost/tugas_1718141-restfull_server/index.php/Mapel",
                    data: {
                        kode_mapel: kode_mapel,
                        nama: nama,
                        kelas: kelas
                    },
                    dataType: "JSON",
                    success: function(response) {
                        getMapel();
                        $('[name="createKode"]').val("");
                        $('[name="createNama"]').val("");
                        $('[name="createKelas"]').val("");
                    }
                });
            });

            //read edit
            $('.val').on('click', '.editMapel', function() {
                var id = $(this).attr('key');
                $.ajax({
                    type: "GET",
                    url: `http://localhost/tugas_1718141-restfull_server/index.php/Mapel?kode_mapel=${id}`,
                    dataType: "JSON",
                    success: function(response) {
                        response.data.forEach(element => {
                            $('[name="updateKode"]').val(element.kode_mapel);
                            $('[name="updateNama"]').val(element.nama);
                            $('[name="updateKelas"]').val(element.kelas);
                        });
                    }
                });
            });

            //update
            $('.val').on('click', '.updateMapel', function() {
                var kode_mapel = $('[name="updateKode"]').val();
                var nama = $('[name="updateNama"]').val();
                var kelas = $('[name="updateKelas"]').val();
                $.ajax({
                    type: "PUT",
                    url: `http://localhost/tugas_1718141-restfull_server/index.php/Mapel`,
                    data: {
                        kode_mapel: kode_mapel,
                        nama: nama,
                        kelas: kelas
                    },
                    dataType: "JSON",
                    success: function(response) {
                        getMapel();
                        $('[name="updateKelas"]').val("");
                        $('[name="updateNama"]').val("");
                        $('[name="updateKelas"]').val("");
                        console.log(response);
                    }
                });
            });
            //delete
            $('.val').on('click', '.deleteMapel', function() {
                var kode_mapel = $(this).attr('key');
                var kondisi = confirm(`apa anda yakin ingin menghapus data ${kode_mapel}`);
                if (kondisi == false) {
                    return;
                } else {
                    $.ajax({
                        type: "DELETE",
                        url: "http://localhost/tugas_1718141-restfull_server/index.php/Mapel",
                        data: {
                            kode_mapel: kode_mapel
                        },
                        dataType: "JSON",
                        success: function(response) {
                            getMapel();
                        }
                    });
                }
            });


            //read tabel
            function getMapel() {
                let html = "";
                $.ajax({
                    type: "GET",
                    url: `http://localhost/tugas_1718141-restfull_server/index.php/Mapel`,
                    dataType: "JSON",
                    success: function(response) {
                        let i = 1; console.log(response);
                        response.data.forEach(element => {
                            console.log(element);
                            html += `<tr>
                                        <th scope="row">${i}</th>
                                        <td>${element.kode_mapel}</td>
                                        <td>${element.nama}</td>
                                        <td>${element.kelas}</td>
                                        <td>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button key="${element.kode_mapel}" class="btn btn-success btn-sm rounded-0 editMapel" type="button" data-toggle="modal" data-target="#updateModalCenterMapel"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button key="${element.kode_mapel}" class="btn btn-danger btn-sm rounded-0 deleteMapel" type="button"><i class="fa fa-trash"></i></button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>`;
                            i++;
                        });
                        $('#table_mapel').html(html);
                    }
                });
            };



            ////////////////////////////////////////////////////// SISWA
            //create
            $('.val').on('click', '.addSiswa', function() {
                var id_nis = $('[name="createNIS"]').val();
                var nama = $('[name="createNama"]').val();
                var jeniskel = $('[name="createJenisKelamin"]').val();
                var tgl = $('[name="createTgl"]').val();
                var kota = $('[name="createKota"]').val();
                var alamat = $('[name="createAlamat"]').val();
                $.ajax({
                    type: "POST",
                    url: "http://localhost/tugas_1718141-restfull_server/index.php/Siswa",
                    data: {
                        id_nis: id_nis,
                        nama: nama,
                        jeniskel: jeniskel,
                        tgl: tgl,
                        kota: kota,
                        alamat: alamat
                    },
                    dataType: "JSON",
                    success: function(response) {
                        getSiswa();
                        $('[name="createNIS"]').val("");
                        $('[name="createNama"]').val("");
                        $('[name="createJenisKelamin"]').val("");
                        $('[name="createTgl"]').val("");
                        $('[name="createKota"]').val("");
                        $('[name="createAlamat"]').val("");
                    }
                });
            });

            //read edit
            $('.val').on('click', '.editSiswa', function() {
                var id = $(this).attr('key');
                $.ajax({
                    type: "GET",
                    url: `http://localhost/tugas_1718141-restfull_server/index.php/Siswa?id_nis=${id}`,
                    dataType: "JSON",
                    success: function(response) {
                        response.data.forEach(element => {
                            $('[name="updateNIS"]').val(element.id_nis);
                            $('[name="updateNama"]').val(element.nama);
                            $('[name="updateJenisKelamin"]').val(element.jeniskel);
                            $('[name="updateTgl"]').val(element.tgl);
                            $('[name="updateKota"]').val(element.kota);
                            $('[name="updateAlamat"]').val(element.alamat);
                        });
                    }
                });
            });

            //update
            $('.val').on('click', '.updateSiswa', function() {
                var id_nis = $('[name="updateNIS"]').val();
                var nama = $('[name="updateNama"]').val();
                var jeniskel = $('[name="updateJenisKelamin"]').val();
                var tgl = $('[name="updateTgl"]').val();
                var kota = $('[name="updateKota"]').val();
                var alamat = $('[name="updateAlamat"]').val();
                $.ajax({
                    type: "PUT",
                    url: `http://localhost/tugas_1718141-restfull_server/index.php/Siswa`,
                    data: {
                        id_nis: id_nis,
                        nama: nama,
                        jeniskel: jeniskel,
                        tgl: tgl,
                        kota: kota,
                        alamat: alamat
                    },
                    dataType: "JSON",
                    success: function(response) {
                        getSiswa();
                        $('[name="updateNIS"]').val("");
                        $('[name="updateNama"]').val("");
                        $('[name="updateJenisKelamin"]').val("");
                        $('[name="updateTgl"]').val("");
                        $('[name="updateKota"]').val("");
                        $('[name="updateAlamat"]').val("");
                        console.log(response);
                    }
                });
            });
            //delete
            $('.val').on('click', '.deleteSiswa', function() {
                var id_nis = $(this).attr('key');
                var kondisi = confirm(`apa anda yakin ingin menghapus data ${id_nis}`);
                if (kondisi == false) {
                    return;
                } else {
                    $.ajax({
                        type: "DELETE",
                        url: "http://localhost/tugas_1718141-restfull_server/index.php/Siswa",
                        data: {
                            id_nis: id_nis
                        },
                        dataType: "JSON",
                        success: function(response) {
                            getSiswa();
                        }
                    });
                }

            });


            //read tabel
            function getSiswa() {
                let html = "";
                $.ajax({
                    type: "GET",
                    url: `http://localhost/tugas_1718141-restfull_server/index.php/Siswa`,
                    dataType: "JSON",
                    success: function(response) {
                        let i = 1; console.log(response);
                        response.data.forEach(element => {
                            console.log(element);
                            html += `<tr>
                                        <th scope="row">${i}</th>
                                        <td>${element.id_nis}</td>
                                        <td>${element.nama}</td>
                                        <td>${element.jeniskel}</td>
                                        <td>${element.tgl}</td>
                                        <td>${element.kota}</td>
                                        <td>${element.alamat}</td>
                                        <td>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button key="${element.id_nis}" class="btn btn-success btn-sm rounded-0 editSiswa" type="button" data-toggle="modal" data-target="#updateModalCenterSiswa"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button key="${element.id_nis}" class="btn btn-danger btn-sm rounded-0 deleteSiswa" type="button"><i class="fa fa-trash"></i></button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>`;
                            i++;
                        });
                        $('#table_siswa').html(html);
                    }
                });
            };
            
        });
    </script>
    <td></td>

</body>

</html>