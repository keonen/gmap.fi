<?php
echo '<?xml version="1.0" encoding="utf-8" ?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>guest@webbix.tk</title>
  <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="/atom.xml" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="/rss.xml" />

  <link rel="icon" href="/static/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="/static/favicon.ico" type="image/x-icon" />

  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" title="Default" />

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  
  <!-- MINIFY: -->
  <script type="text/javascript" src="javascript/jquery.hotkeys-0.7.9.js"></script>
  <script type="text/javascript" src="javascript/jquery.browser.js"></script>
  <script type="text/javascript" src="javascript/jquery.konami.js"></script>

  <script type="text/javascript" src="javascript/cli.js"></script>
  <!-- TO: <script type="text/javascript" src="xkcd_cli.js"></script> -->
  
  <!-- TO: <script type="text/javascript" src="xkcd_cli_all.js"></script> -->
 </head>
 <body> 
  <div id="pagealert" title="Press any key for next page of text"> --More-- </div>
  <div id="indicators"><span id="alt-indicator">Alt-</span><span id="ctrl-indicator">Ctrl-</span> <span id="scroll-indicator">SCR LOCK</span></div>

  <div id="screen">
<font size="2">
   <div id="display">
    <noscript>
      <p>Sorry, the CLI requires JavaScript to work. Please turn on JavaScript, or try the <a href="/1/">GUI Interface</a>.</p>
    </noscript>
    </div>
   <div id="bottomline">
    <span id="inputline"><span id="prompt"></span><span id="lcommand"></span><span id="cursor" >&nbsp;</span><span id="rcommand"></span></span><span id="spinner"></span>
   </div>
  </font>
  </div>
 </body>
</html>