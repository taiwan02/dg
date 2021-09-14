<template>
  <div style="height: 100%">
    <headers></headers>
    <el-card class="card"  style="padding: 20px; height: 100%; width: 800px; margin: 20px auto"></el-card>
  </div>
</template>

<script>
export default {

}
</script>

<style lang="less" scoped>
.card{
  /deep/ .el-card__body{
    height: 100%;
  }
}
</style>