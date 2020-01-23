<template>
    <div >  
        <v-app >
            <!-- :class="$route.name =='login'|| $route.name =='register' ?'account-form':''" -->
            <router-view></router-view>
        </v-app>
    </div>
</template>
<script>
    export default {}
</script>

<style>

</style>
