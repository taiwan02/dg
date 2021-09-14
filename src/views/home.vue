<template>
  <div class="content">
    <div class="top">
      <div class="top-wrrap">
        <div class="top-heeader">
          <div class="top-left">
            <!-- <span class="left-item">北方的文先生</span> -->
            <span
              class="left-item"
              @click="
                AddFavorite('文先生软件', 'http://zhaoxiaozhang.gitee.io/wenxs')
              "
              >收藏本站</span
            >
          </div>
          <div class="top-right">
            <span class="right-item" @click="dialogVisible = true">赞助</span>
            <span class="right-item" @click="dialogVisible2 = true">关于</span>
          </div>
        </div>
        <div class="top-content">
          <div class="title">黑猫软件中心</div>
          <div class="tips">一个专注写软件的人</div>
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
    </div>
    <div class="center">
      <el-card class="box-card">
        <el-collapse>
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
            <div>
              体验群：324497886
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
                黑猫群发器
              </div>
              <i class="header-icon el-icon-s-flag"></i>
            </template>
            <div>软件框架：OnoQQ</div>
            <div>
              下载地址：<el-link type="primary" @click="joinGroup('https://jq.qq.com/?_wv=1027&k=c9CfkxlS')"
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
      console.log('url', url);
      if (!url) {
        window.open('https://jq.qq.com/?_wv=1027&k=c9CfkxlS')
      } else {
        window.open(url)
      }
    },
    AddFavorite(title, url) {
      var ua = navigator.userAgent.toLowerCase()
      if (ua.indexOf('360se') > -1) {
        this.$alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!', '温馨提示', {
          confirmButtonText: '知道了',
        });
      } else if (ua.indexOf('msie 8') > -1) {
        window.external.AddToFavoritesBar(url, title) //IE8
      } else if (document.all) {
        try {
          window.external.addFavorite(url, title)
        } catch (e) {
          this.$alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!', '温馨提示', {
            confirmButtonText: '知道了',
          });
        }
      } else if (window.sidebar) {
        window.sidebar.addPanel(title, url, '')
      } else {
        this.$alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!', '温馨提示', {
          confirmButtonText: '知道了',
        });
      }
    },
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
    height: 320px;
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    
    background-image: url('../assets/nav-geren.jpg');
    background-color: transparent;
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
    position: relative;
    width: 100%;
    .top-wrrap{
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(45, 45, 54, 0.54);
    z-index: 9;
    padding-top: 20px;
    }
    .top-heeader {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 200px;
      color: #eeeeee;
      .top-left {
        cursor: pointer;
        .left-item {
          cursor: pointer;
          margin-right: 15px;
        }
        .left-item:hover {
          color: #ffffff;
        }
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