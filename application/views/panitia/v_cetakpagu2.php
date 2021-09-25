<html><body>
<style>
table {
  border-collapse: collapse;
}

table tr {
  border-bottom: 1px solid black;
}

table tr:last-child {
  border: 0;
}
</style>

<style type="text/css">
<!--
.style3 {font-size: 12px}
-->
</style>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style3 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
-->
</style>
<table  width="772">
  <tr>
    <td width="766"> <div align="center"><strong><span class="style1">RINCIAN KERTAS KERJA SATKER T.A 
        <?php
                                                                                    $tahun = $this->session->userdata('tahun');
                                                                                    echo "$tahun";

                                                                                    ?>
    </span><span class="style1">    </span></strong></div></td>
  </tr>
</table>
<table  width="774" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="144"><span class="style1 style3">LEMBAGA</span></td>
    <td width="8"><span class="style1 style3">:</span></td>
    <td width=""><span class="style1 style3">BADAN AMIL ZAKAT NASIONAL</span></td>
  </tr>
  <tr>
    <td><span class="style1 style3">UNIT ORGANISASI</span></td>
    <td><span class="style1 style3">:</span></td>
    <td><span class="style1 style3">BAZNAS KABUPATEN TANGERANG</span></td>
  </tr>
  <tr>
    <td><span class="style1 style3">UNIT KERJA</span></td>
    <td><span class="style1 style3">:</span></td>
    <td><span class="style1 style3"> BAZNAS KABUPATEN TANGERANG</span></td>
  </tr>
  <?php

                                            
                                             $query_alokasi = $this->db->query("SELECT sum(tb_kegiatan.pagu) as tot FROM tb_program, tb_grandp, tb_subprogram, 
											 tb_komponen, tb_kegiatan where tb_kegiatan.idkomp=tb_komponen.idkomp and tb_subprogram.idsubp=tb_komponen.idsubp 
											 AND tb_subprogram.idprogram=tb_program.idprogram and tb_program.idgrandp=tb_grandp.idgrandp and tb_grandp.tahun='$tahun'");
                                                    foreach ($query_alokasi->result_array() as $tx) :
													

                                   $alokasi = $tx['tot'];?>
										 
  <tr>
    <td><span class="style1 style3">ALOKASI</span></td>
    <td><span class="style1 style3">:</span></td>
    <td><span class="style1 style3"><?php echo 'Rp ' . number_format($alokasi); ?></span></td>
  </tr>

	  <?php endforeach; ?>	
 
  <tr>
    <td><span class="style3"></span></td>
    <td><span class="style3"></span></td>
    <td><span class="style3"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="775" rules="cols" bgcolor="#FFFFFF" border="1">
  <tr border="1">
    <td width="44" rowspan="2" bgcolor="#999999"><span class="style3">KODE</span></td>
    <td width="329" rowspan="2" bgcolor="#999999"><div align="justify" class="style3">PROGRAM/KEGIATAN/OUTPUT/SUBOUTPUT/ KOMPONEN/SUBKOMP/KODE/DETAI<br>
   </div></td>
    <td colspan="6" bgcolor="#999999"><div align="center" class="style1 style3"><strong>PERHITUNGAN TAHUN 						
      <?php
                                                                                    $tahun = $this->session->userdata('tahun');
                                                                                    echo "$tahun";

                                                                                    ?>
    </strong></div></td>
  </tr>
  <tr border="1" rules="cols">
    <td width="51" bgcolor="#66FFFF"><div align="center" class="style3"><strong><span class="style1">Volume</span></strong></div></td>
    <td width="79" bgcolor="#66FFFF"><div align="center" class="style3"><strong><span class="style1">Harga Satuan </span></strong></div></td>
    <td width="65" bgcolor="#66FFFF"><div align="center" class="style3"><strong><span class="style1">Anggaran</span></strong></div></td>
    <td width="72" bgcolor="#66FFFF"><div align="center" class="style1 style3"><strong>Realisasi</strong></div></td>
    <td width="87" bgcolor="#66FFFF"><div align="center" class="style1 style3"><strong>Bertambah/ Berkurang</strong></div></td>
    <td width="32" bgcolor="#66FFFF"><div align="center" class="style1 style3"><strong>%</strong></div></td>
  </tr>
   												
												<?php

                                                foreach ($data->result_array() as $i) :

                                                    $kdgrandp = $i['kdgrandp'];
                                                    $nmgrandp = $i['nmgrandp'];
                                                    $idgrandp = $i['idgrandp'];
                                                    // $kdprogram = $i['kdprogram'];
                                                    /*  $kdsubp = $i['kdsubp'];
                                                        $kdkomp = $i['kdkomp'];
                                                        $nmkomp = $i['nmkomp'];
                                                        $kdkegiatan = $i['kdkegiatan'];

                                                        $nmkegiatan = $i['nmkegiatan'];

                                                        $volume = $i['volume'];
                                                        $satuan = $i['satuan'];

                                                        $hargasatuan = $i['hargasatuan'];
                                                        $pagu = $i['pagu'];
*/
                                                    $query_total = $this->db->query("SELECT sum(tb_kegiatan.pagu) as tot FROM tb_program, tb_grandp, tb_subprogram, tb_komponen, tb_kegiatan where tb_kegiatan.idkomp=tb_komponen.idkomp and tb_subprogram.idsubp=tb_komponen.idsubp AND tb_subprogram.idprogram=tb_program.idprogram and tb_program.idgrandp=tb_grandp.idgrandp and tb_grandp.idgrandp='$idgrandp'");
                                                    foreach ($query_total->result_array() as $t) :

                                                        $tot = $t['tot'];?>
  <tr>
    <td><span class="style1 style3"><b><u><?php echo " $kdgrandp"; ?></u></b></span></td>
    <td><u><span class="style1 style3"><b><?php echo " $nmgrandp"; ?></b></span></u></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td> 
    <div align="right" class="style1 style3"><strong><?php echo 'Rp ' . number_format($tot); ?></strong></div></td>
    <td><span class="style3"></span></td>
    <td><span class="style3"></span></td>
    <td><span class="style3"></span></td>
  </tr>
         <?php


                                                        $query = $this->db->query("SELECT * FROM tb_program WHERE idgrandp='$idgrandp'");
                                                        foreach ($query->result_array() as $a) :

                                                            $nmprogram = $a['nmprogram'];
                                                            $kdprogram = $a['kdprogram'];
                                                            $idprogram = $a['idprogram'];

                                                            $query_total1 = $this->db->query("SELECT sum(tb_kegiatan.pagu) as tot1 FROM tb_program, tb_subprogram, tb_komponen, tb_kegiatan where tb_kegiatan.idkomp=tb_komponen.idkomp and tb_subprogram.idsubp=tb_komponen.idsubp AND tb_subprogram.idprogram=tb_program.idprogram  and tb_program.idprogram='$idprogram'");
                                                            foreach ($query_total1->result_array() as $t1) :

                                                                $tot1 = $t1['tot1'];

                                                        ?>
  <tr bgcolor="#CCCCCC">
    <td><span class="style3"><?php echo "$kdprogram "; ?></span></td>
    <td width="329"><span class="style3"><?php echo "$nmprogram "; ?></span></td>
    <td><span class="style3"></span></td>
    <td><span class="style3"></span></td>
    <td>
    <div align="right" class="style1 style3"><strong><?php echo 'Rp ' . number_format($tot1); ?></strong></div></td>
    <td><span class="style3"></span></td>
    <td><span class="style3"></span></td>
    <td><span class="style3"></span></td>
  </tr>
    <?php


                                                                $query2 = $this->db->query("SELECT * FROM tb_subprogram WHERE idprogram='$idprogram'");
                                                                foreach ($query2->result_array() as $b) :

                                                                    $nmsubp = $b['nmsubp'];
                                                                    $kdsubp = $b['kdsubp'];
                                                                    $idsubp = $b['idsubp'];
                                                                    $query_total2 = $this->db->query("SELECT sum(tb_kegiatan.pagu) as tot2 FROM tb_subprogram, tb_komponen, tb_kegiatan where tb_kegiatan.idkomp=tb_komponen.idkomp and tb_subprogram.idsubp=tb_komponen.idsubp and tb_subprogram.idsubp='$idsubp'");
                                                                    foreach ($query_total2->result_array() as $t2) :

                                                                        $tot2 = $t2['tot2'];
                                                                ?>
                                                                     
  <tr>
    <td><span class="style3"><?php echo "$kdsubp "; ?></span></td>
    <td><span class="style3"><?php echo "$nmsubp "; ?></span></td>
    <td><span class="style3"></span></td>
    <td><span class="style3"></span></td>
    <td>
    <div align="right" class="style1 style3"><strong><?php echo 'Rp ' . number_format($tot2); ?></strong></div></td>
    <td><span class="style3"></span></td>
    <td><span class="style3"></span></td>
    <td><span class="style3"></span></td>
  </tr>
   <?php


                                                                        $query3 = $this->db->query("SELECT * FROM tb_komponen WHERE idsubp='$idsubp'");
                                                                        foreach ($query3->result_array() as $c) :

                                                                            $nmkomp = $c['nmkomp'];
                                                                            $kdkomp = $c['kdkomp'];
                                                                            $idkomp = $c['idkomp'];
                                                                            $query_total3 = $this->db->query("SELECT sum(tb_kegiatan.pagu) as tot3 FROM tb_komponen, tb_kegiatan where tb_kegiatan.idkomp=tb_komponen.idkomp  and tb_komponen.idkomp='$idkomp'");
                                                                            foreach ($query_total3->result_array() as $t3) :

                                                                                $tot3 = $t3['tot3'];
                                                                        ?>
  <tr>
    <td><span class="style3"><?php echo "$kdkomp "; ?></span></td>
    <td><span class="style3"><?php echo "$nmkomp "; ?></span></td>
    <td><span class="style3"></span></td>
    <td><span class="style3"></span></td>
    <td>
    <div align="right" class="style1 style3"><strong><?php echo 'Rp ' . number_format($tot3); ?></strong></div></td>
    <td><span class="style3"></span></td>
    <td><span class="style3"></span></td>
    <td><span class="style3"></span></td>
  </tr>
    <?php


                                                                                $query4 = $this->db->query("SELECT * FROM tb_kegiatan WHERE idkomp='$idkomp'");
                                                                                foreach ($query4->result_array() as $d) :

                                                                                    $kdkegiatan = $d['kdkegiatan'];
                                                                                    $nmkegiatan = $d['nmkegiatan'];
                                                                                    $volume = $d['volume'];
                                                                                    $satuan = $d['satuan'];
                                                                                    $hargasatuan = $d['hargasatuan'];
																					$sisapagu = $d['sisapagu'];
                                                                                    $jumlah = $volume * $hargasatuan;
																					$tambah= $jumlah-$sisapagu;
																					$persen = ($tambah / $jumlah)*100;
																					$angka_format = number_format($persen,1);
                                                                                ?>
  <tr bgcolor="#CCFFFF">
    <td><span class="style1 style3"><?php echo "$kdkegiatan "; ?></span></td>
    <td><span class="style1 style3"><?php echo "$nmkegiatan "; ?></span></td>
    <td><span class="style1 style3"><?php echo "$volume $satuan "; ?></span></td>
    <td>
    <div align="right" class="style1 style3"><?php echo 'Rp ' . number_format($hargasatuan); ?></div></td>
    <td>
    <div align="right" class="style1 style3"><?php echo 'Rp ' . number_format($jumlah); ?></div></td>
    <td> <div align="right" class="style1 style3"><?php echo 'Rp ' . number_format($tambah); ?></div></td>
    <td> <div align="right" class="style1 style3"><?php echo 'Rp ' . number_format($sisapagu); ?></div></td>
    <td><span class="style3"><?php echo $angka_format; ?></span></td>
  </tr>
       <?php endforeach; ?>
                                                                            <?php endforeach; ?>
                                                                        <?php endforeach; ?>
                                                                    <?php endforeach; ?>
                                                                <?php endforeach; ?>
                                                            <?php endforeach; ?>
                                                        <?php endforeach; ?>
                                                    <?php endforeach; ?>
                                                <?php endforeach; ?>	
</table>
<p>&nbsp;	</p>
</body></html>
