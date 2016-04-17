(function() {
  'use strict';
  //Orders count by techs
  var url1 = "http://localhost:8000/reporttechorders";
  $.ajax(url1,{
    success: function(data){
      new Morris.Bar({
          // ID of the element in which to draw the chart.
          element: 'orders-by-tech-chart',
          data: data,
          xkey: 'name',
          ykeys: ['value'],
          labels: ['Ordenes']
      });
    }
  });

  //Orders count by techs
  var url2 = "http://localhost:8000/reportipmactorders";
  $.ajax(url2,{
    success: function(data){
      // console.log(JSON.parse(data));

      new Morris.Donut({
          // ID of the element in which to draw the chart.
          element: 'orders-by-impacts',
          data: data

      });
    }
  });

}());
