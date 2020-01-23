<template>
  <v-card
    class="mx-auto my-12"
    max-width="320"
  >
    <v-img
      height="250"
      src="/images/avatar.jpg"
    ></v-img>

    <v-card-title>Title</v-card-title>
    <v-row
        align="center"
        class="mx-0"
      >
        <div class="grey--text ml-4">Store Name</div>
      </v-row>

    <v-card-text>
      <div>
        Details: Small plates, salads & sandwiches an inteimate setting with 12 indoor seats plus patio seating.</div>
    </v-card-text>
        <v-chip
        class="ma-2"
        color="orange"
        label
    >
      <v-icon small left>mdi-star</v-icon>
      Best Seller
    </v-chip>
    <v-divider class="mx-4"></v-divider>
    
    <v-card-actions>
      <v-spacer></v-spacer>
      <v-btn
        class='my-3'
        color="danger white--text"
      >
        Add to Cart
      </v-btn>
    </v-card-actions>
  </v-card>
</template>
<script>
  export default {
    data: () => ({
    }),

    methods: {
      // reserve () {
      //   this.loading = true

      //   setTimeout(() => (this.loading = false), 2000)
      // },
    },
  }
</script>