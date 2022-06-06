var notyf = new Notyf();
    $(function(){
        $('form').submit(function(e){
            var $form = $(this);
            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: $form.serialize(),
                success: function(response) {
                    if(response == 1){
                        notyf.success('Success!');
                        setTimeout(function(){
                            location="/cookies";
                        }, 3000)
                    }
                    else{
                        notyf.error('User not finded!')
                    }
                }
            });
            e.preventDefault();
        });
    });
