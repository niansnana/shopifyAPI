<template>
  <el-container>
  <el-aside width="200px">
    <el-menu
          default-active="1-4-1"
          class="el-menu-vertical-demo"
          background-color="#333744"
          text-color="#fff"
          active-text-color="#409EFF"
        >
          <el-submenu index="1">
            <template slot="title">
              <i class="el-icon-location"></i>
              <span slot="title">导航一</span>
            </template>
            <el-menu-item-group>
              <el-menu-item index="1-1">选项1</el-menu-item>
              <el-menu-item index="1-2">选项2</el-menu-item>
            </el-menu-item-group>
          </el-submenu>
        </el-menu>
  </el-aside>
  <el-main>Main</el-main>
</el-container>
</template>

<script>
export default {
  data(){
    return{
    }
  },
  methods:{
    
  }
}
</script>

<style lang="less" scoped>
.el-container {
  height: 100%;
    .el-aside{
    background-color: #333744;
      .el-menu {
        border-right: none;
      }
    .el-main {
      background-color: #eaedf1;
    }
  }
}
</style>