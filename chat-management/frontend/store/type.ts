
import { LoginForm, LoginParam } from '~/types/api/staff';

export interface State {
  loginForm: LoginForm;
  accessToken: string;
}
 
export interface Getters {
}

export interface Mutations {
  setAccessToken: { accessToken: string }
}

export interface Actions {
  login: LoginParam;
}
