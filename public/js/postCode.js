/*
Processes data in textarea id="postCodeEntry" and verifies if it follows a certain tformat
*/

const verifyPostCode = /^[A-Za-z]{2}[0-9]{2} [A-Za-z0-9]{3}/; //sets constant "verifyPostCode" to regular expression
/* Regular Expression:
[A-Za-z]{2}- first 2 characters can be A to Z, either upper or lower case
[0-9]{2} - next 2 characters can be 0 to 9, and must have a space right after
[A-Za-z0-9]{3}- last 3 characters can be A to Z upper and lower case, or 0 to 9
*/
var postCode = document.getElementById("postCodeEntry"); //create variable "postCode" and sets it to the "postCodeEntry" element from "postCode.html"

function postCodeChecker() {
    const check = verifyPostCode.exec(postCode.value); //create constant "check" and sets it to run the value of "postCode" against the regular expression check "verifyPostCode"

    if (!check) { //checks the result of "check" and performs corresponding output
        document.getElementById("postCodeResult").innerHTML = ("That isn't a post code.");
    } else {
        document.getElementById("postCodeResult").innerHTML = ("You live in a nice area.");
    }
}