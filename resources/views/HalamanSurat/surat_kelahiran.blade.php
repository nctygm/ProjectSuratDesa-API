<h1> CONTOH HALAMAN SURAT KELAHIRAN </h1><br>
<table>
    <thead>
        <tr>
            <th>Hubungan </th>
            <th>Nama Anak</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Jenis Kelamin </th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Alamat</th>
            <th>RT</th>
            <th>RW</th>
            <th>Tanggal Buat</th>
            <th>Bukti Kelahiran</th>
            <th>Kartu Keluarga</th>
            <th>KTP</th>
            <th>Bukti Nikah</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tblkelahirans as $tblkelahiran)
            <tr>
                <td>{{$tblkelahiran ->hubungan}}</td>
                <td>{{$tblkelahiran ->nama_anak}}</td>
                <td>{{$tblkelahiran ->tgl_lahir}}</td>
                <td>{{$tblkelahiran ->tempat_lahir}}</td>
                <td>{{$tblkelahiran ->jns_kelamin}}</td>
                <td>{{$tblkelahiran ->nama_ayah}}</td>
                <td>{{$tblkelahiran ->nama_ibu}}</td>
                <td>{{$tblkelahiran ->alamat}}</td>
                <td>{{$tblkelahiran ->rt}}</td>
                <td>{{$tblkelahiran ->rw}}</td>
                <td>{{$tblkelahiran ->tgl_buat}}</td>
                <td>{{$tblkelahiran ->buktikel_file}}</td>
                <td>{{$tblkelahiran ->kk_file}}</td>
                <td>{{$tblkelahiran ->ktp_file}}</td>
                <td>{{$tblkelahiran ->bukunikah_file}}</td>
                <td>
                    <a href="/HalamanSurat/{{$tblkelahiran->id}}/edit">Edit</a>
                    <a href="/HalamanSurat/{{$tblkelahiran->id}}" method="POST">Delete</a>
                    <form action="/HalamanSurat/{{$tblkelahiran->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>    
        @endforeach
        <tr>
            <td><a href="HalamanSurat/create">CREATE</td>
        </tr> 
      

    </tbody>
</table>