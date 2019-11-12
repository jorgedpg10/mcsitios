<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mcsitios</title>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
{{--<section id="control-center">
    <button id="get-btn">GET Data</button>
    <div id="content"></div>
</section>--}}

<div id="app">
        <example-component></example-component>
</div>



<script src="/js/app.js"></script>
{{--<script src="/js/axios.js"></script>--}}

</body>
</html>

<style>
    html {
        font-family: sans-serif;
    }
    body {
        margin: 0;
    }
    button {
        font: inherit;
        background: #5102ac;
        border: 1px solid #5102ac;
        color: white;
        cursor: pointer;
        padding: 1.25rem 2.5rem;
        font-size: 1.5rem;
    }
    button:focus {
        outline: none;
    }
    button:hover,
    button:active {
        background: #832ee4;
        border-color: #832ee4;
    }
    #control-center {
        border: 2px solid #ccc;
        margin: 5rem;
        padding: 2rem;
    }
</style>
