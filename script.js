function popup() {
    $(function() {
        $('#global-modal').modal('show');
    });
}

$(document).ready(function(){
    $("#global-modal button").click(function(){
        $('#global-modal').modal('hide')
    });
  });
