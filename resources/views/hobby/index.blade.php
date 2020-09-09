<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>



<!-- Datatables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<table class="table" id="example" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">hobby</th>
      <th scope="col">type</th>
    </tr>
  </thead>
  <tbody>
  @foreach($hobbies as $hobby)
    <tr>
      <th scope="row">{{$hobby->id}}</th>
      <td>{{$hobby->name}}</td>
      <td>{{$hobby->hobby}}</td>
      <td>{{$hobby->type}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>