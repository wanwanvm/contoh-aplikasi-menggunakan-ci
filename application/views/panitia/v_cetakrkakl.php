<html>
<head><body>
   
                                <!-- /.box-header -->

                              
                                    <table width="400px" height="100" border="1" cellpadding="1" cellspacing="0" bordercolor="#000000"  class="table" style="font-size:12px;">
                                            <thead>

                                                <tr style="background-color: #20B2AA;">
                                                    <th width="5%" style="width:10px;" rowspan="2">
                                                        <center>KODE<br><br></center>
                                                    </th>


                                                    <th width="45%" rowspan="2" class="align-middle">

                                                        <center> PROGRAM/KEGIATAN/OUTPUT/SUBOUTPUT/KOMPONEN/SUBKOMP/KODE/DETAIL <br><br> </center>

                                                    <th width="5%" colspan="4">

                                                        <center> PERHITUNGAN TAHUN <?php
                                                                                    $tahun = $this->session->userdata('tahun');
                                                                                    echo "$tahun";

                                                                                    ?> </center>
                                                    </th>


                                                </tr>
                                                <tr style="background-color: #9370DB;">



                                                    <th width="5%" height="193">
                                                        Volume
                                                    </th>

                                                    <th scope="col" width="15%">
                                                        Harga Satuan
                                                    </th>

                                                    <th scope="col" width="10%">
                                                        <center>Total</center>
                                                    </th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
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

                                                        $tot = $t['tot'];

                                                ?>
                                                        <tr style="background-color:#90EE90;">
                                                            <td height="22">
                                                                <div><b><u><?php echo " $kdgrandp"; ?></u></b></div>
                                                            </td>

                                                            <td><u><b><?php echo " $nmgrandp"; ?></b></u></td>
                                                            </td>


                                                            <td></td>
 															<td></td>
                                                            
                                                            <td align="right"><b><u>
                                                                        <?php echo 'Rp ' . number_format($tot); ?>
                                                                    </u></b></td>
                                                            
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
                                                                <tr style="background-color:#FFB6C1;">
                                                                    <td height="22">
                                                                        <div><?php echo "$kdprogram "; ?></div>
                                                                    </td>


                                                                    <td><?php echo "$nmprogram "; ?></td>

                                                                    <td></td>

                                                                    <td></td>
                                                                    <td align="right"><?php echo 'Rp ' . number_format($tot1); ?></td>
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
                                                                        <tr style="background-color:#E6E6FA;">
                                                                            <td height="22">
                                                                                <div><?php echo "$kdsubp "; ?></div>
                                                                            </td>


                                                                            <td><?php echo "$nmsubp "; ?></td>

                                                                            <td></td>

                                                                            <td></td>
                                                                            <td align="right"><?php echo 'Rp ' . number_format($tot2); ?></td>
                                                                    
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
                                                                                <tr style="background-color:#FFDAB9;">
                                                                                    <td height="22">
                                                                                        <div><?php echo "$kdkomp "; ?></div>
                                                                                    </td>


                                                                                    <td><?php echo "$nmkomp "; ?></td>

                                                                                    <td></td>

                                                                                    <td></td>
                                                                                    <td align="right"><?php echo 'Rp ' . number_format($tot3); ?></td>
                                                                       
                                                                                </tr>

                                                                                <?php


                                                                                $query4 = $this->db->query("SELECT * FROM tb_kegiatan WHERE idkomp='$idkomp'");
                                                                                foreach ($query4->result_array() as $d) :

                                                                                    $kdkegiatan = $d['kdkegiatan'];
                                                                                    $nmkegiatan = $d['nmkegiatan'];
                                                                                    $volume = $d['volume'];
                                                                                    $satuan = $d['satuan'];
                                                                                    $hargasatuan = $d['hargasatuan'];
                                                                                    $jumlah = $volume * $hargasatuan;
                                                                                ?>
                                                                                    <tr style="background-color:#AFEEEE;">
                                                                                        <td height="22">
                                                                                            <div><?php echo "$kdkegiatan "; ?></div>
                                                                                        </td>


                                                                                        <td><?php echo "$nmkegiatan "; ?></td>

                                                                                        <td><?php echo "$volume $satuan "; ?> </td>

                                                                                        <td align="right">
                                                                                            <?php echo 'Rp ' . number_format($hargasatuan); ?>
                                                                                        </td>
                                                                                        <td align="right"><?php echo 'Rp ' . number_format($jumlah); ?></td>
                                                                       
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
                                            </tbody>
                                  </table>

                              </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                
                    <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
     






    
</body></html>