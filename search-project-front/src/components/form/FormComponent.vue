<template>
  <el-row>
    <el-col :span="6">
      <el-form ref="form" :model="inputs" label-width="100px" label-position="top">
        <div v-for="(input, index) in inputs" :key="index">
          <el-form-item :label="input.label">
            <el-input v-model="input.value" :type="input.type" @keyup="searchItems"></el-input>
          </el-form-item>
        </div>
        <el-form-item>
          <el-button type="primary" @click="searchItems">Search</el-button>
        </el-form-item>
      </el-form>
    </el-col>
    <el-col :span="12" style="padding-left:50px">
      <TableShow :table_data="buildings" :loading="is_load" />
    </el-col>
  </el-row>
</template>

<script>
import axios from "axios";
import TableShow from '../table/TableComponent.vue';

export default {
  name: "CreateForm",
  components: {
    TableShow
  },
  props: {
    inputs: {
      type: Array,
    },
  },
  data() {
    return {
      buildings: [],
      is_load: false
    };
  },
  methods: {
    searchItems() {
      const params = {};

      for (const input of this.inputs) {
        params[input.name] = input.value;
      }

      this.is_load = true;

      axios
        .get(`http://127.0.0.1:8000/api/search-buildings`, { params })
        .then((res) => {
          this.buildings = res.data
        })
        .catch((error) => {
          console.log(error);
        })
        .finally(() => {
          this.is_load = false;
        });
    },
  },
};
</script>

<style scoped>
.el-table__header {
  width: 150px;
}
</style>