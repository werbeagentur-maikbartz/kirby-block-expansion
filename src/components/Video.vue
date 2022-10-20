<template>
  <k-block-video
      :is-empty="!video.url"
      empty-icon="video-file"
      empty-text="No file selected yet …"
      @open="open"
  >
    <k-aspect-ratio
        class="k-block-type-video"
        cover="true"
        ratio="16/9"
    >
      <video
          v-if="video.url"
          :src="video.url"
      />
    </k-aspect-ratio>
  </k-block-video>
</template>

<script>
export default {
  data() {
    return {
      mime: null
    };
  },
  computed: {
    video() {
      return this.content.video[0] || {};
    },
  },
  watch: {
    "video.link": {
      handler(link) {
        if (link) {
          this.$api.get(link).then(file => {
            this.mime = file.mime;
          });
        }
      },
      immediate: true
    }
  }
};
</script>