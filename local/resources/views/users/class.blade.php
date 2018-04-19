@extends  ('users.layout.user')
@section ('main')
    <div class="tab-content">
        <div class = "row">
            <form action="search_subject_name.php" method="post">
                <div class="input-group col col-md-3 col-sm-3 col-xs-12 search" >
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-primary btn-search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="infor-sub">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">JS1002</a></h4>
                        <span>Total Exercise: 15 Classes</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">PRF192</a></h4>
                        <span>Total class: 15 Classes</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">PRF192</a></h4>
                        <span>Total class: 15 Classes</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">PRF192</a></h4>
                        <span>Total class: 15 Classes</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">PRF192</a></h4>
                        <span>Totals: 15 reports</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">PRF192</a></h4>
                        <span>Totals: 15 reports</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">PRF192</a></h4>
                        <span>Totals: 15 reports</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">PRF192</a></h4>
                        <span>Totals: 15 reports</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
