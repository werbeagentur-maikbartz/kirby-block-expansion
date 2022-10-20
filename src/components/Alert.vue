<template>
  <div>
      <h3 class="k-block-type-alert-heading">
        <k-writer
            ref="heading"
            :inline="headingField.inline"
            :marks="headingField.marks"
            :placeholder="headingField.placeholder || 'Add a heading'"
            :value="content.heading"
            @input="update({ heading: $event })"
        />
      </h3>
      <k-writer
          class="label"
          ref="textbox"
          :marks="textField.marks"
          :value="content.text"
          :placeholder="textField.placeholder || 'Enter some stuff…'"
          @input="update({ text: $event })"
      />
  </div>
</template>

<script>
export default {
  computed: {
    textField() {
      return this.field("text");
    },
    headingField() {
      return this.field("heading");
    }
  }
}
</script>