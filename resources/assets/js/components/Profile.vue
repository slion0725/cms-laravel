<script>
import $ from "jquery";
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
  data() {
    return {
      password: "",
      password_confirmation: "",
      avater: null,
      avaterName: ""
    };
  },
  methods: {
    processAvaterFile(event) {
      if (event.target.files.length > 0) {
        this.avater = event.target.files[0];
        this.avater_name = this.avater.name;
      } else {
        this.avater = null;
      }
    },
    onSubmit(scope) {
      this.$validator.validateAll(scope).then(result => {
        if (!result) {
          return;
        }

        // formdata
        let formData = new FormData();

        // append
        _.map(this.profile, (item, key) => {
          formData.append(key, item);
        });

        // file
        if (this.avater != null) {
          formData.append("avater", this.avater);
        } else {
          formData.delete("avater");
        }

        if (this.password != "" && this.password_confirmation != "") {
          formData.append("password", this.password);
          formData.append("password_confirmation", this.password_confirmation);
        } else {
          formData.delete("password");
          formData.delete("password_confirmation");
        }

        // console
        for (let item of formData.entries()) {
          console.log(item[0], item[1]);
        }

        formData.append("_method", "PUT");

        axios
          .post(`profile/${this.profile.id}`, formData)
          .then(response => {
            swal("Success!", "", "success");

            // reset
            this.avater = null;
            this.avater_name = "";
            this.password = "";
            this.password_confirmation = "";
            this.$refs["profile-password"].value = "";
            this.$refs["profile-password_confirmation"].value = "";
            this.$refs["profile-avater"].value = "";

            // error reset
            this.$nextTick(() => {
              this.$validator.reset({ scope: scope });
              this.$validator.errors.clear(scope);
            });

            $(".off-canvas").removeClass("off-canvas-open");
          })
          .catch(error => {
            if (error.response.data.errors) {
              Object.keys(error.response.data.errors).forEach(e => {
                console.log(e);
                this.$validator.errors.add({
                  field: e,
                  msg: error.response.data.errors[e][0],
                  scope: scope,
                  id: `res-${scope}-${e}`
                });
              });
            } else {
              swal("Warning!", error.message, "warning");
            }
          });
      });
    }
  }
};
</script>