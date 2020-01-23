<template>
    <v-card flat color="transparent" class="px-10">
        <v-card-text class="headline">Create new account</v-card-text>
      <v-card-text>
        <v-row>
            <v-col cols="12" md="6">
              <v-text-field
              v-model="firstname"
              name="firstname"
              type="text"
              label="Firstname"
            />
          </v-col>
          <v-col cols="12" md="6">
              <v-text-field
              v-model="lastname"
              name="lastname"
              type="text"
              label="Lastname"
            />
          </v-col>
        </v-row>
          
              <v-text-field
              v-model="business"
              name="business"
              type="text"
              label="Bussiness name/Store name"
            />
            <v-text-field
            v-model="address"
            name="address"
            type="text"
            label="Address"
          />
            <v-text-field
            label="Contact number"
            v-model="contact"
            name="contact"
            type="text"
          />
            <v-text-field
            v-model="email"
            name="email"
            type="Email"
            label="email"
          />
            <v-text-field
            label="password"
            v-model="password"
            name="password"
            type="password"
          />
          
      </v-card-text>
      <v-card-actions>
        <v-spacer />
        <v-btn width="100%" large depressed color="primary" @click="register">register</v-btn>
      </v-card-actions>
      <p class="text-right body-2"> <span class="text-right">Already have and account?  Log in <v-btn small color="primary" text class="mx-0 px-0" @click="$router.push('/pizzamart/login')">here</v-btn> </span></p>
    </v-card>
</template>

<script>
  // import { mask } from 'vue-the-mask'
  import axios from 'axios';
  export default {
    props: {
      source: String,
    },
 
    data(){
      return{
        firstname:"",
        lastname:"",
        business:"",
        address:"",
        contact:"",
        email:"",
        password:""
        }
    },
    methods:{
     register(){}
    }
  }
</script>