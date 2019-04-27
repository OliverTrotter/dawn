<?php
function db() {
  global $link;
  $link = mysqli_connect(“localhost”, “todouser”, “todo123”, “todolist”) or     die(“couldn’t connect to database”);
  return $link;
  if(db()) {
    echo “wawu !!! I’m connected”;
  } else {
    echo "oh no";
  }
}
?>
