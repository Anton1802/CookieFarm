<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/resource/css/main.css">
    <link rel="shortcut icon" href="/resource/img/cookie.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <title>Login</title>
</head>
<body>

    <?php require_once('header.php') ?>

    <div class="auth">
        <h1>Auth</h1>
        <form action="/login_submit" method="POST">
            <label>Login:</label>
            <input type="text" name="login">
            <label>Password:</label>
            <input type="text" name="password">
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

    <?php require_once('footer.php') ?>

</body>

<script src="/resource/js/jquery.min.js" charset="utf-8"></script>
<script src="/resource/js/burger.js" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

<script>
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
                        location="/cookies";
                    }
                    else{
                        notyf.error('User not finded!')
                    }
                }
            });
            e.preventDefault();
        });
    });
</script>

</html>
