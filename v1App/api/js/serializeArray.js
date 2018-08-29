

function serialize(arr)
{
    var res = 'a:' + arr.length + ':{';
    for (i = 0; i < arr.length; i++)
    {
        res += 'i:' + i + ';s:' + arr[i].length + ':"' + arr[i] + '";';
    }
    res += '}';

    return res;
}