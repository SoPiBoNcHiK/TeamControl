<template>
    <v-list-item>
      {{$route.params.id}}
      <v-list-item-content>
        <v-list-item-title>Team name: {{items.name}}</v-list-item-title>
        <v-list-item-subtitle>
          Capitain: {{items.capitain}}
        </v-list-item-subtitle>
        <v-list-item-subtitle>
          Members
        </v-list-item-subtitle>
       <v-list-item-content>
          {{items.members}}
        </v-list-item-content>
      </v-list-item-content>
    </v-list-item>
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
      dataa: [],
      items: [
        {
          id: 0,
          name: "DHI",
          captain: "Jogonosik",
          members: [
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
      this.$axios.get("http://127.0.0.1:8000/api/team/18").then(result => {
        this.items = result.data;
      });
      
    }
  },
  mounted() {
    this.getTeams();
  }
}
</script>