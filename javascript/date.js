// https://attacomsian.com/blog/javascript-date-add-days

Date.prototype.addDays = function (days) {
  const date = new Date(this.valueOf())
  date.setDate(date.getDate() + days)
  return date
}

// Add 7 Days
const date = new Date('2020-12-02')

console.log(date.addDays(7))
// 2020-12-09T00:00:00.000Z