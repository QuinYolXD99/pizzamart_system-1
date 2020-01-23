<template>
    <div>
        <Navbar></Navbar>
        <Banner></Banner>
        <v-row>
            <v-col cols="12"  >
                <v-container fluid>
                    <v-row>
                        <v-col
                            v-for="n in 9"
                            :key="n"
                            class="d-flex child-flex"
                            cols="4"
                        >
                            <item></item>
                        </v-col>
                    </v-row>
                </v-container>
            </v-col>
        </v-row>
    </div>
</template>

<script>
import Navbar from "./NavBar";
import Banner from "./Banner";
export default {
components:{
    Navbar,Banner
}    
}
</script>

