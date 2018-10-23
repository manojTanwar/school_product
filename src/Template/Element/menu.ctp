 <li class=" <?= (@$active_li=='Dashboard')?'active':'' ?>">
    <a href="<?=$this->Url->build(['controller'=>'Projects','action'=>'dashboard'])?>">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
</li>
<li class="treeview <?= (@$active_li=='Projects')?'active':'' ?>">
    <a href="#">
        <i class="fa fa-user"></i>
        <span>Project</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li class="<?= (@$active_sub_li=='Add')?'active':'' ?>"><a href="<?= $this->Url->build(['controller' => 'Projects', 'action' => 'add']) ?>"><i class="fa fa-angle-double-right"></i> Add New Project</a></li>
        <li class="<?= (@$active_sub_li=='Detail')?'active':'' ?>"><a href="<?= $this->Url->build(['controller' => 'Projects', 'action' => 'index']) ?>"><i class="fa fa-angle-double-right"></i> Project Detail</a></li>
    </ul>
</li>
<li class="treeview <?= (@$active_li=='Employees')?'active':'' ?>">
    <a href="#">
        <i class="fa fa-user"></i>
        <span>Employee</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li class="<?= (@$active_sub_li=='Add')?'active':'' ?>"><a href="<?= $this->Url->build(['controller' => 'Employees', 'action' => 'add']) ?>"><i class="fa fa-angle-double-right"></i> Add New Employee</a></li>
        <li class="<?= (@$active_sub_li=='Detail')?'active':'' ?>"><a href="<?= $this->Url->build(['controller' => 'Employees', 'action' => 'index']) ?>"><i class="fa fa-angle-double-right"></i> Employee Detail</a></li>
    </ul>
</li>
<li class="treeview <?= (@$active_li=='Agents')?'active':'' ?>">
    <a href="#">
        <i class="fa fa-user-md"></i>
        <span>Agents</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li class="<?= (@$active_sub_li=='Add')?'active':'' ?>"><a href="<?= $this->Url->build(['controller'=>'agents','action' =>'add'])?>"><i class="fa fa-angle-double-right"></i> Add New Agent</a></li>
        <li class="<?= (@$active_sub_li=='Detail')?'active':'' ?>"><a href="<?= $this->Url->build(['controller'=>'agents','action' =>'index'])?>"><i class="fa fa-angle-double-right"></i> Agent Detail</a></li>
    </ul>
</li>
<li class="treeview <?= (@$active_li=='Customers')?'active':'' ?>">
    <a href="#">
        <i class="fa fa-users"></i>
        <span>Customers</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li class="<?= (@$active_sub_li=='Add')?'active':'' ?>"><a href="<?= $this->Url->build(['controller' => 'Customers', 'action' => 'add']) ?>"><i class="fa fa-angle-double-right"></i> Add New Customers</a></li>
        <li class="<?= (@$active_sub_li=='Detail')?'active':'' ?>"><a href="<?= $this->Url->build(['controller' => 'Customers', 'action' => 'customer_detail']) ?>"><i class="fa fa-angle-double-right"></i> Customers Detail</a></li>
    </ul>
</li>
<li class="treeview <?= (@$active_li=='Report')?'active':'' ?>">
    <a href="#">
        <i class="fa fa-bar-chart-o"></i>
        <span>Report</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li class="<?= (@$active_sub_li=='customerReceiptReport')?'active':'' ?>"><a href="<?= $this->Url->build(['controller' => 'Customers', 'action' => 'customer_receipt_report']) ?>"><i class="fa fa-angle-double-right"></i> Receipt Report </a></li>
        <li class="<?= (@$active_sub_li=='CustomerPaymentTerms')?'active':'' ?>"><a href="<?= $this->Url->build(['controller' => 'CustomerPaymentTerms', 'action' => 'pending_transaction_report']) ?>"><i class="fa fa-angle-double-right"></i> Pending Transactions </a></li>
        <li class="<?= (@$active_sub_li=='customerListReport')?'active':'' ?>"><a href="<?= $this->Url->build(['controller' => 'Customers', 'action' => 'customerListReport']) ?>"><i class="fa fa-angle-double-right"></i> Customer List </a></li>
        <li class="<?= (@$active_sub_li=='customerDemandNote')?'active':'' ?>"><a href="<?= $this->Url->build(['controller' => 'CustomerPaymentTerms', 'action' => 'customerDemandNote']) ?>"><i class="fa fa-angle-double-right"></i> Demand Notice </a></li>
        <li class="<?= (@$active_sub_li=='transactionAnalysisReport')?'active':'' ?>"><a href="<?= $this->Url->build(['controller' => 'Customers', 'action' => 'transactionAnalysisReport']) ?>"><i class="fa fa-angle-double-right"></i> Transaction Analysis </a></li>
    </ul>
</li>
<li class="treeview <?= (@$active_li=='Settings')?'active':'' ?>">
    <a href="#">
        <i class="fa fa-gear"></i>
        <span>Setting</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li class="<?= (@$active_sub_li=='Users')?'active':'' ?>"><a href="<?= $this->Url->build(['controller'=>'Users','action' =>'add'])?>"><i class="fa fa-angle-double-right"></i> Users</a></li> 
		<li class="<?= (@$active_sub_li=='States')?'active':'' ?>"><a href="<?= $this->Url->build(['controller'=>'States','action' =>'index'])?>"><i class="fa fa-angle-double-right"></i> States</a></li>
        <li class="<?= (@$active_sub_li=='Cities')?'active':'' ?>"><a href="<?= $this->Url->build(['controller'=>'Cities','action' =>'index'])?>"><i class="fa fa-angle-double-right"></i> City</a></li>
        <li class="<?= (@$active_sub_li=='ProjectTypes')?'active':'' ?>"><a href="<?= $this->Url->build(['controller'=>'projectTypes','action' =>'index'])?>"><i class="fa fa-angle-double-right"></i> Project Type</a></li>
        <li class="<?= (@$active_sub_li=='employeeTypeMasters')?'active':'' ?>"><a href="<?= $this->Url->build(['controller'=>'EmployeeTypeMasters','action' =>'index'])?>"><i class="fa fa-angle-double-right"></i> Employee Type</a></li>
        <li class="<?= (@$active_sub_li=='taxMasters')?'active':'' ?>"><a href="<?= $this->Url->build(['controller'=>'taxMasters','action' =>'index'])?>"><i class="fa fa-angle-double-right"></i> Tax Settings</a></li>
        <li class="<?= (@$active_sub_li=='penaltyMasters')?'active':'' ?>"><a href="<?= $this->Url->build(['controller'=>'penaltyMasters','action' =>'index'])?>"><i class="fa fa-angle-double-right"></i> Penalty Settings</a></li>
    </ul>
</li>