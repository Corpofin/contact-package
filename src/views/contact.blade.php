<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Contact Us any Time.</h1>
                </div> 
            </div>
            <div class="row">
                <div class="col">
                <form action="{{route('contact')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name Please" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Please Enter Valid Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" cols="6" rows="6" placeholder="Your Message Query" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button  type="submit" class="btn btn-success">Send Email</button>    
                        </div>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</body>
</html>