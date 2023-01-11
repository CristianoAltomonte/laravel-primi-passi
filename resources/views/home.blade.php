<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Hello Word</h1>
    <div class="container">
        <ul class="d-flex space-between">
            <li>
                <a href="/">HOME</a>
            </li>
            <li>
                <a href="/about">ABOUT</a>
            </li>
            <li>
                <a href="/contacts">CONTACTS</a>
            </li>
        </ul>
    </div>


    <style>
        h1 {
            text-align: center;
        }

        li {
            list-style: none;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .d-flex {
            display: flex;
        }

        .space-between {
            justify-content: space-between;
        }
    </style>
</body>

</html>