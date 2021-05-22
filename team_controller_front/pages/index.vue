<template>
  <v-row justify="center" align="center">
      <v-card
    class="mx-auto"
    max-width="400"
    tile
  >

    <v-list-item v-for="item in items" :key="item">
      <v-list-item-content>
        <v-list-item-title>{{item.name}}</v-list-item-title>
        <v-list-item-subtitle>
          {{item.captain}}
        </v-list-item-subtitle>
        <v-list-item-subtitle>
          {{item.players}}
        </v-list-item-subtitle>
      </v-list-item-content>
    </v-list-item>
  </v-card>
  </v-row>
</template>

<script>
import Logo from '~/components/Logo.vue'
import VuetifyLogo from '~/components/VuetifyLogo.vue'

export default {
  components: {
    Logo,
    VuetifyLogo
  },
  data(){
    return{
      items: [
        {
          name: "DHI",
          captain: "Jogonosik",
          players: "Wyndace"
        },
        {
          name: "Aboba",
          captain: "Kek",
          players: "Lol"
        }
      ]
    }
  }
}
</script>
