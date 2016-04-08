algoritmo "somadoisnumeros"
// Função :
// Autor :
// Data : 1/11/2015
// Seção de Declarações 
var
A , B : inteiro
entra1, entra2, entra3, entra4, entra5, entra6, entra7 : real

inicio
// Seção de Comandos
Escreval ("Digite o valor para A")
leia(A)
Escreval ("Digite o valor para B")
leia(B)


entra1 <- A+B
entra2 <- A-B
entra3 <- A*B
entra4 <- A/B
entra5 <- A\B
entra6 <- A%B
entra7 <- A^B

Escreval ("O Valor ", A, " + ", B, " eh igual a ", entra1)
Escreval ("O Valor ", A, " - ", B, " eh igual a ", entra2)
Escreval ("O Valor ", A, " * ", B, " eh igual a ", entra3)
Escreval ("O Valor ", A, " / ", B, " eh igual a ", entra4)
Escreval ("O Valor ", A, " \ ", B, " eh igual a ", entra5)
Escreval ("O Valor ", A, " % ", B, " eh igual a ", entra6)
Escreval ("O Valor ", A, " ^ ", B, " eh igual a ", entra7)

fimalgoritmo
