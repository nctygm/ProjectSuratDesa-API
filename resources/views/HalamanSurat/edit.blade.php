<h1>EDIT DATA</h1>

<form action="/HalamanSurat/{{$tblkelahirans->id}}" method="POST">
    @method('PUT')
    @csrf
    Hubungan : <input type="text" name="hubungan" value="{{$tblkelahirans->hubungan}}"><br>
    Nama Anak : <input type="text" name="nama_anak" value="{{$tblkelahirans->nama_anak}}"><br>
    Tanggal Lahir :<input type="text" name="tgl_lahir" value="{{$tblkelahirans->tgl_lahir}}"><br>
    Tempat Lahir : <input type="text" name="tempat_lahir" value="{{$tblkelahirans->tempat_lahir}}"><br>
    Jenis Kelamin : <input type="text" name="jns_kelamin" value="{{$tblkelahirans->jns_kelamin}}"><br>
    Nama Ayah : <input type="text" name="nama_ayah" value="{{$tblkelahirans->nama_ayah}}"><br>
    Nama Ibu : <input type="text" name="nama_ibu" value="{{$tblkelahirans->nama_ibu}}"><br>
    Alamat : <input type="text" name="alamat" value="{{$tblkelahirans->alamat}}"><br>
    RT : <input type="text" name="rt" value="{{$tblkelahirans->rt}}"><br>
    RW : <input type="text" name="rw" value="{{$tblkelahirans->rw}}"><br>
    Tanggal Buat : <input type="text" name="tgl_buat" value="{{$tblkelahirans->tgl_buat}}"><br>
    Surat Bukti Kelahiran : <input type="text" name="buktikel_file" value="{{$tblkelahirans->buktikel_file}}"><br>
    Kartu Keluarga : <input type="text" name="kk_file" value="{{$tblkelahirans->kk_file}}"><br>
    KTP : <input type="text" name="ktp_file" value="{{$tblkelahirans->ktp_file}}"><br>
    Surat/Buku Nikah : <input type="text" name="bukunikah_file" value="{{$tblkelahirans->bukunikah_file}}"><br>

    <input type="submit" value="Simpan"><br>
</form>

