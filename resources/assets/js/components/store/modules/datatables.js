import * as types from "../mutation-types";

const state = {
  dt: {},
  selectStatus: 0,
  selectRowsLength: 0,
  pageLength: 10
};

const getters = {
  selectStatus: state => {
    return state.selectStatus;
  },
  selectRowsLength: state => {
    return state.selectRowsLength;
  }
};

const actions = {
  datatables_init: ({ commit }, payload) =>
    commit(types.DATATABLES_INIT, payload),
  select_toggle: ({ commit }) => commit(types.SELECT_TOGGLE),
  select_check: ({ commit }) => commit(types.SELECT_CHECK)
};

const mutations = {
  [types.DATATABLES_INIT](state, payload) {
    state.dt = payload;
  },
  [types.SELECT_TOGGLE](state) {
    if (state.dt.rows({ selected: true }).data().length == 0) {
      state.dt.rows().select();
    } else {
      state.dt.rows().deselect();
    }
  },
  [types.SELECT_CHECK](state) {
    let rowLength = state.dt.rows().data().length;
    state.selectRowsLength = state.dt.rows({ selected: true }).data().length;

    if (state.selectRowsLength == rowLength && state.selectRowsLength != 0) {
      state.selectStatus = 2;
    } else if (
      state.selectRowsLength != rowLength &&
      state.selectRowsLength != 0
    ) {
      state.selectStatus = 1;
    } else {
      state.selectStatus = 0;
    }
  }
};

export default {
  state,
  getters,
  actions,
  mutations
};
