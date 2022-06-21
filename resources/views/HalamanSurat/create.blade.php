<h1>FESSAL GOBLOG!</h1>

<form action="/HalamanSurat" method="POST">
    @csrf
    Hubungan : <input type="text" name="hubungan"><br>
    Nama Anak : <input type="text" name="nama_anak"><br>
    Tanggal Lahir :<input type="text" name="tgl_lahir"><br>
    Tempat Lahir : <input type="text" name="tempat_lahir"><br>
    Jenis Kelamin : <input type="text" name="jns_kelamin"><br>
    Nama Ayah : <input type="text" name="nama_ayah"><br>
    Nama Ibu : <input type="text" name="nama_ibu"><br>
    Alamat : <input type="text" name="alamat"><br>
    RT : <input type="text" name="rt"><br>
    RW : <input type="text" name="rw"><br>
    Tanggal Buat : <input type="text" name="tgl_buat"><br>
    Surat Bukti Kelahiran : <input type="text" name="buktikel_file"><br>
    Kartu Keluarga : <input type="text" name="kk_file"><br>
    KTP : <input type="text" name="ktp_file"><br>
    Surat/Buku Nikah : <input type="text" name="bukunikah_file"><br>

    <input type="submit" value="Simpan"><br>
</form>

