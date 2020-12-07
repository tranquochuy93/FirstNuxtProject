import { List } from '~/types/api/list';
import { Staff } from '~/types/api/staff';
import { User } from '~/types/api/user';

export class MessageSession {
    id?: number;
    unread?: boolean;
    staff?: Staff;
    user?: User;
}

export class ChatList implements List {
    current_page?: number = 0;
    data: MessageSession[] = [];

    constructor(init: Partial<ChatList>) {
        Object.assign(this, init);
    }
}