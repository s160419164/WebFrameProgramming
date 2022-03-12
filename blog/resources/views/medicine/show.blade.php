<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>


<div class="container">
  <h2>Show Medicines</h2>
  <p>Combine .table-dark and .table-striped to create a dark, striped table:</p>
   @if ($message)  
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Form</th>
        <th>Formula</th>
        <th>Description</th>
        <th>Category</th>
        <th>Faskes_TK1</th>
        <th>Faskes_TK2</th>
        <th>Faskes_TK3</th>
      </tr>
    </thead>
    <tbody>       
      <tr>
        <td>{{ $message->Generic_Name}}</td>
        <td>{{ $message->Form}}</td>
        <td>{{ $message->Restriction_Formula}}</td>
        <td>{{ $message->Description}}</td>
        <td>{{ $message->category_id}}</td>
        <td>{{ $message->Faskes_TK1}}</td>
        <td>{{ $message->Faskes_TK2}}</td>
        <td>{{ $message->Faskes_TK3}}</td>
      </tr>
    </tbody>
  </table>
  @else
  <h2> Tidak ada data </h2>
    @endif
</div>
</body>
</html>
