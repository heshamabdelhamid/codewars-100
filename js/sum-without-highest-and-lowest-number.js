
function sumArray(numbers) {

    if (!numbers || numbers.length <= 2)
        return 0;

    let highestNum = numbers[0];
    let lowestNum = numbers[0];
    let sum = numbers[0];

    for (let i = 1; i < numbers.length; i++) {

        if (numbers[i] > highestNum) {
            highestNum = numbers[i];
        }

        if (numbers[i] < lowestNum) {
            lowestNum = numbers[i];
        }

        sum += numbers[i]
    }

    sum -= highestNum + lowestNum;

    return sum;
}

console.log(sumArray([10, 2, 1, 1, 100, 20]));


