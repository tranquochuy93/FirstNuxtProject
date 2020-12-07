<template>
  <v-app style="background-color: #CEE7FF;">
    <v-main>
      <v-container>
        <nuxt />
      </v-container>
    </v-main>
  </v-app>
</template>

<script class="ts">
  import { Component, Vue } from 'nuxt-property-decorator';

  @Component
  export default class Default extends Vue {
  }
</script>
