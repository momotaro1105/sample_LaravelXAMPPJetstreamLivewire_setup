<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css?{{date('YmdHis')}}">
    <link rel="stylesheet" href="/css/header.css?{{date('YmdHis')}}">
    <title>Googleβ</title>
</head>
<body id="hp">
    @if (isset($_SESSION['status']))
        @include('googlebeta.headerY')
    @else
        @include('googlebeta.headerN')
    @endif
    <div id="hp_body">
        <h1>Googleβ</h1>
        <form id="hp_search">
            <input name="query" type="search" placeholder="Start by typing a question..." autocomplete="off" aria-label="Search" aria-controls="top-search"></form>
    </div>
</body>
</html>