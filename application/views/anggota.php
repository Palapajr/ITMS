<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $title; ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/modules/izitoast/css/iziToast.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            <!-- this->load->topbar  -->
            <?php $this->load->view('topbar'); ?>
            <!-- this->load->topbar  -->


            <!-- this->load->menu  -->
            <?php $this->load->view('menu'); ?>
            <!-- this->load->menu  -->


            <!-- This->Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">


                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                            <div class="breadcrumb-item"><?php echo $title; ?></div>
                        </div>
                    </div>

                    <div class="section-body">
                        <h2 class="section-title"><?php echo $title; ?></h2>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal" onclick="add()"><i class="fas fa-plus"></i> Tambah</button>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped " id="table" width="100%">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>No</th>
                                                        <th>NPK</th>
                                                        <th>Nama Anggota</th>
                                                        <th>Jabatan</th>
                                                        <th>Unit</th>
                                                        <th>No Handphone</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
            <!-- This->Content -->

            <!-- form modal -->
            <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitle"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" id="form">
                                <input type="hidden" id="id_anggota" name="id_anggota" value="">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>NPK</label>
                                        <input type="text" class="form-control" name="npk">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan SK</label>
                                        <select class="form-control" name="jabatan">
                                            <option value="">Pilih</option>
                                            <option value="Teknisi">Teknisi</option>
                                            <option value="IT">IT</option>
                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Unit</label>
                                        <select class="form-control" name="unit">
                                            <option value="">Pilih</option>
                                            <option value="Sarpras">Sarpras</option>
                                            <option value="IT">IT</option>
                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan Tertinggi</label>
                                        <select class="form-control" name="pendidikan">
                                            <option value="">Pilih</option>
                                            <option value="Bawah_sma">Di Bawah SMA</option>
                                            <option value="SMA">SMA</option>
                                            <option value="Associate">Associate</option>
                                            <option value="Bachelor">Bachelor</option>
                                            <option value="Master">Master</option>
                                            <option value="Doctoral">Doctoral</option>
                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <div class="selectgroup selectgroup-pills">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="gender" value="L" class="selectgroup-input">
                                                <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-male"></i> Laki-Laki</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="gender" value="P" class="selectgroup-input">
                                                <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-female"></i> Perempuan</span>
                                            </label>
                                        </div>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>No Hp</label>
                                        <input type="text" class="form-control" name="nope">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select class="form-control" name="agama">
                                            <option value="">Pilih</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Hobi</label>
                                        <input type="text" class="form-control" name="hobi">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Terhitung Mulai Tanggal</label>
                                        <input type="date" class="form-control" name="tmt_kerja">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat"></textarea>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success" id="btnSave" onclick="save()">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- form modal -->

            <!-- this->load->footer  -->
            <?php $this->load->view('footer'); ?>
            <!-- this->load->footer  -->

        </div>
    </div>


    <!-- General JS Scripts -->
    <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/modules/popper.js"></script> -->
    <!-- <script src="<?php echo base_url(); ?>assets/modules/tooltip.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script> -->
    <!-- <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/modules/prism/prism.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/izitoast/js/iziToast.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/page/modules-toastr.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/page/sweetalert.js"></script>
    <script>
        // variabel perulangan
        var saveData;
        var showmodal = $('#exampleModal'); // nampilkan modal (tampil modal)
        var tabelData = $('#table'); // nampilkan tabel dan isi (tabel)
        var formData = $('#form'); // menghapuskan data form (reset data ketika di close)
        var modalTitle = $('#modalTitle'); // tittle form (tittle)
        var btnSave = $('#btnSave'); // btn save data

        $(document).ready(function() {
            tabelData.DataTable({ // -> tabel
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "<?= base_url('anggota/getAnggota'); ?>",
                    "type": "POST"
                },
                "columnDefs": [{
                    "target": [-1],
                    "orderable": false
                }]
            });
        });

        function reloadTable() {
            tabelData.DataTable().ajax.reload();

        }

        function message(icon, text) {
            Swal.fire({
                icon: icon,
                title: 'Data Table Anggota ...',
                text: text,
                showConfirmButton: false,
                showCancelButton: false,
                timer: 2000,
                timerProgressBar: true,
            });
        }

        function deleteQuestion(id_anggota, nama) {
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Anda Akan menghapus Data Anggota Dengan Nama " + nama + "  ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#63ED7A',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus !'
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteData(id_anggota);
                }
            })
        }

        function add() {
            saveData = 'tambah';
            formData[0].reset(); // reset data ketika di close
            showmodal.modal('show'); // tampil modal
            modalTitle.text('Modal Tambah Data Anggota'); //tittle
        }

        function save() {
            btnSave.text('Mohon Tunggu ...');
            btnSave.attr('disabled', true);
            if (saveData == 'tambah') { // konisi button add atau update
                url = "<?= base_url('anggota/addAnggota'); ?>"
            } else {
                url = "<?= base_url('anggota/updateAnggota'); ?>"
            }

            $.ajax({
                type: "POST",
                url: url,
                data: formData.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response.status == 'success') {
                        showmodal.modal('hide');
                        reloadTable();
                        if (saveData == 'tambah') {
                            iziToast.success({
                                message: 'Data Berhasil Disimpan ... ',
                                position: 'topRight'
                            });
                        } else {
                            iziToast.success({
                                message: 'Data Berhasil Ubah ... ',
                                position: 'topRight'
                            });
                        }

                    } else { // coding untuk form validation
                        for (var i = 0; i < response.inputerror.length; i++) {
                            $('[name="' + response.inputerror[i] + '"]').addClass('is-invalid');
                            $('[name="' + response.inputerror[i] + '"]').next().text(response.error_string[i]);

                        }
                    }
                    btnSave.text('Simpan Data');
                    btnSave.attr('disabled', false);
                },

                error: function() {
                    message('error', 'Terjadi kesalahan di server, Silakan Ulang kembai !');
                }

            });
        }

        // function ngambil data
        function byid(id_anggota, type) {
            if (type == 'edit') {
                saveData = 'edit';
                formData[0].reset();
            }

            $.ajax({
                type: "GET",
                url: "<?= base_url('anggota/byid/') ?>" + id_anggota,
                dataType: "JSON",
                success: function(response) {
                    if (type == 'edit') {
                        formData.find('input').removeClass('is-invalid');
                        formData.find('select').removeClass('is-invalid');
                        formData.find('textarea').removeClass('is-invalid');
                        modalTitle.text('Modal Ubah Data Anggota');
                        btnSave.text('Ubah Data');
                        btnSave.attr('disabled', false);
                        $('[name="id_anggota"]').val(response.id_anggota);
                        $('[name="npk"]').val(response.npk);
                        $('[name="nama"]').val(response.nama);
                        $('select[name="jabatan"]').find('[value="' + response.jabatan + '"]').attr('selected', 'selected');
                        $('select[name="unit"]').find('[value="' + response.unit + '"]').attr('selected', 'selected');
                        $('select[name="pendidikan"]').find('[value="' + response.pendidikan + '"]').attr('selected', 'selected');
                        $('input:radio[name="gender"]').filter('[value="' + response.gender + '"]').attr('checked', true);
                        $('[name="nope"]').val(response.nope);
                        $('select[name="agama"]').find('[value="' + response.agama + '"]').attr('selected', 'selected');
                        $('[name="hobi"]').val(response.hobi);
                        $('[name="tmt_kerja"]').val(response.tmt_kerja);
                        $('[name="alamat"]').val(response.alamat);
                        showmodal.modal('show');
                    } else {
                        deleteQuestion(response.id_anggota, response.nama);
                    }

                },

                error: function() {
                    message('error', 'Terjadi kesalahan di server, Silakan Ulang kembai !');
                }
            });
        }

        function deleteData(id_anggota) {
            $.ajax({
                type: "POST",
                url: "<?= base_url('anggota/deleteAnggota/') ?>" + id_anggota,
                dataType: "JSON",
                success: function(response) {
                    reloadTable();
                    message('success', 'Data Berhasil Dihapus !');
                },

                error: function() {
                    message('error', 'Terjadi kesalahan di server, Silakan Ulang kembai !');
                }
            });
        }
    </script> <!-- JS utuk nampilkan datatable -->

    <!-- Template JS File -->
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

</body>

</html>