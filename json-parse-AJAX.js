//AJAX
let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
  if(xhr.readyState == 4 && xhr.status ==200) {
    let mahasiswa1 = this.responseText;
    console.log(mahasiswa1); //hasilnya data json

    let mahasiswa2 = JSON.parse(this.responseText);
    console.log(mahasiswa2); // hasilnya object js
  }
}

xhr.open('GET', 'coba.json', true);
xhr.send();

