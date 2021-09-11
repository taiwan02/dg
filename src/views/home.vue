<template>
  <div class="content">
    <div class="top">
      <div class="top-heeader">
        <div class="top-left">北方的文先生</div>
        <div class="top-right">
          <span class="right-item" @click="dialogVisible = true">赞助</span>
          <span class="right-item" @click="dialogVisible2 = true">关于</span>
        </div>
      </div>
      <div class="top-content">
        <div class="title">北方的文先生</div>
        <div class="tips">一个专注写软件的人</div>
        <!-- <div class="title">爱上的角度看</div>
        <div class="tips">阿斯利康阿萨快乐</div> -->
        <!-- <div class="groups" @click="joinGroup">交流群：1030654942</div> -->
        <el-tooltip placement="bottom" effect="light">
          <div slot="content" class="group-img-wrap">
            <el-image
              class="group-img"
              style="width: 200px; height: 200px"
              :src="require('../assets/jlq.jpg')"
            ></el-image>
          </div>
          <el-button
            class="groups"
            type="danger"
            size="mini"
            icon="el-icon-user-solid"
            round
            @click="joinGroup('https://jq.qq.com/?_wv=1027&k=c9CfkxlS')"
            >点击加入交流群：1030654942</el-button
          >
        </el-tooltip>
      </div>
    </div>
    <div class="center">
      <el-card class="box-card">
        <el-collapse v-model="activeNames">
          <el-collapse-item
            class="list-item"
            name="1"
            style="background-color: #e1f3d8"
          >
            <template slot="title">
              <div
                class="header-text"
                style="font-size: 16px; font-weight: bold"
              >
                黑猫群管
              </div>
              <i class="header-icon el-icon-s-flag"></i>
            </template>
            <div>软件框架：小栗子</div>
            <div>
              下载地址：<el-link
                type="primary"
                @click="joinGroup('https://bbs.xiaolz.cn/thread-3450-1-6.html')"
                >https://bbs.xiaolz.cn/thread-3450-1-6.html</el-link
              >
            </div>
            <div>
              使用教程：<el-link
                type="primary"
                @click="
                  joinGroup(
                    'https://wenxs.yuque.com/books/share/590506aa-eaf2-4830-b7b9-c1ddbfc1869e?#'
                  )
                "
                >https://wenxs.yuque.com/books/share/590506aa-eaf2-4830-b7b9-c1ddbfc1869e?#</el-link
              >
            </div>
          </el-collapse-item>
          <el-collapse-item
            class="list-item"
            name="2"
            style="background-color: #e1f3d8"
          >
            <template slot="title">
              <div
                class="header-text"
                style="font-size: 16px; font-weight: bold"
              >
                QQ群发器
              </div>
              <i class="header-icon el-icon-s-flag"></i>
            </template>
            <div>软件框架：OnoQQ</div>
            <div>
              下载地址：<el-link type="primary" @click="joinGroup"
                >交流群内下载</el-link
              >
            </div>
          </el-collapse-item>
        </el-collapse>
      </el-card>
    </div>
    <el-dialog title="捐赠文先生" :visible.sync="dialogVisible" width="50%">
      <div class="md-img-wrap">
        <el-image
          style="width: 180px; margin-left: 20px"
          :src="require('../assets/wxsk.png')"
        ></el-image>
        <el-image
          style="width: 180px; margin-left: 20px"
          :src="require('../assets/zfbsk.jpg')"
        ></el-image>
        <el-image
          style="width: 180px; margin-left: 20px"
          :src="require('../assets/qqsk.jpg')"
        ></el-image>
      </div>
    </el-dialog>
    <el-dialog title="关于" :visible.sync="dialogVisible2" width="30%">
      <div>所有软件均出自：北方的文先生</div>
      <div>定制联系QQ：1075753601</div>
    </el-dialog>
  </div>
</template>

<script>
// @ is an alias to /src

export default {
  name: 'Home',
  data() {
    return {
      dialogVisible: false,
      dialogVisible2: false
    }
  },
  methods: {
    joinGroup(url) {
      if (url) {
        window.open(url)
      } else {
        window.open('https://jq.qq.com/?_wv=1027&k=c9CfkxlS')
      }
    },
    handleChange(val) {
      console.log(val)
    }
  }
}
</script>

<style lang="less" scoped>
.content {
  .el-tooltip__popper {
    /deep/.group-img-wrap {
      .group-img {
        width: 100px;
        height: 100px;
        .el-image__inner {
          width: 100px;
          height: 100px;
        }
      }
    }
  }

  .top {
    height: 250px;
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    padding-top: 20px;
    .top-heeader {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 200px;
      color: #eeeeee;
      .top-left {
        cursor: pointer;
      }
      .top-left:hover {
        color: #ffffff;
      }
      .top-right {
        font-size: 14px;
        .right-item {
          cursor: pointer;
          margin-right: 15px;
        }
        .right-item:hover {
          color: #ffffff;
        }
      }
    }
    .top-content {
      text-align: center;
      padding-top: 20px;
      background-color: transparent;
      .title {
        font-size: 40px;
        font-family: 'Helvetica Neue', Helvetica, 'PingFang SC',
          'Hiragino Sans GB', 'Microsoft YaHei', '微软雅黑', Arial, sans-serif;
        color: #ffffff;
        text-align: center;
        color: #daf6ff;
        text-shadow: 0 0 20px #0aafe6, 0 0 20px;
      }

      .tips {
        margin-top: 15px;
        font-size: 16px;
        font-weight: 200;
        color: #f4f4f4;
      }
      .groups {
        margin-top: 15px;
      }
    }
  }
  .center {
    width: 800px;
    margin: 0 auto;
    padding: 30px 0;
    .box-card {
      text-align: left;
      .header-icon {
        margin-left: 5px;
        color: red;
      }
    }
  }
  .el-dialog {
    .md-img-wrap {
      display: flex;
      justify-content: space-between;
    }
  }
}
</style>
