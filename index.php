<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <title>YT Thumb Downloader</title>
    <meta name="description" content="ThumbDown is an Ad-Free Youtube Thumbnail Downloader made by Aamir Khan. Try it out!">
    <meta name="author" content="Aamir Khan">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="asset/app.css">
</head>

<body class="d-flex flex-column h-100">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
       <a href="https://pushify.in/thumb/"> <img src="https://pushify.in/thumb/assets/thumb1.png" width="70"/></a>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="https://pushify.in/thumb/"><i class="fa fa-arrow-left">&nbsp;Aamir Khan</i></a>
        </nav>
    </div>
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="title px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <a href="https://pushify.in/thumb/"> <img src="https://pushify.in/thumb/assets/tenor.gif" width="190"/></a>


            </div>
              
            <div class="input-group">
                <label class="sr-only" for="link">Youtube Video URL</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="link" placeholder="Enter Youtube Video Link"
                    name="link" style="box-shadow: 0px -1px 3px 1px #f2f2f2;padding:20px; border-radius:8px; border:0px;">
                <span class="input-group-btn">

                    <button type="submit" name="download" id="download" value="Download!" class="btn btn-primary"
                        data-disable-with="Search" onclick="getDownloadLink();" style="box-shadow: 0px 0px 3px 1px skyblue;padding:10px 20px;">
                        <i class="fa fa-download" aria-hidden="true"></i> Download!</button>
                </span>
            </div>
            <div id="bar" style="display:none;">
                <p class="text-center"><img src="assets/ajax.gif"></p>
            </div>
            <div class="mt-3" id="result" style="display: none;">
                <div id="downloadUrl">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex p-2 bg-primary text-white">Title</div>
                            <div class="d-flex p-2 bg-dark text-white" id="title"></div>
                        </div>
                         <div class="col-md-12">
                            <div class="d-flex p-2 bg-primary text-white">Default Thumbnail</div>
                            <div class="d-flex p-2 bg-dark text-white" id="thumb"></div>
                        </div>
                        <div class="col-md-12 mt-1">
                            <div class="d-flex p-2 bg-primary text-white">Source</div>
                            <div class="d-flex p-2 bg-dark text-white" id="source"></div>
                        </div>
                        <div class="col-md-12 mt-1">
                            <div class="d-flex p-2 bg-primary text-white">Download Links:</div>
                            <div class="p-2 bg-dark text-break" id="links"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer mt-auto py-3">
        <div class="container-fuild text-center">
            <span class="text-muted">Copyright &copy;  2020 | By <a href="https://pushify.in">Aamir Khan</a><br/>Made with <i class="fa fa-heart" style="color:red;"></i> in India <i class="fa fa-flag-in"></i></span>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/app.js?v=1.3"></script>
</body>

</html>
