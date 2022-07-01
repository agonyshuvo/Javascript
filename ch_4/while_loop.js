// while loop

// var ran = Math.random()
// while (ran = 5) {
//     console.log(ran)
// }



var num = true;

while (num) {

    var ran = Math.floor(Math.random() * 10 + 1)
    if (ran == 3) {
        console.log("Fuck you my baby 3 ")
        num = false
    } else {
        console.log("Fuck you Bitch " + ran)
    }

}