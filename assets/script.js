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
                button.textContent = 'Ler mais';
            }
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const lerMaisButtons = document.querySelectorAll('.ler-mais-vilian');
    const cards = document.querySelectorAll('.card-vilian');

    lerMaisButtons.forEach((button, index) => {
        button.addEventListener('click', function() {
            cards[index].classList.toggle('active');
            if (cards[index].classList.contains('active')) {
                button.textContent = 'Ler menos';
            } else {
                button.textContent = 'Ler mais';
            }
        });
    });
});
//Fim do script do botão read more
//add reviews
function editarReview(reviewId, comentarioAtual) {
    document.getElementById('review-id-editar').value = reviewId;
    document.getElementById('novo-comentario').value = comentarioAtual;
    document.getElementById('editar-review-form').style.display = 'block';
}

function cancelarEdicao() {
    document.getElementById('editar-review-form').style.display = 'none';
}
//Função para abrir o pop-up
function openPopup() {
    document.getElementById('reviewPopup').style.display = 'block';
}

// Função para fechar o pop-up
function closePopup() {
    document.getElementById('reviewPopup').style.display = 'none';
}

// Event listener para abrir o pop-up ao clicar no botão
document.getElementById('openPopupBtn').addEventListener('click', openPopup);

//edit reviwes
function exibirPopupEdicao(id, comentario) {
    // Preencher os campos do formulário de edição com os dados existentes
    document.getElementById('review-id-editar').value = id;
    document.getElementById('novo-comentario').value = comentario;

    // Exibir o pop-up
    document.getElementById('editar-review-form').style.display = 'block';
}

function cancelarEdicao() {
    // Ocultar o pop-up ao clicar em Cancelar
    document.getElementById('editar-review-form').style.display = 'none';
}