@extends('base')

@section('content')
    <style>
        body {
            background-color: azure;
        }
        .intro {
            padding: 30px;
        }
        .image {
            background-image: url(background2.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
	        height: 500px; 
	        width: 1280px; 
        }
        .txt {
            position: relative;
	        top: 200px;
            left: 60px;
        }
    </style>

    <body>
        <div>
            <div class="container intro" style="text-align: center">
                <h1><b>Welcome to CheapTalk</b></h1>
            </div>

            <div class="container">
                <div class="row">
                    <div class="image">
                        <h1 class="txt">Enjoy</h1>
                        <h1 class="txt"><b>Free Chat</b></h1>
                        <h6 class="txt">
                            <form action="{{url('/register')}}" method="get">
                                <button class="btn btn-warning" type="submit">Click here to register!</button>
                            </form>
                        </h6>
                        <h6 class="txt" style="color: yellow">Click Login if you already have an account!</h6>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection