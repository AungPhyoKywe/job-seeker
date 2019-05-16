<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<center><h5>Job Seeker Report</h5></center><hr>

	<table class="table">
  <thead>
    <tr>
      <th scope="col">Job Seeker Name</th>
      <th scope="col">Job Name</th>
      <th scope="col">Applied Date</th>
      <th scope="col">User Profile</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($applylist as $p)
    <tr>
      <th scope="row">{{$p->name}}</th>
      <td>{{$p->job_name}}</td>
      <td>{{$p->created_at}}</td>
      <td><img src="upload/{{$p->pic_path}}"class="rounded-circle" width="50px"height="50px"alt="User Image"></td>
    </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>