var table

fetch('https://jsonplaceholder.typicode.com/users')
  .then(response => response.json())
  .then(json => renderTable(json))

  function renderTable(data) {
    table = data
    td = data
    let out = ''
    out += `<table id="ourtable"><thead></thead><tbody><tr><th>ID</th><th>Name</th><th>City</th><th>Website</th>
    <th>Company</th></tr>`
   out += data.map(element => {
      return `<tr><td>${element.id}</td>
      <td>${element.name}</td>
      <td>${element.address.city}</td>
      <td>${element.website}</td>
      <td>${element.company.name}</td>
    </tr>`
  }
  ).join ('');
  out += `</tbody></table>`
  console.log(out)
  
  document.getElementById('table').innerHTML = out
}