<template>
  <div class="header">
    <el-breadcrumb separator="/">
      <el-breadcrumb-item :to="{ path: '/home' }">首页</el-breadcrumb-item>
      <el-breadcrumb-item><a href="javascript:;">{{ title  ||'' }}</a></el-breadcrumb-item>
    </el-breadcrumb>
  </div>
</template>

<script>
export default {
  data() {
    return {
      title: this.$route.meta.title
    }
  }
}
</script>

<style lang="less" scoped>
.header{
  background-color: rgba(0, 0, 0, 0.8);
  padding: 0 200px;
  height: 60px;
  line-height: 60px;
  text-align: left;
  color: #fff;
  .el-breadcrumb{
   height: 60px;
  line-height: 60px;
    .el-breadcrumb__item{
      color: #fff;
      /deep/ .el-breadcrumb__inner{
        color: #fff !important;
        a {
          color: #fff;
        }
      }
    }
  }

}
</style>