<?php

?>

<!DOCTYPE html>
<html>

<head>
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
  </script>
  <style>
    html,
    body,
    #myChart {
      height: 100%;
      width: 100%;
    }
  </style>
</head>

<body>
  <div id='myChart'></div>
  <script>
    var myData = [24, 68, 48, 70, 40, 15, 30];

    var myConfig = {
      "graphset": [{
        "type": "bar",
        "title": {
          "text": "Data Pulled from MySQL Database"
        },
        "scale-x": {
          "labels": ["Webster", "Parnel", "Dena", "Tyrell", "Martha", "Summer", "Linton"]
        },
        "series": [{
          "values": myData
        }]
      }]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: "100%",
      width: "100%"
    });
  </script>
</body>

</html>