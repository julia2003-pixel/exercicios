function escreve_mensagem(nome, email, sexo, datanasc){
    mensagem = "Você escreveu '"+valor+"' ";
    alert(mensagem);
    if(isNaN(nome, email, sexo, datanasc)){//is not empty-> verifica se não é um número
        alert(nome, email, sexo, datanasc + " não está vazio");
    }else{
        alert(nome, email, sexo, datanasc + " está vazio ");
    }
}