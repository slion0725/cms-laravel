<script>
// import { mapGetters, mapState } from "vuex";
import axios from "axios";
import swal from "sweetalert2";
axios.defaults.headers["Accept"] = "application/json";
export default {
  props: {
    profile: {
      type: Object,
      required: true
    }
  },
  // computed: mapGetters("profile", ["profile"]),
  methods: {
    onSubmit(scope) {
      this.$validator.validateAll(scope).then(result => {
        if (!result) {
          return;
        }
        
        axios
          .post(`accounts/${this.profile.id}`, {...this.profile, _method: "PUT"})
          .then(response => {
            swal("Success!", "", "success");
          })
          .catch(error => {
            Object.keys(error.response.data.errors).forEach(e => {
              this.$validator.errors.add({
                field: e,
                msg: error.response.data.errors[e][0],
                scope: scope,
                id: `res-${scope}-${e}`
              });
            });
          });
      });
    }
  }
};
</script>