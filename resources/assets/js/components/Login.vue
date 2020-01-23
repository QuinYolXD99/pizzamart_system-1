<template>
   <v-card flat color="transparent" class="px-10">
      <v-card-text class="headline">Log in to continue</v-card-text>
          <v-card-text>
            <v-text-field
              v-model="email"
              name="email"
              type="email"
              label="email"
            />
            <br>
            <br>

              <v-text-field
              label="password"
              v-model="password"
              name="password"
              type="password"
            />
      </v-card-text>
          <v-card-actions>
            <v-spacer />
            <v-btn width="100%" large depressed color="primary" @click="login">login</v-btn>
          </v-card-actions>
          <br>
          <p class="text-right body-2"> <span class="text-right">Create your new account <v-btn small color="primary" text class="mx-0 px-0" @click="$router.push('/pizzamart/register')">here</v-btn> </span></p>
            
          
  </v-card>
</template>
<script>
  import axios from 'axios';
  export default {
    props: {
      source: String,
    },
    data(){
      return{
      email:"",
      password:""}
    },
    methods:{
     login(){}
    }
  }
</script>
