<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome-free-5.13.0-web/css/all.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.semanticui.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.semanticui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>


	<style>
        body{
            background-color: #F0F2F5;
        }
    .header{
        margin-top: -20px;
    }
    .left-navigation{
        margin-top: 40px;
    }
    .error{
        font-size: 13px;
        padding:5px;
        background-color: #D34F51;
    }
    .error strong{
        color: white;
    }
	</style>
</head>
<body>
    <header class="header">
        <h3>{{ Auth::user()->nickname }}</h3>
        <img src="{{asset('images/logo.png')}}">
    </header>
    <nav class="left-navigation">
        <ul>
            <a href="/home"><li class="{{(request()->is('home')) ? 'active-nav' : '' }}"><span class="fas fa-calendar-day"></span>Today<strong>21</strong></li></a>
            <a href="/home/alltasks"><li class="{{(request()->is('home/alltasks')) ? 'active-nav' : '' }}"><span class="fas fa-calendar"></span>All tasks</li></a>
            <a href="/home/completedtasks"><li class="{{(request()->is('home/completedtasks')) ? 'active-nav' : '' }}"><span class="fas fa-check"></span>All to-do completed</li></a>

            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><li><span class="fas fa-sign-out-alt"></span>Logout</li></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </nav>
    <div class="content">
        <div class="center-div">
            @yield('content')
        </div>
    </div>
    <a href="/tasks" class="add-btn"><span class="fas fa-plus"></span></a>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>