<table>
<tr>
<th>Ime</th>
<th>Prezime</th>
<th>Email</th>
<th>Broj telefona</th>
</tr>

@foreach ($users as $user)
<tr>
<td>{{$user->ime}}</td>
<td>{{$user->prezime}}</td>
<td>{{$user->email}}</td>
<td>{{$user->broj}}</td>
</tr>
@endforeach
</table>
<br>
<br>

<form action="/register">
<input type="submit" value="Kreiraj novog korisnika">
</form>