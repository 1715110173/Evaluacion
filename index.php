    <?php
        $db_host = "am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com"; // 
        $db_name = "a7svm16t1snoavyo"; //nombre de base de datos
        $db_user = "dvi7zcu1f6adzi1m"; //nombre de usuario
        $db_password = "a9ptyiqgiblmwt89 ";  //contraseña 
    
      $connection = mysqli_connect('am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'dvi7zcu1f6adzi1m', 'a9ptyiqgiblmwt89');
    
     mysqli_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
    @mysqli_query("SET NAMES 'utf8'");

   $sql_query = "SELECT * FROM productos";
    $result = mysqli_query($connection, $sql_query);
    $rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>
