// Seleciona todos os botões de cópia
document.querySelectorAll('.copy-btn').forEach(button => {
    button.addEventListener('click', function() {
        // Acha o elemento <pre> mais próximo do botão clicado
        const codeBlock = this.closest('.typewriter-small').querySelector('pre code').innerText;
        
        // Cria um elemento temporário para copiar o texto
        const tempElement = document.createElement("textarea");
        tempElement.value = codeBlock;
        document.body.appendChild(tempElement);
        
        // Seleciona o conteúdo e copia para a área de transferência
        tempElement.select();
        document.execCommand("copy");
        
        // Remove o elemento temporário
        document.body.removeChild(tempElement);
        
        // Modifica o texto e o ícone do botão
        this.innerHTML = 'Copiado <i class="fas fa-check"></i>';
        
        // Restaura o texto original após 2 segundos
        setTimeout(() => {
            this.innerHTML = ' Copiar <i class="fas fa-copy"></i> ';
        }, 2000);
    });
});
