// var arr = [1, 3, 5, 7, 9]


// for (var i = 0; i < arr.length; i++) {

//     arr[i] = arr[i] + 1
// }

// console.log(arr)

// // sum of given arry 


// var arr2 = [1, 3, 5, 7, 9]
// var sum = 0;



// for (var i = 0; i < arr2.length; i++) {

//     sum = arr2[i] + sum
//     console.log(sum);
// }

// console.log(sum)



// sum of odd num given array


var arr3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

var summ = 0;

for (var i = 0; i < arr3.length; i++) {

    if (arr3[i] % 2 === 0) {
        console.log(arr3[i])
        summ = arr3[i] + summ;
    }
}
console.log(summ)