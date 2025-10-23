# Bem-Vindo a minha API de salgados

&nbsp;

A API serve pegar dados específicos de um salgados, para poder usar ela a url:"*http://localhost/consumo\_de\_json/api/tipos.php?name={tipo}\&info={tipo}*"



com os endpoint sendo as informações do dado **name** e **info** na url



name: e o dado que indica qual salgado expecifico você que acessar na lista sendo que isto e um dado importante, atualmente você somente pode acessar dados de três salgados 



* coxinha
* esfira
* corndog  



info: sendo os o campo que você informa qual dados você quer pegar daquele salgado especifico, sendo elas 



* ingredientes 

&nbsp;	ex:"frango desfiado"

* origem

&nbsp;	ex:"Brasileira"

* nutrição

&nbsp;	ex:"proteina e carboitrato"

* tudo

&nbsp;    	ex:\["nome"]=>string(7) "Coxinha"

&nbsp; 	   \["ingredientes"]=>string(15) "frango desfiado"

&nbsp; 	   \["origem"]=>string(10) "Brasileira"

&nbsp; 	   \["nutricao"]=>string(22) "proteina e carboitrato"



nota: você pode não passar o endpoint **info** passando somente o name que a api ira passar como se você estivesse passando info como tudo mas você não consegue acessa a api sem passar um algo em name   



