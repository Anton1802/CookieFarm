var notyf = new Notyf();
function noperevod(events) {
events.preventDefault();
var href = events.currentTarget['href'];
$.ajax({
    url: href,
    success: function(response){
        if(response == 1){
            notyf.success('Success!');
            setTimeout(function(){
                document.location.reload(true);
            }, 2000);
        }
        else {
            notyf.error('Insufficient funds!')
        }
    }
});
};

jQuery(function (){

    $("input").change(function (){

        var data = new FormData();

        data.append('img', $('input')[0].files[0]);

        $.ajax({
            url:'/avatar',
            type:'POST',
            data: data,
            cache: false,
            processData: false,
            contentType : false,
            typeData: 'json',
            success: function(response){
                if(response == 1)
                {
                    notyf.success("Download Success!");
                    setTimeout(function(){
                        document.location.reload(true);
                    }, 2000);
                }
                else {
                    notyf.error("Download not Success!");
                }
        }
        });

    });
});
