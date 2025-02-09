<!DOCTPE html>
<html>
<head>
<title>Custome Complaints Records</title>
</head>
<style>
    .button
{
	text-align: center;
	width: 150px;
	height: 50px;
	font-size:20px ;
	margin-top: 20px;
	border-radius: 5px;
    color:rgb(5, 1, 34);
    font-weight: bold;
    color:blue;
    margin-right: 10px;
}

    </style>
<body>
@if(session('message'))
        <div class = "alert alert-success">
          {{session('message')}}
</div>
@endif
<form name = "CueDis" method="get" action="/" style="text-align:center;">
      
<table border = "1" style = "align:centre">
<tr>
<td>Id</td>
<td>BrCode</td>
<td>Complaints No</td>
<td>Date</td>
<td>Mobile No</td>
<td>Type</td>
<td>Region</td>
<td>Vehicle</td>
<td>complaints</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->brcode }}</td>
<td>{{ $user->compno }}</td>
<td>{{ $user->compdate }}</td>
<td>{{ $user->mobileno }}</td>
<td>{{ $user->comptype }}</td>
<td>{{ $user->region}}</td>
<td>{{ $user->vehtype}}</td>
<td>{{ $user->complaints }}</td>

</tr>
@endforeach
</table>
<div style ="margin-left:570px;float:centre;">    
			  <button class = button type="submit" id ="Submit" style ="color:green" >Home</button>
</div>
@csrf 
</form>
 
</body>
</html>
