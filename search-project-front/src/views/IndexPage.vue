<template>
  <FormCreate :inputs="form_inputs" />
</template>

<script>
import FormCreate from "../components/form/FormComponent.vue";

export default {
  components: {
    FormCreate,
  },
  data() {
    return {
      form_inputs: [
        { name: "name", label: "Name", type: "text", value: "" },
        { name: "bedroom", label: "Bedroom", type: "number", value: null },
        { name: "bathroom", label: "Bathroom", type: "number", value: null },
        { name: "storey", label: "storey", type: "number", value: null },
        { name: "garage", label: "Garage", type: "number", value: null },
        { name: "min_price", label: "Min price", type: "number", value: null },
        { name: "max_price", label: "Max price", type: "number", value: null },
      ],
    };
  },
};
</script>