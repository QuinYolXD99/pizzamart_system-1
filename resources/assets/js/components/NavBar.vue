<template>
  <v-app-bar app light >
   
    <v-btn tile depressed    text x-large href="/pizzamart">
      <span>Pizza</span>
      <span class="font-weight-light">_mart</span>
    </v-btn>
    <v-spacer></v-spacer>
    <div class="links">
      <a href="/pizzamart/login">Login</a>
      <a href="/pizzamart/register">Sign up</a>
    </div>
    <v-btn color="danger" depressed >
       <svg viewBox="0 0 24 24" fill="#ffffff" aria-hidden="true" height="24" width="24" style="flex-shrink: 0;"><title></title><path fill-rule="evenodd" clip-rule="evenodd" d="M4.278 4.006A7.023 7.023 0 0 0 3.865 4H3a1 1 0 0 1 0-2h.951c.313-.002.706-.003 1.063.136a2 2 0 0 1 .797.565c.25.292.377.663.48.958l.028.082.09.259h12.185c.373 0 .718 0 1 .026.293.026.661.09.998.318a2 2 0 0 1 .846 1.293c.074.4-.016.762-.109 1.042-.09.268-.228.584-.377.926l-2.116 4.837-.032.073c-.116.267-.26.602-.508.863a1.998 1.998 0 0 1-.769.502c-.338.123-.703.121-.993.12h-7.48l-.676 1.082a12.721 12.721 0 0 0-.53.894l.037.003c.212.02.51.021 1.002.021H18a1 1 0 1 1 0 2H8.844c-.434 0-.827 0-1.142-.029-.317-.029-.73-.098-1.09-.365a2 2 0 0 1-.801-1.446c-.036-.447.124-.834.268-1.118.142-.283.35-.615.58-.984l.739-1.18L4.43 4.401a7.03 7.03 0 0 0-.142-.388l-.003-.007h-.008z" fill="#ffffff"></path><path d="M7.5 22a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM16.5 22a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" fill="#ffffff"></path></svg>
       <span style="color:white">
         <h3>5</h3>
       </span>
    </v-btn>
   
  </v-app-bar>
</template>