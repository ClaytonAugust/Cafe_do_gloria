let count = 1; // Começo passar imagens do carrosel automático
document.getElementById("radio1").checked = true;

setInterval( function(){
    nextImage();
}, 6000)

function nextImage(){
    count++;
    if(count>4){
        count = 1;
    }
    document.getElementById("radio"+count).checked = true;
}//  Fim passar imagens do carrosel automático

//Começo do script do botão read more
document.addEventListener('DOMContentLoaded', function() {
    const lerMaisButtons = document.querySelectorAll('.ler-mais');
    const cards = document.querySelectorAll('.card');

    lerMaisButtons.forEach((button, index) => {
        button.addEventListener('click', function() {
            cards[index].classList.toggle('active');
            if (cards[index].classList.contains('active')) {
                button.textContent = 'Ler menos';
            } else {
                button.textContent = 'Ler Mais';
            }
        });
    });
});

//Fim do script do botão read more
