function repeatStr(n, str) {
    let newStr = "";

    for (let i = 0; i < n; i++) {
        newStr += str;
    }

    return newStr;
}

console.log(repeatStr(4, "Hello"));
