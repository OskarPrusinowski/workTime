const state = {
    users: ['ok']
};

const getters = {
    getUsers: state => state.users
};

const mutations = {
    setUsers(state, data) {
        state.users = data;
    }
};

const actions = {
    getUsers(state, VueComponent) {
        console.log(VueComponent)
    }
};

export default {
    state,
    mutations,
    actions,
    getters
}
