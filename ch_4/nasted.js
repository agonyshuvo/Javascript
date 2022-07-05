/*yasted Loop
1
1 2
1 2 3 */
// for (i = 1; i < 5; i++) {
//     var result = ''
//     for (j = 1; j < i; j++) {
//         result += ' ' + j + ' '

//     }

//     console.log(result)
// }

/* 1 2 3
1 2
1 */
// for (i = 1; i < 5; i++) {
//     var result = ''
//     for (j = 1; j < 5 - i; j++) {
//         result += j + ' '
//     }
//     console.log(result)
// }


/* 1 2 3
1 2 3
1 2 3*/
// var n = 5;
// for (i = 1; i < n; i++) {
//     var result = ''
//     for (j = 1; j < n; j++) {
//         result += j + ' '
//     }
//     console.log(result)
// }




// var n = 5; // row or column count
// // defining an empty string
// var result = "";

// for (var i = 0; i < n; i++) { // external loop
//     for (var j = 0; j < n; j++) { // internal loop
//         if (i === 0 || i === n - 1) {
//             result += "#";
//         } else {
//             if (j === 0 || j === n - 1) {
//                 result += "*";
//             } else {
//                 result += " ";
//             }
//         }
//     }
//     // newline after each row
//     result += "\n";
// }
// // printing the result
// console.log(result);


// for (i = 0; i < 6; i++) {
//     var result = ''
//     for (j = 0; j < i; j++) {
//         result += j + ' '
//     }
//     console.log(result)
// }



// let n = 6;
// let string= "";

// for (let i = 1; i <= n; i++) {
//     // printing star
//     for (let j = 0; j < i; j++) {
//         if (i === n) {
//             string += "*";
//         } else {
//             if (j == 0 || j == i - 1) {
//                 string += "*";
//             } else {
//                 string += " ";
//             }
//         }
//     }
//     string += "\n";
// }
// console.log(string);





console.log("    ***")
var sum = 0
for (var i = 1; i <= 10; i += 2) {

    console.log("     *")
    sum += i
}
console.log("    ***")
var n = 6;
var str = "";
for (let i = n / 2; i < n; i += 2) {
    // print first spaces
    for (let j = 1; j < n - i; j += 2) {
        str += " ";
    }
    // print first stars
    for (let j = 1; j < i + 1; j++) {
        str += "*";
    }
    // print second spaces
    for (let j = 1; j < n - i + 1; j++) {
        str += " ";
    }
    // print second stars
    for (let j = 1; j < i + 1; j++) {
        str += "*";
    }
    str += "\n";
}
// lower part
// inverted pyramid
for (let i = n; i > 0; i--) {
    for (let j = 0; j < n - i; j++) {
        str += " ";
    }
    for (let j = 1; j < i * 2; j++) {
        str += "*";
    }
    str += "\n";
}
console.log(str);

let y = 5;
let you = "";
// Upside pyramid
// upside diamond
// for (let i = 1; i <= y; i++) {
//     // printing spaces
//     for (let j = y; j > i; j--) {
//         you += " ";
//     }
//     // printing star
//     for (let k = 0; k < i * 2 - 1; k++) {
//         if (k === 0 || k === 2 * i - 2) {
//             you += "*";
//         } else {
//             you += " ";
//         }
//     }
//     you += "\n";
// }
// // downside diamond
for (let i = 1; i <= y - 1; i++) {
    // printing spaces
    for (let j = 0; j < i; j++) {
        you += " ";
    }
    // printing star
    for (let k = (y - i) * 2 - 1; k >= 1; k--) {
        if (k === 1 || k === (y - i) * 2 - 1) {
            you += "**";
        } else {
            you += " ";
        }
    }
    you += "\n";
}
console.log(you);
var y2 = 0
for (var i = 1; i <= 10; i += 2) {

    console.log("     **")
    sum += i
}