<template>
  <v-app>
      <v-app-bar app clipped-left>
          <v-tabs>
              <v-tab v-for="item in items" :key="item.title" :to="item.link">
                  {{ item.title }}
              </v-tab>
          </v-tabs>
      </v-app-bar>
      <v-main>
        <v-container fluid>
           <v-row align="center" justify="center">
            <v-col cols="12" md="12" sm="12">
              <router-view></router-view>
            </v-col>
          </v-row>
        </v-container>
      </v-main>
  </v-app>
  
</template>

<script lang="ts">
import { Component, Vue, Prop } from 'nuxt-property-decorator';

@Component
export default class DashBoard extends Vue {
    items: any[] = [];

    mounted() {
        this.setMenu();
    }

    setMenu() {
        this.items = [
            {
                title: 'Message',
                link: '/chat'
            },
            {
                title: 'Bulk Message',
                link: '/bulk_message'
            },
            {
                title: 'Staff',
                link: '/staff'
            }
        ]
    }
}
</script>
