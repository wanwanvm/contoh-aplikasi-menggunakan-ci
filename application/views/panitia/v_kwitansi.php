<html><head></head><body>
<?php 
  $nik2 = $this->input->get('nik');

		$query_total = $this->db->query("SELECT * FROM `peserta` WHERE nik=$nik2");
		foreach ($query_total->result_array() as $t) :
				$nik = $t['nik'];
                $nama = $t['nama'];
               $jns_klmn = $t['jns_klmn'];
                $tgl_lhr = $t['tgl_lhr'];
             $umurt = $t['umur'];
          $instansi = $t['instansi'];

              $jns_pekerjaan = $t['jns_pekerjaan'];
                   $nohp = $t['nohp'];
                    $alamat = $t['alamat'];
			
					 $lahir=new DateTime($t['tgl_lhr']);
                        $today=new DateTime();
                        $umur=$today->diff($lahir);

?>
<table width="111" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="101"><div align="center">K1-38-38</div></td>
  </tr>
</table>
<p>&nbsp;
</p>
<table width="764" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="135" rowspan="6"><img src="<?php echo base_url() . 'theme/images/kwitansi/log_kemenpora.png' ?>"></td>
    <td>NIK</td>
    <td>:</td>
    <td><?= "$nik"; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nama </td>
    <td>:</td>
    <td><?= "$nama"; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Umur </td>
    <td>:</td>
    <td><?php echo $umur->y; echo " Tahun, "; echo $umur->m; echo " Bulan, dan "; echo $umur->d; echo " Hari" ;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tanggal registrasi</td>
    <td>:</td>
    <td>26 - 02 - 2021</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tanggal Vaksin </td>
    <td>:</td>
    <td> 26 - 02 - 2021 </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="135">Estimasi Waktu Vaksin </td>
    <td width="10">:</td>
    <td width="390">08:00 - 16.00 WIB </td>
    <td width="94">&nbsp;</td>
  </tr>
</table>
<p>Keterangan : <br>
  1. Harap Membawa KTP dan Ballpoint<br>
  2. Tetap menjaga protokol kesehatan
  <br>
  3. Wajib hadir di GBK pada pukul 07.55 WIB<br>
  4. Program vaksinasi berlangsung selama 26  Februari 2021 dengan jumlah peserta &plusmn; 800 orang, <br>
  untuk itu dimohon untuk disiplin terhadap waktu yang telah di tentukan.</p>
<table width="520" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC"><div align="center"><strong>Skrining Sebelum Vaksinasi COVID-19</strong></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<table width="520" border="1" cellpadding="1" cellspacing="1">
  <tr bgcolor="#CCCCCC">
    <td><div align="center">No.</div></td>
    <td><div align="center">Pemeriksaan</div></td>
    <td> <div align="center">Hasil </div></td>
  </tr>
  <tr>
    <td><div align="center">1</div></td>
    <td>&nbsp;Suhu</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="35"><div align="center">2</div></td>
    <td width="207">&nbsp;Tekanan Darah </td>
    <td width="260">&nbsp;</td>
  </tr>
</table>
<br>
<table width="520" border="1" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td><div align="center">No.</div></td>
    <td><div align="center">Pertanyaan</div></td>
    <td>
    <div align="center">Kondisi</div></td>
  </tr>
  <tr>
    <td><div align="center">1</div></td>
    <td>&nbsp;Apakah ada Kontak dengan orang yang sedang dalam pemeriksaan/terkonfirmasi/sedang dalam perawatan COVID-19 dalam waktu 14 hari terakhir? </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="26"><div align="center">2</div></td>
    <td width="378">&nbsp;Jika pertanyaan nomor 1 (satu ) ya dan mengalami gejala demam batuk/pilek/sesak napas dalam 7 hari terakhir ? </td>
    <td width="78">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">3</div></td>
    <td>Apakah anda pernah terkonfirmasi menderita COVID-19 ? </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">4</div></td>
    <td> Apakah anda sedang hamil/menyusui?</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2"><div align="center"></div>            <div align="center">5</div></td>
    <td>Pertanyaan untuk vaksinasi ke-1 <br>
    Apakah anda memiliki riwayat alergi berat seperti sesak napas, bengkak dan urtikaria seluruh badan atau reaksi berat lainnya karena vaksin? <br></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pertanyaan untuk vaksinasi ke-2<br>
Apakah anda memiliki riwayat alergi berat seperti sesak napas, bengkak dan urtikaria seluruh badan setelah divaksinasi COVID-19 Sebelumnya ? </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">6</div></td>
    <td>Apakah anda sedang menderita penyakit jantung, penyakit ginjal kronis/cuci darah dan penyakit hati/liver ? </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">7</div></td>
    <td>Apakah anda sedang menderita dan mendapat pengobatan penyakit kanker ? </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">8</div></td>
    <td>Apakah anda sedang mendapat pengobatan untuk gangguan pembekuan darah, defisiensi imun dan penerima produk darah/transfusi ? </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">9</div></td>
    <td>Apakah anda memiliki riwayat penyakit epilepsi ? </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">10</div></td>
    <td>Apakah anda menderita penyakit diabetes melitus ? </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">11</div></td>
    <td>Apakah anda menderita HIV ? </td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<table width="520" border="1" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td width="26"><div align="center">No.</div></td>
    <td width="378"><div align="center">Pertanyaan</div></td>
    <td width="78">
      <div align="center">Kondisi</div></td>
  </tr>
  <tr>
    <td><div align="center">12</div></td>
    <td>Apakah anda memiliki penyakit paru ( asma, PPOK ) ? </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">13</div></td>
    <td>Apakah anda mendapatkan vaksinasi lain kurang dari satu bulan ke belakang ? </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="6"><div align="center">14</div>
        <div align="center"></div>
        <div align="center"></div>
        <div align="center"></div>
        <div align="center"></div>
        <div align="center"></div></td>
    <td>Pertanyaan tambahan bagi sasaran lansia (&gt;= 60 tahun) : </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Apakah anda mengalami kesulitan untuk naik 10 anak tangga ? </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Apakah anda sering merasa kelelahan ? </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Apakah anda memiliki 5 atau lebih dari 11 penyakit berikut ( hipertensi, diabetes, kanker, penyakit paru kronis, serangan jantung, gagal jantung kongestif, nyeri dada, asma, nyeri sendi, stroke dan penyakit ginjal ) ? </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Apakah anda mengalami kesulitan berjalan kira kira 100 sampai 200 meter ? </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Apakah anda mengalami penurunan berat badan yang bermakna dalam setahun terakhir ? </td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<br>
<p></p>
<?php endforeach; ?>

</body></html>
