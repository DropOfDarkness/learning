function nameProcess() {
    var name = document.getElementById("nameEntry"); // creates variable called "name", grabs the textarea with ID "nameEntry"
    console.log("The user's name is " + name.value); // logs data inside of the text area
    document.getElementById("nameResult").innerHTML = ("Well " + name.value + ", you seem nice.") // grabs paragraph with ID "nameResult" and writes to it
}