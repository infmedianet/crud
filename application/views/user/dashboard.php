<?php
if ($this->session->userdata['username'] == null or $this->session->userdata['username'] != "user") {
    header('Location: ' . base_url('login'));
}

//reload
$page = $_SERVER['PHP_SELF'];
$sec = "900";

date_default_timezone_set('Asia/Jakarta');
$tgl_now = date_create();
$waktu_now = date("Y-m-d h:i:s");

// koneksi ke database
include_once($_SERVER['DOCUMENT_ROOT'] . '/crud/database/dbLokal.php');
$db = new dbLokal();

// read data
$data_pasien = $db->readDataPasien();

//---------------------------------------------------------------------------------
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Dashboard - CRUD</title>
    <meta http-equiv="refresh" content="<?php echo $sec ?>;URL='<?php echo $page ?>'">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta name="author" content="Themesberg">
    <meta name="description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

    <!-- Favicon -->
    <link href="<?= base_url('') ?>assets/img/favicon/logo.png" rel="icon">
    <link href="<?= base_url('') ?>assets/img/favicon/logo.png" rel="apple-touch-icon">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="<?= base_url('') ?>vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="<?= base_url('') ?>vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.1/css/fixedColumns.dataTables.min.css" />

    <!-- Volt CSS -->
    <link type="text/css" href="<?= base_url('') ?>css/volt.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- kalender -->
    <link rel="stylesheet" href="<?= base_url('') ?>css/kalender.css" />

    <!-- sweetalert -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">

</head>

<body>

    <!-- LOAD SIDEBAR -->
    <?php $this->load->view('user/sidebar'); ?>

    <main class="content">
        <p><i>Last Update : <b><?php echo $waktu_now ?></b></i></p>

        <div class="row">
            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <div class="card border-0 shadow" id="hideMe">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                            <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                <div class="containerKalender">
                                    <div class="month"></div>
                                    <div class="date"></div>
                                    <div class="day"></div>
                                    <div class="year"></div>
                                </div>

                            </div>
                            <div class="col-12 col-xl-7 px-xl-0">
                                <div class="d-none d-sm-block">
                                    <h2 class="h6 text-gray-400 mb-0">Waktu</h2>
                                    <h3>
                                        <div id="timer"></div>
                                    </h3>
                                </div>
                                <small class="d-flex align-items-center text-gray-500">
                                    <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path>
                                    </svg>
                                    GMT+7 (Jakarta)
                                </small>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <div class="card border-0 shadow">
            <div class="card-body">
                <h5>Daftar Pasien<h5>
                        <a class="btn btn-sm btn-primary" href="<?= base_url('user/tambahData') ?>"><i class="bi bi-plus"></i> Tambah Data</i></a>
                        <hr>
                        <div class="table-responsive">
                            <table id="dataMpp" class="table table-striped table-hover" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <?php
                                foreach ($data_pasien as $row) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['id_pasien']; ?></td>
                                        <td><?php echo $row['nama']; ?></td>
                                        <td><?php echo $row['alamat']; ?></td>
                                        <td><a href="<?= base_url('user/deleteData?id=' . $row['id_pasien']) ?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a></td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
            </div>
        </div>




        <!-- Membuka modal detail -->
        <div class="modal fade" id="ModalDetailMpp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        </div>



        <!-- FOOTER -->
        <footer class="bg-white rounded shadow p-3 mb-4 mt-4">
            <div class="row">
                <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
                    <p class="mb-0 text-center text-lg-start">
                        ©<span class="current-year"></span><b> IT RSU RC</b>
                    </p>
                </div>
                <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
                    <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
                        <li class="list-inline-item px-0 px-sm-2">
                        </li>
                        <li class="list-inline-item px-0 px-sm-2">
                        </li>
                        <li class="list-inline-item px-0 px-sm-2">
                        </li>
                        <li class="list-inline-item px-0 px-sm-2">
                            <p><b>CRUD</b></p>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </main>

    <!-- Core -->
    <script src="<?= base_url('') ?>vendor/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('') ?>vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="<?= base_url('') ?>vendor/onscreen/dist/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="<?= base_url('') ?>vendor/nouislider/dist/nouislider.min.js"></script>

    <!-- Smooth scroll -->
    <script src="<?= base_url('') ?>vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Charts -->
    <script src="<?= base_url('') ?>vendor/chartist/dist/chartist.min.js"></script>
    <script src="<?= base_url('') ?>vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- Datepicker -->
    <script src="<?= base_url('') ?>vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Sweet Alerts 2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Vanilla JS Datepicker -->
    <script src="<?= base_url('') ?>vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Notyf -->
    <script src="<?= base_url('') ?>vendor/notyf/notyf.min.js"></script>

    <!-- Simplebar -->
    <script src="<?= base_url('') ?>vendor/simplebar/dist/simplebar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="<?= base_url('') ?>assets/js/volt.js"></script>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('') ?>vendor/jquery-easing/jquery.easing.min.js"></script>


    <!-- export -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>


    <!-- ----------------------------JAVASCRIPT-------------------------- -->

    <script language="JavaScript">
        $(document).ready(function() {
            $('#dataMpp').DataTable({
                "order": [],
                dom: 'Bfrtip',
                scrollCollapse: true,
                autoWidth: true,
                scrollX: true,
                scrollY: true,
                fixedHeader: true,
                responsive: true,
                pageLength: 10,
                buttons: {
                    buttons: [{
                            extend: 'csvHtml5',
                            text: '<i class="bi bi-file-excel"></i> CSV',
                            className: 'btn btn-primary btn-sm',
                            exportOptions: {
                                columns: []
                            }
                        },
                        {
                            extend: 'excelHtml5',
                            text: '<i class="bi bi-file-excel"></i> EXCEL',
                            className: 'btn btn-primary btn-sm',
                            exportOptions: {
                                columns: []
                            }
                        },
                        'colvis'
                    ],
                    dom: {
                        button: {
                            className: 'btn'
                        }
                    }
                },

            });


        });
    </script>


    <script>
        let month = document.querySelector(".month")
        let day = document.querySelector(".day")
        let date = document.querySelector(".date")
        let year = document.querySelector(".year")
        let currentDate = new Date()
        var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]
        var days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"]
        month.innerHTML = "&nbsp" + months[currentDate.getMonth()] + "&nbsp";
        day.innerHTML = days[currentDate.getDay()]
        date.innerHTML = currentDate.getDate()
        year.innerHTML = currentDate.getFullYear()

        setInterval(function() {
            var currentTime = new Date();
            var currentHours = currentTime.getHours();
            var currentMinutes = currentTime.getMinutes();
            var currentSeconds = currentTime.getSeconds();
            currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
            currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;
            var timeOfDay = (currentHours < 12) ? "AM" : "PM";
            currentHours = (currentHours < 10 ? "0" : "") + currentHours;
            //currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;    
            //currentHours = ( currentHours == 0 ) ? 12 : currentHours;    
            var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds;
            document.getElementById("timer").innerHTML = currentTimeString;
        }, 1000);
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '.open_modal', function(e) {
                var m = $(this).attr("id");
                $.ajax({
                    url: "<?= base_url('admin/detailMpp') ?>",
                    type: "GET",
                    data: {
                        id: m,
                    },
                    success: function(ajaxData) {
                        $("#ModalDetailMpp").html(ajaxData);
                        $("#ModalDetailMpp").modal('show', {
                            backdrop: 'true'
                        });
                    }
                });
            });
        });
    </script>

    <!-- NOTIF TERSIMPAN -->
    <?php if ($this->session->flashdata('berhasil_simpan')) { ?>
        <script>
            Swal.fire({
                title: "Tersimpan",
                text: "<?php echo $this->session->flashdata('berhasil_simpan'); ?>",
                showConfirmButton: false,
                timer: 2000,
                type: 'success'
            });
        </script>
    <?php } elseif ($this->session->flashdata('berhasil_update')) { ?>
        <script>
            Swal.fire({
                title: "Terupdate",
                text: "<?php echo $this->session->flashdata('berhasil_update'); ?>",
                showConfirmButton: false,
                timer: 2000,
                type: 'success'
            });
        </script>

    <?php } elseif ($this->session->flashdata('berhasil_hapus')) { ?>
        <script>
            Swal.fire({
                title: "Terhapus",
                text: "<?php echo $this->session->flashdata('berhasil_hapus'); ?>",
                showConfirmButton: false,
                timer: 2000,
                type: 'success'
            });
        </script>

    <?php } ?> ?>





</body>

</html>