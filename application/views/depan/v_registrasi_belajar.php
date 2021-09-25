<!DOCTYPE html>  
<html lang="en">  
<head>  
<title>Registration</title>  
<meta charset="utf-8">  
<meta http-equiv="X-UA-Compatible" content="IE=edge">  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<!-- Input File -->
<!-- Datetime Moment Tempus -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
	
	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   <!-- Latest compiled and minified CSS -->  
   <link href="<?php echo base_url('assets/bootstrap_datepicker/css/datepicker.css'); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

  
   <style type="text/css">  
    .form-box{  
     max-width: 100%;  
     position: relative;  
     margin: 5% auto;  
    }  
   </style>  
  </head>  
  <body>  
   <div class="wrapper">  
    <div class="container">  
     <div class="row">  
      <div class="form-box">  
       <div class="panel panel-primary">  
        <div class="panel-heading text-center">  
         <h3>Pendaftaran</h3>  
        </div>  
        <div class="panel-body">  
         <div class="row">  
           <div class="col-sm-12">  
             <?php echo $this->session->flashdata('msg'); ?>  
           </div>  
         </div>  
         <form action="<?php echo base_url(); ?>user/registration" method="post">  
          <div class="row">  
           <div class="col-sm-6">  
            <div class="form-group">  
                    <label class="control-label" for="fname">Nama</label>
                    <div >  
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required="">  
                        <span class="text-danger"><?php echo form_error('fname'); ?></span>  
                      </div>  
                  </div>  
           </div>  
           <div class="col-sm-6">  
            <div class="form-group">  
                    <label class="control-label" for="fname">NIS</label>  
                       
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required="">  
						
                        <span class="text-danger"><?php echo form_error('lame'); ?></span>  
                      </div>  
                 </div>  
           </div>  
          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
  
		  <div class="form-group col-md-3">
										<label for="berat_badan">Berat Badan</label>
										<div class="input-group">
											<input type="text" class="form-control" id="berat_badan" name="berat_badan" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
											<div class="input-group-append">
												<span class="input-group-text">kg</span>
											</div>
										</div>
									</div>
          <div class="form-group">  
                  <label class="control-label" for="pswd">Email</label>  
                    <div>  
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">  
                      <span class="text-danger"><?php echo form_error('email'); ?></span>  
                    </div>  
                </div>  
              <div class="form-group">  
                  <label class="control-label" for="pswd">Password</label>  
                    <div>  
                      <input type="password" class="form-control" id="pswd" name="password" placeholder="Password" required="">  
                      <span class="text-danger"><?php echo form_error('password'); ?></span>  
                    </div>  
              </div>  
			  <h5 class="mt-3">Data Prestasi Olahraga</h5>
								<div id="prestasi-div">
									<div class="form-row" id="prestasi-row">
										<div class="form-group col-md-3">
											<label for="name_event">Nama Kejuaraan</label>
											<input type="text" class="form-control" id="name_event" name="name_event" required="">
										</div>
										<div class="form-group col-md-2">
											<label for="juara">Juara</label>
											<input type="text" class="form-control" id="juara" name="juara" required="">
										</div>
										<div class="form-group col-md-2">
											<label for="penyelenggara">Penyelenggara</label>
											<input type="text" class="form-control" id="penyelenggara" name="penyelenggara" required="">
										</div>
										<div class="form-group col-md-2">
											<label for="tingkat">Tingkat</label>
											<select class="form-control" id="tingkat" name="tingkat">
												<option disabled selected>-- Pilih --</option>
												<option value="kota">Kota/Kabupaten</option>
												<option value="provinsi">Provinsi</option>
												<option value="national">Nasional</option>
												<option value="international">Internasional</option>
											</select>
										</div>
										<div class="form-group col-md-3">
											<label for="upload_sertifikat">Sertifikat (.pdf Maks 2 MB)</label>
											<div class="custom-file">
												<input type="file" class="custom-file-input"  id="upload_sertifikat" data-tipe_file="pdf" name="upload_sertifikat" required="">
												<label class="custom-file-label" for="customFile">Pilih Berkas</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="upload_ijazah">Ijazah Terakhir / STTB (Terlegalisir) (.pdf Maksimal 2 MB)</label>
									<div class="custom-file">
										<input type="file" required="required" class="custom-file-input" data-tipe_file="foto" id="upload_ijazah" name="upload_ijazah">
										<label class="custom-file-label" for="customFile">Pilih Berkas</label>
									</div>
								</div>
               <div class="form-group">  
                 <label class="control-label" for="cn-pswd">Confirm Password</label>  
                    <div>  
                      <input type="password" class="form-control" id="cn-pswd" name="confirmpswd" placeholder="Confirm Password" required="">  
                     <span class="text-danger"><?php echo form_error('confirmpswd'); ?></span>  
                   </div>  
                </div>  
				   <div class="form-group">  
                 <label class="control-label" for="cn-pswd">File Upload</label>  
                    <div>  
                      <input type="password" class="form-control" id="cn-pswd" name="confirmpswd" placeholder="Confirm Password" required="">  
                     <span class="text-danger"><?php echo form_error('confirmpswd'); ?></span>  
                   </div>  
                </div>  
				<div class="form-group col-md-6">
										<label for="tanggal_lahir">Tanggal Lahir</label>
										<div class="input-group">
	<input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir Sesuai Akte Kelahiran">
											<div class="input-group-append">
												<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
											</div>
										</div>
									</div>
               <div class="form-group">   
                  <div class="row">  
                   <div class="col-sm-offset-5 col-sm-3 btn-submit">  
                     <button type="submit" class="btn btn-success">Register</button>  
                    </div>  
                  </div>  
                </div>  
         </form>  
      </div>  
       <div class="panel-footer text-center">  
         <h5><a href="http://codesquery.com">Click Here for more tutorials</a></h5>  
       </div>  
      </div>  
      </div>  
     </div>  
   </div>  
   </div>  
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
  <script type="text/javascript">
/**
     * Date picker.
     */
    // Tanggal Lahir.
    $('#tgl_lahir').datepicker({
        format: "dd-mm-yyyy",
        autoclose: true,
        todayHighlight:true,
        startView:'decade'
    });
</script>

  <script>
	// Validasi File
	$('.custom-file-input').change(function() {
		pic_size = $(this)[0].files[0].size;
		type = $(this).val().split('.').pop();
		tipe_file = $(this).data('tipe_file');
		if (tipe_file == 'foto') {
			var arrType = ['jpg', 'png', 'jpeg']
			if (!arrType.includes(type)) {
				Swal.fire(
					
					'Tipe file harus .jpg, .png, .jpeg'
					
				)
				$(this).val('')
				return;
			}
		} else {
			if (type != 'pdf') {
				Swal.fire(
					
					'Tipe file harus .pdf'
					
				)
				$(this).val('')
				return;
			}
		}
		if (pic_size > 2000000) {
			Swal.fire(
				'Oops...',
				'Ukuran file maksimal 2 MB',
				'error'
			)
			$(this).val('')
			return;
		}
	})
</script>
  </body>  
 </html>  