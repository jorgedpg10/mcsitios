<template>
    <div>
        <div class="container">
        <el-row type="flex" class="row-bg" justify="center">

            <el-col :span="12">
                <div class="grid-content bg-purple-light">
                    <urls></urls>
                </div>
            </el-col>

        </el-row>
        </div>

        <div class="container">
            <el-row type="flex" class="row-bg" justify="center">

                <el-col :span="12">
                    <el-button type="primary" round>Primary</el-button>
                    <el-button type="primary" round>Primary2</el-button>
                </el-col>

            </el-row>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                value1: true,
                value2: true
            }
        }
    };
</script>


<style>
    .el-row {
        margin-bottom: 20px;
    &:last-child {
         margin-bottom: 0;
     }
    }
    .el-col {
        border-radius: 4px;
    }
    .bg-purple-dark {
        background: #99a9bf;
    }
    .bg-purple {
        background: #d3dce6;
    }
    .bg-purple-light {
        background: #e5e9f2;
    }
    .grid-content {
        border-radius: 4px;
        min-height: 36px;
    }
    .row-bg {
        padding: 10px 0;
        background-color: #f9fafc;
    }
</style>
