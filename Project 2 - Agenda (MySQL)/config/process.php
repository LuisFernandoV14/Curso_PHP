<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;

  if(!empty($data)) {

    // Creating contact
    if($data["type"] === "create") {

      $name = $data["name"];
      $phone = $data["phone"];

      $query = "INSERT INTO contacts (name, phone) VALUES (:name, :phone)";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":name", $name);
      $stmt->bindParam(":phone", $phone);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Contact created";
    
      } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "Error: $error";
      }

    // Editing contact
    } else if($data["type"] === "edit") {

      $name = $data["name"];
      $phone = $data["phone"];
      $id = $data["id"];

      $query = "UPDATE contacts 
                SET name = :name, phone = :phone
                WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":name", $name);
      $stmt->bindParam(":phone", $phone);
      $stmt->bindParam(":id", $id);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Contact updated";
    
      } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "Error: $error";
      }

    // Deleting contact 
    } else if($data["type"] === "delete") {

      $id = $data["id"];

      $query = "DELETE FROM contacts WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);
      
      try {

        $stmt->execute();
        $_SESSION["msg"] = "Contact deleted";
    
      } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    }

    // Redirect HOME
    header("Location:" . $BASE_URL . "public/index.php");

  // Selecting contact
  } else {
    
    $id;

    if(!empty($_GET)) {
      $id = $_GET["id"];
    }

    // Getting single contact
    if(!empty($id)) {

      $query = "SELECT * FROM contacts WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      $contact = $stmt->fetch();

    // Getting all contacts
    } else {

      $contacts = [];

      $query = "SELECT * FROM contacts";

      $stmt = $conn->prepare($query);

      $stmt->execute();
      
      $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

  }

  // Mannually closing connection
  $conn = null;