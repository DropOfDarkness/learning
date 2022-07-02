/*
This script is for processing the chosen selections on multipleSelections.html to produce a specific outcome
*/

const selected = document.getElementById("selectionMenu");
const writeResult = document.getElementById("resultParagraph");
const selection = document.getElementById("buttons");
// each of these constants sets up each area that data is required to be read/written to

function manySelect() {

    switch (selected.value) { // starts switch statement by checking what is selected in "selectionMenu"
        case "walk": // if the value returned equals "walk" (substitute for each case) then it will run the code below it. below it does the following: writes to "resultParagraph" and then hides "buttons"
            writeResult.innerHTML = "By walking, you decided to take the slow yet relaxing way. You could be going about your daily life and walking may be an integral part of that, but it can lead to negatives as well... in this scenario, you unfortunately walked out in front of a car and got hit. You lose."
            selection.style.display = "none"
            break;
        case "run":
            writeResult.innerHTML = "Running can be quite the intensive activity for the human body, however is a very healthy thing to do regularly. In this scenario, you run over the road just before the car reaches the crossing. They honk their horn at you while shouting obscenities but you survive to see another day. You win."
            selection.style.display = "none"
            break;
        case "jump":
            writeResult.innerHTML = "Jumping is fun for the whole family, especially on a bouncy castle or a trampoline. It does have downsides, one wrong movement in the air and you can easily break a bone or two. In this scenario, you go to cross the road when a car speeds toward you. As a reflex, you jump to try avoid the car. You stumble, and jump right into the bumper of the car. You lose."
            selection.style.display = "none"
            break;
        case "chacha":
            writeResult.innerHTML = "ChaCha Real Smooth. You approach a crossing, and wait for the light to turn green. A car pulls to a stop at the red light, with the chacha slide blasting thorugh the window. Instead of crossing, you start dancing. Everyone claps."
            selection.style.display = "none"
            break;
        default: // this exists for if a value is selected that doesn't have a case
            writeResult.innerHTML = "something went wrong"
            break;
    }
}

function reset() {
    selection.style.display = "block"; // unhides "buttons"
    writeResult.innerHTML = "" // removes text from "resultParagraph"
}