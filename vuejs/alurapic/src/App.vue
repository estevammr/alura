<template>
  <div>
    <h1>{{ titulo }}</h1>
    <ul>
      <li v-for="foto of fotos">
        <img :src="foto.url" :alt="foto.titulo">
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      titulo: 'Alurapic',
      fotos: [
        {
          url: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0sL8kqZVHkvMzhBRabVNUKB6qnl-eA9PjXnX61pUWFeOXX1UY',
          titulo: 'Cachorro'
        },
        {
          url: 'http://4.bp.blogspot.com/-OhZvpz9-FBs/UVtmoQxKgkI/AAAAAAAACMc/6MWBfw762Jc/s1600/pacato1.jpg',
          titulo: 'Gato Guerreiro'
        }
      ]
    }
  }
}
</script>

<style>
</style>
