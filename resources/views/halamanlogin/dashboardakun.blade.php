<h1> DASHBOARD AKUN </h1><br>
<table>
    <thead>
        <tr>
            <th>Nama </th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user ->name}}</td>
                <td>{{$user ->email}}</td>
                <td>{{$user ->password}}</td>
                <td>
                    
                </td>
            </tr>    
        @endforeach
        <tr>
            <td><a href="halamanlogin/registerakun">CREATE</td>
        </tr> 
      

    </tbody>
</table>