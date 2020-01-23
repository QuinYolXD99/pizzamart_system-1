<template>
  <header class="hero">
    <div class="center-content">
      <h1>Pizza_Mart</h1>
      <br>
      <h3>Enjoy Your Pizza to the fullest</h3>
          <v-container>
            <v-row>
              <v-col cols="12">
                <v-text-field
                  v-model="address"
                  filled
                  style="background:white!important"
                  placeholder="enter your address"
                  color="white"
                  outlined
                  hide-details
                ></v-text-field>
              </v-col>
            </v-row>
      </v-container>
      <v-btn
          depressed
          x-large
          :href="`location/${address}`"
          rounded
          width="200"
          color="danger white--text"
        >
          Search
        </v-btn>
    <br><br>
        <p><span class="white-text">Grow your Pizza business with us!</span> <a href="/pizzamart/register">Sign up here.</a></p>
    </div>
  </header>
</template>
<script>
export default {
  data(){
    return{
      address:""
    }
  },

}
</script>


<style lang="sass" scoped>
.hero
  background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('/images/banner.jpg')
  background-size: cover
  background-position: center
  width: 100wh
  height: 100vh
  display: flex

.center-content
  width: 400px
  display: flex
  flex-direction: column
  align-items: center
  margin: auto
  
  & h1, h3
    color: white
    line-height: 1
  
  & h1
    text-transform: uppercase
    font-size: 3em
    margin-bottom: 0
    text-align: center
    
  & h3
    margin-bottom: 40px
    font-size: 1.5em
    font-weight: normal

.button
  text-transform: uppercase
  color: white
  padding: 20px
      text-decoration: none  
  
  &:hover
    background-color: rgba(255, 255, 255, 0.1)
    border-color: rgba(255, 255, 255, 0.7)
    color: white
</style>

