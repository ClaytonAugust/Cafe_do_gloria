let count = 1; // Começo passar imagens do carrosel automático
document.getElementById("radio1").checked = true;

setInterval( function(){
    nextImage();
}, 2000)

function nextImage(){
    count++;
    if(count>4){
        count = 1;
    }
    document.getElementById("radio"+count).checked = true;
}//  Fim passar imagens do carrosel automático

//Começo do script do botão read more
var button = document.getElementById('read_button');

button.addEventListener('click', function(){
    var card = document.querySelector('.card');
    card.classList.toggle('active');

    if(card.classList.contains('active')){
        return button.textContent = 'Read less';
    }
    button.textContent = 'Read less';
});
//Fim do script do botão read more
