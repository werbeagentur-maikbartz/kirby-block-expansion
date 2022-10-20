<template>
  <div>
    <div v-if="items.length">
      <details v-for="(item, index) in items" :key="index">
        <summary>
          <k-writer
              ref="summary"
              :inline="true"
              :marks="false"
              :value="item.summary"
              @input="updateItem(content, index, 'summary', $event)"
          />
        </summary>
        <k-writer
            class="label"
            ref="detail"
            :marks="true"
            :value="item.detail"
            @input="updateItem(content, index, 'detail', $event)"
        />
      </details>
    </div>
    <div v-else>No questions yet</div>
  </div>
</template>

<script>
export default {
  computed: {
    items() {
      return this.content.accordion || {};
    },
    methods: {
      updateItem(content, index, fieldName, value) {
        content.accordion[index][fieldName] = value;
        this.$emit("update", {
          ...this.content,
          ...content
        });
      }
    }
  }
}
</script>