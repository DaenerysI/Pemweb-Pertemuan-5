<table id="data_show">
    <thead>
        <tr>
            <td>No. </td>
            <td>Nama Mahasiswa </td>
            <td>NIM </td>
            <td>Program Studi </td>
            <td>Jenis Kelamin </td>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'connect.php';
        $s_prodi = "";
        $s_keyword = "";
        if (isset($_POST['prodi'])) {
            $s_prodi = $_POST['prodi'];
            $s_keyword = $_POST['keyword'];
        }

        $search_prodi = '%' . $s_prodi . '%';
        $search_keyword = '%' . $s_keyword . '%';
        $no = 1;
        $query = "SELECT * FROM data_mahasiswa WHERE prodi LIKE ? AND (nama_mahasiswa LIKE ? OR nim LIKE ? OR prodi LIKE ? OR jenis_kelamin LIKE ?) ORDER BY nim ASC";
        $mhs = $db1->prepare($query);
        $mhs->bind_param('sssss', $search_prodi, $search_keyword, $search_keyword, $search_keyword, $search_keyword);
        $mhs->execute();
        $res1 = $mhs->get_result();

        if ($res1->num_rows > 0) {
            while ($row = $res1->fetch_assoc()) {
                $no;
                $nama_mahasiswa = $row['nama_mahasiswa'];
                $nim = $row['nim'];
                $prodi = $row['prodi'];
                $jenis_kelamin = $row['jenis_kelamin'];
        ?>
        <tr>
            <td>
                <?php echo $no++; ?>
            </td>
            <td>
                <?php echo $nama_mahasiswa; ?>
            </td>
            <td>
                <?php echo $nim; ?>
            </td>
            <td>
                <?php echo $prodi; ?>
            </td>
            <td>
                <?php echo $jenis_kelamin; ?>
            </td>
        </tr>
        <?php }
        } else { ?>
        <tr>
            <td colspan='6'>Data Tidak Ada</td>
        </tr>
        <?php } ?>
    </tbody>
</table>