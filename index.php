<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <br>
                <br>
                <h1 class="form-control bg-dark text-white text"><b>Live Search With Ajax</b<>
                </h1>

                <input type="text" name="search_text" id="search_text" class="form-group "
                    placeholder="Search with name">
            </div>

        </div>
        <div id="result">


        </div>
    </div>

</body>

</html>

<script type="text/javascript">
$(document).ready(function() {

    $('#search_text').keyup(function() {
        $(this).css("background-color", "yellow");
        var txt = $(this).val();


        if (txt != '') {

            $.ajax({
                url: "fetch.php",
                method: "post",
                data: {
                    search: txt
                },
                dataType: "text",
                success: function(data) {
                    $('#result').html(data);

                }



           });

        } else {
            $('#result').html('');

        }
    });
});
</script>