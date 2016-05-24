
<?php
//Reference: PHP and MySQL Web Development, author Welling & Thomson
//connect to the database
function db_connect() {
   $result = new mysqli('localhost', 'group07', 'password', 'db_le');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}

?>
