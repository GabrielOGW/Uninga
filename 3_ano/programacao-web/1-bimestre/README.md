# versão 02
### documentação JavaScript:
 - const meuApp: cria um novo objeto Vue
 - data(): define os dados que serão utilizados pela aplicação
 - lista: um array que irá armazenar os itens da lista
 - novoItem: uma string que irá armazenar o novo item a ser adicionado na lista
 - corAlternada: um booleano que irá controlar a alternância da cor de fundo do < ul >
 - methods: define os métodos que serão utilizados pela aplicação
 - adicionarItem(): adiciona o novo item à lista quando a tecla Enter é pressionada
 - const mountedApp: monta a aplicação Vue na div com id "app"

 ### documentação HTML:

 - < !DOCTYPE html>: define o tipo do documento como HTML
 - < html>: define o início do documento HTML
 - < head>: define o cabeçalho do documento, onde são incluídas as informações sobre o documento, como o título e os scripts
 - < meta charset="UTF-8">: define o conjunto de caracteres do documento como UTF-8, para suportar caracteres especiais
 - < title>Formulário com Vue</ title>: define o título do documento, que é exibido na barra de título do navegador
 - < script src="http://unpkg.com/vue@next"></ script>: inclui a biblioteca Vue.js no documento, permitindo que a aplicação Vue seja executada
 - < style>: define a seção de estilos do documento, onde são incluídas as definições de estilo para os elementos HTML
 - .cor-alternada: define a classe .cor-alternada com o estilo de fundo em cinza claro
 - </ style>: fecha a seção de estilos do documento
 - < body>: define o corpo do documento, onde são incluídos os elementos que serão exibidos na página
 - < div id="app">: define uma div com o id "app", que será utilizada para montar a aplicação Vue
 - < form>: define um formulário que irá permitir a inserção de novos itens na lista
 - < label>: define um rótulo para o campo de texto
 - < input v-model="novoItem" @keydown.enter.prevent="adicionarItem" type="text">: cria um campo de texto que irá adicionar um novo item à lista quando a tecla Enter é pressionada
 - v-model="novoItem": vincula a variável novoItem da aplicação Vue ao campo de texto, permitindo que o valor digitado seja atualizado automaticamente na aplicação
 - @keydown.enter.prevent="adicionarItem": define um evento que será acionado quando a tecla Enter for pressionada, impedindo que a página seja recarregada e chamando o método adicionarItem da aplicação Vue
 - type="text": define o tipo do campo de texto como "text"
 - </ label>: fecha o rótulo do campo de texto
 - </ form>: fecha o formulário