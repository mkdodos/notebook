const months = ['March', 'Jan', 'Feb', 'Dec'];
months.sort();
// 依字母排序
//  ["Dec", "Feb", "Jan", "March"]
console.log(months);

const array1 = [1, 30, 4, 21, 100000];
array1.sort();
// [1, 100000, 21, 30, 4]
console.log(array1);

// 排數字
const numbers = [4, 2, 1, 5, 3];
numbers.sort((a, b) => {
  return a - b;
});
// [1, 2, 3, 4, 5]
console.log(numbers);

// 物件按照其中一個屬性的值來排序
var items = [
  { name: 'Edward', value: 21 },
  { name: 'Sharpe', value: 37 },
  { name: 'And', value: 45 },
  { name: 'The', value: -12 },
  { name: 'Magnetic', value: 13 },
  { name: 'Zeros', value: 37 },
];

// sort by value
items.sort(function (a, b) {
  return a.value - b.value;
});
