<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Pengambalian Barang </title>
    <style>
        table tr td{
            font-size: 13px;
        }
        table tr .text{
            text-align: center ;
            font-size: 17px;
            letter-spacing: 6px ;
            text-decoration: underline;
        }
        table tr .text2{
            text-align: center ;
        }
        table tr .NO{
            font-size: 15px;
            text-align: center ;
        }
        table tr .pengantar{
            font-size: 17px;
            text-align: left ;
        }
        table tr .data{
            font-size: 15px;
            font-family: "Garamond"; 
        }

    </style>
</head>
<body>
    <center>
        <table>
            <br>
            <br>
            <br>
            <br>
            <tr>
                <td><img src="<?php echo base_url()?>template/img/logojb.png" alt="logo jawa barat" width="95" height="95"></td>
                <td>
                    <center>
                    <font size="4">LAPORAN DATA PENGEMBALIAN BARANG</font><br>
                    <font size="5">SMK NAHDLATUL ULAMA KOTA TASIKMLAYA</font><br>
                    <font size="4">SK Dinas Pendidikan No. 421.5/1628/Dikmen</font><br>
                    <font size="4">Jalan Argasari No.31 Kota Tasikmalya Telp (0265) 313275</font><br>
                    <font size="3">Site:</font> <font size="3" color="blue"><u>smknutasikmalya.sch.id</u></font><br>
                    </center>
                </td>
                <td><img src="<?php echo base_url()?>template/img/smknu.png" alt="smk nu" width="100" height="100"></td>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
        </table>
        <br>
                <font size="4"><?= $title ?></font><br>
                <font size="4"><?= $subtitle ?></font>
                <br>       
                <br>       
                <div class="card-body">
                <div class="table-responsive">
                    <table border="1" height="100" width="700">
         <thead>
             <tr>
                <th size="4">No</th>
                <th size="4">Tanggal</th>
                <th size="4">Nama Barang</th>
                <th size="4">Jumlah</th>
             </tr>
         </thead>
         <tbody>
					<?php $no=1; foreach ($datafilter as $row) : 
		
					?>
             <tr>
                 <td class="data" align="center" valign="middle"><?= $no++; ?></td>
 				 <td class="data" valign="middle"><?= date('d F Y', strtotime($row->tanggal)); ?></td>
				 <td class="data" valign="middle"><?php echo $row->nama_barang ?></td>
				 <td class="data" align="center" valign="middle"><?php echo $row->jumlah_masuk ?></td>
             </tr>
             <?php endforeach; ?>
         </tbody>
     </table>
                </div>
                </div>
            </div>
    </center>
</body>
</html>
<script>
		window.print();
</script>
   