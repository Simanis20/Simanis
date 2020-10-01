function h(data) {
  console.log(data)
  let out = ''
  let city = ''
  if (data.geoip && data.weather){
    if (data.geoip.region && cities[data.geoip.region]) {
      city = cities[data.geoip.region]
    } else (
      city = data.geoip.region
    )
    out += `<h4 class="center">${city}</h4>`
    out += `<h5 class="center">${data.weather.currTemp || 'none'}&#8451;</h5>`
    wth.innerHTML = out
  }
}









var obj = {}
var majasdarbs = document.getElementById('majasdarbs')
var majas = [
  {name: 'Zemene', notes: [12, 6, 18]},
  {name: 'Abols', notes: [14, 6, 19]},
  {name: 'Kartupelis', notes: [12, 17, 15]},
  {name: 'Burkans', notes: [10, 15, 20]},
]

var out = ''
out += `<h3> ${majas[0].name}</h3>`;
out += `<ul>`
out += `<li>${majas [0].notes[0]}kg</li>`
out += `<li>${majas [0].notes[1]}kg</li>`
out += `<li>${majas [0].notes[2]}kg</li>`
out += `</ul>`
out += `<h3>${majas[1].name}</h3>`;
out += `<ul>`
out += `<li>${majas [1].notes[0]}gab</li>`
out += `<li>${majas [1].notes[1]}gab</li>`
out += `<li>${majas [1].notes[2]}gab</li>`
out += `</ul>`
out += `<h3>${majas[2].name}</h3>`;
out += `<ul>`
out += `<li>${majas [2].notes[0]}kg</li>`
out += `<li>${majas [2].notes[1]}kg</li>`
out += `<li>${majas [2].notes[2]}kg</li>`
out += `</ul>`
out += `<h3>${majas[3].name}</h3>`;
out += `<ul>`
out += `<li>${majas [3].notes[0]}kg</li>`
out += `<li>${majas [3].notes[1]}kg</li>`
out += `<li>${majas [3].notes[2]}kg</li>`
out += `</ul>`

const el = document.getElementById('majasdarbs',).innerHTML = out

setInterval(() => {
  let d = new Date()
  let hours = d.getHours()
  let minutes = d.getMinutes()
  let seconds = d.getSeconds()
  let out = `${hours}:${minutes}:${seconds}`
  const el = document.getElementById('user')
  el.innerHTML = out;
}, 1000);

function a(b){
  return b < 10 ? `0${b}` : b
}
