import Accordion from './components/Accordion.vue';
import Alert from "./components/Alert.vue";
import DescriptionList from "./components/DescriptionList.vue";
import Button from "./components/Button.vue";
import Video from "./components/Video";

panel.plugin("wamb/block-expansion", {
  blocks: {
    accordion: Accordion,
    alert: Alert,
    descriptionList: DescriptionList,
    button: Button,
    video:Video
  }
});
