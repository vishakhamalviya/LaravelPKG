<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>

<div class="card col-md-6" style="margin-left: 400px; margin-top: 100px;">
<div class="card-header" style="text-align: center;">
    Contact List
</div>
  <div class="card-body">
	<div class="table-responsive">
	  <table class="table">
	  <caption>List of users</caption>
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">First</th>
	      <th scope="col">Last</th>
	      <th scope="col">Handle</th>
	      <th scope="col">Actions</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($contacts as $contact)
	    <tr>
	      <th scope="row">{{ $contact->id }}</th>
	      <td>{{ $contact->name }}</td>
	      <td>{{ $contact->email }}</td>
	      <td>{{ $contact->message }}</td>
	      <td><a href="editContact/{{ $contact->id }}">Edit</a> | <a href="deleteContact/{{ $contact->id }}">Delete</a> </td>
	    </tr>
	  @endforeach 
	  </tbody>
	</table>
	</div>
  </div>
</div>

</body>
</html>