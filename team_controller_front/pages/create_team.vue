<template>
  <v-form
    ref="form"
    v-model="valid"
    lazy-validation
  >
    <v-text-field
      v-model="name"
      :counter="10"
      :rules="nameRules"
      label="Team name"
      required
    ></v-text-field>

    <v-text-field
      v-model="email"
      :rules="emailRules"
      label="Capitain name"
      required
    ></v-text-field>

    <v-text-field
      v-model="email"
      :rules="emailRules"
      label="Members name(seperated with a space)"
      required
    ></v-text-field>

  
    <v-btn
      color="success"
      class="mr-4"
      @click="validate"
    >
      Create team
    </v-btn>


    
  </v-form>
</template>