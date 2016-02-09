$(function () {
  Autocomplete();
  $("#dataTable").DataTable();
  $(".dataTable").DataTable();
});

//FUNCTION JQUERY UPLOAD
$(function () {
  //Script For Jquery Upload
  var inputFile = $('input[name=file]');
  var progressBar = $('#progress-bar');
  listFilesOnServer();

  $('#upload-btn').on('click', function(event) {
    var fileToUpload = inputFile[0].files[0];
    // make sure there is file to upload
    if (fileToUpload != 'undefined') {
      // provide the form data
      // that would be sent to sever through ajax
      var formData = new FormData();
      formData.append("file", fileToUpload);
      var num = $('.uploadsItems').length;
      if(num == 4){
        alert('Anda sudah melebihi batas file upload. Maks file upload 4');
      }else{
        // now upload the file using $.ajax
        $.ajax({
          url: uploadURI,
          type: 'post',
          data: formData,
          processData: false,
          contentType: false,
          success: function(data) {
            alert(data);
            listFilesOnServer();
          },
          error: function(data){
            alert('Error di Upload anda');
          },
          xhr: function() {
            var xhr = new XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(event) {
              if (event.lengthComputable) {
                var percentComplete = Math.round( (event.loaded / event.total) * 100 );
                // console.log(percentComplete);

                $('.progress').show();
                progressBar.css({width: percentComplete + "%"});
                progressBar.text(percentComplete + '%');
              };
            }, false);
            return xhr;
          }
        });
      }
    }
  });

  $('body').on('click', '.remove-file', function () {
    var me = $(this);

    $.ajax({
      url: uploadURI,
      type: 'post',
      data: {file_to_remove: me.attr('data-file')},
      success: function(data) {
        alert(data);
        me.closest('li').remove();
      }
    });

  })

  function listFilesOnServer () {
    var items = [];

    $.getJSON(uploadURI, function(data) {
      $.each(data, function(index, element) {
        items.push('<li class="list-group-item uploadsItems"><input type="hidden" name ="UploadFile[]"/><a href="'+base_url+'uploads/slider/'+element+'" target="_blank">' + element  + '</a><div class="pull-right"><a href="#" data-file="' + element + '" class="remove-file"><i class="glyphicon glyphicon-remove"></i></a></div></li>');
      });
      $('.list-group').html("").html(items.join(""));
    });
  }

  $('body').on('change.bs.fileinput', function(e) {
    $('.progress').hide();
    progressBar.text("0%");
    progressBar.css({width: "0%"});
  });

});
