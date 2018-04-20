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
                        <h4><a href="#">Workshop 1</a></h4>
                        <span>Total Exercise: 15 Classes</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">Workshop 2</a></h4>
                        <span>Total Exercise: 15 Classes</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">Workshop 3</a></h4>
                        <span>Total Exercise: 15 Classes</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">WorkShop 4</a></h4>
                        <span>Total Exercise: 15 Classes</span>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">Assignment 1</a></h4>
                        <span>Total Exercise: 15 Classes</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">Assignment 2</a></h4>
                        <span>Total Exercise: 15 Classes</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">Assignment 3</a></h4>
                        <span>Total Exercise: 15 Classes</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">Practice Exam</a></h4>
                        <span>Total Exercise: 15 Classes</span>
                    </div>
                </div>

            </div>
        </div>

    </div>
@stop
