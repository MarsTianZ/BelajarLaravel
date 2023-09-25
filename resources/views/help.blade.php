<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <title>LIST WEB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>You can access keywords in the panel below!</h2>
        <div class="panel-group">
            <div class="panel panel-info">
                <div class="panel-heading">List</div>
                <div class="panel-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> /aboutme 
                        <li class="list-group-item"> /admin
                        <li class="list-group-item"> /admin/bio-admin </li>
                        <li class="list-group-item"> /admin/jurusan-admin </li>
                        <li class="list-group-item"> /admin/pendidikan-admin </li>
                        <li class="list-group-item"> /api/user </li>
                        <li class="list-group-item"> /contact </li>
                        <li class="list-group-item"> /product/{id} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.switch').click(() => {
            $([".light [class*='-light']", ".dark [class*='-dark']"]).each((i, ele) => {
                $(ele).toggleClass('bg-light bg-dark')
                $(ele).toggleClass('text-light text-dark')
                $(ele).toggleClass('navbar-light navbar-dark')
            })
            // toggle body class selector
            $('body').toggleClass('light dark')
        })
    </script>
</body>

</html>