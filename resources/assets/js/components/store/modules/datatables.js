import * as types from "../mutation-types";
import Papa from "papaparse";
import FileSaver from "file-saver";

const state = {
  dt: {},
  selectStatus: 0,
  selectRowsLength: 0,
  pageLength: 10,
  selectRows: {}
};

const getters = {
  selectStatus: (state, getters, rootState, rootGetters) => {
    return state.selectStatus;
  },
  selectRowsLength: state => {
    return state.selectRowsLength;
  },
  pageLength: state => {
    return state.pageLength;
  },
  selectRows: state => {
    return state.selectRows;
  }
};

const actions = {
  datatables_init: ({ dispatch, commit, getters, rootGetters }, payload) =>
    commit(types.DATATABLES_INIT, payload),
  select_toggle: ({ commit }) => commit(types.SELECT_TOGGLE),
  select_check: ({ commit }) => commit(types.SELECT_CHECK),
  page_length_change: ({ commit }, payload) =>
    commit(types.PAGE_LENGTH_CHANGE, payload),
  search_emit: ({ commit }, payload) => commit(types.SEARCH_EMIT, payload),
  search_clear: ({ commit }, payload) => commit(types.SEARCH_CLEAR, payload),
  download: ({ commit }) => commit(types.DOWNLOAD),
  draw: ({ commit }) => commit(types.DRAW)
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

    state.selectRows = state.dt
      .rows({ selected: true })
      .data()
      .toArray();
  },
  [types.PAGE_LENGTH_CHANGE](state, payload) {
    state.dt.page.len(payload).draw();
    state.pageLength = payload;
  },
  [types.SEARCH_EMIT](state, payload) {
    let data = JSON.parse(JSON.stringify(payload));

    Object.keys(data).forEach(function(d) {
      let v = "";

      let r = false;

      if (d == "all") {
        state.dt.search(data[d]);
      } else if (typeof data[d].value == "string") {
        v = data[d].value;

        if (typeof data[d].regex == "boolean") {
          r = true;
        }

        state.dt.column(d + ":name").search(v, r);
      }
    });

    state.dt.draw();
  },
  [types.SEARCH_CLEAR](state, payload) {
    let data = JSON.parse(JSON.stringify(payload));

    Object.keys(data).forEach(function(d) {
      if (d == "all") {
        payload.all = "";
      } else {
        payload[d] = { value: "", regex: false };
      }
    });

    state.dt
      .search("")
      .columns()
      .search("")
      .draw();
  },
  [types.DOWNLOAD](state) {
    let data = state.dt
      .rows({ selected: true })
      .data()
      .toArray();
    let json = JSON.stringify(data);
    let csv = Papa.unparse(json);
    FileSaver.saveAs(new Blob([csv]), "export.csv");
  },
  [types.DRAW](state) {
    state.dt.draw();
  }
};

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
};
