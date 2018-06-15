<template>
  <a class="btn-item" href="javascript:;" @click="open">
      <i class="mdi mdi-plus mr-1"></i>Add
  </a>
</template>

<script>
export default {
  methods: {
    open() {
      this.$emit("open");
    }
  }
};
</script>