<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1><i class="glyphicon glyphicon-dashboard">&nbsp</i>Admin Dashboard </h1>
        </div>
        <div class="col-md-6 col-md-offset-3">  
            <ul class="nav nav-list">  
                <li class="nav-header">CakeLander configuration</li>  
                <li><?php echo $this->Html->link('Contents', '/admin/contents'); ?> </li>  
                <li><?php echo $this->Html->link('Endpoints', '/admin/endpoints'); ?> </li>
                <li><?php echo $this->Html->link('Menus', '/admin/menus'); ?> </li>
            </ul> 
        </div>
    </div> 
</div><!-- /.row -->