$( document ).ready(function() {
    var formGroup       = $("#form-container > .form-group");
    var myform          = $("#myform");
    var album           = $( "#album" );
    var addUrl          = $("#addUrl");
    var formContainer   = $("#form-container");
    var btnSuccess      = $(".btn-success");
    $(function() {
        addUrl.click(function () {
            var  formLeng = ++formGroup.length ;
            console.log(formLeng);
            formContainer.append(
                '<div class="form-group">'+
                ' <label class="control-label col-sm-2" for="Url_' + formLeng + '">Url_' + formLeng + ':</label>'+
                '<div class="col-sm-10"> '+
                '<input type="url" class="form-control" name="Url_' + formLeng + '">'+
                '</div>'+
                '</div>');
        });
        myform.submit(function(event) {
            event.preventDefault();
            btnSuccess.prop('disabled', true);
            $.ajax({
                url: event.currentTarget.action,
                type: event.currentTarget.method,
                dataType: 'json',
                data: myform.serialize(),
                success: function(data) {
                    album.empty();
                    getAlbumBuilder(data);
                    btnSuccess.prop('disabled', false);
                }
            });
        });
    });
    
    function getAlbumBuilder(data) {
        $.each( data, function( index, objValue ) {
            $.each( objValue , function( key, value ) {
                if (((index+1)%2) == 0 )
                    album.append( '<div id="'+index+'" class="evenDiv"> <img class="evenImg" src="albums/'+ value +'" /></div>' );
                else
                    album.append( '<div id="'+index+'" class="oddDiv"> <img class="oddImg" src="albums/'+ value +'" /></div>' );
                if( index != 0  ){
                    var indexId = $("#" + index);
                    var topVal  = index * -8;
                    indexId.css("margin-left", "-40px");
                    indexId.css("margin-top", topVal+"px");
                }
            });
        });
    }
});