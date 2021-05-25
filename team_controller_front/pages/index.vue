<template>
  <v-row justify="center" align="center">
      <v-card
    class="mx-auto"
    max-width="400"
    tile
  >

    <v-list-item v-for="(item,index) in items" :key="index">
      <v-list-item-content>
        <v-list-item-title link :to="`./team/${item.id}`">{{item.name}}</v-list-item-title>
        <v-divider ></v-divider>
        <v-list-item-subtitle>
          Capitain: {{item.captain}}
        </v-list-item-subtitle>
        <v-list-item-subtitle>
          Members
        </v-list-item-subtitle>
        <v-list-item-subtitle v-for="player in items[index].players" :key="player">
          {{player.name + ": " + player.aim}}
        </v-list-item-subtitle>
        <v-btn
        outlined
        rounded
        text
        link :to="`./team/${item.id}`" 
      >
        Открыть
        </v-btn>
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
          id: 0,
          name: "DHI",
          captain: "Jogonosik",
          players: [
              {
                name: "Jogonosik",
                aim: "frontend"
              },
              {
                name: "Wyndace",
                aim: "backend"
              }
          ]
        },
        {
          id: 1,
          name: "Aboba",
          captain: "Kek",
          players: [
            {
               name: "Kek",
               aim: "Boba"
            },
            {
              name: "Clown",
              aim: "Circus"
            }
          ]
        }
      ]
    }
  },
  methods: {
    getTeams() {
      this.$axios.get("http://127.0.0.1:8000/all_teams").then(result => {
        this.items = result.data;
      });
    }
  },
  mounted() {
    this.getTeams();
  }
}
</script>
