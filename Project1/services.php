<?php
  require ("page.php");

  class ServicesPage extends Page
  {
    private $row2buttons = array(
                           "home cooking services" => "processorder.php",
                           );

    public function Display()
    {
      echo "<html>\n<head>\n";
      $this->DisplayTitle();
      $this->DisplayKeywords();
      $this->DisplayStyles();
      echo "</head>\n<body>\n";
      $this->DisplayHeader();
      $this->DisplayMenu($this->buttons);
      $this->DisplayMenu($this->row2buttons);
      echo $this->content;
      $this->DisplayFooter();
      echo "</body>\n</html>\n";
    }
  }

  $services = new ServicesPage();

  $services -> content ="<p>By coming to this site, you're a person who wants great meals whenever and however you want them! You've come to the right place my friend, take a look around and see what kind of service you would like.</p>";

  $services->Display();
?>
