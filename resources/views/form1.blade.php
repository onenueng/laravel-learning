<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/bootstrap-4.3.1/css/bootstrap.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container">
<form action="/insert" method="post">
<h1>Form Task</h1>
  <!-- <div class="form-group">
    <label for="exampleInputEmail1">id</label>
    <input type="text" class="form-control" id="exampleInputid1" aria-describedby="idHelp" placeholder="Enter id">
  </div> -->
  <div class="form-group">
    <label for="exampleInputtype1">type</label>
    <input type="text" class="form-control" id="exampleInputtype1" placeholder="type">
  </div>
  <div class="form-group">
    <label for="exampleInputname1">name</label>
    <input type="text" class="form-control" id="exampleInputname1" placeholder="ชื่อ">
  </div>
  <div class="form-group">
    <label for="exampleInputdetail1">detail</label>
    <input type="text" class="form-control" id="exampleInputdetail1" placeholder="รายละเอียด">
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">TRUE</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio1">FALSE</label>
  </div>
  <div>
  </div>
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!--Bootstrap cor css-->
<script src="{{url('js/bootstrap-4.3.1/js/bootstrap.js')"
</body>
</html>