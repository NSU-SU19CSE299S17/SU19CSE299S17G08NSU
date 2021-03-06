<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Parking System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
                    <a class="navbar-brand" href="#">NPS</a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#myNav">
                            <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="myNav">
                            <div class="navbar-nav">
                                    <a href="#" class="nav-item nav-link">Home</a>
                                    <a href="/about" class="nav-item nav-link">About Us</a>
                                    <a href="/contact" class="nav-item nav-link">Contact Us</a>
                            </div>      
                    </div>
                    <div class="navbar-nav">
                            <form class="form-inline">
                                    <div class="form-group mb-2">
                                            <label for="email1" class="sr-only">Email</label>
                                            <input type="text"  class="form-control" id="email1" value="email@example.com">
                                    </div>
                                    <div class="form-group mx-sm-3 mb-2">
                                            <label for="inputPassword2" class="sr-only">Password</label>
                                            <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                                    </div>   
                                    <button type="submit" class="btn btn-primary mb-2">Log In</button>  
                            </form>
                                
                   
                    </div>
            </nav>
            <div class="container  border-right border-left border-primary">

                <h1 class="text-center display-2 p-4 ">Contact Us</h1>

                <form method="POST" action="">
                        <div class="form-group ">
                                <label for="subs1">Email address</label>
                                <input type="email" class="form-control" id="subs1" placeholder="name@northsouth.edu">
                              </div>
                              <div class="form-group">
                                <label for="subs2">Subject</label>
                                <input type="text" class="form-control" id="subs2" placeholder="Subjects">
                              </div>
                              <div class="form-gruop">
                                    <label for="message1">Message</label>
                                    <textarea class="form-control" id="message1" rows="6"></textarea>
                              </div>
                              <button type="button" class="btn btn-primary btn-lg btn-block mt-4">Submit</button>
                </form>
            </div>
        
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>