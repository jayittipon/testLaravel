@extends('master')

@section('head')
    <link rel="stylesheet" href="css/login.css">    
@endsection

@section('content')
    <div class="container">
        <div class="block">
            <div class="signin">
                <div class="logo">
                <img src="img/logo11-Custom.png" alt="logo" />
                </div>
                <form action="welcome" method="GET">
                <div>
                    <label>Username</label>
                    <br>
                    <input type="text" class="text-input" placeholder="Enter Username"  />
                </div>

                <div>
                    <label>Password</label>
                    <br>
                    <input type="password" class="text-input" placeholder="Enter Password"/>
                </div>

                <button type="submit" class="primary-btn">Sign In</button>
                </form>
            </div>
        </div>
    </div>
@endsection
