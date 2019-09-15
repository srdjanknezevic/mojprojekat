

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
<td><a href="edit/{{$user->id}}"><button>edit</button></a></td>
<td><a href="delete/{{$user->id}}"><button>delete</button></a></td>

</tr>
@endforeach
</table>
<br>
<br>

<form action="/register">
<input type="submit" value="Kreiraj novog korisnika">
</form>


