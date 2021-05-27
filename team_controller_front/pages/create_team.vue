<template>
  <v-form
    ref="form"
    lazy-validation
  >
    <v-text-field
      v-model="newTeam.name"
      :counter="10"
      label="Team name"
      required
    ></v-text-field>

    <v-text-field
      v-model="newTeam.capitain"
      label="Capitain name"
      required
    ></v-text-field>

    <v-text-field
      v-model="members_temp"
      label="Members name(seperated with a space)"
      required
    ></v-text-field>

  
    <v-btn
      color="success"
      class="mr-4"
      @click="magic"
    >
      Create team
    </v-btn>

    
  </v-form>
</template>

<script>
export default {
  data() {
    return {
      newTeam: {
        name: '',
        capitain: '',
        members: '',
      },
      members_temp: '',
      members1 : [],
    };
  },
  methods: {
    magic(){
      this.members_temp += '';
      let temp_members =  this.members_temp.split(';');
      let memberss = [];
      for(let i = 0; i  < temp_members.length; ++i){
        memberss.push(temp_members[i].split(': '))
      }
      for(let i = 0; i < memberss.length-1; ++i){
        this.members1.push({
          name: memberss[i][0],
          aim : memberss[i][1],
        })
      }
    this.newTeam.members = JSON.stringify(this.members1);
    this.addTeam();
    this.newTeam.members = [];
    temp_members = [];
    memberss = [];
    this.members1 = [];

    },
    addTeam(){

      this.$axios.post('http://127.0.0.1:8000/api/add_team', this.newTeam);
    }
    
  }
};
</script>