const app = Vue.createApp({
  data() {
    return {
      novoItem: '',
      lista: [],
      corAlternada: false,
      mensagemInicial: 'Bem-vindo ao Vue.js!'
    }
  },
  methods: {
    adicionarItem() {
      this.lista.push(this.novoItem)
      this.novoItem = ''
    },
    mudarCor() {
      this.corAlternada = !this.corAlternada
    }
  },
  computed: {
    classeCor() {
      return this.corAlternada ? '#eeeee4' : '#abdbe3'
    }
  }
})

app.mount('#app')
