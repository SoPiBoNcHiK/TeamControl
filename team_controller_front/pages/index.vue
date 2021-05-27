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
          Capitain: {{item.capitain}}
        </v-list-item-subtitle>
        <v-list-item-subtitle>
          Members
        </v-list-item-subtitle>
        <v-list-item-content>
          {{item.members}}
        </v-list-item-content>
        <v-btn
        outlined
        rounded
        text
        link :to="`./${item.id}`" 
      >
        Открыть
        </v-btn>
      <v-btn
        outlined
        rounded
        text
        v-on:click="deleteTeam(item.id)" 
      >
        Удалить
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
      items: []
    }
  },
  methods: {
    deleteTeam(id){
      this.$axios.get("http://127.0.0.1:8000/api/delete_team/" + id);
      this.getTeams();
    },
    getTeams() {
      this.$axios.get("http://127.0.0.1:8000/api/get_all").then(result => {
        this.items = result.data;
      });
    }
  },
  mounted() {
    this.getTeams();
  }
}
</script>
