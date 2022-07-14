
var clickCount = 0;
var time = 5000;
var timestep = 100;
var username = '';
var endTime = '';

function firstClick(){
    //set username and check if empty
    username = document.getElementById('name').value;
    if (username == ''){
        alert('Please enter a name');
    } else {
    //fill progress bar
    document.getElementById('timer').value = time;

    //start loop which iterates every 'timestep' ms
    var timer = setInterval(function(){
        //take 'timestep' off remaining 'time'
        time = time - timestep;
        if (time <= 0){ //if timer is finished
            endTime = new Date().toLocaleString(); //get current date and time
            finished();
            clearInterval(timer); //finishes loop
            document.getElementById('game').style.display = "none"; //hides game
        }
        document.getElementById('timer').value = time; //sets value of progress bar to time remaining
    }, timestep);

    counter(); //adds to counter to compensate for first click
    document.getElementById('theButton').setAttribute('onclick', 'counter()'); //sets button to only add to counter after first click
}};

function counter(){
    clickCount = clickCount + 1; //adds to counter
};

function finished(){
    //writes score screen
    document.getElementById('username').innerHTML = username;
    document.getElementById('score').innerHTML = clickCount;
    document.getElementById('currentTime').innerHTML = endTime;
    document.getElementById('endScreen').style.display = "block";
};

function reset(){
    document.getElementById('endScreen').style.display = "none";
    document.getElementById('game').style.display = "block";
}