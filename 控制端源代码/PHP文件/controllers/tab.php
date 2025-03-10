<?php
if (is_file("../config/DBClass.php")) {
  require_once("../config/DBClass.php");
} else {

  require_once("../../config/DBClass.php");
}

class Tab extends DBClass
{
  private $table = "tab";

  private $id;
  private $title;
  private $icon;
  private $url;
  private $created_at;
  private $updated_at;
  private $status;

  function setParams($data_array = null, $data_files = null)
  {
    if (isset($data_array) && is_array($data_array)) {
      if (isset($data_array['id']))
        $this->id = $data_array['id'];
      if (isset($data_array['title']))
        $this->title = $data_array['title'];
      if (isset($data_array['url']))
        $this->url = $data_array['url'];
      if (isset($data_array['created_at'])) {
        $this->created_at = $data_array['created_at'];
      }
      if (isset($data_array['status'])) {
        $this->status = $data_array['status'] == "on";
      } else {
        $this->status = 0;
      }

      if (isset($data_array['updated_at'])) {
        $this->updated_at = $data_array['updated_at'];
      }
    }


    if (isset($data_files) && is_array($data_files)) {
      if (isset($data_files['image']))
        $this->icon = $data_files['image'];
    }
  }


  function getLast()
  {
    $path = str_replace("controllers", "", (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT'])));


    $arr = $this->fetchAll($this->query("SELECT * FROM $this->table ORDER BY id desc limit 5"));

    foreach ($arr as $key => $value) {
      $arr[$key]["icon_url"] = "{$path}images/tab/{$value['icon']}";
    }
    return $arr;
  }


  function getAll()
  {
    $path = str_replace("controllers", "", (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT'])));

    $arr = $this->fetchAll($this->query("SELECT * FROM $this->table"));

    foreach ($arr as $key => $value) {
      $arr[$key]["icon_url"] = "{$path}images/tab/{$value['icon']}";
    }
    return $arr;
  }


  function getAllEnable()
  {
    $path = str_replace("controllers", "", (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT'])));

    $arr = $this->fetchAll($this->query("SELECT * FROM $this->table WHERE status=1"));

    foreach ($arr as $key => $value) {
      $arr[$key]["icon_url"] = "{$path}images/tab/{$value['icon']}";
    }
    return $arr;
  }

  function getById($id)
  {
    $this->id = $id;
    $sql = "SELECT * FROM $this->table WHERE id='$this->id'";
    return $this->fetchArray($this->query($sql));
  }


  function update()
  {

    $erreur = "";

    if ($erreur == "") {
      $image = "tab_item_" . $this->id . ".png";
      if (isset($this->icon) && substr($_FILES['image']['type'], 0, 5) == "image") {
        move_uploaded_file($_FILES['image']['tmp_name'], "../images/tab/tab_item_" . $this->id . ".png");
      }

      $sql = "UPDATE $this->table SET title = '$this->title',  url= '$this->url',  icon= '$image',status= '$this->status' , updated_at = now() WHERE id='$this->id'";
      try {
        $this->query($sql);
        $_SESSION['success'] = "<b>DONE!! </b> The tab has been updated.";
        echo '<script> window.location.href = "index.php?page=tab&success"; </script>';
      } catch (Exception $e) {
        $_SESSION['error'] = " Tab not updated";
      }
    }
  }
}
