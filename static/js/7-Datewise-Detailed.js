const primaryColor = '#4834d4'
const warningColor = '#f0932b'
const successColor = '#6ab04c'
const dangerColor = '#eb4d4b'
/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */
var tbody = document.getElementById('chart-facilitate')
console.log(tbody);
var z = tbody.getElementsByTagName("tr")
/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */
var price = []
var dates = []

for (index = 0; index < z.length; index++) { 
    price.push(parseFloat(z[index].children[2].innerText.substring(2)))
    dates.push(z[index].children[3].innerText) 
} 
/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */
var ctx = document.getElementById('myChart')
ctx.height = 500
ctx.width = 500
var data = {
	labels: dates,
	datasets: [{
		fill: false,
		label: 'Expenses',
		borderColor: successColor,
		data: price,
		borderWidth: 2,
		lineTension: 0,
	}]
}
/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */
var lineChart = new Chart(ctx, {
	type: 'line',
	data: data,
	options: {
		maintainAspectRatio: false,
		bezierCurve: false,
	}
})