<?php

function getUsers(){
  global $db;
  $statement = $db->prepare(
    'SELECT fName, lName FROM users WHERE accountType = "visitor"'
  );
  $statement->execute();
  $users = $statement->fetchAll();
  $statement->closeCursor();
  return $users;
};

function getMoreUsers(){
  global $db;
  $statement = $db->prepare(
    'SELECT * FROM users WHERE accountType = "visitor"'
  );
  $statement->execute();
  $moreUsers = $statement->fetchAll();
  $statement->closeCursor();
  return $moreUsers;
}
