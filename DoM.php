<?php
$page = file_get_contents('https://www.vpnbook.com/');
  $doc = new DOMDocument();
  @$doc->loadHTML($page);
  $divs = $doc->getElementsByTagName('ul');
  $tmp=0;
  foreach($divs as $div) {

        if ($div->getAttribute('class') === 'square') {
                echo "<pre>";
                var_dump( $div->nodeValue);
                echo "</pre>";
              }


}
?>