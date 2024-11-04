
function positive_sum(numbers) {

    sum = 0;

    numbers.forEach(number => {
        if (number > 0) {
            sum += number;
        }
    });

    return sum;

}

console.log(positive_sum([1, 2 - 3, 0, 25]));

