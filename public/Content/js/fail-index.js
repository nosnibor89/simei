
(function() {
  'use strict';
  var url = 'http://localhost:8000/fail/';
  var deleteFail = function(id, token){

    return $.ajax(url+"destroy/" + id,{
      headers: {'X-CSRF-TOKEN': token },
      type: 'Delete'
    } );
  };

  var  deleteRow = function(id) {
    var row = $('#'+id).parent().parent();
     row.remove();
  };

  $('.delete').on('click',function(e) {
    var id = this.id;
    var token = $('#token').val();
    $('#deleteModal').modal('show');

    $('#deleteButton').on('click', function(){
      deleteFail(id, token).done(deleteRow(id));
      $('#deleteModal').modal('hide');
    } );

  });

}());
