<template>
    <v-container fluid>
        <v-row>
            <v-col cols="8">
                <v-card elevation="2">
                    <v-tabs color="primary">
                        <v-tab>Ongoing</v-tab>
                        <v-tab>Pending</v-tab>
                        <v-tab>Search</v-tab>
                    </v-tabs>
                    <v-data-table
                        :headers="headers"
                        :items="list.data"
                        :items-per-page="list.per_page"
                        class="elevation-1"
                    ></v-data-table>
                </v-card>
            </v-col>
            <v-col cols="4">
            </v-col>
        </v-row>
    </v-container>
</template>

<script lang="ts">
import { Component, Vue, Prop } from 'nuxt-property-decorator';
import { DataTableHeader } from 'vuetify';
import { ChatList } from '~/types/api/chat';

@Component({
    layout: 'dashboard',
})

export default class Chat extends Vue {
    headers: DataTableHeader[] = [
        {
            text: 'id',
            value: 'id',
            align: 'start',
            sortable: false,
        },
        {
            text: 'unread',
            value: 'unread',
            align: 'start',
            sortable: false,
        },
        {
            text: 'nick name',
            value: 'user.zalo_nickname',
            align: 'start',
            sortable: false,
        },
        {
            text: 'staff name',
            value: 'staff.name',
            align: 'start',
            sortable: false,
        },
    ];
    list: ChatList = new ChatList({});
}
</script>
