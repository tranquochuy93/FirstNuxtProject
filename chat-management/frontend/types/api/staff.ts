export class LoginForm {
  email?: string;
  password?: string;

  constructor(init: Partial<LoginForm>) {
    Object.assign(this, init);
  }
}

export class Staff {
    id?: number;
    name?: string;
    email?: string;
    password?: string;
}

export interface TokenResponse {
  token: string;
  user: Staff;
}

export interface LoginParam {
  email: string;
  password: string;
}
