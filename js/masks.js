/*Função Pai de Mascaras*/
function Mask(o, f) {
    v_obj = o;
    v_fun = f;
    setTimeout("execmascara()", 1);
}
/*Função que Executa os objetos*/
function execmascara() {
    v_obj.value = v_fun(v_obj.value);
}
/*Função que Determina as expressões regulares dos objetos*/
function leech(v) {
    v = v.replace(/o/gi, "0");
    v = v.replace(/i/gi, "1");
    v = v.replace(/z/gi, "2");
    v = v.replace(/e/gi, "3");
    v = v.replace(/a/gi, "4");
    v = v.replace(/s/gi, "5");
    v = v.replace(/t/gi, "7");
    return v;
}

/*Função que padroniza CPF*/
function Cpf(v) {
    v = v.replace(/\D/g, "");
    v = v.replace(/(\d{3})(\d)/, "$1.$2");
    v = v.replace(/(\d{3})(\d)/, "$1.$2");
    v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
    return v;
}

/*Função que padroniza valor monétario*/
function Money(v) {
    v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
    v = v.replace(/^([0-9]{3}\.?){3}-[0-9]{2}$/, "$1.$2");
    v = v.replace(/(\d)(\d{2})$/, "$1.$2"); //Coloca ponto antes dos 2 últimos digitos
    return v;
}
