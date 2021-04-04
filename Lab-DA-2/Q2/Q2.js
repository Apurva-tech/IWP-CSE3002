function NumberBetween(val, val1)
   {
     return function(evalue, index, array)
     {
     return (evalue > val && evalue < val1);
     };
   }
var result = [14, 24, 4, 20, 29, 15].filter(NumberBetween(13, 29));
console.log(result);