


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <br><br>
                    <div class="card-header">ข้อมูลผู้ใช้งาน</div>
                    <div class="card-body">
                        @foreach($user as $item)
                            <div>
                                <x-jet-label for="name" value="Name" /> : {!! $item->name !!} <br>
                                <x-jet-label for="email" value="Email" /> : {!! $item->email !!} <br>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <a href="{!! url('/') !!}">
            <button>LOG OUT</button>
        </a>
    </div>

    </body>
    </html>


