(function() {
  'use strict';
  //Orders count by techs
  var url = "http://localhost:8000/reporttechorders";
  $.ajax(url,{
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

}());
