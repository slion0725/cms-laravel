import * as types from "../mutation-types";

const state = {
  profile: {
    name: null,
    email: null,
    password: null,
    password_confirmation: null
  }
};

const getters = {
  profile: state => {
    return state.profile;
  }
};

const actions = {
  profile: ({ commit }, payload) => commit(types.PROFILE, payload),
};

const mutations = {
  [types.PROFILE](state, payload) {
    state.profile = payload;
  }
};

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
};
