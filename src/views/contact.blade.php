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
<div class="card-header">
	<a href="{{route('contactList')}}">Contact List</a>
    Contact Us
</div>
  <div class="card-body">
	<form action="{{ route('contact')}}" method="post">
	@csrf
	  <div class="mb-3">
	    <label for="name" class="form-label">Name</label>
	    <input type="name" name="name" class="form-control" id="name">
	  </div>
	  <div class="mb-3">
	    <label for="email" class="form-label">Email</label>
	    <input type="email" name ="email" class="form-control" id="email">
	  </div>
	  <div class="mb-3">
	    <label for="message" class="form-label">Message</label>
	    <textarea class="form-control" name="message" id="message"></textarea>
	  </div>
	  <button type="submit" value="submit" class="btn btn-primary">Submit</button>
	</form>
  </div>
</div>

</body>
</html>