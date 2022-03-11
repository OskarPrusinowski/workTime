const urlAuthUser = "http://127.0.0.1:8000/user";

const state = {
    actualUser: {
        id: 0,
        name: "",
        surname: "",
        phone_number: 0,
        email: "",
        password: "",
        password_confirmation: "",
        company_id: null,
        role_id: null,
    }
}

const getters = {
    getActualUser: state => state.actualUser,
    getActualUserId: state => state.actualUser.id,
}

const mutations = {
    setActualUser(state, data) {
        state.user = data;
    },
    setActualUserId(state, data) {
        state.user.id = data;
    },
}

const actions = {
    getActualUser(state, VueComponent) {
        VueComponent.$http.get(urlAuthUser)
            .then(response => {
                state.commit("setActualUser", response.data)
            })
    }
}

export default {
    state,
    mutations,
    actions,
    getters
}