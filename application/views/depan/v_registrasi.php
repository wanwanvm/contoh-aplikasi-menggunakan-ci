<?php
$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Custom CSS -->

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Registrasi Sapa-SKO</title>
	<link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/logo-dark.png' ?>">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
	<!-- Simple Line Font -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick-theme.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
	<!-- Main CSS -->
	<link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/bootstrap_datepicker/css/datepicker.css'); ?>" rel="stylesheet">






	<style type="text/css">
		<!--
		.style2 {
			font-weight: bold
		}
		-->
	</style>
</head>

<body>
	<!--============================= HEADER =============================-->
	<?php
	$this->load->view('depan/atas');
	?>

	<!--//END HEADER -->
	<!--//END ABOUT IMAGE -->

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="rounded border my-3 bg-white py-3">
					<form action="<?php echo base_url() . 'registrasi/inputpeserta' ?>" method="post" enctype="multipart/form-data">

						<?php echo validation_errors(); ?>
						<?php echo $this->session->flashdata('succses'); ?>
						<?php echo $this->session->flashdata('msg'); ?>

						<h4 align="center" class="px-4 text-muted style1 style2 "><strong>FORMULIR PENDAFTARAN ATLET BARU </strong></h4>
						<p class="px-4 text-muted style1 style2">
							<font color="#0033FF">Pastikan untuk mengisi formulir pendaftaran dengan data yang sebenar benarnya dan dapat di pertanggungjawabkan secara hukum.</font>
						</p>
						<hr>

						<div class="px-4">

							<h5 class="mb-3"><strong>Biodata Peserta </strong></h5>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="kategori">Cabang Olahraga</label>
									<select name="cabor" id="kategori" class="form-control" required>
										<option value="">-PILIH-</option>
										<?php foreach ($data->result() as $row) : ?>
											<option value="<?php echo $row->id_cabor; ?>">
												<?php echo $row->nm_cabor; ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group col-md-6">
									<label for="tanggal_lahir">Nomor/Kelas</label>

									<select name="kelas" class="kelas form-control" required>
										<option value="">-PILIH-</option>
									</select>


								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-7">
									<label for="name">Nama</label>
									<input type="text" class="form-control" id="nama_peserta" name="nama_peserta" required>
								</div>
								<div class="form-group col-md-3">
									<label for="nisn">NISN</label>
									<input type="text" class="form-control" id="nisn" name="nisn" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
								</div>
								<div class="form-group col-md-2">
									<label for="gender">Kelas Sekolah</label>
									<select name="kls_sekolah" id="kls_sekolah" class="form-control" required>
										<option selected disabled>-- Pilih --</option>
										<option value="VII">VI</option>
										<option value="VII">VII</option>
										<option value="VIII">VIII</option>
										<option value="IX">IX</option>

									</select>
								</div>

							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="tempat_lahir">Tempat Lahir</label>
									<input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" required>
								</div>
								<div class="form-group col-md-6">
									<label for="tanggal_lahir">Tanggal Lahir</label>
									<div class="input-group">
										<input type="text" class="form-control datetimepicker-input" id="tgl_lahir" data-toggle="datetimepicker" data-target="#datetimepicker" name="tgl_lahir" required />
										<div class="input-group-append">
											<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
										</div>
									</div>
								</div>

							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="gender">Jenis Kelamin</label>
									<select name="jns_kelamin" id="jns_kelamin" class="form-control" required>
										<option selected disabled>-- Pilih --</option>
										<option value="Laki-Laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>

								<div class="form-group col-md-6">
									<label for="golongan_darah">Golongan Darah</label>
									<select name="gol_darah" id="gol_darah" class="form-control" required>
										<option selected disabled>-- Pilih --</option>
										<option value="a">A</option>
										<option value="b">B</option>
										<option value="o">O</option>
										<option value="ab">AB</option>
									</select>
								</div>
							</div>
							<div class="form-row">

								<div class="form-group col-md-6">
									<label for="berat_badan">Berat Badan</label>
									<div class="input-group">
										<input type="text" class="form-control" id="berat_badan" name="berat_badan" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
										<div class="input-group-append">
											<span class="input-group-text">kg</span>
										</div>
									</div>
								</div>
								<div class="form-group col-md-6">
									<label for="tinggi_badan">Tinggi Badan</label>
									<div class="input-group">
										<input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
										<div class="input-group-append">
											<span class="input-group-text">cm</span>
										</div>
									</div>
								</div>


							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="nama_bapak">Nama Bapak</label>
									<input type="text" class="form-control" id="nama_bapak" name="nama_bapak" required>
								</div>
								<div class="form-group col-md-6">
									<label for="nama_ibu">Nama Ibu Kandung</label>
									<input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
								</div>
							</div>
							<h5 class="my-3"><strong>Kontak Person </strong></h5>
							<div class="form-row">

								<div class="form-group col-md-6">
									<label for="email">Email Wajib dari GMAIL yang aktif</label>
									<input type="email" class="form-control" id="email_peserta" name="email_peserta" placeholder="contoh@gmail.com" required>
								</div>
								<div class="form-group col-md-6">
									<label for="no_telp">Nomor Telepon / Handphone</label>
									<input type="text" class="form-control" id="hp" name="hp" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
								</div>
							</div>
							<div class="form-group">
								<label for="address">Alamat Lengkap</label>
								<input type="text" class="form-control" id="alamat_rumah" name="alamat_rumah" required>
							</div>
							<h5 class="mt-3"><strong>Data Prestasi Peserta</strong></h5>
							<div id="prestasi-div">
								<div class="form-row" id="prestasi-row">
									<div class="form-group col-md-6">
										<label for="name_event">Nama Kejuaraan</label>
										<input type="text" class="form-control" id="nm_kejuaraan" name="nm_kejuaraan" required>
									</div>
									<div class="form-group col-md-3">
										<label for="juara">Peringkat/Medali</label>
										<input type="text" class="form-control" id="medali" name="medali" required>
									</div>
									<div class="form-group col-md-3">
										<label for="tingkat">Tingkat</label>
										<select class="form-control" id="tingkat" name="tingkat" required>
											<option disabled selected>-- Pilih --</option>
											<option value="provinsi">Provinsi</option>
											<option value="national">Nasional</option>
											<option value="international">Internasional</option>
										</select>
									</div>

								</div>
							</div>
							<h5 class="mt-3"><strong>Data Video</strong> Youtube </h5>
							<div id="prestasi-div">
								<div class="form-row" id="prestasi-row">
									<div class="form-group col-md-12">
										<label for="name_event">Link Video Youtube Latihan dan pertandingan </label>
										<input type="text" class="form-control" id="link_youtube" name="link_youtube" placeholder="contoh : https://youtu.be/LiYEc7bUm-g atau https://www.youtube.com/watch?v=LiYEc7bUm-g" required>
									</div>


								</div>
							</div>
							<h5 class="my-3"><strong>Unggah Dokumen </strong></h5>
							<div class="form-row">
								<div class="form-group col-md-12">
									<label for="pas_foto">Pas Foto Setengah Badan [.jpg, .png, .jpeg Maksimal 2 MB]</label>
									<div class="custom-file">
										<input type="file" class="custom-file-input" data-tipe_file="foto" id="pas_foto" name="pas_foto" required="">
										<label class="custom-file-label" for="customFile">Pilih Berkas</label>
									</div>
								</div>
								<div class="form-group col-md-12">
									<label for="upload_sertifikat">Akte kelahiran [.pdf Maksimal 2 MB]</label>
									<div class="custom-file">
										<input type="file" class="custom-file-input" data-tipe_file="pdf" id="akte_kelahiran" name="akte_kelahiran" required="">
										<label class="custom-file-label" for="customFile">Pilih Berkas</label>
									</div>
								</div>
								<div class="form-group col-md-12">
									<label for="upload_sertifikat">Sertifikat / Piagam Penghargaan [.pdf Maksimal 2 MB]</label>
									<div class="custom-file">
										<input type="file" class="custom-file-input" data-tipe_file="pdf" id="sertifikat" name="sertifikat" required="">
										<label class="custom-file-label" for="customFile">Pilih Berkas</label>
									</div>
								</div>
							</div>


							<div class="form-row">
								<div class="form-group col-md-2">

									<button type="submit" class="btn btn-danger">Kirim <i class="fas fa-angle-double-down"></i></button>

								</div>
								<div class="form-group col-md-10">


									<label class="form-check-label">
										<input class="form-check-input" type="checkbox" required> centang disini untuk setuju | <font color="#FF0000">periksa kembali data dengan benar sebelum anda menyimpan, data yang sudah tersimpan tidak dapat di rubah kembali. </font>
									</label>
								</div>

							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>

	<!--============================= WELCOME TITLE =============================-->
	<!--//END WELCOME TITLE -->
	<!--============================= DETAILED CHART =============================-->

	<!--//END DETAILED CHART -->

	<!--============================= FOOTER =============================-->

	<?php
	$this->load->view('depan/bawah');
	?>

	<!--//END FOOTER -->
	<!-- jQuery, Bootstrap JS. -->



	<script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'theme/js/tether.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
	<!-- Plugins -->
	<script src="<?php echo base_url() . 'theme/js/slick.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'theme/js/waypoints.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'theme/js/counterup.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
	<script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
	<!-- Subscribe -->
	<script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
	<!-- Script JS -->
	<script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/bootstrap_datepicker/js/bootstrap-datepicker.js' ?>"></script>


	<script type="text/javascript">
		//membuat data posisi
		$(document).ready(function() {
			$('#kategori').change(function() {
				var id = $(this).val();
				$.ajax({
					url: "<?php echo base_url(); ?>index.php/registrasi/get_posisi",
					method: "POST",
					data: {
						id: id
					},
					async: false,
					dataType: 'json',
					success: function(data) {
						var html = '';
						var i;
						for (i = 0; i < data.length; i++) {
							html += '<option value=' + data[i].id_psb + '>' + data[i].nm_posisi + '</option>';
						}
						$('.kelas').html(html);

					}
				});
			});
		});
	</script>
	<script type="text/javascript">
		/**
		 * Date picker.
		 */
		// Tanggal Lahir.
		$('#tgl_lahir').datepicker({
			format: "dd-mm-yyyy",
			autoclose: true,
			todayHighlight: true,
			startView: 'decade'
		});
	</script>
	<script>
		// SUBMIT
		function submit_register() {
			document.forms.registerForm.submit();
		}

		$(document).ready(function() {
			bsCustomFileInput.init()
		})

		// Validasi File
		$('.custom-file-input').change(function() {
			pic_size = $(this)[0].files[0].size;
			type = $(this).val().split('.').pop();
			tipe_file = $(this).data('tipe_file');
			if (tipe_file == 'foto') {
				var arrType = ['jpg', 'png', 'jpeg']
				if (!arrType.includes(type)) {
					Swal.fire(

						'Tipe file harus .jpg, .png, .jpeg dan besar file maksimal 2 MB'

					)
					$(this).val('')
					return;
				}
			} else {
				if (type != 'pdf') {
					Swal.fire(

						'Tipe file harus .pdf dan Besar file maksimal 2 MB'

					)
					$(this).val('')
					return;
				}
			}
			if (pic_size > 2000000) {
				Swal.fire(
					'Ukuran file maksimal 2 MB',
					'error',
					'error'
				)
				$(this).val('')
				return;
			}
		})
	</script>
</body>

</html>