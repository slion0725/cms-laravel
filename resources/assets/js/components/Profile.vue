<script>
import { mapGetters, mapState } from "vuex";
export default {
  computed: mapGetters("profile", ["profile"]),
  methods: {
    onSubmit(scope) {
      this.$validator.validateAll(scope).then(result => {
        if (!result) {
          return;
        }

        axios
          .post(`accounts/${this.edit.id}`, this.edit)
          .then(response => {
            this.$store.dispatch("draw");

            swal("Success!", "", "success");

            this.edit = _.cloneDeep(data.edit);

            this.$nextTick(() => {
              this.$validator.reset({ scope: scope });
              this.$validator.errors.clear(scope);
            });
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