/*
Processes data in textarea id="postCodeEntry" and verifies if it follows a certain text format? idk how to say it.
*/

const verifyPostCode = /^[A-Za-z]{2}[0-9]{2} [A-Za-z0-9]{3}/; //
var postCode = document.getElementById("postCodeEntry");

function postCodeChecker() {
    // console.log("it worked!")
    // console.log(postCode);
    const check = verifyPostCode.exec(postCode.value);

    if (!check) {
        document.getElementById("postCodeResult").innerHTML = ("That isn't a post code, you twat.");
    } else {
        document.getElementById("postCodeResult").innerHTML = ("You live in a twatty area.");
    }
}