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
                location="/shop";
            }, 300);
        }
        else {
            notyf.error('Insufficient funds!')
        }
    }
})
};
