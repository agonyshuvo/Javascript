//  Have fun .....


console.log('')
console.log('')
console.log('')
console.log('')

console.log("   ******")
console.log("   ******")
var sum = 0
for (var i = 1; i <= 10; i += 2) {

    console.log("     **")
    sum += i
}
console.log("   ******")
console.log("   ******")
console.log('')
console.log('')


var n = 6;
var str = "";
for (let i = n / 2; i < n; i += 2) {

    for (let j = 1; j < n - i; j += 2) {
        str += " ";
    }

    for (let j = 1; j < i + 1; j++) {
        str += "*";
    }

    for (let j = 1; j < n - i + 1; j++) {
        str += " ";
    }

    for (let j = 1; j < i + 1; j++) {
        str += "*";
    }
    str += "\n";
}

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
for (let i = 1; i <= y - 1; i++) {

    for (let j = 0; j < i; j++) {
        you += " ";
    }

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