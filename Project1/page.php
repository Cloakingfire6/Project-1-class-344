<?php
class Page
{
  // class Page's attributes
  public $content;
  public $title = "Chef Ethan's Services";
  public $keywords = "Chef Ethan Services, Three Letter Abbreviation, 
                     All you'll need is my name and you'll find me";
  public $buttons = array("Home"   => "home.php",  
                        "Services" => "services.php", 
                    );

  // class Page's operations
  public function __set($name, $value)
  {
    $this->$name = $value;
  }

  public function Display()
  {
    echo "<html>\n<head>\n";
    $this -> DisplayTitle();
    $this -> DisplayKeywords();
    $this -> DisplayStyles();
    echo "</head>\n<body>\n";
    $this -> DisplayHeader();
    $this -> DisplayMenu($this->buttons);
    echo $this->content;
    $this -> DisplayFooter();
    echo "</body>\n</html>\n";
  }

  public function DisplayTitle()
  {
    echo "<title>".$this->title."</title>";
  }

  public function DisplayKeywords()
  {
    echo "<meta name='keywords' content='".$this->keywords."'/>";
  }

  public function DisplayStyles()
  { 
    ?>   
    <link href="styles.css" type="text/css" rel="stylesheet">
    <?php
  }

  public function DisplayHeader()
  { 
    ?>   
    <!-- page header -->
    <header>    
      <img src="Chefdance.gif" alt="Chef Ethan's personal service" height="70" width="70" /> 
      <h1>TLA Consulting</h1>
    </header>
    <?php
  }

  public function DisplayMenu($buttons)
  {
    echo "<!-- menu -->
    <nav>";

    while (list($name, $url) = each($buttons)) {
      $this->DisplayButton($name, $url, 
               !$this->IsURLCurrentPage($url));
    }
    echo "</nav>\n";
  }

  public function IsURLCurrentPage($url)
  {
    if(strpos($_SERVER['PHP_SELF'],$url)===false)
    {
      return false;
    }
    else
    {
      return true;
    }
  }

  public function DisplayButton($name,$url,$active=true)
  {
    if ($active) { ?>
      <div class="menuitem">
        <a href="<?=$url?>">
        <img src="chefmenu.gif" alt="" height="20" width="20" />
        <span class="menutext"><?=$name?></span>
        </a>
      </div>
      <?php
    } else { ?>
      <div class="menuitem">
      <img src="chefmenu.gif">
      <span class="menutext"><?=$name?></span>
      </div>
      <?php
    }  
  }

  public function DisplayFooter()
  {
    ?>
    <!-- page footer -->
    <footer>
      <p>&copy; Chef Ethan's personal services.<br />
    </footer>
    <?php
  }
}
?>

