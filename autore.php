<!DOCTYPE html>
<!-- saved from url=(0041)http://fiddle.jshell.net/dkwtd16h/2/show/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">

  
  

  
  
  

  

   <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>

  

  

  

  
   

  

  <style type="text/css">
    html, body {
    height: 100%;
    margin: 0;
}

body {
    display: -webkit-flex;
   
}

#container {
  flex: 1;
}

.flex1 {
  flex: 1;
  border: 1px solid red;
}
  </style>

  <title>Highcharts Demo</title>

  
    




<script type="text/javascript">//<![CDATA[

$(function () {
    window.m = Morris.Donut({
      element: 'container',
      resize: true,
      data: [
        {label: "Download Sales", value: 12},
        {label: "In-Store Sales", value: 30},
        {label: "Mail-Order Sales", value: 20}
      ]
   });
   $(window).on("resize", function(){
      m.redraw();
   });
});
//]]> 

</script>

  
</head>

<body>
  <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/raphael-min.js" type="text/javascript"></script>
<script src="js/morris.min.js" type="text/javascript"></script>
<div class="flex1">Some block....</div>
<div id="container">
</div>
  
  <script>
  // tell the embed parent frame the height of the content
  if (window.parent && window.parent.parent){
    window.parent.parent.postMessage(["resultsFrame", {
      height: document.body.getBoundingClientRect().height,
      slug: "dkwtd16h"
    }], "*")
  }
</script>





</body></html>