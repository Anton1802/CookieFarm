var notyf = new Notyf();
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
                }
                else {
                    notyf.error("Download not Success!");
                }
        }
        });

    });
});
