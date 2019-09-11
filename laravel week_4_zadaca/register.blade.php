



<head>
<style>

a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: red;
}
</style>

</head>
   <h2>Register</h2>
   <form method="POST" action="/register">
       {{ csrf_field() }}
       <div class="form-group">
           <label for="ime">Ime:</label>
           <input type="text" class="form-control" id="ime" name="ime">
       </div>
       <div class="form-group">
           <label for="prezime">Prezime:</label>
           <input type="text" class="form-control" id="prezime" name="prezime">
       </div>
       <div class="form-group">
           <label for="email">Email:</label>
           <input type="email" class="form-control" id="email" name="email">
       </div>
       <div class="form-group">
           <label for="broj">broj:</label>
           <input type="number" class="form-control" id="broj" name="broj">
       </div>
       <div class="form-group">
           <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
       </div>
   </form>


<a href="/users" class="button">KORISNICI</a>