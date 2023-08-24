<template>
  <el-table :data="table_data" style="width: 100%" v-loading="loading" :element-loading-svg="svg"
    class="custom-loading-svg" element-loading-svg-view-box="-10, -10, 50, 50">
    <el-table-column prop="name" label="Name" />
    <el-table-column prop="bedroom" label="Bedroom" />
    <el-table-column prop="bathroom" label="Bathroom" />
    <el-table-column prop="storey" label="Storey" />
    <el-table-column prop="garage" label="Garage" />
    <el-table-column prop="price" label="Price" />
  </el-table>
</template>

<script>
export default {
  props: {
    table_data: {
      type: Array,
    },
    loading: {
      type: Boolean
    }
  },
  data() {
    return {
      svg: `
        <path class="path" d="
          M 30 15
          L 28 17
          M 25.61 25.61
          A 15 15, 0, 0, 1, 15 30
          A 15 15, 0, 1, 1, 27.99 7.5
          L 15 15
        " style="stroke-width: 4px; fill: rgba(0, 0, 0, 0)"/>
      `,
    }
  }
}
</script>
