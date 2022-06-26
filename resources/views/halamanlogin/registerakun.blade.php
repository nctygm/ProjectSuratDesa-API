<h1>Register Akun</h1>

<form action="/halamanlogin" method="POST">
    @csrf
    Nama : <input type="text" name="name"><br>
    email : <input type="text" name="email"><br>
    Password :<input type="text" name="password"><br>

    <input type="submit" value="Simpan"><br>
</form>
