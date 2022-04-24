
<!-- MENU SECTION -->

<div id="left">
    <div class="media user-media well-small">
        <a class="user-link" href="#">
            <img class="media-object img-thumbnail user-img" alt="User Picture" src="{{asset('assets')}}/admin/assets/img/user.gif" />
        </a>
        <br />
        <div class="media-body">
            <h5 class="media-heading"> Joe Romlin</h5>
            <ul class="list-unstyled user-info">

                <li>
                    <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online

                </li>

            </ul>
        </div>
        <br />
    </div>

    <ul id="menu" class="collapse">
        <li class="panel ">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                <i class="icon-book"></i> Order

                <span class="pull-right">
                            <i class="icon-angle-right"></i>
                        </span>&nbsp;
            </a>
            <ul class="collapse" id="form-nav">
                <li class=""><a href="forms_general.html"><i class="icon-bell-alt"></i> New Orders </a></li>
                <li class=""><a href="forms_advance.html "><i class="icon-ok"></i> Accepted Orders </a></li>
                <li class=""><a href="forms_validation.html"><i class="icon-truck"></i> Shipping Orders </a></li>
                <li class=""><a href="forms_fileupload.html"><i class="icon-check"></i> Completed Orders </a></li>

            </ul>
        </li>


        <li class="panel">
            <a href="/home/admin/category" >
                <i class="icon-list-ol "></i> Categories</a>
        </li>
        <li class="panel">
            <a href="/home/admin/product" >
                <i class="icon-tag"></i> Products</a>
        </li>
        <li class="panel">
            <a href="/home/admin/comment" >
                <i class="icon-comment"></i> Comments</a>

        </li>
        <li class="panel">
            <a href="/home/admin/faq" >
                <i class="icon-question"></i> FAQ </a>
        </li>
        <li class="panel">
            <a href="/home/admin/messages" >
                <i class="icon-edit"></i> Messages</a>
        </li>
        <li class="panel">
            <a href="/home/admin/users" >
                <i class="icon-user"></i> Users</a>
        </li>

        <li class="panel">
            <a href="/home/admin/social" >
                <i class="icon-skype"></i> Social</a>
        </li>


        <li class="panel">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                <i class="icon-bar-chart"></i> Labels

                <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>

            </a>
            <ul class="collapse" id="chart-nav">

                <li><a href="charts_line.html"><i class="icon-cogs"></i> Settings </a></li>

            </ul>
        </li>

    </ul>

</div>

<!--END MENU SECTION -->
