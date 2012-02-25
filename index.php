<!--
You are free to copy and use this sample in accordance with the terms of the
Apache license (http://www.apache.org/licenses/LICENSE-2.0.html)
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Google Maps API Sample</title>
    <style type="text/css">
      @import url("http://www.google.com/uds/css/gsearch.css");
      @import url("http://www.google.com/uds/solutions/localsearch/gmlocalsearch.css");
		v\:* {behavior:url(#default#VML);}
		   html, body {width: 100%; height: 100%}
		   body {margin-top: 0px; margin-right: 0px; margin-left: 0px; margin-bottom: 0px}
    </style>
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAA0bO-FPAaJkX47oB6YLmgehTnqaFJeyZdVcXIowO1wQWiy-lfRBRYgO8sS1WwwbNJhC0FCYPHw1jDAw"
      type="text/javascript"></script>
    <script src="http://www.google.com/uds/api?file=uds.js&amp;v=1.0" type="text/javascript"></script>

    <script src="http://www.google.com/uds/solutions/localsearch/gmlocalsearch.js" type="text/javascript"></script>
    <script type="text/javascript">

    function initialize() {
      if (GBrowserIsCompatible()) {
      
        // Create and Center a Map
        var map = new GMap2(document.getElementById("map_canvas"));
        map.setCenter(new GLatLng(66.4973084, 25.7253411), 13);
        map.addControl(new GLargeMapControl());
        map.addControl(new GMapTypeControl());
    
        // bind a search control to the map, suppress result list
        map.addControl(new google.maps.LocalSearch(), new GControlPosition(G_ANCHOR_BOTTOM_RIGHT, new GSize(10,20)));
      }
    }
    GSearch.setOnLoadCallback(initialize);

    </script>
  </head>
  <body onload="initialize()" onunload="GUnload()" style="font-family: Arial;border: 0 none;">
    <div id="map_canvas" style="width: 100%; height: 100%;"></div>
  </body>
</html>