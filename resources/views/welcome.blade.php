<!DOCTYPE html>
<html>
    <head>
        <title>BonnyPrints</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Bonny Prints</div>
                <form id="myform" class="form-horizontal" role="form" action="/images" method="post" enctype="multipart/form-data">
                    <div id="form-container">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="Url_1">Url_1:</label>
                            <div class="col-sm-10">
                                <input type="url" class="form-control" name="Url_1" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="Url_2">Url_2:</label>
                            <div class="col-sm-10">
                                <input type="url" class="form-control" name="Url_2" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="Url_3">Url_3:</label>
                            <div class="col-sm-10">
                                <input type="url" class="form-control" name="Url_3" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="addUrl" class="btn btn-success">Add More Url</button>
                            <button id="submitBtn" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="album"></div>
        </div>
    </body>
</html>
