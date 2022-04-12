<?php




 $ch = curl_init();

 $url = "https://jsonplaceholder.typicode.com/users";
 
 $users_listing = get_transient( 'prefix_users-plugin' );
 
if ( false === $users_listing ) {
    $response = wp_remote_get( 'https://jsonplaceholder.typicode.com/users' );
    set_transient( 'prefix_users-plugin', $response, 60*60 );
}

 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


 $resp = curl_exec($ch);
 if($e = curl_error($ch)) {
 	echo $e;
 }
 else {
 	$data = json_decode($resp, true);
 
 }

curl_close($ch);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */


define('ROOTDIR', plugin_dir_path(__FILE__));
include (ROOTDIR.'show.php');
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
       
	<table class="table table-hover">
		<h1>Users</h1>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Last</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data as $row):?>
    <tr>
      <td >*</td>
      <td><?= htmlspecialchars($row["name"])?></td>
      <td><?= htmlspecialchars($row["username"])?></td>
      <td><?= htmlspecialchars($row["email"])?></td>
      <td><a href="show.php?id=<?=$row["id"]?>" class="btn btn-primary">
      	view
      </a>
      <a href="" class="btn btn-danger">
      	edit
      </a>
      </td>
    </tr>
<?php endforeach;?>

  </tbody>
</table>
</main>
</body>
</html>

 