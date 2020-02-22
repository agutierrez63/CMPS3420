<?php
class Page {
  public $content;
  public $pageTitle;
  public $headerTitle;
  public $style = array('/style/style.css');
  public $navLinks = array (
    "Home" => 'index.php',
  );

  // Page operations (member functions)
  public function __set($name, $value) {
    $this->$name = $value;
  }

  public function __get($name) {
    return ($this->$name);
  }

  public function displayNavLinks($buttons) {
      $html='';
      $html.="<div id='mySidenav' class='sidenav'>\n";
      $html.="<a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>\n";
      foreach($buttons as $nav => $link) {
          $html.="<a style='text-decoration: none;' href='{$link}'";
          if(strpos($_SERVER['PHP_SELF'], $link)!==false){
              $html.=" class='active'";
          }
          $html.=">{$nav}</a>\n";
      }
      $html.="</div>\n";
      $html.="<span style='color:#F8F8FF; font-size:30px; cursor:pointer' onclick='openNav()'>&#9776; Menu</span></div>";
      echo $html;
  }

  public function displayHeader() {
    $html='';
    $html.="<div class='myHeader'>\n";
    $html.="<header>\n";
    $html.="<h2>{$this->headerTitle}</h2>\n";
    $html.="</header>\n";
    $html.="</div>\n";
    echo $html;
  }

  public function displayFooter() {
      $html='';
      $html.="<footer>\n";
      $html.="<p>Today is ".date("l jS \of F Y h:i A")."</p>\n";
      $html.="</footer>\n";
      echo $html;
  }

  public function displayPage() {
    $html = '';
    $html = "\n<!DOCTYPE html>\n<html lang='en'>\n".
      "<head>\n<title>".$this->pageTitle."</title>\n";
      foreach($this->style as $style) {
        $html.= "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' />\n";
        $html.= "<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>\n";
        $html.= "<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>\n";
        $html.= "<link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>";
        $html.= "<link href='/images/Logo.png' rel='icon'>\n";
        $html.= "<meta charset='utf-8'>\n";
        $html.= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
      }
      $html.="</head>\n<body>\n";
      echo $html;
      $this->displayNavLinks($this->navLinks);
      $this->displayHeader();
      $html = $this->content;
      $this->displayFooter();
      $html.="</body>\n</html>\n";
      echo $html;
  }
}
?>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>