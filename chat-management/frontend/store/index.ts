import { DefineActions, DefineMutations } from 'vuex-type-helper';
import { Actions, Getters, Mutations, State } from './type';
import { LoginForm, LoginParam, TokenResponse } from '~/types/api/staff.ts';

export const state = (): State => ({
  loginForm: new LoginForm({}),
  accessToken: '',
});

export const mutations: DefineMutations<Mutations, State> = {
  setAccessToken (state, payload) {
    state.accessToken = payload.accessToken;
  }
}

export const actions: DefineActions<Actions, State, Mutations, Getters> = {
  async login({ commit }, payload: LoginParam) {
    await this.$axios.$get('/sanctum/csrf-cookie', {});
    
    const url = '/api/login';
    return this.$axios.$post(url, {
      email: payload.email,
      password: payload.password,
    })
    .then((res: TokenResponse) => {
      console.log(res);
    })
    // commit('setAccessToken', { accessToken: 'abc' });
  }
}