<template>
    <v-content>
      <v-container
        style="padding:0"
        class="fill-height"
        fluid
      >
        <v-row
          align="center"
          justify="center"
          style="height:100%!important"
        >
          <v-col
            cols="12"
            md="7"
            class="account-form"
          >
          <Toolbar/>
           </v-col>
           <v-col
            cols="12"
            md="5"
          >
           <!-- form -->
           <Login v-if="$route.name =='login'"></Login>
           <Register v-else></Register>

           </v-col>
        </v-row>
      </v-container>
    </v-content>
</template>
<script>
import Login from "./Login";
import Toolbar from "./Toolbar";
import Register from "./Register";
export default {
    data(){
        return {}
    },
    components:{
        Login,Register,Toolbar
    }
}
</script>
