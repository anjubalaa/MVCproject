<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">

<div class="row">
<div class="col col-12 col-sm-6 col-m-6 col-lg-6 "></div>
<form action="\busread" method="post">

{{csrf_field()}}
<table class="table">
<tr>
    <td>Bus Name</td>
    <td><input name="bname" class="form_control"></td>
</tr>
<tr>
    <td>Bus NO</td>
    <td><input name="bno" class="form_control"></td>
</tr>
<tr>
    <td>Driver Name</td>
    <td><input name="dname" class="form_control"></td>
</tr>
<tr>
    <td>Route</td>
    <td><input name="broute" class="form_control"></td>
</tr>
<tr>
   
    <td><button class="btn btn-SECONDARY">Submit</button></td>
</tr>
</table>
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
</body>
</html>