import Vue from "vue";
import Vuex from "vuex";
import * as actions from "./actions";
import * as getters from "./getters";
import datatables from "./modules/datatables";
import profile from "./modules/profile";

Vue.use(Vuex);

export default new Vuex.Store({
  actions,
  getters,
  modules: {
    datatables: datatables,
    profile: profile
  },
  strict: false
});
