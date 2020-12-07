<template>
  <v-row justify="center" align="center">
    <v-col cols="12" sm="8" md="6">
      <v-card class="elevation-12" light>
        <v-toolbar color="primary">
          <v-toolbar-title prepend-icon="lock">Login form</v-toolbar-title>
        </v-toolbar>
        <v-card-text>
          <v-form>
            <v-text-field
              v-model="item.email"
              label="Email"
              outlined
            ></v-text-field>
            <v-text-field
              v-model="item.password"
              label="Password"
              outlined
            ></v-text-field>
          </v-form>
        </v-card-text>
        <v-card-actions class="justify-center">
          <v-btn color="primary" :loading="isBtnLoading" @click="onClickLoginBtn">
            Login
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-col>
  </v-row>
</template>

<script lang="ts">
import { LoginForm, LoginParam } from '~/types/api/staff.ts';
import { Component, Vue, Prop } from 'nuxt-property-decorator';

@Component({
  name: 'Login',
})
export default class Login extends Vue {
  item: LoginForm = new LoginForm({});
  isBtnLoading = false;

  onClickLoginBtn() {
    this.isBtnLoading = true;
    const loginParam: LoginParam = {
      email: this.item.email!,
      password: this.item.password!,
    };

    this.$store.dispatch('login', loginParam).then((res: any) => {
      this.$router.push('/chat');
    })
    .catch((error: any) => {
      console.log(error);
    });
  }
}
</script>
