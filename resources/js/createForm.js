let songName = document.querySelector('#songName');


   songName?.addEventListener('input',()=>{



let stringWithoutSpace = songName.value.replace(/\s/g, '').lenght;

if(stringWithoutSpace >= 8) {
    songName.classList.add('is-valid')
}else{
    songName.classList.remove('is-valid')
}
   });