<table width="451" border="0" align="center">
      <tr>
        <td width="118">NIM</td>
        <td width="323"><select name="kd_sopir" id="kd_sopir" onchange="changeValue(this.value)" >
        <option value=0>-Pilih-</option>
        <?php
        include('admin/koneksi.php');
         $tampil=$koneksi->query("SELECT * FROM tbsopir");
         $jsArray = "var dtMhs = new Array();\n";
         while ($row = $tampil->fetch_object()) {
            
        echo '<option value="' . $row->kd_sopir. '">' . $row->kd_sopir . '</option>';   
        $jsArray .= "dtMhs['" . $row->kd_sopir . "'] = {nama_sopir:'" . addslashes($row->nama_sopir) . "',tarif_sopir:'".addslashes($row->tarif_sopir)."'};\n";   
    }     
    ?>   
        </select></td>
      </tr>
      <tr>
        <td>Nama Mahasiswa</td>
        <td><input type="text" name="nama_sopir" id="nama_sopir"/></td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td><input type="text" name="tarif_sopir" id="tarif_sopir"/></td>
      </tr>
    </table>
    <script type="text/javascript">   
    <?php echo $jsArray; ?> 
    function changeValue(kd_sopir){ 
    document.getElementById('nama_sopir').value = dtMhs[kd_sopir].nama_sopir; 
    document.getElementById('tarif_sopir').value = dtMhs[kd_sopir].tarif_sopir; 
    }; 
    </script> 