<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mailer</title>
</head>
<body>

    <div class="container">
            <h2>Please input correctly to send mail</h2>
        <div class="w-25">

            <form action="/send" method="POST">

                @csrf

                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Name</label>
                    <input name="name" type="name" class="form-control" id="exampleInputname1" aria-describedby="nameHelp">
                    <div id="nameHelp" class="form-text">Input reciver name address</div>
                    </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">To</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Input reciver email address</div>
                    </div>
                </div>

                   

                <div class="mb-3">
                    <label for="exampleInputmessage1" class="form-label">Message</label>
                    <textarea type="message" name="message" class="form-control" id="exampleInputmessage1" aria-describedby="messageHelp"></textarea>
                    <div id="messageHelp" class="form-text">We'll never share your message with anyone else.</div>
                </div>
              
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>

  

</body>
</html>