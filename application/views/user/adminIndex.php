
<?php
  $this->load->view('header');
?> 
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h3 class="page-header">用户管理 <a class="pull-right btn btn-success btn-sm">添加用户</a></h3>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>用户ID</th>
                  <th>用户名称</th>
                  <th>用户角色</th>
                  <th>用户最后登录时间</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if($users)
                {
                    foreach ($users as $user)
                     {
                      
                ?>
                <tr>
                  <td><?php echo $user->id;?></td>
                  <td><?php echo $user->username;?></td>
                  <td><?php echo "超级管理员"; ?></td>
                  <td><?php echo date('Y-m-d H:i:s',  $user->last_login_time);?></td>
                  <td>
                    <a class="btn btn-xs btn-primary">修改</a>
                    <?php
                    //默认用户不可显示删除
                    if($user->halt != 1)
                    {
                    ?>
                      <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#myModal">删除</a>
                    <?php 
                    }
                    ?>
                  </td>
                </tr>
                <?php
                  }
                }

                ?>       
              </tbody>
            </table>
          </div>
        </div>
      
<?php
  $this->load->view("bottom");
?>