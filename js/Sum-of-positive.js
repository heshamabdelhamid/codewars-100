
function positiveSum(numbers) {

    sum = 0;

    numbers.forEach(number => {
        if (number > 0) {
            sum += number;
        }
    });

    return sum;

}

console.log(positiveSum([1, 2 - 3, 0, 25]));

