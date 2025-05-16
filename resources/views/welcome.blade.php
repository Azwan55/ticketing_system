<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ticketing System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                background-image: url(/images/backgroundimage.png);
                font-family: 'Nunito', sans-serif;
                background-color: #f7fafc;
                color: #1a202c;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                justify-content: center;
                align-items: center;
                margin: 0;
            }

            .header {
                text-align: center;
            }

            .header h1 {
                font-size: 3rem;
                font-weight: 700;
                color: #2d3748;
             
            }

            .header p {
                font-size: 1.2rem;
                margin-top: 1rem;
                color: #4a5568;
            }

            .actions {
                margin-top: 2rem;
            }

            .actions a {
                background-color: #0ab62f;
                color: #fff;
                padding: 0.75rem 1.5rem;
                border-radius: 0.375rem;
                font-weight: 600;
                text-decoration: none;
                transition: background-color 0.3s;
                margin: 0 0.5rem;
            }

            .actions a:hover {
                background-color: #159dc7;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h1>Welcome to Ticketing System</h1>
            <p style ="font-weight: bold;  padding-left: 20px;  padding-bottom: 80px;">Manage your support tickets easily and efficiently</p>
            <div class="actions">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Go to Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                        <a href="{{ url('/issue-ticket') }}">Issue Ticket</a>
                    @endauth
                @endif
            </div>
        </div>
    </body>
</html>
