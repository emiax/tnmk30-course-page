function printArray(array)
{
    var length = array.length;
    var i = 0, str = "";

    for (i = 0; i < length; i++) {
        str += array[i] + " ";
    }
    console.log(str);
}


var foo = [1, 3, 3, 7];
printArray(foo, 5);


