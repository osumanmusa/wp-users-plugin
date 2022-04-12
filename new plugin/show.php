<?php 
$id = $_GET["id"];

 $ch = curl_init();

 $url = "https://jsonplaceholder.typicode.com/users/$id";

 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


 $resp = curl_exec($ch);
 if($e = curl_error($ch)) {
 	echo $e;
 }
 else {
 	$data = json_decode($resp, true);
 	/*print_r($data);*/
 }

curl_close($ch);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<main>
  <div class="text-center py-4">
<h1><?= $data["name"]?>'s Details</h1>
</div>
<hr>

  <div class="container well">
    

<div class="row col-md-12">
  <div class="col-md-6">
  <dl>Name : <?= $data["name"]?></dl>
</div>
<div class="col-md-6">
  <dl>Username : <?= $data["username"]?></dl>
</div>
  

  
</div>
<div class="row col-md-12">
  <div class="col-md-6">
  <dl>Email : <?= $data["email"]?></dl>
  
</div>
<div class="col-md-6">
  <dl>Phone : <?= $data["phone"]?></dl>
</div>
  

  
</div>
<div class="row col-md-12">
  <div class="col-md-6">
  <dl>Website : <?= $data["website"]?></dl>
</div>

  

  
</div>



  
    

  </div>
       
	
</main>
</body>
</html>

 