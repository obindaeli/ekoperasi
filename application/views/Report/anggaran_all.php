<!DOCTYPE html>
<html><head>
	<title></title>
  <style>
    .docs {
        border-collapse: collapse;
    }
    .docs, th, td {
        font-size: 12px;
        border: 1px solid black;
    }
    .docs th, td {
        padding: 5px;
    }
    .docs th, td {
        padding: 5px;
        
    }
    .docs th {
        background-color: #dde0dd;
        color: black;
    }
    .docs span{
        color: blue;
    }
    .fter{
      border-style:none
    }
    .fter td{
      border-style:none;
    }
</style>
</head><body>
  <table width="100%" class="docs">
      <tr>
        <th>No</th>
        <th>Nama OPD</th>
        <th>DAU</th>
        <th>PAD</th>
        <th>DAK</th>
        <th>DBH PUSAT</th>
        <th>DIF</th>
        <th>SILPA</th>
        <th>BKP</th>
        <th>DBH PROVINSI</th>
      </tr>
      
            <?php
            $no=0;
            foreach ($cetak as $row):
            $no++;
            echo "
                    <tr>
                        <td>$no</td>
                        <td>$row->nama_opd</td>
                        <td>".rupiah($row->pad)."</td>
                        <td>".rupiah($row->dau)."</td>
                        <td>".rupiah($row->dak)."</td>
                        <td>".rupiah($row->silpa)."</td>
                        <td>".rupiah($row->dbhp)."</td>
                        <td>".rupiah($row->dif)."</td>
                        <td>".rupiah($row->bkp)."</td>
                        <td>".rupiah($row->dbhpv)."</td>
                    </tr>
                ";
                
                endforeach;
            
            ?>
      
</table></body></html>