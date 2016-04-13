
(function() {
  'use strict';
  var url = 'http://localhost:8000/user/';
  var deleteFail = function(id, token){

    $.ajax(url+"destroy/" + id,{
        headers: {'X-CSRF-TOKEN': token },
        type: 'Delete',
        error: function(result) {
          $('#deleteError').modal('show');
        },
        success:function(result) {
          deleteRow(id);
        }
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
      deleteFail(id, token);
      $('#deleteModal').modal('hide');
    });
    });
}());
