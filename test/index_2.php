<html>
  <head>
    <style type="text/css">
      div.imageSub { position: relative; }
      div.imageSub img { z-index: 1; }
      div.imageSub div {
        position: absolute;
        left: 15%;
        right: 15%;
        bottom: 0;
        padding: 4px;
      }
      div.imageSub div.blackbg {
        z-index: 2;
        color: #000;
        background-color: #000;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
        filter: alpha(opacity=50);
        opacity: 0.5;
      }
      div.imageSub div.label {
        z-index: 3;
        color: white;
      }
    </style>
  </head>
    <body>
      <div class="imageSub" style="width: 300px;"> <!-- Put Your Image Width -->
        <img src="../22.jpg" alt="Something" />
        <div class="blackbg">Label Goes Here</div>
        <div class="label">Label Goes Here</div>
      </div>
    </body>
</html>