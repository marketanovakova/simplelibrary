<?php
// Only process the form if $_POST isn't empty
if ( ! empty( $_POST ) ) {
  
  // Connect to MySQL, password is empty.
  $mysqli = new mysqli( 'localhost', 'root', '', 'simplelibrary' );
  
  // Check our connection
  if ( $mysqli->connect_error ) {
    die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
  }
  
  /* Insert our data: firstly name of the table and names of columns, then names belonging to the form. After submitting, the form creates Associative Array with key (name, e.g., bookID) and value, e.g. 1. We are sending the values to the given columns.*/
  $sql = "INSERT INTO publications ( id, isbn, title, numpages, edition, published, created_at ) VALUES ( '{$mysqli->real_escape_string($_POST['bookID'])}', '{$mysqli->real_escape_string($_POST['bookISBN'])}', '{$mysqli->real_escape_string($_POST['bookTitle'])}', '{$mysqli->real_escape_string($_POST['bookPages'])}', '{$mysqli->real_escape_string($_POST['bookEdition'])}', '{$mysqli->real_escape_string($_POST['bookPublished'])}', '{$mysqli->real_escape_string($_POST['bookDate'])}')";
  $insert = $mysqli->query($sql);
  
  // Print response from MySQL
  if ( $insert ) {
    echo "Success! Row ID: {$mysqli->insert_id}";
  } else {
    die("Error: {$mysqli->errno} : {$mysqli->error}");
  }
  
  // Close our connection
  $mysqli->close();
}
?>