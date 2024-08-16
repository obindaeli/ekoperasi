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
            <th>Sumber Anggaran</th>
            <th>Nilai Pagu</th>
            
      </tr>
      
      <?php
            $no=1; 
            foreach($cetak as $data) :?>
            <tr>
                <td class="text-center"><?php echo $no++; ?> </td>
                <td><?php echo $data->nama_sumber; ?> </td>
                <td class="text-center"><?php echo rupiah($data->total); ?> </td>
            </tr>
        <?php endforeach; ?> 
      
</table></body></html>