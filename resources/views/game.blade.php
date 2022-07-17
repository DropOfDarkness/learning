@extends('layout')

@section('demoContent')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <h2>Clicker Game</h2>
    Click the box as many times as you can in 5 seconds!<br/><br/>
    <div id='game'>
        Enter Name:<br/>
        <textarea id='name'></textarea>
        <br/><br/><br/>
        <progress value="0" max="5000" id="timer"></progress><br/>
        <button id='theButton' onclick=firstClick()>Click!</button>
    </div>

    <div id='endScreen' style="display:none">
        <h3>Name: </h3><p id='username'></p><br/>
        <h3>Score: </h3><p id='score'></p><br/>
        <h3>Time Set: </h3><p id='currentTime'></p><br/>
        <br/>
        <button onclick=location.reload()>Retry!</button>
    </div>
    <br/><br/>
    
    <div id='leaderboard'>
        <h3>Top 5 Scores:</h3>
        
        <?php foreach ($topScores as $score) : ?>

            <?= $score->username; ?> | <?= $score->score; ?><br/>

        <?php endforeach ?>

    </div>

    <br/>

    <script src='/js/game.js'></script>

@endsection