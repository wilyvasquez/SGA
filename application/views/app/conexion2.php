<!doctype html>
<html>
<head>
    <title>Offline.js Simulate UI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/offline-theme-chrome.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/offline-language-english.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css" />
    <script src="<?= base_url() ?>assets/js/offline.min.js"></script>
    <script src="<?= base_url() ?>assets/js/offline-simulate-ui.min.js"></script>
</head>
<body class="container">
    <div class="row container">
        <div class="col-sm-5">
            <h2>Demo</h2>
            <div class="row online well">
              <p>PRUEBA DE INTERNET</p>
            </div>
            <div class="alert alert-warning offline none">You can only sign in when you have an active internet connection.</div>
        </div>        
    </div>
    <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
        $(function(){
            
            var 
                $online = $('.online'),
                $offline = $('.offline');

            Offline.on('confirmed-down', function () {
                $online.fadeOut(function () {
                    $offline.fadeIn();
                });
            });

            Offline.on('confirmed-up', function () {
                $offline.fadeOut(function () {
                    $online.fadeIn();
                });
            });

        });
    </script>
</body>
</html>