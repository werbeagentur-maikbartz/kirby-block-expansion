<template>
  <input
      type="text"
      :placeholder="placeholder"
      :value="content.text"
      @input="update({ text: $event.target.value })"
  />
</template>

<script>
export default {
  computed: {
    placeholder() {
      return "Button text …";
    }
  }
};
</script>

<style>
.k-block-type-button input {
  border: 2px solid #000;
  border-radius: 3rem;
  padding: .25rem .75rem;
  cursor: pointer;
  font: inherit;
  text-align: center;
}
.k-block-type-button input:focus {
  outline: 0;
  border-color: var(--color-focus);
}
</style>