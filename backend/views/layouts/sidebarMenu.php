<?php $controllerActionId = Yii::$app->controller->caid;?>
<!-- Sidebar Menu -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header"><?= \Yii::t('app','菜单');?></li>
    <!-- Optionally, you can add icons to the links -->
    <li class="<?php echo $controllerActionId == 'admin.index'?'active':''?>"><a data-pjax href="/index.php?r=admin/index"><i class="fa fa-dashboard"></i> <span><?=\Yii::t('app','控制面板')?></span></a></li>
    <li class="treeview">
        <a href="#"><i class="fa fa-lock"></i> <span><?=\Yii::t('app','权限管理')?></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo $controllerActionId == 'auth.user'?'active':''?>"><a data-pjax href="/index.php?r=auth/user"><i class="fa fa-circle-o"></i><?=\Yii::t('app','管理员列表')?></a></li>
            <li class="<?php echo $controllerActionId == 'auth.perm'?'active':''?>"><a data-pjax href="/index.php?r=auth/perm"><i class="fa fa-circle-o"></i><?=\Yii::t('app','权限列表')?></a></li>
            <li class="<?php echo $controllerActionId == 'auth.role'?'active':''?>"><a data-pjax href="/index.php?r=auth/role"><i class="fa fa-circle-o"></i><?=\Yii::t('app','角色列表')?></a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-user"></i> <span><?=\Yii::t('app','用户管理')?></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo $controllerActionId == 'hi-user.index'?'active':''?>"><a data-pjax href="/index.php?r=hi-user/index"><i class="fa fa-circle-o"></i><?= \Yii::t('app', '注册用户信息');?></a></li>
            <li class="<?php echo $controllerActionId == 'hi-user.writing'?'active':''?>"><a data-pjax href="/index.php?r=hi-user/writing"><i class="fa fa-circle-o"></i><?=\Yii::t('app','作文列表')?></a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-reorder"></i> <span><?=\Yii::t('app','订单管理')?></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo $controllerActionId == 'order.index'?'active':''?>"><a data-pjax href="/index.php?r=order/index"><i class="fa fa-circle-o"></i><?=\Yii::t('app','订单列表')?></a></li>
            <li class="<?php echo $controllerActionId == 'order.real-time'?'active':''?>"><a data-pjax href="/index.php?r=order/real-time"><i class="fa fa-circle-o"></i><?=\Yii::t('app','实时订单')?></a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-book"></i> <span><?=\Yii::t('app','课程管理')?></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo $controllerActionId == 'course.index'?'active':''?>"><a data-pjax href="/index.php?r=course/index"><i class="fa fa-circle-o"></i><?=\Yii::t('app','课程列表')?></a></li>
            <li class="<?php echo $controllerActionId == 'user.course'?'active':''?>"><a data-pjax href="/index.php?r=user-course/index"><i class="fa fa-circle-o"></i><?=\Yii::t('app','用户课程')?></a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-cogs"></i> <span><?=\Yii::t('app','功能管理')?></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo $controllerActionId == 'coupon.index'?'active':''?>"><a data-pjax href="/index.php?r=coupon/index"><i class="fa fa-circle-o"></i><?=\Yii::t('app','优惠券组列表')?></a></li>
            <li class="<?php echo $controllerActionId == 'coupon.list'?'active':''?>"><a data-pjax href="/index.php?r=coupon/list"><i class="fa fa-circle-o"></i><?=\Yii::t('app','用户优惠券列表')?></a></li>
            <li class="<?php echo $controllerActionId == 'user.index'?'active':''?>"><a data-pjax href="/index.php?r=invite-code/index"><i class="fa fa-circle-o"></i><?=\Yii::t('app','邀请码管理')?></a></li>
            <li class="<?php echo $controllerActionId == 'order.create-order'?'active':''?>"><a data-pjax href="/index.php?r=order/create-list"><i class="fa fa-circle-o"></i><?=\Yii::t('app','生成订单')?></a></li>
            <li class="<?php echo $controllerActionId == 'order.create-order'?'active':''?>"><a data-pjax href="/index.php?r=img/create"><i class="fa fa-circle-o"></i><?=\Yii::t('app','生成图片')?></a></li>
            <li class="<?php echo $controllerActionId == 'hi-user.conf-writing'?'active':''?>"><a data-pjax href="/index.php?r=hi-user/conf-writing"><i class="fa fa-circle-o"></i><?=\Yii::t('app','作文得分点配置')?></a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-wechat"></i> <span><?=\Yii::t('app','微信文章')?></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo $controllerActionId == 'order.create-order'?'active':''?>"><a data-pjax href="/index.php?r=wx-article-theme/index"><i class="fa fa-circle-o"></i><?=\Yii::t('app','文章主题')?></a></li>
            <li class="<?php echo $controllerActionId == 'order.create-order'?'active':''?>"><a data-pjax href="/index.php?r=wx-article-menu/index"><i class="fa fa-circle-o"></i><?=\Yii::t('app','主题菜单')?></a></li>
            <li class="<?php echo $controllerActionId == 'order.create-order'?'active':''?>"><a data-pjax href="/index.php?r=wx-article/index"><i class="fa fa-circle-o"></i><?=\Yii::t('app','微信推荐文章')?></a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-cogs"></i> <span><?=\Yii::t('app','日志管理')?></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo $controllerActionId == 'user.index'?'active':''?>"><a data-pjax href="/index.php?r=admin-log/index"><i class="fa fa-circle-o"></i><?=\Yii::t('app','后台日志')?></a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-paper-plane"></i> <span><?=\Yii::t('app','推广管理')?></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo $controllerActionId == 'user.index'?'active':''?>"><a data-pjax href="/index.php?r=gl-auth/user"><i class="fa fa-circle-o"></i><?=\Yii::t('app','推广用户')?></a></li>
        </ul>
    </li>

</ul>
<!-- /.sidebar-menu -->
<script type="text/javascript">
    $("li.active").parents('li').addClass('active');
</script>