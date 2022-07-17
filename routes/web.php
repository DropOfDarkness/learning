<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\GameScore;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { //on get request for 'URL/' return the home view
    return view('home');
});

Route::get('/demo/messageBoard', function(){
    // $messageBoard = resource_path("demos/messageBoard.php");
    // $messageBoardDisplay = file_get_contents($messageBoard);
    $message = Storage::disk('public')->get('message.txt');
    return view("messageBoard", [
        'message' => $message
    ]);
});

Route::get('/demo/game', function(){
    return view("game");
});

Route::get('/demo/{path}', function($demoName){ //on request for "URL/demo/####", start function and pass "####" through as "$demoName"
    $selectDemo = resource_path("demos/$demoName.html"); //create variable "$selectDemo" and set it to "resources/demos/'####'.html"
    if (file_exists($selectDemo)){ //checks if "$selectDemo" exists
        $demoContent = file_get_contents($selectDemo); //create variable "$demoContent" and gets the content of the file "resources/demos/'####'.html"
        return view("demo", [ //return the demo view to the browser and passes the "$demoContent" variable through as "insert"
            'insert' => $demoContent
        ]);
    } else {
        abort(404);
    };
});

Route::get('/submission', function(Request $request){
    $message = $request->messageEntry;
    $pass = $request->password;
    if($message != null && $pass == getenv("MESSAGE_PASSWORD")){
        Storage::disk('public')->put('message.txt', $message);
    };
    return redirect('/demo/messageBoard');
});

Route::post('/submitScore', function(Request $request){
    $data = $request->json()->all();

    $gamescore = new GameScore();
    $gamescore->username = $data['name'];
    $gamescore->score = $data['score'];
    $gamescore->save();
});

Route::get('/clickLeaderboard', function(Request $request){
    $top5 = DB::select('SELECT username , score FROM game_scores ORDER BY score DESC LIMIT 5;');
    return view('clickLeaderboard', [
        'topScores' => $top5
    ]);
});