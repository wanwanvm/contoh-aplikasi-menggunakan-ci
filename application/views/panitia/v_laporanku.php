<html><head><title>kwitansi</title></head><body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
	<?php
		$query_total = $this->db->query("SELECT * from tb_penyaluran where kdpenyaluran='$kode'");
		foreach ($query_total->result_array() as $t) :
			$nmpenerima = $t['nmpenerima'];
			$idlvl5 = $t['idlvl5'];
			$jabatan = $t['jabatan'];
			$alamat = $t['alamat'];
			$tanggal = $t['tgltransaksi'];
			$nominal = $t['nompenyaluran'];

		?>
		<!-- Save for Web Slices (kwitansi.jpg) -->
		
		<table id="Table_01" width="1333" height="806" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td colspan="9">
                  <img src="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_01.gif' ?>" width="1333" height="69" alt=""> </td>
			</tr>
			<tr>
				<td colspan="6" rowspan="2">
					<img src="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_02.gif' ?>" width="871" height="172" alt="">
				</td>
				<td colspan="2" background="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_03.gif' ?>" height="62"><?= "Nomor : $kode <br>"; ?>
				</td>
				<td rowspan="2">
					<img src="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_04.gif' ?>" width="63" height="172" alt="">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<img src="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_05.gif' ?>" width="399" height="110" alt="">
				</td>
			</tr>
			<tr>
				<td colspan="2" rowspan="2">
					<img src="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_06.gif' ?>" width="307" height="89" alt="">
				</td>
				<td colspan="7" background="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_07.gif' ?>" height="50">

					<?php function penyebut($nilai)
					{
						$nilai = abs($nilai);
						$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
						$temp = "";
						if ($nilai < 12) {
							$temp = " " . $huruf[$nilai];
						} else if ($nilai < 20) {
							$temp = penyebut($nilai - 10) . " belas";
						} else if ($nilai < 100) {
							$temp = penyebut($nilai / 10) . " puluh" . penyebut($nilai % 10);
						} else if ($nilai < 200) {
							$temp = " seratus" . penyebut($nilai - 100);
						} else if ($nilai < 1000) {
							$temp = penyebut($nilai / 100) . " ratus" . penyebut($nilai % 100);
						} else if ($nilai < 2000) {
							$temp = " seribu" . penyebut($nilai - 1000);
						} else if ($nilai < 1000000) {
							$temp = penyebut($nilai / 1000) . " ribu" . penyebut($nilai % 1000);
						} else if ($nilai < 1000000000) {
							$temp = penyebut($nilai / 1000000) . " juta" . penyebut($nilai % 1000000);
						} else if ($nilai < 1000000000000) {
							$temp = penyebut($nilai / 1000000000) . " milyar" . penyebut(fmod($nilai, 1000000000));
						} else if ($nilai < 1000000000000000) {
							$temp = penyebut($nilai / 1000000000000) . " trilyun" . penyebut(fmod($nilai, 1000000000000));
						}
						return $temp;
					}

					function terbilang($nilai)
					{
						if ($nilai < 0) {
							$hasil = "minus " . trim(penyebut($nilai));
						} else {
							$hasil = trim(penyebut($nilai));
						}
						return $hasil;
					}


					// $angka = 1530093;
					echo terbilang($nominal);
					?>
				</td>
			</tr>
			<tr>
				<td colspan="7">
					<img src="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_08.gif' ?>" width="1026" height="39" alt="">
				</td>
			</tr>
			<tr>
				<td rowspan="10">
					<img src="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_09.gif' ?>" width="71" height="410" alt="">
				</td>
				<td colspan="3" background="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_10.gif' ?>" height="47"><?php echo 'Rp ' . number_format($nominal); ?>
				</td>
				<td colspan="5" rowspan="2">
					<img src="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_11.gif' ?>" width="752" height="57" alt="">
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<img src="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_12.gif' ?>" width="510" height="10" alt="">
				</td>
			</tr>
			<tr>
				<td rowspan="8">
					<img src="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_13.gif' ?>" width="236" height="353" alt="">
				</td>
				<td colspan="7" background="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_14.gif' ?>" height="47">Pembayaran belanja barang sesuai sssss
				</td>
			</tr>
			<tr>
				<td colspan="7">
					<img src="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_15.gif' ?>" width="1026" height="10" alt="">
				</td>
			</tr>
			<tr>
				<td colspan="7" background="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_16.gif' ?>" height="46"><?= "<br>Nama Penerima : $nmpenerima <br>"; ?></td>
			</tr>
			<tr>
				<td colspan="7">
					<img src="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_17.gif' ?>" width="1026" height="11" alt="">
				</td>
			</tr>
			<tr>
				<td colspan="7" background="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_18.gif' ?>" height="47"><?= "Alamat : $alamat <br>"; ?>
				</td>
			</tr>
			<tr>
				<td colspan="7">
					<img src="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_19.gif' ?>" width="1026" height="44" alt="">
				</td>
			</tr>
			<tr>
				<td colspan="5" rowspan="2">
					<img src="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_20.gif' ?>" width="795" height="148" alt="">
				</td>
				<td colspan="2" background="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_21.gif' ?>" height="36"><?= " $tanggal  <br>"; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<img src="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_22.gif' ?>" width="231" height="112" alt="">
				</td>
			</tr>
			<tr>
				<td colspan="3" background="<?php echo 'localhost/baznas/theme/images/kwitansi/kwitansi_23.gif' ?>" height="41">nama Ketua</td>
				<td colspan="2" background="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_24.gif' ?>" height="41">Nama Bendahara</td>
				<td colspan="4" background="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_25.gif' ?>" height="41">Nama penerima
				</td>
			</tr>
			<tr>
				<td colspan="9">
					<img src="<?php echo base_url() . 'theme/images/kwitansi/kwitansi_26.gif' ?>" width="1333" height="24" alt="">
				</td>
			</tr>
			<tr>
				<td>
					<img src="<?php echo base_url() . 'theme/images/kwitansi/spacer.gif' ?>" width="71" height="1" alt="">
				</td>
				<td>
					<img src="<?php echo base_url() . 'theme/images/kwitansi/spacer.gif' ?>" width="236" height="1" alt="">
				</td>
				<td>
					<img src="<?php echo base_url() . 'theme/images/kwitansi/spacer.gif' ?>" width="98" height="1" alt="">
				</td>
				<td>
					<img src="<?php echo base_url() . 'theme/images/kwitansi/spacer.gif' ?>" width="176" height="1" alt="">
				</td>
				<td>
					<img src="<?php echo base_url() . 'theme/images/kwitansi/spacer.gif' ?>" width="236" height="1" alt="">
				</td>
				<td>
					<img src="<?php echo base_url() . 'theme/images/kwitansi/spacer.gif' ?>" width="54" height="1" alt="">
				</td>
				<td>
					<img src="<?php echo base_url() . 'theme/images/kwitansi/spacer.gif' ?>" width="231" height="1" alt="">
				</td>
				<td>
					<img src="<?php echo base_url() . 'theme/images/kwitansi/spacer.gif' ?>" width="168" height="1" alt="">
				</td>
				<td>
					<img src="<?php echo base_url() . 'theme/images/kwitansi/spacer.gif' ?>" width="63" height="1" alt="">
				</td>
			</tr>
		</table>
		<?php endforeach; ?>
		<!-- End Save for Web Slices -->
	</body></html>